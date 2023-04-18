<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Models\User_Model;
use App\Models\Group_Model;
use App\Models\Booking_Model;
use App\Models\Transaksi_Model;

class Home extends BaseController
{
    public function __construct()
    {
        $this->kamarModel = new KamarModel();
        $this->userModel = new User_Model();
        $this->groupModel = new Group_Model();
        $this->bookingModel = new Booking_Model();
        $this->transaksiModel = new Transaksi_Model();
    }

    public function index() //localhost:8080
    {
        $kamar = $this->kamarModel->getKamar();
        $data = ['kamar' => $kamar];
        $qtyadmin = $this->groupModel->getQtyAdmin();
        $data['qtyAdmin'] = $qtyadmin;
        $qtyusers = $this->groupModel->getQtyUsers();
        $data['qtyUsers'] = $qtyusers;
        $qtykamar = $this->kamarModel->getQtyKamar();
        $data['qtyKamar'] = $qtykamar;
        $qtykamarkosong = $this->kamarModel->getQtyKamarKosong();
        $data['qtyKamarKosong'] = $qtykamarkosong;
        $data['judul'] = 'Dashboard';
        $data['sidebar'] = view('admin/sidebar');
        $data['isi'] = view('admin/dashboard', $data);
        return view('index', $data);
    }

    public function kelolaKamar()
    {
        $kamar = $this->kamarModel->getKamar();
        $data = ['kamar' => $kamar];
        if (in_groups('admin')) :
            $data['judul'] = 'Kelola Kamar';
        elseif (in_groups('user')) :
            $data['judul'] = 'Daftar Kamar';
        endif;
        $data['sidebar'] = view('admin/sidebar');
        $data['isi'] = view('admin/kelolakamar', $data);
        return view('index', $data);
    }

    public function pesanKamar()
    {
        $kosong = 'Kosong';
        $kamar = $this->kamarModel->getKamarKosong($kosong);
        $data = ['kamar' => $kamar];
        $data['judul'] = 'Pesan Kamar';
        $data['sidebar'] = view('admin/sidebar');
        $data['isi'] = view('admin/pesankamar', $data);
        return view('index', $data);
    }

    public function formPesanKamar($id)
    {
        $kamar = $this->kamarModel->getKamarDetail($id);
        $data = ['kamar' => $kamar];
        $data['judul'] = 'Pesan Kamar';
        $data['sidebar'] = view('admin/sidebar');
        $data['isi'] = view('admin/formPesankamar', $data);
        return view('index', $data);
    }

    public function konfSewaKamar()
    {
        $id = $this->request->getPost('id_kamar');
        $data['lama'] = $this->request->getPost('lama');
        $kamar = $this->kamarModel->getKamarDetail($id);
        $data['kamar'] = $kamar;
        $data['judul'] = 'Konfirmasi Sewa Kamar';
        $data['sidebar'] = view('admin/sidebar');
        $data['isi'] = view('admin/konfsewakamar', $data);
        return view('index', $data);
    }

    public function sewaKamar()
    {
        $id_kamar = $this->request->getPost('id_kamar');
        $data = array(
            'id_booking'    => '',
            'user_id'       => user()->id,
            'lama'          => $this->request->getPost('lama'),
            'biaya'         => $this->request->getPost('totalbiaya'),
            'waktu'         => date('d-m-Y H:i:s')
        );
        $this->bookingModel->addBooking($data);
        return $this->tambahTransaksi($id_kamar,$data);
        
    }

    public function tambahTransaksi($id_kamar,$data)
    {
        $status = array(
            'status'        => 'Terisi',
        );
        $id_booking = $this->bookingModel->getIdBooking($data);
        $this->transaksiModel->addTransaksi($id_kamar,$id_booking);
        $this->kamarModel->updateKamar($status, $id_kamar);
        echo '<script>
                alert("Kamar Berhasil Disewa");
                window.location="' . base_url('Home/kelolaKamar') . '"
              </script>';
    }

    public function formTambahKamar()
    {
        $data['judul'] = 'Tambah Kamar';
        $data['sidebar'] = view('admin/sidebar');
        $data['isi'] = view('admin/formtambahkamar');
        return view('index', $data);
        echo '<script>
                alert("Data Berhasil Ditambahkan");
                window.location="' . base_url('Home/kelolaKamar') . '"
              </script>';
    }

