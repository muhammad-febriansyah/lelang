<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('frontend/atas');
        $this->load->view('frontend/index');
        $this->load->view('frontend/bawah');

    }

    public function regis()
    {
        $this->load->view('frontend/atas');
        $this->load->view('frontend/regis');
        $this->load->view('frontend/bawah');

    }

    public function login()
    {
        $this->load->view('frontend/atas');
        $this->load->view('frontend/login');
        $this->load->view('frontend/bawah');

    }
    public function barang()
    {
        $this->load->view('frontend/atas');
        $this->load->view('frontend/barang');
        $this->load->view('frontend/bawah');

    }
    public function detailbarang($id = '')
    {
        $q = $this->db->query("select barang.*,member.nama as member from barang inner join member on member.id = barang.idmember where barang.id='$id'");
        if ($q->num_rows() > 0) {
            $this->db->query("UPDATE barang SET views=views+1 WHERE id='$id'");
            $data['id'] = $id;
            $this->load->view('frontend/atas');
            $this->load->view('frontend/detailbarang', $data);
            $this->load->view('frontend/bawah');
        }
    }

    public function registrasi()
    {
        $nama = $_POST['nama'];
        $q = $this->db->query("SELECT * from member where nama='$nama'");
        if ($q->num_rows() > 0) {
            $this->session->set_flashdata('msg', 'ada');

            redirect('home/regis', 'refresh');
        } else {
            $nama = $_POST['nama'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->db->query("INSERT into member values('','$nama','$telp','$alamat','$username',md5('$password'),now(),'Pending')");
            $this->session->set_flashdata('msg', 'regis');

            redirect('home/regis', 'refresh');
        }

    }

    public function cekmember()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $q = $this->db->query("select * from member where username='$username' and password=md5('$password') and status='Dikonfirmasi'");
        if ($q->num_rows() > 0) {
            $row = $q->row();
            $data = array(
                "id" => $row->id,
                "nama" => $row->nama,
            );
            $this->session->set_userdata($data);
            redirect('member/', 'refresh');
        } else {
            $this->session->set_flashdata('msg', 'errormember');
            redirect('home/login', 'refresh');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home/index', 'refresh');
    }

    public function addpeserta($id='')
    {
        $nama = $_POST['nama'];
        $telp = $_POST['telp'];
        $nilai = $_POST['nilai'];
        $this->db->query("INSERT into peserta values('','$nama','$telp','$nilai','$id','Proses')");
        $this->session->set_flashdata('msg', 'tawar');
        redirect("home/detailbarang/$id", 'refresh');
    }
}

/* End of file Home.php */
