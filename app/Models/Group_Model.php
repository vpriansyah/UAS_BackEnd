<?php
namespace App\Models;

use CodeIgniter\Model;

class Group_Model extends Model
{
    protected $table      = 'auth_groups_users';
    
    /*
    protected $primaryKey = 'id';
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


    public function getGroup()
    {
        return
        $this->db->table($this->table)
        ->join('auth_groups', 'auth_groups_users.group_id=auth_groups.id')
        ->join('users', 'auth_groups_users.user_id=users.id')
        ->get()->getResultArray();
    }

    public function getGroupDetail($id)
    {
        return
        $this->db->table($this->table)
        ->join('auth_groups', 'auth_groups_users.group_id=auth_groups.id')
        ->join('users', 'auth_groups_users.user_id=users.id')
        ->where("auth_groups_users.user_id='".$id."'")
        ->get()->getResultArray();
    }

    public function updateGroup($data, $id)
    {
        $builder = $this->db->table($this->table)
        ->where("auth_groups_users.user_id='".$id."'");
        return $builder->update($data);
    }

    public function getQtyAdmin()
    {
        $builder = $this->db->query('SELECT * FROM auth_groups_users WHERE group_id = 1');
        return $builder->getNumRows();
    }

    public function getQtyUsers()
    {
        $builder = $this->db->query('SELECT * FROM auth_groups_users WHERE group_id = 2');
        return $builder->getNumRows();
    }
}