    public function tambahKamar()
    {
        $data = array(
            'id_kamar'  => '',
            'nama'      => $this->request->getPost('nama'),
            'isi'       => $this->request->getPost('isi'),
            'jenis'     => $this->request->getPost('jenis'),
            'lantai'    => $this->request->getPost('lantai'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'status'    => $this->request->getPost('status'),
            'biaya'     => $this->request->getPost('biaya')
        );
        $this->kamarModel->addKamar($data);
        echo '<script>
                alert("Data Berhasil Ditambahkan");
                window.location="' . base_url('Home/kelolaKamar') . '"
              </script>';
    }

    public function formUbahKamar($id)
    {
        $kamar = $this->kamarModel->getKamarDetail($id);
        $data = ['kamar' => $kamar];
        $data['judul'] = 'Ubah Kamar';
        $data['sidebar'] = view('admin/sidebar');
        $data['isi'] = view('admin/formubahkamar', $data);
        return view('index', $data);
    }

    public function ubahKamar()
    {
        $id   = $this->request->getPost('id_kamar');
        $data = array(
            'nama'      => $this->request->getPost('nama'),
            'isi'       => $this->request->getPost('isi'),
            'jenis'     => $this->request->getPost('jenis'),
            'lantai'    => $this->request->getPost('lantai'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'status'    => $this->request->getPost('status'),
            'biaya'     => $this->request->getPost('biaya')
        );
        $this->kamarModel->updateKamar($data, $id);
        echo '<script>
                alert("Data Berhasil Diubah");
                window.location="' . base_url('Home/kelolaKamar') . '"
              </script>';
    }

    public function hapusKamar($id)
    {
        $response = $this->kamarModel->delKamar($id);
        if ($response == true) {
            echo '<script>
                alert("Sukses Hapus Data");
                window.location="' . base_url('Home/kelolaKamar') . '"
              </script>';
        } else {
            echo '<script>
                alert("Gagal Hapus Data");
                window.location="' . base_url('Home/kelolaKamar') . '"
              </script>';
        }
    }

    public function detailKamar($id)
    {
        $kamar = $this->kamarModel->getKamarDetail($id);
        $data['kamar'] = $kamar;
        foreach ($kamar as $k) :
        if($k['status'] == 'Terisi'){
            $id_booking = $this->transaksiModel->getBookingId($id);
            $user = $this->bookingModel->getDataUser($id_booking);
            $data['user'] = $user;
        }
        endforeach;
        $data['judul'] = 'Detail Kamar';
        $data['sidebar'] = view('admin/sidebar');
        $data['isi'] = view('admin/detailkamar', $data);
        return view('index', $data);
    }

    public function kelolaUser()
    {
        // $user = $this->userModel->getUser();
        $user = $this->groupModel->getGroup();
        $data = ['user' => $user];
        $data['judul'] = 'Kelola User';
        $data['sidebar'] = view('admin/sidebar');
        $data['isi'] = view('admin/kelolauser', $data);
        return view('index', $data);
    }

    public function hapusUser($id)
    {
        $response = $this->userModel->delUser($id);
        if ($response == true) {
            echo '<script>
                alert("Sukses Hapus Data");
                window.location="' . base_url('Home/kelolaUser') . '"
              </script>';
        } else {
            echo '<script>
                alert("Gagal Hapus Data");
                window.location="' . base_url('Home/kelolaUser') . '"
              </script>';
        }
    }

    public function detailUser($id)
    {
        $user = $this->groupModel->getGroupDetail($id);
        $data = ['user' => $user];
        $data['judul'] = 'Detail User';
        $data['sidebar'] = view('admin/sidebar');
        $data['isi'] = view('admin/detailuser', $data);
        return view('index', $data);
    }

    public function formUbahUser($id)
    {
        $user = $this->groupModel->getGroupDetail($id);
        $data = ['user' => $user];
        $data['judul'] = 'Ubah User';
        $data['sidebar'] = view('admin/sidebar');
        $data['isi'] = view('admin/formubahuser', $data);
        return view('index', $data);
    }

    public function ubahUser()
    {
        $id   = $this->request->getPost('id');
        $data = array(
            'email'     => $this->request->getPost('email'),
            'username'  => $this->request->getPost('username'),
            'active'    => $this->request->getPost('active'),
        );
        $group = array(
            'group_id'  => $this->request->getPost('group')
        );
        $this->userModel->updateUser($data, $id);
        $this->groupModel->updateGroup($group, $id);
        echo '<script>
                alert("Data Berhasil Diubah");
                window.location="' . base_url('Home/kelolaUser') . '"
              </script>';
    }
}
