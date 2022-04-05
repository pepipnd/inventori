<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('User_model','um');

        if($_SESSION['level'] == '' or $_SESSION['level'] != 'user') 
        {
            redirect('/');
        }  
    }

    function index()
    {
        $data['data_barang'] = $this->um->data_barang();
        $data['totalbarang'] = $this->um->totalbarang();
        $data['user'] = $this->um->usert();
        $data['keluar'] = $this->um->keluar();
        $data['masuk'] = $this->um->masuk();

        $this->load->view('template_user/header');
        $this->load->view('user/index', $data);
        $this->load->view('template_user/footer'); 
    }
    function data_barang()
    {
        $data['data_barang'] = $this->um->data_barang();

        $this->load->view('template_user/header');
        $this->load->view('user/barang', $data);
        $this->load->view('template_user/footer');
    }
    function lap_bm()
    {
        $data['graph'] = $this->um->graph();
        $data['br_masuk'] = $this->um->br_masuk();

        $this->load->view('template_user/header');
        $this->load->view('user/laporan_bm', $data);
        $this->load->view('template_user/footer');
    }
    function cari_lapbm()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data['caribarang'] = $this->um->cari_lapbm($dari,$sampai);

        $this->load->view('template_user/header');
        $this->load->view('user/laporan_bm', $data);
        $this->load->view('template_user/footer');
    }
    function lap_bk()
    {
        $data['graph'] = $this->um->graph_keluar();
        $data['br_keluar'] = $this->um->br_keluar();

        $this->load->view('template_user/header');
        $this->load->view('user/laporan_bk', $data);
        $this->load->view('template_user/footer');
    }
     function cari_lapbk()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data['caribarang'] = $this->um->cari_lapbk($dari,$sampai);

        $this->load->view('template_user/header');
        $this->load->view('user/laporan_bk', $data);
        $this->load->view('template_user/footer');
    }
    function detail_user()
    {
        $id = $this->session->userdata('id');
        $user = $this->um->user($id);
        $data['user'] = $user[0];

        $this->load->view('template_user/header',$data);
        $this->load->view('user/detail_user',$data);
        $this->load->view('template_user/footer');    
    }
    function ubah_password()
    {
        $this->load->view('template_user/header');
        $this->load->view('user/ubah_password');
        $this->load->view('template_user/footer');
    }
    function gantipassword_aksi()
    {
                sleep(3);
        $id = $this->session->userdata('id');
        $passbaru = $this->input->post('passbaru');
        $konpass = $this->input->post('konpass');

        if($passbaru == $konpass){
            $gantipass = array(
                'password' => md5($passbaru)
            );
            $where = array(
                'id' => $id
            );
            $this->um->gantipass($gantipass,$where);
            redirect('Login/logout');
        }else{
            redirect('User/ubah_password');
        } 
    }
    function lap_stok()
    {
        $data['barang'] = $this->um->data_barang();

        $this->load->view('template_user/header');
        $this->load->view('user/laporan_stok', $data);
        $this->load->view('template_user/footer');
    }
}
        