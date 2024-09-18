<?php



namespace App\Controllers;

use App\Models\RankModel;
use Exception;

class Superadmin extends BaseController
{

	public function index($act = "", $act_id = 0)
	{
		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 1) {
			$this->toaster->error(lang("Errors.accessDenied"));
			return redirect()->to(base_url() . '/login');
		}

		$data = [];


		$pagedata = [];
		$deptselect_id = $this->request->getVar('deptselect_id');

		if($deptselect_id){
            $act_id = $deptselect_id;
		}

		$pagedata['act'] = $act;
		$pagedata['act_id'] = $act_id;

		if (!get_cookie('register_page_min')) {
			set_cookie('register_page_min', 10, 36000);
		}

		$pagedata['pager_num'] = get_cookie('register_page_min');

		$pager_numselect_var = $this->request->getVar('pager_num_rows');

		if (isset($pager_numselect_var) > 0) {
			set_cookie('register_page_min', $pager_numselect_var, 36000);
			//pr('changing num');
			//pr($pager_numselect_var);
			$pagedata['pager_num'] = $pager_numselect_var;
			//pr(get_cookie('collected_id_page_min'));
			//pr($this->request->getVar('pager_num_rows'));
		}

		echo view('templates/header', $data);
		echo view('dashboard_superadmin', $pagedata);
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------



