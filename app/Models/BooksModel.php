<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    protected $DBGroup = 'default';
    public $table = 'books';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $useSoftDeletes = true;
    protected $allowedFields = [
        "id",
        "title",
        "category",
        "book_type",
        "author",
        "bookfile",
        "last_save_user",
        "created_at",
        "deleted_at",

    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
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
