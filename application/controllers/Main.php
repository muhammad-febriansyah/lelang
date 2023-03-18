<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata("id"))
        {
            redirect('welcome','refresh');
        }
    }
    
    public function index()
    {
        $this->load->view('assets/atas', FALSE);
        $this->load->view('assets/index', FALSE);
        $this->load->view('assets/bawah', FALSE);
                
    }
    public function kategori()
    {
        $this->load->view('assets/atas', FALSE);
        $this->load->view('assets/kategori', FALSE);
        $this->load->view('assets/bawah', FALSE);
                
    }
    public function member()
    {
        $this->load->view('assets/atas', FALSE);
        $this->load->view('assets/member', FALSE);
        $this->load->view('assets/bawah', FALSE);
                
    }

    public function confirm($id='')
    {
        $this->db->query("UPDATE  member set status='Dikonfirmasi' where id='$id'");
        $this->session->set_flashdata('msg', 'terima');
        redirect('main/member', 'refresh');
    }
    public function tolak($id='')
    {
        $this->db->query("UPDATE  member set status='Ditolak' where id='$id'");
        $this->session->set_flashdata('msg', 'tolak');
        redirect('main/member', 'refresh');
    }
   

    public function hapusmember($id='')
    {
        $this->db->query("DELETE from member where id='$id'");
        $this->session->set_flashdata('msg', 'hapus');
        redirect('main/member', 'refresh');
    }
    public function hapuskategori($id='')
    {
        $this->db->query("DELETE from kategori where id='$id'");
        $this->session->set_flashdata('msg', 'hapus');
        redirect('main/kategori', 'refresh');
    }

    public function savekat()
    {
        $kat = $_POST['kat'];
        $this->db->query("INSERT into kategori values('','$kat')");
        $this->session->set_flashdata('msg', 'success');
        redirect('main/kategori', 'refresh');
    }

    public function barang()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/barang');
        $this->load->view('assets/bawah');
    }

    public function peserta()
    {
        $this->load->view('assets/atas');
        $this->load->view('assets/peserta');
        $this->load->view('assets/bawah');
    }

    public function addbarang()
    {
        $this->load->view('assets/atas', FALSE);
        $this->load->view('assets/addbarang', FALSE);
        $this->load->view('assets/bawah', FALSE);
                
    }

    public function editbarang($id = '')
    {
        $data['id'] = $id;
        $this->load->view('assets/atas', false);
        $this->load->view('assets/editbarang', $data);
        $this->load->view('assets/bawah', false);

    }
    
    public function detailbarang($id = '')
    {
        $data['id'] = $id;
        $this->load->view('assets/atas', false);
        $this->load->view('assets/detailbarang', $data);
        $this->load->view('assets/bawah', false);

    }
    
    public function savebarang()
    {
        $config['upload_path'] = './image/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '5000';
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
            $iduser = $_POST['member'];
            $this->db->query("insert into barang values('','$nama','$kategori','$ket','$tgltutup','$harga','$gambar',now(),'$iduser','0')");
            $this->session->set_flashdata('msg', 'success');
            redirect('main/barang', 'refresh');
        } else {
            $this->session->set_flashdata('msg', 'gagal');
            redirect('main/barang', 'refresh');

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
                redirect('main/barang', 'refresh');
            }
        } else {
            $kategori = $_POST['kategori'];
            $harga = $_POST['harga'];
            $tgltutup = $_POST['tgltutup'];
            $nama = $_POST['nama'];
            $ket = $_POST['ket'];
            $this->db->query("UPDATE barang set nama='$nama',kategori='$kategori',ket='$ket',tgltutup='$tgltutup',hargabuka='$harga' where id='$id'");
            $this->session->set_flashdata('msg', 'edit');
            redirect('main/barang', 'refresh');
        }
    }

    public function hapusbarang($id = '')
    {
        $q = $this->db->query("select * from barang where id='$id'");
        $row  = $q->row();
        unlink('./image/' . $row->foto);
        $this->db->query("delete from barang where id='$id'");
        $this->session->set_flashdata('msg', 'hapus');
        redirect('main/barang', 'refresh');
    }

}

/* End of file Main.php */
