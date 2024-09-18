<?php

/**
 * --------------------------------------------------------------------
 * CODEIGNITER 4 - SimpleAuth
 * --------------------------------------------------------------------
 *
 * This content is released under the MIT License (MIT)
 *
 * @package    SimpleAuth
 * @author     GeekLabs - Lee Skelding 
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://github.com/GeekLabsUK/SimpleAuth
 * @since      Version 1.0
 * 
 */

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{


    protected $table = 'users';
    protected $allowedFields = ['id', 'firstname', 'lastname', 'email', 'password', 'blocked', 'reset_token', 'reset_expire', 'activated', 'activate_token', 'activate_expire', 'role', 'updated_at', 'deleted_at'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];


    /**
     * Runs before inserting data
     *
     * @param  mixed $data
     * @return void
     */
    protected function beforeInsert(array $data)
    {

        $data = $this->passwordHash($data);
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

        $data = $this->passwordHash($data);
        return $data;
    }

    /**
     * passwordHash
     *
     * @param  mixed $data
     * @return void
     */
    protected function passwordHash(array $data)
    {

        if (isset($data['data']['password']))
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_ARGON2ID);
        return $data;
    }

    /**
     * Saves the users login session to DB
     *
     * @param  mixed $data
     * @return void
     */
    public function LogLogin($data)
    {
        $this->db->table('sys_auth_logins')
            ->insert($data);
    }

    /**
     * Gets the Auth Token By User Id
     *
     * @param  int $userID
     * @return void 
     */
    public function GetAuthTokenByUserId($userID)
    {
        return $this->db->table('sys_auth_tokens')
            ->where('user_id', $userID)
            ->get()
            ->getRow();
    }

    /**
     * Inserts Auth Token
     *
     * @param  mixed $data
     * @return void
     */
    public function insertToken($data)
    {
        return $this->db->table('sys_auth_tokens')
            ->insert($data);
    }

    /**
     * Updates Auth Token
     *
     * @param  mixed $data
     * @return void
     */
    public function updateToken($data)
    {
        return $this->db->table('sys_auth_tokens')
            ->update($data);
    }

    /**
     * Gets Auth Token By Selector
     *
     * @param  mixed $selector
     * @return void
     */
    public function GetAuthTokenBySelector($selector)
    {
        return $this->db->table('sys_auth_tokens')
            ->where('selector', $selector)
            ->get()
            ->getRow();
    }

    /**
     * Deletes Token By User Id
     *
     * @param  int $userID
     * @return void
     */
    public function DeleteTokenByUserId($userID)
    {
        return  $this->db->table('sys_auth_tokens')
            ->where('user_id', $userID)
            ->delete();
    }

    /**
     * Updates Selector
     *
     * @param  mixed $data
     * @param  mixed $selector
     * @return void
     */
    public function UpdateSelector($data, $selector)
    {
        return
            $this->db->table('sys_auth_tokens')
            ->where('selector', $selector)
            ->update($data);
    }

    /**
     * Gets the Role By Role Id
     *
     * @param  int $role_id
     * @return void 
     */
    public function getRoleName($role_id)
    {
        /*switch ($role_id) {
            case 1:
                $role = "Super Admin";
                break;
            case 2:
                $role = "HOD of Store";
                break;
            case 3:
                $role = "Store Admin";
                break;
            case 4:
                $role = "Admin Head";
                break;
            case 5:
                $role = "Store Attendant";
                break;
            case 6:
                $role = "Departmental Head";
                break;
            case 7:
                $role = "Departmental Staff";
                break;
            case 8:
                $role = "No 8 User";
                break;
            case 9:
                $role = "No 9 User";
                break;
            case 10:
                $role = "No 10 User";
                break;
            default:
                $role = "No such user role";
                break;
        }
        return $role;*/

        return $this->db->table('user_roles')
            ->where('id', $role_id)
            ->get()
            ->getRow()->role_name;
    }

    public function GetUser($userID)
    {
        return $this->db->table('users')
            ->where('id', $userID)
            ->get()
            ->getRow();
    }
}
