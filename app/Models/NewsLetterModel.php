<?php
namespace App\Models;
use CodeIgniter\Model;

class NewsLetterModel extends Model{
    protected $table      = 'newsletter';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    //comentar por que da error
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['email', 'added_at'];

}
?>
