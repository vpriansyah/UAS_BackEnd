<?php
namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{
    protected $table      = 'kamar';
    protected $primaryKey = 'id_kamar';

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

    public function getKamar()
    {
        return
        $this->db->table($this->table)
        ->get()->getResultArray();
    }

    public function getKamarDetail($id)
    {
        return
        $this->db->table($this->table)
        ->where("kamar.id_kamar='".$id."'")
        ->get()->getResultArray();
    }

    public function addKamar($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function getQtyKamar()
    {
        $builder = $this->db->query('SELECT * FROM kamar');
        return $builder->getNumRows();
    }

    public function getQtyKamarKosong()
    {
        $builder = $this->db->query("SELECT * FROM kamar WHERE status = 'Kosong'");
        return $builder->getNumRows();
    }

    public function updateKamar($data, $id)
    {
        $builder = $this->db->table($this->table)
        ->where("kamar.id_kamar='".$id."'");
        return $builder->update($data);
    }

    public function delKamar($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_kamar' => $id]);
    }

    public function getKamarKosong($kosong)
    {
        return
        $this->db->table($this->table)
        ->where("kamar.status='".$kosong."'")
        ->get()->getResultArray();
    }
}