	public function adddepartment()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 1) {
			$this->toaster->error("Access Denied");
			return redirect()->to(base_url() . '/login');
		}

		$pagedata = [];

		echo view('templates/header');
		echo view('adddepartment', $pagedata);
		echo view('templates/footer');
	}




	public function submit_department()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 1) {
			$this->toaster->error("Access Denied");
			return redirect()->to(base_url() . '/login');
		}

		// always start coding from here down

		$department_name = $this->request->getVar("department_name");


		if (empty($department_name) || strlen($department_name) < 3) {
			$this->toaster->error('Please enter a department name to continue');
			return redirect()->to(base_url() . '/superadmin/adddepartment');
		}

		$dept_model = new \App\Models\DepartmentsModel();

		$data = [
			"name" => $department_name,
		];

		$dept_model->save($data);

		$this->toaster->success($department_name . ' has been added.');


		return redirect()->to(base_url() . '/superadmin/adddepartment');
	}


	public function edit_department()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 1) {
			$this->toaster->error("Access Denied");
			return redirect()->to(base_url() . '/login');
		}

		// always start coding from here down

		$department_name = $this->request->getVar("department_name");
		$id_in = $this->request->getVar("id");


		if (empty($department_name) || strlen($department_name) < 3) {
			$this->toaster->error('Please enter a department name to continue');
			return redirect()->to(base_url() . '/superadmin/adddepartment');
		}

		$dept_model = new \App\Models\DepartmentsModel();

		$data = [
			"id" => $id_in,
			"name" => $department_name,
		];

		$dept_model->save($data);

		$this->toaster->success($department_name . ' has been updated.');


		return redirect()->to(base_url() . '/superadmin/adddepartment');
	}



	public function delete_department($id_in)
	{
		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}
		if ($_SESSION['role'] != 1) {
			$this->toaster->error("Access Denied");
			return redirect()->to(base_url() . '/login');
		}
		// always start coding from here down

		$dept_model = new \App\Models\DepartmentsModel();

		$dept_model->delete($id_in);

		$this->toaster->success('Deleted successfully.');

		return redirect()->to(base_url() . '/superadmin/adddepartment');
	}


	//rank

	public function addrank()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error(lang('Errors.login_please'));
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 1) {
			$this->toaster->error(lang('Errors.access_denied'));
			return redirect()->to(base_url() . '/login');
		}

		$pagedata = [];

		echo view('templates/header');
		echo view('addrank', $pagedata);
		echo view('templates/footer');
	}




	public function submit_rank()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error(lang('Errors.login_please'));
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 1) {
			$this->toaster->error(lang('Errors.access_denied'));
			return redirect()->to(base_url() . '/login');
		}

		// always start coding from here down

		$rank_in = $this->request->getVar("rank");


		if (empty($rank_in) || strlen($rank_in) < 3) {
			$this->toaster->error(lang('Errors.please_enter_to_continue', ["rank name"]));
			return redirect()->to(base_url() . '/superadmin/addrank');
		}

		$rank_model = new \App\Models\RankModel();

		$data = [
			"name" => $rank_in,
		];

		$rank_model->save($data);

		$this->toaster->success(lang("Success.has_been_added", [$rank_in]));

		rat(lang("Rat.submitted_a", [lang("Terms.rank")]));

		return redirect()->to(base_url() . '/superadmin/addrank');
	}


	public function edit_rank()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error(lang('Errors.login_please'));
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 1) {
			$this->toaster->error(lang('Errors.access_denied'));
			return redirect()->to(base_url() . '/login');
		}

		// always start coding from here down

		$rank_in = $this->request->getVar("rank");
		$id_in = $this->request->getVar("id");


		if (empty($rank_in) || strlen($rank_in) < 3) {
			$this->toaster->error(lang('Errors.please_enter_to_continue', ["rank name"]));
			return redirect()->to(base_url() . '/superadmin/addrank');
		}

		$rank_model = new \App\Models\RankModel();

		$data = [
			"id" => $id_in,
			"name" => $rank_in,
		];

		$rank_model->save($data);

		$this->toaster->success(lang("Success.has_been_updated", [$rank_in]));

		rat("Editted a rank");
		return redirect()->to(base_url() . '/superadmin/addrank');
	}



	public function delete_rank($id_in)
	{
		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error(lang('Errors.login_please'));
			return redirect()->to(base_url() . '/login');
		}
		if ($_SESSION['role'] != 1) {
			$this->toaster->error(lang('Errors.access_denied'));
			return redirect()->to(base_url() . '/login');
		}
		// always start coding from here down

		$rank_model = new \App\Models\RankModel();

		$rank_model->delete($id_in);

		$this->toaster->success(lang("Success.deleted"));

		rat("Deleted a rank");

		return redirect()->to(base_url() . '/superadmin/addrank');
	}


	public function submit_uploadranks()
	{
		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error(lang('Errors.login_please'));
			return redirect()->to(base_url() . '/login');
		}
		if ($_SESSION['role'] != 1) {
			$this->toaster->error(lang('Errors.access_denied'));
			return redirect()->to(base_url() . '/login');
		}

		$upload_result =  grab_csv("ranks", $this->request->getFile("rankCsvFile"), new \App\Models\RankModel(), ["name"]);

		if ($upload_result["status"] == 0) {
			$this->toaster->error($upload_result["msg"]);
		} else {
			$this->toaster->success(lang("Success.uploaded"));
		}

		rat("Just uploaded a file");

		return redirect()->to(base_url() . '/superadmin/addrank');
	}


	public function submit_gallery()
	{
		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error(lang('Errors.login_please'));
			return redirect()->to(base_url() . '/login');
		}
		if ($_SESSION['role'] != 1) {
			$this->toaster->error(lang('Errors.access_denied'));
			return redirect()->to(base_url() . '/login');
		}

		$gallery_name = $this->request->getVar("gallery_name");
		$zipimgs = $this->request->getFile("photoszipFile");


		$gallery_name_path = str_replace(" ", "_", $gallery_name);

		$all_good = 0;

		// Valid
		if ($zipimgs) {
			if ($zipimgs->isValid() && !$zipimgs->hasMoved()) {
				// Get random file name
				$newName = $gallery_name_path . "_uploaded.zip";
				// Store file in public/csvfile/ folder
				$structure = 'uploads/bengallery/';

				// To create the nested structure, the $recursive parameter 
				// to mkdir() must be specified.

				try {
					if (!mkdir($structure, 0777, true)) {
						$this->toaster->error("Could not create directories");
						return redirect()->to(base_url() . '/dashboard_superadmin');
					}
				} catch (Exception $e) {
					benlog($e);
				}

				$zipimgs->move('uploads/bengallery/', $newName);

				//pr($newName);

				## Extract the zip file ---- start
				$zip = new \ZipArchive;
				$res = $zip->open('uploads/bengallery/' . $newName);
				if ($res === TRUE) {

					// Unzip path
					$extractpath = "uploads/bengallery/$gallery_name_path/";

					// Extract file
					$zip->extractTo($extractpath);
					$zip->close();


					$bengallery_model = new \App\Models\GalleryModel();

					$data = [];
					$data['name'] = $gallery_name;
					$data['path'] = $extractpath;

					if ($bengallery_model->save($data) !== false) {
						$this->toaster->success('Uploaded, Extracted and Saved in Database successfully');
						$all_good = 1;
					} else {
						$this->toaster->error('Database save failed. Try again later');
					}
				} else {
					$this->toaster->error('Failed to extract.');
				}
			} else {
				$this->toaster->error("Invalid file? Or has it moved?");
			}
		} else {
			$this->toaster->error("Invalid zip file, not uploaded");
		}



		if ($all_good  == 0) {
			$this->toaster->error("Upload failed");
		} else {
			rat("Just uploaded a gallery zip -- " . $gallery_name);
		}

		return redirect()->to(base_url() . '/dashboard_superadmin');
	}

	public function delete_gallery($gal_id)
	{
		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error(lang('Errors.login_please'));
			return redirect()->to(base_url() . '/login');
		}
		if ($_SESSION['role'] != 1) {
			$this->toaster->error(lang('Errors.access_denied'));
			return redirect()->to(base_url() . '/login');
		}


		// Valid
		if ($gal_id) {
			$bengallery_model = new \App\Models\GalleryModel();
			$fnd_gal = $bengallery_model->find($gal_id);

			if (!delete_files($fnd_gal->path, true, true)) {
				$this->toaster->error("Unable to delete gallery files, try again later.");
				return redirect()->to(base_url() . '/home/gallery');
			}

			if ($bengallery_model->delete($gal_id) === false) {
				$this->toaster->error("Unable to delete gallery record, try again later.");
			} else {
				$this->toaster->success('Gallery deleted successfully');
			}
		} else {

			$this->toaster->error("Invalid gallery selected. Perhaps already deleted?!");
		}


		return redirect()->to(base_url() . '/home/gallery');
	}

	public function user_department_rank()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 1) {
			$this->toaster->error("Access Denied");
			return redirect()->to(base_url() . '/login');
		}

		$pagedata = [];

		if (!get_cookie('register_page_min')) {
			set_cookie('register_page_min', 10, 36000);
		}

		$pagedata['pager_num'] = get_cookie('register_page_min');

		$pager_numselect_var = $this->request->getVar('pager_num_rows');

		if (isset($pager_numselect_var) > 0) {
			set_cookie('register_page_min', $pager_numselect_var, 36000);
			//pr('changing num');
			//pr($pager_numselect_var);
			$pagedata['pager_num'] = $pager_numselect_var;
			//pr(get_cookie('collected_id_page_min'));
			//pr($this->request->getVar('pager_num_rows'));
		}
		echo view('templates/header');
		echo view('user_department_rank', $pagedata);
		echo view('templates/footer');
	}


	public function user_mod($action = "", $arg_id = 0)
	{
		if (!isset($_SESSION['logged_in_user_id'])) {
			return redirect()->to(base_url() . '/login');
		}

		if (!in_array($_SESSION['role'], [1, 2, 3, 6])) {
			return redirect()->to(base_url() . '/login');
		}

		$userauth_mdl = new \App\Models\AuthModel();

		if ($action == "deactivate") {

			if ($arg_id < 1) {
				exit("No user for this");
			} else {

				$usr = $userauth_mdl->asObject()->find($arg_id);


				$data = [
					"id" => $arg_id,
					"blocked" => !$usr->blocked
				];

				$userauth_mdl->save($data);
				$this->toaster->success((($usr->blocked) ? "Blocked" : "Unblocked ") . " successfully ");
			}
		}
		if ($action == "delete") {

			if ($arg_id < 1) {
				exit("No user for this");
			} else {
				$userauth_mdl->delete($arg_id);
				$this->toaster->success("Deleted successfully");
			}
		}


		if ($action == "dept_rank_update") {

			$user_id_selected = $this->request->getVar('sels');
			$dept_id_selected = $this->request->getVar('department_id');
			$station_id_selected = $this->request->getVar('station_id');
			$rank_id_selected = $this->request->getVar('rank_id');

			//pr($dept_id_selected);
			//pr($station_id_selected);
			//pr($rank_id_selected);
			//exit("aaaaaaaaaa");


			foreach ($user_id_selected as $sel_id) {
				# code...

				//add to department if all values are selected
				if ($dept_id_selected && $station_id_selected) {

					$user_dept_model = new \App\Models\UserDepartmentModel();
					if ($user_dept_model->add_staff_to_department($sel_id, $dept_id_selected, $station_id_selected)) {
						$this->toaster->success("Updated user department successfully");
					} else {
						$this->toaster->error("Failed to update user department. Try again later please.");
					}
				}

				if ($rank_id_selected) {

					$user_rank_model = new \App\Models\UserRankModel();
					if ($user_rank_model->add_staff_to_rank($sel_id, $rank_id_selected)) {
						$this->toaster->success("Updated user rank successfully");
					} else {
						$this->toaster->error("Failed to update user rank. Try again later please.");
					}
				}
			}
			//pr($this->request->getVar());
			//exit("ddddddddddddddddd");



			return redirect()->to(base_url() . '/superadmin/user_department_rank');
		}
		return redirect()->to(base_url() . '/register');
	}

	public function delete_dept_add_image($id, $image_id)
	{
		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 1) {
			$this->toaster->error("Access Denied");
			return redirect()->to(base_url() . '/login');
		}

		if(is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo".$image_id.".jpg")){
			unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo".$image_id.".jpg");
		}

		return redirect()->to(base_url() . '/home/department/' . $id);
	}


	public function submit_dept()
	{

		if (!isset($_SESSION['logged_in_user_id'])) {
			$this->toaster->error('You must be logged in to access this page');
			return redirect()->to(base_url() . '/login');
		}

		if ($_SESSION['role'] != 1) {
			$this->toaster->error("Access Denied");
			return redirect()->to(base_url() . '/login');
		}

		// always start coding from here down

		$dept_name = $this->request->getVar("dept_name");
		$hod_name = $this->request->getVar("hod_name");
		$dept_content = $this->request->getVar("dept_content");
		$id = $this->request->getVar("id");
		$published = $this->request->getVar("published");

		$main_photo1 = $this->request->getFile("photo");
 
		if ($main_photo1->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_main.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_main.jpg");
				$main_photo1->move('uploads/dept_add_images', "dept_" . $id . "_main.jpg");
		}

		$photo1 = $this->request->getFile("photo1");
		if ($photo1->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo1.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo1.jpg");
			$photo1->move('uploads/dept_add_images', "dept_" . $id . "_photo1.jpg");
		}
		$photo2 = $this->request->getFile("photo2");
		if ($photo2->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo2.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo2.jpg");
			$photo2->move('uploads/dept_add_images', "dept_" . $id . "_photo2.jpg");
		}
		$photo3 = $this->request->getFile("photo3");
		if ($photo3->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo3.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo3.jpg");
			$photo3->move('uploads/dept_add_images', "dept_" . $id . "_photo3.jpg");
		}

		$photo4 = $this->request->getFile("photo4");
		if ($photo4->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo4.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo4.jpg");
			$photo4->move('uploads/dept_add_images', "dept_" . $id . "_photo4.jpg");
		}

		$photo5 = $this->request->getFile("photo5");
		if ($photo5->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo5.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo5.jpg");
			$photo5->move('uploads/dept_add_images', "dept_" . $id . "_photo5.jpg");
		}

		$photo6 = $this->request->getFile("photo6");
		if ($photo6->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo6.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo6.jpg");
			$photo6->move('uploads/dept_add_images', "dept_" . $id . "_photo6.jpg");
		}

		$photo7 = $this->request->getFile("photo7");
		if ($photo7->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo7.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo7.jpg");
			$photo7->move('uploads/dept_add_images', "dept_" . $id . "_photo7.jpg");
		}

		$photo8 = $this->request->getFile("photo8");
		if ($photo8->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo8.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo8.jpg");
			$photo8->move('uploads/dept_add_images', "dept_" . $id . "_photo8.jpg");
		}

		$photo9 = $this->request->getFile("photo9");
		if ($photo9->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo9.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo9.jpg");
			$photo9->move('uploads/dept_add_images', "dept_" . $id . "_photo9.jpg");
		}

		$photo10 = $this->request->getFile("photo10");
		if ($photo10->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo10.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo10.jpg");
			$photo10->move('uploads/dept_add_images', "dept_" . $id . "_photo10.jpg");
		}

		$photo11 = $this->request->getFile("photo11");
		if ($photo11->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo11.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo11.jpg");
			$photo11->move('uploads/dept_add_images', "dept_" . $id . "_photo11.jpg");
		}

		$photo12 = $this->request->getFile("photo12");
		if ($photo12->isValid()) {
			if (is_file('uploads/dept_add_images/' . "dept_" . $id . "_photo12.jpg"))
				unlink('uploads/dept_add_images/' . "dept_" . $id . "_photo12.jpg");
			$photo12->move('uploads/dept_add_images', "dept_" . $id . "_photo12.jpg");
		}





		if (empty($dept_name) || strlen($dept_name) < 3) {
			$this->toaster->error('Please enter a department name  to continue');
			return redirect()->to(base_url() . '/dashboard_superadmin');
		}

		if (empty($hod_name) || strlen($hod_name) < 3) {
			$this->toaster->error('Please enter a HOD name  to continue');
			return redirect()->to(base_url() . '/dashboard_superadmin');
		}

		if (empty($dept_content) || strlen($dept_content) < 3) {
			$this->toaster->error('Please enter content to continue');
			return redirect()->to(base_url() . '/dashboard_superadmin');
		}


		$dept_model = new \App\Models\DepartmentsModel();

		$data = [
			"id" => $id,
			"name" => $dept_name,
			"hod_name" => $hod_name,
			"dept_content" => $dept_content,
			"published" => $published,
		];

	
		$dept_model->save($data);

		$this->toaster->success($dept_name . ' has been submitted.');

		if ($id > 0) {
			return redirect()->to(base_url() . '/home/department/' . $id);
		}


		return redirect()->to(base_url() . '/dashboard_superadmin');
	}
}
