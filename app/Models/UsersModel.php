<?php
namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'username', 'password', 'role', 'last_login','deleted'];

}
?>
