<?php
namespace App\Models;

use CodeIgniter\Model;

class User_Model extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    /*
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['name', 'email'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    */

    public function getUser()
    {
        return
        $this->db->table($this->table)
        ->get()->getResultArray();
    }

    public function getUserDetail($id)
    {
        return
        $this->db->table($this->table)
        ->where("users.id='".$id."'")
        ->get()->getResultArray();
    }

    public function updateUser($data, $id)
    {
        $builder = $this->db->table($this->table)
        ->where("users.id='".$id."'");
        return $builder->update($data);
    }

    public function delUser($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id' => $id]);
    }
}