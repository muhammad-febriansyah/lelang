<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("id")) {
            redirect('home', 'refresh');
        }
    }

    public function index()
    {
        $this->load->view('member/atas', false);
        $this->load->view('member/index', false);
        $this->load->view('member/bawah', false);

    }

    public function barang()
    {
        $this->load->view('member/atas', false);
        $this->load->view('member/barang', false);
        $this->load->view('member/bawah', false);

    }
    public function addbarang()
    {
        $this->load->view('member/atas', false);
        $this->load->view('member/addbarang', false);
        $this->load->view('member/bawah', false);

    }
    public function lelang()
    {
        $this->load->view('member/atas', false);
        $this->load->view('member/lelang', false);
        $this->load->view('member/bawah', false);

    }
    public function editbarang($id = '')
    {
        $data['id'] = $id;
        $this->load->view('member/atas', false);
        $this->load->view('member/editbarang', $data);
        $this->load->view('member/bawah', false);

    }

    public function savebarang()
    {
        $config['upload_path'] = './image/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload("gambar")) { //upload file
            $gbr = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = './image/' . $gbr['file_name'];
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = true;
            $config['quality'] = '80%';
            $config['width'] = 1024;
            $config['height'] = 768;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $gambar = $gbr['file_name'];
            $kategori = $_POST['kategori'];
            $harga = $_POST['harga'];
            $tgltutup = $_POST['tgltutup'];
            $nama = $_POST['nama'];
            $ket = $_POST['ket'];
            $iduser = $this->session->userdata('id');
            $this->db->query("insert into barang values('','$nama','$kategori','$ket','$tgltutup','$harga','$gambar',now(),'$iduser','0')");
            $this->session->set_flashdata('msg', 'success');
            redirect('member/barang', 'refresh');
        } else {
            $this->session->set_flashdata('msg', 'gagal');
            redirect('member/barang', 'refresh');

        }
    }

    public function savebarangedit($id = '')
    {
        $config['upload_path'] = './image/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '5000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        if (!empty($_FILES['gambar']['name'])) {
            if (!$this->upload->do_upload('gambar')) {
                echo false;
            } else {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './image/' . $gbr['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = true;
                $config['quality'] = '80%';
                $config['width'] = 1024;
                $config['height'] = 768;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar = $gbr['file_name'];
                $kategori = $_POST['kategori'];
                $harga = $_POST['harga'];
                $tgltutup = $_POST['tgltutup'];
                $nama = $_POST['nama'];
                $ket = $_POST['ket'];
                $q = $this->db->query("select * from barang where id='$id'");
                $row = $q->row();
                unlink('./image/' . $row->foto);
                $this->db->query("UPDATE barang set nama='$nama',kategori='$kategori',ket='$ket',tgltutup='$tgltutup',hargabuka='$harga',foto='$gambar' where id='$id'");
                $this->session->set_flashdata('msg', 'edit');
                redirect('member/barang', 'refresh');
            }
        } else {
            $kategori = $_POST['kategori'];
            $harga = $_POST['harga'];
            $tgltutup = $_POST['tgltutup'];
            $nama = $_POST['nama'];
            $ket = $_POST['ket'];
            $this->db->query("UPDATE barang set nama='$nama',kategori='$kategori',ket='$ket',tgltutup='$tgltutup',hargabuka='$harga' where id='$id'");
            $this->session->set_flashdata('msg', 'edit');
            redirect('member/barang', 'refresh');
        }
    }


    public function setpilih($id='',$idbarang='')
    {
        $q = $this->db->query("SELECT * from peserta where id='$id' and status='Terpilih'");
        if($q->num_rows() > 0){
            $this->session->set_flashdata('msg', 'sudah');
            redirect('member/lelang', 'refresh');
        }else{
            $this->db->query("UPDATE peserta set status='Terpilih' where id='$id'");
            $this->db->query("UPDATE peserta set status='Ditolak' where status!='Terpilih' and idbarang='$idbarang'");
            $this->session->set_flashdata('msg', 'pilih');
            redirect('member/lelang', 'refresh');
        }
    }
}

/* End of file Member.php */
