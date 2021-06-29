<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Contacto extends Model
{
    protected $table      = 'contactos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'email', 'telefono', 'edad', 'status'];

    /* protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false; */
    /* function __construct()
    {
        parent::__construct();
    } */
    /* function get_todos(){
        $this->load->database();
        $query = $this->db->get('contactos');
        return $query->result();
    } */
}