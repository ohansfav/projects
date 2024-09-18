<?php if (!defined('SYSTEMPATH')) {
    exit('No direct script access allowed');
}

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

//stuffs, models etc
use App\Models\Settings;
use App\Models\Language;

if (!function_exists('get_phrase')) {
    function get_phrase($phrase = '')
    {

        
        $session = \Config\Services::session();
        $settings_tbl = new Settings();
        $language_tbl = new Language();




        $current_language = $settings_tbl->where('type', 'language')->first()['description'];

        if ($current_language == '') {
            $current_language = 'english';

            $session->set(['current_language'=>$current_language]);
        }

        /** insert blank phrases initially and populating the language db ***/
        $check_phrase = $language_tbl->where('phrase',$phrase)->first()['phrase'];
        if ($check_phrase != $phrase) {
            $settings_tbl->insert(['phrase' => $phrase]);
        }

        // query for finding the phrase from `language` table
        $row = $language_tbl->where('phrase', $phrase)->first();        

        // return the current sessioned language field of according phrase, else return uppercase spaced word
        if (isset($row->$current_language) && $row->$current_language != '') {
            return ucwords($row->$current_language);
        //return $row->$current_language;
        } else {
            return ucwords(str_replace('_', ' ', $phrase));
        }
    }
}

// ------------------------------------------------------------------------
/* End of file language_helper.php */
/* Location: ./system/helpers/language_helper.php */
