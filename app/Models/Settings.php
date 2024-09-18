<?php

namespace App\Models;

use CodeIgniter\Model;

class Settings extends Model
{
        protected $table      = 'settings';
        protected $primaryKey = 'id';
        protected $returnType = 'object';
        protected $useSoftDeletes = true;
        protected $allowedFields = ['id', 'name', 'value', "last_save_user", 'owner_id'];
        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';
	protected $beforeInsert = ['beforeInsert'];
	protected $beforeUpdate = ['beforeUpdate'];
        protected $skipValidation     = false;



        public function checkSetting($name)
        {
                $sett = $this
                        ->where(['name' => $name])
                        ->first();

                if (!empty($sett))
                        return $sett->value;
                else
                        return "none";
        }

        public function getSetting($name, $strict = true)
        {

                if ($strict) {
                        $owner = ['owner_id' => $_SESSION['logged_in_user_id']];
                } else {
                        $owner = [];
                }

                $sett = $this
                        ->where(['name' => $name])
                        ->where($owner)
                        ->first();

                //pr($sett);
                //pr($this->getLastQuery());
                //exit("ssssssssss");

                if (!empty($sett))
                        return $sett->value;
                else
                        return "none";
        }

        public function setSetting($name, $value)
        {

                $sett_avail = $this
                        ->where(['name' => $name])
                        ->where(['owner_id' => $_SESSION['logged_in_user_id']])
                        ->first();

                $sett = [
                        'id' => (isset($sett_avail->id) ? $sett_avail->id : 0),
                        'name' => $name,
                        'value' => (isset($value) ? $value : "nil"),
                        'owner_id' => $_SESSION['logged_in_user_id'],
                ];
                $this->save($sett);
        }



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
