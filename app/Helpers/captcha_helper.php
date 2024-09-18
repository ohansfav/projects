<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */

if (!defined('SYSTEMPATH')) {
    exit('No direct script access allowed');
}

/**
 * CodeIgniter CAPTCHA Helper
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/helpers/captcha_helper.html
 */

// ------------------------------------------------------------------------

if (!function_exists('create_plus_captcha')) {
    /**
     * Create CAPTCHA
     *
     * @param	string	$answer_name	Answer input name
     * @return	object	$object			Captcha Object with question image and answer
     * 		@return	string	$answer			Hidden input with md5 of answer, name is answer_name
     * 		@return	string	$answer_input	Input with name answername + "_ans" 
     * 		@return	object	$image			Captcha Image img element, just echo
     */
    function create_plus_captcha($answer_name)
    {

        $number1 = random_int(1, 5);
        $number2 = random_int(1, 5);

        //purge old images from directory
        $old_captcha_files = directory_map('splash/captcha_temp/');

        //pr($old_captcha_files);

        foreach ($old_captcha_files as $file) {
            # code...
            $date_file = get_file_info('splash/captcha_temp/' . $file, ['date']);
            //pr($date_file);
            //pr(strtotime("-1 day"));

            if ($date_file['date'] < strtotime("-1 day") ) {
                //pr($date_file);
                //pr(date("d-m-Y", $date_file['date']));
                unlink('splash/captcha_temp/' . $file);
            }

            
        }
       
        //exit("Aaaaaaaaaaaaaa");
        //create img object
        $captcha = new \TextToImage;

        $captcha->createImage("What is " . $number1 . " + " . $number2 . "?");
        $captcha->saveAsJpg('captcha_' . $answer_name . "_" . strtotime("now"), "splash/captcha_temp/");

        //display image
        $answer = $number1  + $number2;

        $captcha_obj = new stdClass();
        $captcha_obj->answer = "<input type='hidden' value='" . sha1($answer) . "' name='$answer_name'> ";
        $captcha_obj->answer_input = "<div class='single-input col-md-auto'><input class='form-control' name='" . $answer_name . "_ans' id='" . $answer_name . "_ans' required type='text' placeholder='Answer here'></div>";
        $captcha_obj->image = "<img class='img-fluid' src='$captcha->jpgFileNameSave'>";

        return $captcha_obj;
    }
}



/**
 * TextToImage class
 * This class converts text to image
 */
class TextToImage
{
    private $img;

    public $pngFileNameSave;
    public $jpgFileNameSave;

    /**
     * Create image from text
     * @param string text to convert into image
     * @param int font size of text
     * @param int width of the image
     * @param int height of the image
     */
    function createImage($text, $fontSize = 20, $imgWidth = 300, $imgHeight = 70, $watermakr_text = "FMC Asaba", $watermakr_text_size = 16)
    {

        //text font path
        $font = __DIR__ . '/captcha_font.ttf';

        //create the image
        $this->img = imagecreatetruecolor($imgWidth, $imgHeight);

        //create some colors
        $white = imagecolorallocate($this->img, 255, 255, 255);
        $grey = imagecolorallocate($this->img, 128, 128, 128);
        $green_light = imagecolorallocatealpha($this->img, 128, 242, 137, 40);
        $black = imagecolorallocate($this->img, 0, 0, 0);
        imagefilledrectangle($this->img, 0, 0, $imgWidth - 1, $imgHeight - 1, $white);

        //break lines
        $splitText = explode("\\n", $text);
        $lines = count($splitText);
        $angle = random_int(-5, 5);



        foreach ($splitText as $txt) {
            $textBox = imagettfbbox($fontSize, $angle, $font, $txt);
            $textWidth = abs(max($textBox[2], $textBox[4]));
            $textHeight = abs(max($textBox[5], $textBox[7]));
            $x = (imagesx($this->img) - $textWidth) / 2;
            $y = ((imagesy($this->img) + $textHeight) / 2) - ($lines - 2) * $textHeight;
            $lines = $lines - 1;

            //add some shadow to the text
            imagettftext($this->img, $fontSize, $angle, $x, $y, $grey, $font, $txt);


            //add the text
            imagettftext($this->img, $fontSize, $angle, $x, $y, $black, $font, $txt);
        }


        //do watermark
        $watermark_stuff = "";
        for ($i = 0; $i < 40; $i++) {
            # code...
            $watermark_stuff .= $watermakr_text . " ";
        }

        //Add watermarks
        imagettftext($this->img, $watermakr_text_size, 0, 0, 1,  $green_light, $font,  $watermark_stuff);
        //imagettftext($this->img, $watermakr_text_size, 0, 0, 10, $green_light, $font, $watermark_stuff);
        imagettftext($this->img, $watermakr_text_size, 0, 0, 20, $green_light, $font, $watermark_stuff);
        //imagettftext($this->img, $watermakr_text_size, 0, 0, 30, $green_light, $font, $watermark_stuff);
        imagettftext($this->img, $watermakr_text_size, 0, 0, 40, $green_light, $font, $watermark_stuff);
        //imagettftext($this->img, $watermakr_text_size, 0, 0, 50, $green_light, $font, $watermark_stuff);
        imagettftext($this->img, $watermakr_text_size, 0, 0, 60, $green_light, $font, $watermark_stuff);
        //imagettftext($this->img, $watermakr_text_size, 0, 0, 70, $green_light, $font, $watermark_stuff);


        return true;
    }

    /**
     * Display image
     */
    function showImage()
    {
        header('Content-Type: image/png');
        return imagepng($this->img);
    }

    /**
     * Save image as png format
     * @param string file name to save
     * @param string location to save image file
     */
    function saveAsPng($fileName = 'text-image', $location = '')
    {
        $fileName = $fileName . ".png";
        $fileName = !empty($location) ? $location . $fileName : $fileName;
        $this->pngFileNameSave = $fileName;
        return imagepng($this->img, $fileName);
    }

    /**
     * Save image as jpg format
     * @param string file name to save
     * @param string location to save image file
     */
    function saveAsJpg($fileName = 'text-image', $location = '')
    {

        //pr($location);
        //exit("Aaaaaaa");
        $fileName = $fileName . ".jpg";
        $fileName = !empty($location) ? $location . $fileName : $fileName;
        $this->jpgFileNameSave = $fileName;
        return imagejpeg($this->img, $fileName);
    }
}
