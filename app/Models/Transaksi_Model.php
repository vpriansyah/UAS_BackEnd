<?php
namespace App\Models;

use CodeIgniter\Model;

class Transaksi_Model extends Model
{
    protected $table      = 'transaksi';
    
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

    public function addTransaksi($id_kamar,$id_booking)
    {
        foreach ($id_booking as $book) :
        $datatransaksi = array(
            'kamar_id'      => $id_kamar,
            'booking_id'    => $book['id_booking'],
            'waktu'         => date('d-m-Y H:i:s')
        );
        endforeach;
        $builder = $this->db->table($this->table);
        return $builder->insert($datatransaksi);
    }

    public function getBookingId($id)
    {
        $builder = $this->db->query("SELECT booking_id FROM transaksi WHERE kamar_id = '".$id."'");
        return $builder->getResultArray();
    }
}