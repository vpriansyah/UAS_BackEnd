<?php
namespace App\Models;

use CodeIgniter\Model;

class Booking_Model extends Model
{
    protected $table      = 'booking';
    
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

    public function addBooking($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function getIdBooking($data)
    {
        $builder = $this->db->query("SELECT id_booking FROM booking WHERE user_id = '".$data['user_id']."' AND lama = '".$data['lama']."' AND biaya = '".$data['biaya']."' AND waktu = '".$data['waktu']."'");
        return $builder->getResultArray();
    }

    public function getDataUser($id_booking)
    {
        foreach ($id_booking as $book) :
            $builder =
                $this->db->table($this->table)
                ->where("booking.id_booking='".$book['booking_id']."'")
                ->join("users", "users.id = booking.user_id");
        endforeach;
        return $builder->get()->getResultArray();
    }
    
}