<?php 

namespace App\Controllers;


class Modal extends BaseController {

	function __construct() {
		
		
	}

	public function index() {

		if (!isset($_SESSION['logged_in_user_id'])) {
			return redirect()->to(base_url() . '/login');
		}
	}

	/*
		*	$page_name		=	The name of page
	*/
	function popup($page_name = '',  $param1 = '', $param2 = '',  $param3 = '', $param4 = '') {

		$page_data['param1'] = $param1;
		$page_data['param2'] = $param2;
		$page_data['param3'] = $param3;
		$page_data['param4'] = $param4;
		//$this->load->view('backend/in/' . $page_name . '.php', $page_data);
		echo view("modal/". $page_name . '.php', $page_data);
	}
}
