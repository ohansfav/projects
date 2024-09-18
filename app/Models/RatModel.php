<?php

namespace App\Models;

use CodeIgniter\Model;

class RatModel extends Model
{
	protected $DBGroup = 'default';
	protected $table = 'rat';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = true;
	protected $allowedFields = [
		"id", "user_id",  "action", "ipaddress", "created_at"
	];
	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $skipValidation = false;

	
 

	public function search_rat_history_top5($date_from, $date_to)
	{
		# code...


		if ($_SESSION['role'] == 2) {
			$hodstore_eyes_only = " (only_hodstore is null OR only_hodstore = 1 OR only_hodstore = 0) ";
		} else {
			$hodstore_eyes_only = " (only_hodstore is null OR  only_hodstore = 0) ";
		}


		if (empty($date_from) && empty($date_to)) {
			return;
		}

		if (empty($date_to)) {
			$date_to = null;
		}

		$found  = $this
			->groupStart()
			->where("authorize_admin_status", 1)
			->where("requisiting_hod_status", 1)
			->groupEnd()
			->where('requisiting_date ' . (empty($date_to) ? ' LIKE "%' . $date_from.'%"' : 'between \'' . $date_from . '\' and \'' . $date_to . '\''))
			->where($hodstore_eyes_only)
			->orderBy("created_at", "DESC")
			->findAll();

		//pr($this->getLastQuery());
		//exit('aaaaaaaaaaaa');

		return $found;
	}

}
