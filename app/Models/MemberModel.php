<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $DBGroup = 'default';
    public $table = 'member';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = true;
	protected $allowedFields = [
        "id", 
        "first_name", 
        "last_name", 
        "phone", 
        "dob", 
        "email", 
        "nationality", 
        "country", 
        "state", 
        "gender", 
        "house_no", 
        "street_name", 
        "city",
        "town",
        "nearest_landmark",
        "mat_no",
        "level",
        "password",
        "faculty",
        "department",
        "verify_email",
        "bank_name",
        "account_name",
        "account_no",
        "additional_info",
        "created_at", 
        "deleted_at"
    ];
	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $beforeInsert = null; 
	protected $beforeUpdate = null; 
	protected $skipValidation = false;

    
    /**
     * Runs before inserting data
     *
     * @param  mixed $data
     * @return void
     */
    protected function beforeInsert(array $data)
    {
        $data['data']['last_save_user'] = $_SESSION['logged_in_user_id'];
        return $data;
    }

    /**
     * Runs before Updating data
     *
     * @param  mixed $data
     * @return void
     */
    protected function beforeUpdate(array $data)
    {
        $data['data']['last_save_user'] = $_SESSION['logged_in_user_id'];
        return $data;
    }

}
