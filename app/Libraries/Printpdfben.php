<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Printpdfben {
    
    function Printpdfben()
    {
        $CI = & get_instance();
        log_message('Debug', 'PrintPDF class is loaded.');
    }
    function load($param=NULL)
    {
        include_once APPPATH.'/third_party/printpdf/printform-pdf.php';
        
        if ($params == NULL)
        {
           $params = array( 'output' => 'F','outname' => 'reportcard.pdf');


        }
        
        return new CPrintFormPdf( $params );
    }
}