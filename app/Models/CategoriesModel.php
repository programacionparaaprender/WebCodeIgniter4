<?php
namespace App\Models;
use CodeIgniter\Model;

class CategoriesModel extends Model{
    protected $table      = 'categories';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //comentar por que da error
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['name','deleted'];

}
?>
