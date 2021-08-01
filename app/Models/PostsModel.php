<?php
namespace App\Models;
use CodeIgniter\Model;

class PostsModel extends Model{
    protected $table      = 'posts';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['banner', 'title', 'content', 'intro', 'category','tags','created_at','created_by','deleted'];

}
?>
