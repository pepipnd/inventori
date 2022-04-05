<?php 

class Admin extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model','am');

        if($_SESSION['level'] == '' or $_SESSION['level'] != 'admin') 
        {
            redirect('/');
        }  
    }

    function index()
    {
        $data['barang'] = $this->am->showbarang();
        $data['totalbarang'] = $this->am->totalbarang();
        $data['user'] = $this->am->usert();
        $data['keluar'] = $this->am->keluar();
        $data['masuk'] = $this->am->masuk();

        $this->load->view('template/header');
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer'); 
    }
    function data_barang()
    {
        $data['data_barang'] = $this->am->data_barang();

        $this->load->view('template/header');
        $this->load->view('admin/barang', $data);
        $this->load->view('template/footer');
    }
    function tambah_barang()
    {
        $data['kategori'] = $this->am->kategori();

        $this->load->view('template/header');
        $this->load->view('admin/tambah_barang',$data);
        $this->load->view('template/footer');
    }
    function simpan_barang()
    {
          //deklarasi variabel
        $nama_barang = $this->input->post('nama_barang');
        $nama_kategori = $this->input->post('nama_kategori');
        $stok = $this->input->post('stok');
        
        //proses upload
        $config['upload_path']          = "./barang/";
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 5000;
 
        $this->load->library('upload', $config);
        sleep(2);

		if (!$this->upload->do_upload('gambar')){
            //jika gagal upload
             $data = array(
            'nama_barang' => $nama_barang,
            'kategori_id' => $nama_kategori,
            'stok' => $stok
            );
            $this->db->insert('barang', $data);
            
            redirect('Admin/data_barang');

		}else{
            //proses upload ke folder
			$data = array('upload_data' => $this->upload->data());
            $namafile =  $this->upload->data("file_name");

            //update ke database
            $data = array(
            'nama_barang' => $nama_barang,
            'kategori_id' => $nama_kategori,
            'stok' => $stok,
            'gambar' => $namafile
            );
            $this->db->insert('barang', $data);
            redirect('Admin/data_barang');
        }
    }
    function hapusbarang($id)
    {
                sleep(2);
        $this->am->hapusbarang($id);
        redirect('Admin/data_barang');
    }
    function editbarang($id)
    {
        $data['editbarang'] = $this->am->editbarang($id);
        $data['kategori'] = $this->am->kategori();

        $this->load->view('template/header');
        $this->load->view('admin/edit_barang',$data);
        $this->load->view('template/footer');
    }
    public function simpan_edit_barang()
    {
          //deklarasi variabel
        $id = $this->input->post('id');
        $nama_barang = $this->input->post('nama_barang');
        $nama_kategori = $this->input->post('nama_kategori');
        $stok = $this->input->post('stok');
        
        //proses upload
        $config['upload_path']          = "./product/";
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 5000;
 
        $this->load->library('upload', $config);
        sleep(2);
		if (!$this->upload->do_upload('gambar')){
            //jika gagal upload
             $data = array(
            'nama_barang' => $nama_barang,
            'kategori_id' => $nama_kategori,
            'stok' => $stok,
            );
            $where = array( 'id_barang'=> $id);
            $this->am->updatebarang($data, $where);
            redirect('Admin/data_barang');

		}else{
            //proses upload ke folder
			$data = array('upload_data' => $this->upload->data());
            $namafile =  $this->upload->data("file_name");

            //update ke database
            $data = array(
            'nama_barang' => $nama_barang,
            'kategori_id' => $nama_kategori,
            'stok' => $stok,
            'gambar' => $namafile
            );
            $where = array( 'id_barang'=> $id);
            $this->am->updatebarang($data, $where);
            redirect('Admin/data_barang');
        }
    }
    function kategori()
    {
        $data['kategori'] = $this->am->kategori();
        $this->load->view('template/header');
        $this->load->view('admin/kategori', $data);
        $this->load->view('template/footer');
    }
    function tambah_kategori()
    {
        $this->load->view('template/header');
        $this->load->view('admin/tambah_ktr');
        $this->load->view('template/footer');
    }
    function simpan_ktr()
    {
        sleep(2);
        $this->am->simpan_ktr();
        redirect('Admin/kategori');
    }
    function hapusktr($id)
    {
                sleep(2);
        $this->am->hapusktr($id);
        redirect('Admin/kategori');
    }
    function transaksi()
    {
        $this->load->view('template/header');
        $this->load->view('admin/transaksi');
        $this->load->view('template/footer');
    }
    function editktr($id)
    {
        $data['editktr'] = $this->am->editktr($id);

        $this->load->view('template/header');
        $this->load->view('Admin/editktr', $data);
        $this->load->view('template/footer');
    }
    function seditktr()
    {
        sleep(2);
        $this->am->seditktr();
        redirect('Admin/kategori');
    }
    function barang_masuk()
    {
        $data['br_masuk'] = $this->am->br_masuk();

        $this->load->view('template/header');
        $this->load->view('admin/barang_masuk', $data);
        $this->load->view('template/footer');
    }
    function hapusbm($id)
    {
        $this->am->hapusbm($id);
        redirect('Admin/barang_masuk');
    }
    function tambahbm()
    {
        $data['barang'] = $this->am->barang();        
        // $data['idbarang'] = $this->am->idbarang();        

        $this->load->view('template/header');
        $this->load->view('admin/tambahbm',$data);
        $this->load->view('template/footer');
    }
    function simpan_bm()
    {
        sleep(2);
        $tanggal  = $this->input->post('tanggal');
        $nama_barang  = $this->input->post('nama_barang');
        $jumlah_masuk  = $this->input->post('jumlah_masuk');

        $data = array(
            'tanggal' => $tanggal,
            'id_barang' => $nama_barang,
            'jumlah_masuk' => $jumlah_masuk
        );
        $this->db->insert('barang_masuk', $data);

        $query = $this->db->query("SELECT * FROM barang where id_barang = $nama_barang");
            $hasil = $query->result();
            $stok = $hasil[0]->stok;
            $penambahanstok = $stok+$jumlah_masuk;
            $data = array(
                'stok' => $penambahanstok
            );
            $this->db->where('id_barang', $nama_barang);
            $this->db->update('barang', $data);

         redirect('Admin/barang_masuk'); 
        // $this->am->simpan_bm();
        // redirect('Admin/barang_masuk');
    }
    function editbm($id)
    {
        $data['editbm'] = $this->am->editbm($id);
        $data['barang'] = $this->am->barang();

        $this->load->view('template/header');
        $this->load->view('Admin/editbm', $data);
        $this->load->view('template/footer');   
    }
    
    function barang_keluar()
    {
        $data['br_keluar'] = $this->am->br_keluar();

        $this->load->view('template/header');
        $this->load->view('admin/barang_keluar', $data);
        $this->load->view('template/footer');
    }
    function tambahbk()
    {
        $data['barang'] = $this->am->barang();
        $data['bk'] = $this->am->bk();

        $this->load->view('template/header');
        $this->load->view('admin/tambahbk',$data);
        $this->load->view('template/footer');
    }
    function simpan_bk()
    {
        sleep(2);
        $tanggal  = $this->input->post('tanggal');
        $nama_barang  = $this->input->post('nama_barang');
        $jumlah_keluar  = $this->input->post('jumlah_keluar');

        $data = array(
            'tanggal' => $tanggal,
            'id_barang' => $nama_barang,
            'jumlah_keluar' => $jumlah_keluar
        );
        $this->db->insert('barang_keluar', $data);

        $query = $this->db->query("SELECT * FROM barang where id_barang = $nama_barang");
            $hasil = $query->result();
            $stok = $hasil[0]->stok;
            $penguranganstok = $stok-$jumlah_keluar;
            $data = array(
                'stok' => $penguranganstok
            );
            $this->db->where('id_barang', $nama_barang);
            $this->db->update('barang', $data);


            //batas 


        // $data = array(
        //     'tanggal' => $tanggal,
        //     'id_barang' => $nama_barang,
        //     'jumlah_keluar' => $jumlah_keluar
        // );

        // $this->am->input_data($data, 'barang_keluar');
        // redirect('Admin/barang_keluar');
        // $this->am->simpan_bk();
         redirect('Admin/barang_keluar'); 
    }
    function hapusbk($id)
    {
        $this->am->hapusbk($id);
        redirect('Admin/barang_keluar');
    }
    function editbk($id)
    {
        $data['editbk'] = $this->am->editbk($id);
        $data['barang'] = $this->am->barang();

        $this->load->view('template/header');
        $this->load->view('Admin/editbk', $data);
        $this->load->view('template/footer');
    }
    function simpan_edit_bk()
    {
        $this->am->simpan_edit_bk();
        redirect('Admin/barang_keluar');
    }
    function data_user()
    {
        $data['user'] = $this->am->user();

        $this->load->view('template/header');
        $this->load->view('admin/data_user', $data);
        $this->load->view('template/footer');
    }
    function tambah_user()
    {
        $this->load->view('template/header');
        $this->load->view('admin/tambah_user');
        $this->load->view('template/footer');
    }
    function simpan_user()
    {
        //deklarasi variabel
        $nama_lengkap = $this->input->post('nama_lengkap');
        $no_hp = $this->input->post('no_hp');
        $alamat_lengkap = $this->input->post('alamat_lengkap');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $level = $this->input->post('level');
        
        //proses upload
        $config['upload_path']          = "./foto/";
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 5000;
 
        $this->load->library('upload', $config);
        sleep(2);

		if (!$this->upload->do_upload('foto')){
            //jika gagal upload
             $data = array(
            'nama_lengkap' => $nama_lengkap,
            'no_hp' => $no_hp,
            'alamat_lengkap' => $alamat_lengkap,
            'email' => $email,
            'password' =>  md5($password),
            'level' => $level
            );
            $this->db->insert('tbl_member', $data);
            redirect('Admin/data_user');

		}else{
            //proses upload ke folder
			$data = array('upload_data' => $this->upload->data());
            $namafile =  $this->upload->data("file_name");

            //update ke database
            $data = array(
            'nama_lengkap' => $nama_lengkap,
            'no_hp' => $no_hp,
            'alamat_lengkap' => $alamat_lengkap,
            'email' => $email,
            'password' => md5($password),
            'level' => $level,
            'foto' => $namafile
            );
            $this->db->insert('tbl_member', $data);
            redirect('Admin/data_user');
        }
    }
    function hapus_user($id)
    {
                sleep(2);
        $iduser = $this->input->post('iduser');
        $this->am->hapus_user($id);
        redirect('Admin/data_user');
    }
    function edit_user($id)
    {
        $data['editu'] = $this->am->editu($id);

        $this->load->view('template/header');
        $this->load->view('Admin/edit_user', $data);
        $this->load->view('template/footer');
    }
    function simpan_edit_user()
    {
        //deklarasi variabel
        $id = $this->input->post('id');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $no_hp = $this->input->post('no_hp');
        $alamat_lengkap = $this->input->post('alamat_lengkap');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        //proses upload
        $config['upload_path']          = "./foto/";
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 5000;
 
        $this->load->library('upload', $config);
        sleep(2);

		if (!$this->upload->do_upload('foto')){
            //jika gagal upload
             $data = array(
            'nama_lengkap' => $nama_lengkap,
            'no_hp' => $no_hp,
            'alamat_lengkap' => $alamat_lengkap,
            'email' => $email,
            'password' => md5($password)
            );
            $where = array( 'id'=> $id);
            $this->am->updateakun($data, $where);
            redirect('Admin/data_user');

		}else{
            //proses upload ke folder
			$data = array('upload_data' => $this->upload->data());
            $namafile =  $this->upload->data("file_name");

            //update ke database
            $data = array(
                'foto' => $namafile,
                'nama_lengkap' => $nama_lengkap,
                'no_hp' => $no_hp,
                'alamat_lengkap' => $alamat_lengkap,
                'email' => $email,
                'password' => md5($password)
            );

            $where = array( 'id'=> $id);

            $this->am->updateakun($data, $where);

            redirect('Admin/data_user');

        }
    }
    function detail_user($id)
    {
        $data['detailu'] = $this->am->detailu($id);

        $this->load->view('template/header');
        $this->load->view('admin/detail_user', $data);
        $this->load->view('template/footer');    
    }
    function ubah_password()
    {
        $this->load->view('template/header');
        $this->load->view('admin/ubah_password');
        $this->load->view('template/footer');
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
            $this->am->gantipass($gantipass,$where);
            redirect('Login/logout');
        }else{
            redirect('Admin/ubah_password');
        } 
    }
    
    function cari_lapbm()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data['caribarang'] = $this->am->cari_lapbm($dari,$sampai);

        $this->load->view('template/header');
        $this->load->view('admin/laporan_bm', $data);
        $this->load->view('template/footer');
    }
     function cari_lapbk()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $data['caribarang'] = $this->am->cari_lapbk($dari,$sampai);

        $this->load->view('template/header');
        $this->load->view('admin/laporan_bk', $data);
        $this->load->view('template/footer');
    }
   
    function lap_stok()
    {
        $data['barang'] = $this->am->data_barang();

        $this->load->view('template/header');
        $this->load->view('admin/laporan_stok', $data);
        $this->load->view('template/footer');
    }
    // function print_bm($dari, $sampai)
    // {
    //     $dari = $this->input->post('dari');
    //     $sampai = $this->input->post('sampai');
    //     $data['caribarang'] = $this->am->cari_lapbm($dari,$sampai);

    //     $this->load->view('Admin/print_bm', $data);
    // }
    // function lap_bk()
    // {
    //     $data['graph'] = $this->am->graph_keluar();
        // $data['br_keluar'] = $this->am->br_keluar();

    //     $this->load->view('template/header');
    //     $this->load->view('admin/laporan_bk', $data);
    //     $this->load->view('template/footer');
    // }
    function lap_bm()
    {
        $data['tahun'] = $this->am->gettahunmasuk();
        $data['br_masuk'] = $this->am->br_masuk();

        $this->load->view('template/header');
        $this->load->view('admin/laporan_bm', $data);
        $this->load->view('template/footer');
    }
    function lap_bk()
    {
        $data['tahun'] = $this->am->gettahun();
        $data['br_keluar'] = $this->am->br_keluar();

        $this->load->view('template/header');
        $this->load->view('admin/laporan_bk', $data);
        $this->load->view('template/footer');
    }
    function print_bk()
    {
        $tanggalawal = $this->input->post('tanggalawal');
        $tanggalakhir = $this->input->post('tanggalakhir');
        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');
        $bulanakhir = $this->input->post('bulanakhir');
        $tahun2 = $this->input->post('tahun2');
        $nilaifilter = $this->input->post('nilaifilter');

        if($nilaifilter == 1){
            $data['title'] = "Laporan Peminjaman Barang";
            $data['subtitle'] = "Dari tanggal : ". $tanggalawal. " Sampai tanggal : ". $tanggalakhir;
            $data['datafilter'] = $this->am->filterbytanggal($tanggalawal,$tanggalakhir);

            $this->load->view('admin/print_bk', $data);
        }else if($nilaifilter == 2){
            $data['title'] = "Laporan Peminjaman Barang";
            $data['subtitle'] = "Dari bulan :". $bulanawal. " Sampai bulan :". $bulanakhir. " Tahun :". $tahun1;
            $data['datafilter'] = $this->am->filterbybulan($tahun1,$bulanawal,$bulanakhir);

            $this->load->view('admin/print_bk', $data);
        }else if($nilaifilter == 3){
            $data['title'] = "Laporan Peminjaman Barang";
            $data['subtitle'] = "Tahun : ". $tahun2;
            $data['datafilter'] = $this->am->filterbytahun($tahun2);

            $this->load->view('admin/print_bk', $data);
        }
    }
    function print_bm()
    {
        $tanggalawal = $this->input->post('tanggalawal');
        $tanggalakhir = $this->input->post('tanggalakhir');
        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');
        $bulanakhir = $this->input->post('bulanakhir');
        $tahun2 = $this->input->post('tahun2');
        $nilaifilter = $this->input->post('nilaifilter');

        if($nilaifilter == 1){
            $data['title'] = "Laporan Pengembalian Barang ";
            $data['subtitle'] = "Dari tanggal : ". $tanggalawal. " Sampai tanggal : ". $tanggalakhir;
            $data['datafilter'] = $this->am->filterbytanggalmasuk($tanggalawal,$tanggalakhir);

            $this->load->view('admin/print_bm', $data);
        }else if($nilaifilter == 2){
            $data['title'] = "Laporan Pengembalian Barang";
            $data['subtitle'] = "Dari bulan :". $bulanawal. " Sampai bulan :". $bulanakhir. " Tahun :". $tahun1;
            $data['datafilter'] = $this->am->filterbybulanmasuk($tahun1,$bulanawal,$bulanakhir);

            $this->load->view('admin/print_bm', $data);
        }else if($nilaifilter == 3){
            $data['title'] = "Laporan Pengembalian Barang";
            $data['subtitle'] = "Tahun : ". $tahun2;
            $data['datafilter'] = $this->am->filterbytahunmasuk($tahun2);

            $this->load->view('admin/print_bm', $data);
        }
    }
    function detail_akun()
    {
        $id = $this->session->userdata('id');
        $admin = $this->am->admin($id);
        $data['admin'] = $admin[0];

        $this->load->view('template/header',$data);
        $this->load->view('admin/detail_akun',$data);
        $this->load->view('template/footer'); 
    }
}