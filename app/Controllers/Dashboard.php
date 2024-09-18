<?php



namespace App\Controllers;

use stdClass;

class Dashboard extends BaseController
{
	public function index($act="", $act_id=0)
	{
		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 2) {
			$this->toaster->error('You must be a PRO User to view this.');
			return redirect()->to(base_url() . '/login');
		}

		$pagedata = [];

		if($act == "editnews"){
			
			$news_model = new \App\Models\NewsModel();

            $news_found = $news_model->find($act_id);
			
			if($news_found){
                $pagedata['id'] = $news_found->id;
                $pagedata['title'] = $news_found->title;
                $pagedata['summary'] = $news_found->summary;
                $pagedata['content'] = $news_found->content;
                $pagedata['image_1'] = $news_found->image_1;
                $pagedata['image_2'] = $news_found->image_2;
                $pagedata['image_3'] = $news_found->image_3;
                $pagedata['image_4'] = $news_found->image_4;
                $pagedata['published'] = $news_found->published;
			}
		}else{
			$pagedata['id'] = null;
			$pagedata['title'] = null;
			$pagedata['summary'] = null;
			$pagedata['content'] = null;
			$pagedata['image_1'] = null;
			$pagedata['image_2'] = "";
			$pagedata['image_3'] = "";
			$pagedata['image_4'] = "";
			$pagedata['published'] = 1;
		}

		if($act == "publish_toggle"){
			
			$news_model = new \App\Models\NewsModel();

            $news_found = $news_model->find($act_id);
			
			if($news_found){
                $data['id'] = $news_found->id; 
                $data['published'] = $news_found->published?0:1;
			}

			$news_model->save($data);

			return redirect()->to(base_url() . '/dashboard2');
		}

		
		$pagedata['pager_num'] = get_cookie('prouser_page_min');

		$pager_numselect_var = $this->request->getVar('pager_num_rows');

		if (isset($pager_numselect_var) > 0) {
			set_cookie('prouser_page_min', $pager_numselect_var, 36000);
			//pr('changing num');
			//pr($pager_numselect_var);
			$pagedata['pager_num'] = $pager_numselect_var;
			//pr(get_cookie('collected_id_page_min'));
			//pr($this->request->getVar('pager_num_rows'));
		}

		echo view('templates/header');
		echo view('dashboard2', $pagedata);
		echo view('templates/footer');
	}

	public function index3()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 3) {
			$this->toaster->error('You must be a Store Admin to view this.');
			return redirect()->to(base_url() . '/login');
		}



		$pagedata = [];

		

		echo view('templates/header');
		echo view('dashboard3', $pagedata);
		echo view('templates/footer');
	}

	public function index4()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 4) {
			$this->toaster->error('You must be an Admin Staff to view this.');
			return redirect()->to(base_url() . '/login');
		}

		$pagedata = [];

		
		echo view('templates/header');
		echo view('dashboard4', $pagedata);
		echo view('templates/footer');
	}

	public function index5()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 5) {
			$this->toaster->error('You must be a Store attendant to view this.');
			return redirect()->to(base_url() . '/login');
		}



		$pagedata = [];

		
		echo view('templates/header');
		echo view('dashboard5', $pagedata);
		echo view('templates/footer');
	}

	

	public function index6()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 6) {
			$this->toaster->error('You must be a HOD to view this.');
			return redirect()->to(base_url() . '/login');
		}


		$pagedata = [];
		
		echo view('templates/header');
		echo view('dashboard6', $pagedata);
		echo view('templates/footer');
	}

	public function index7()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 7) {
			$this->toaster->error('You must be a Department staff to view this.');
			return redirect()->to(base_url() . '/login');
		}


		$pagedata = [];
		

		echo view('templates/header');
		echo view('dashboard7', $pagedata);
		echo view('templates/footer');
	}

	public function index8()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 8) {
			$this->toaster->error('You must be a HOD Store to view this.');
			return redirect()->to(base_url() . '/login');
		}


		$pagedata = [];

		echo view('templates/header');
		echo view('dashboard8', $pagedata);
		echo view('templates/footer');
	}
	public function index9()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 9) {
			$this->toaster->error('You must be a HOD Store to view this.');
			return redirect()->to(base_url() . '/login');
		}


		$pagedata = [];

		echo view('templates/header');
		echo view('dashboard9', $pagedata);
		echo view('templates/footer');
	}

	public function index10()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 10) {
			$this->toaster->error('You must be a HOD Store to view this.');
			return redirect()->to(base_url() . '/login');
		}


		$pagedata = [];

		echo view('templates/header');
		echo view('dashboard10', $pagedata);
		echo view('templates/footer');
	}

	
}
