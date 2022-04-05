<?php 

class Admin_model extends CI_Model {


    public function showbarang()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.kategori_id');
        return $query = $this->db->get()->result();
    }
    public function data_barang()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.kategori_id');
        return $query = $this->db->get()->result();
    }
    function simpan_product()
    {
        $nama_produk = $this->input->post('nama_produk');
        $nama_kategori = $this->input->post('nama_kategori');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $data = array(
            'nama_produk' => $nama_produk,
            'kategori_id' => $nama_kategori,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'stok' => $stok,
        );
        $this->db->insert('produk', $data);
    }
    public function kategori()
    {
        return $this->db->get('kategori')->result();
    }
    function hapusbarang($id)
    {
        $this->db->delete('barang', array('id_barang' => $id));
    }
    function simpan_ktr()
    {
        $nama_kategori = $this->input->post('nama_kategori');
        $data = array(
            'nama_kategori' => $nama_kategori,
        );
        $this->db->insert('kategori', $data);
    }
    function hapusktr($id)
    {
        $this->db->delete('kategori', array('id_kategori' => $id));
    }
    function editktr($id)
    {
        return $this->db->get_where('kategori', array('id_kategori' => $id))->result();
    }
    function editbarang($id)
    {
        return $this->db->get_where('barang', array('id_barang' => $id))->result();
    }
    function seditktr()
    {
         $nama_kategori = $this->input->post('nama_kategori');
         $id = $this->input->post('id');

         $data= array(
             'nama_kategori' => $nama_kategori
         );
         $this->db->where('id_kategori', $id);
         $this->db->update('kategori', $data);
    }
    function br_masuk()
    {
        // $query = $this->db->query("SELECT tt.*, tb.nama_barang, tb.id_barang AS nomorbarang FROM barang_masuk AS tt
        // LEFT JOIN barang tb
        // ON tt.id_barang = tb.id_barang");
        $query = $this->db->query("SELECT * FROM barang_masuk a left join barang b on a.id_barang = b.id_barang");
        return $query->result();
   }
   function hapusbm($id)
    {
        $this->db->delete('barang_masuk', array('id_masuk' => $id));
    }
    function barang()
    {
        return $this->db->get('barang')->result();
    }
    function simpan_bm()
    {
        // $barang = $id;
        // $tanggal = $this->input->post('tanggal');
        // $nama_barang = $this->input->post('nama_barang');
        // // $jumlah_masuk = $this->input->post('jumlah_masuk');

        // $barang =  $this->db->get_where('barang', array('id_barang' => $barang))->result();
        // $stok       = $barang[0]->stok;
        // $stokbarang = $stok+1;

        // $data = array(
        //     'tanggal' => $tanggal,
        //     'stok' => $stokbarang
        // );

        // $where = array(
        //     'id_barang'
        // );

        // $this->db->update('barang', $data, $where);

        $tanggal = $this->input->post('tanggal');
        $nama_barang = $this->input->post('nama_barang');
        $jumlah_masuk = $this->input->post('jumlah_masuk');
        $data = array(
            'tanggal' => $tanggal,
            'id_barang' => $nama_barang,
            'jumlah_masuk' => $jumlah_masuk,
        );
        $this->db->insert('barang_masuk', $data);
    }
    function editbm($id)
    {
        return $this->db->get_where('barang_masuk', array('id_masuk' => $id))->result();
    }
    function idbarang()
    {
        return $this->db->get('barang')->result();
    }
    function br_keluar()
    {
        $query = $this->db->query("SELECT tk.*, tb.nama_barang, tb.id_barang AS nomorbarang FROM barang_keluar AS tk
        LEFT JOIN barang tb
        ON tk.id_barang = tb.id_barang");
        return $query->result();
    }
    function simpan_bk()
    {
        $tanggal = $this->input->post('tanggal');
        $nama_barang = $this->input->post('nama_barang');
        $jumlah_keluar = $this->input->post('jumlah_keluar');
        $data = array(
            'tanggal' => $tanggal,
            'id_barang' => $nama_barang,
            'jumlah_keluar' => $jumlah_keluar,
        );
        $this->db->insert('barang_keluar', $data);
    }
    function hapusbk($id)
    {
        $this->db->delete('barang_keluar', array('id_keluar' => $id));
    }
    function editbk($id)
    {
        return $this->db->get_where('barang_keluar', array('id' => $id))->result();
    }
    function simpan_edit_bk()
    {
        $tanggal = $this->input->post('tanggal');
        $nama_barang = $this->input->post('nama_barang');
        $jumlah_keluar = $this->input->post('jumlah_keluar');
        $id = $this->input->post('id');
        $data = array(
            'tanggal' => $tanggal,
            'id_barang' => $nama_barang,
            'jumlah_keluar' => $jumlah_keluar,
        );
         $this->db->where('id', $id);
         $this->db->update('barang_keluar', $data);
    }
    function user()
    {
        return $this->db->get('tbl_member')->result();
    }
    function hapus_user($id)
    {
        $this->db->delete('tbl_member', array('id' => $id));
    }
    function editu($id)
    {
        return $this->db->get_where('tbl_member', array('id' => $id))->result();
    }
    function updateakun($data, $where)
    {
        $this->db->update('tbl_member', $data, $where);
    }
    function detailu($id)
    {
        return $this->db->get_where('tbl_member', array('id' => $id))->result();
    }
    function gantipass($gantipass,$where)
    {        
        $this->db->update('tbl_member', $gantipass,$where);
    }
    function totalbarang()
    {   
        $query = $this->db->query('SELECT * FROM barang');
        return $query->num_rows();
    }
    function usert()
    { 
        $query = $this->db->query('SELECT * FROM tbl_member');
        return $query->num_rows();
    }
    function keluar()
    { 
        $query = $this->db->query('SELECT * FROM barang_keluar');
        return $query->num_rows();
    }
    function masuk()
    { 
        $query = $this->db->query('SELECT * FROM barang_masuk');
        return $query->num_rows();
    }
    function updatebarang($data, $where)
    {
        $this->db->update('barang', $data, $where);
    }
    function graph()
   {
    $data = $this->db->query("SELECT tanggal,MONTH(tanggal) AS bulan, SUM(jumlah_masuk) AS jumlah_masuk FROM barang_masuk GROUP BY bulan");
    return $data->result();
   }
   function cari_lapbm($dari, $sampai)
   {  
      if($dari == '' && $sampai == ''){
         $barang = $this->db->query("SELECT * FROM barang_masuk a left join barang b on a.id_barang = b.id_barang");
      }else
      {

         $barang = $this->db->query("SELECT * FROM barang_masuk a left join barang b on a.id_barang = b.id_barang
         WHERE tanggal >= '$dari' AND tanggal <= '$sampai' ");
      }
      return $barang->result();
   }
   function graph_keluar()
   {
    $data = $this->db->query("SELECT tanggal,MONTH(tanggal) AS bulan, SUM(jumlah_masuk) AS jumlah_keluar FROM barang_masuk GROUP BY bulan");
    return $data->result();
   }
   function cari_lapbk($dari, $sampai)
   {  
      if($dari == '' && $sampai == ''){
         $barang = $this->db->query("SELECT * FROM barang_keluar a left join barang b on a.id_barang = b.id_barang");
      }else
      {

         $barang = $this->db->query("SELECT * FROM barang_keluar a left join barang b on a.id_barang = b.id_barang
         WHERE tanggal >= '$dari' AND tanggal <= '$sampai' ");
      }
      return $barang->result();
   }
   function data_barang_keluar($dari, $sampai)
   {  
      if($dari == '' && $sampai == ''){
         $barang = $this->db->query("SELECT * FROM barang_keluar a left join barang b on a.id_barang = b.id_barang");
      }else
      {

         $barang = $this->db->query("SELECT * FROM barang_keluar a left join barang b on a.id_barang = b.id_barang
         WHERE tanggal >= '$dari' AND tanggal <= '$sampai' ");
      }
      return $barang->result();
   } 
   function data_barang_masuk($dari, $sampai)
   {  
      if($dari == '' && $sampai == ''){
         $barang = $this->db->query("SELECT * FROM barang_masuk a left join barang b on a.id_barang = b.id_barang");
      }else
      {

         $barang = $this->db->query("SELECT * FROM barang_masuk a left join barang b on a.id_barang = b.id_barang
         WHERE tanggal >= '$dari' AND tanggal <= '$sampai' ");
      }
      return $barang->result();
   }
    function data_barang_stok()
    {
        $this->db->select('*');
            $this->db->from('barang');
            $query = $this->db->get(); 
            return $query->result();
    }
    function input_data($data,$table)
    {
            $this->db->insert($table,$data);
    }
    function accept_data($id)
    {
        $jk = $this->input->post('jk');

        $query = $this->db->query("SELECT * FROM barang where id_barang");
            $hasil = $query->result();
            $stok = $hasil[0]->stok;
            $penguranganstok = $stok-$jk;
            $data = array(
                'stok' => $penguranganstok
            );
            $this->db->where('id_barang');
            $this->db->update('barang', $data);
           
        $accept = $this->db->query("
        UPDATE barang_keluar
        SET status = 1
        WHERE id_keluar = $id");
        return $query;
        
    }
    function reject_data($id)
    {
        $accept = $this->db->query("
        UPDATE barang_keluar
        SET status = 2
        WHERE id_keluar = $id");
        return $accept;
        
    }
    function bk()
    {
        return $this->db->get('barang_keluar')->result();
    }
    function gettahunmasuk()
    {
        $query = $this->db->query("SELECT YEAR(tanggal) AS tahun FROM barang_masuk GROUP BY YEAR(tanggal) ORDER BY YEAR(tanggal) ASC");
        return $query->result();
    }
    function gettahun()
    {
        $query = $this->db->query("SELECT YEAR(tanggal) AS tahun FROM barang_keluar GROUP BY YEAR(tanggal) ORDER BY YEAR(tanggal) ASC");
        return $query->result();
    }
    function filterbytanggal($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM barang_keluar a left join barang b on a.id_barang = b.id_barang where tanggal BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tanggal ASC");
        return $query->result();
    }
    function filterbytanggalmasuk($tanggalawal,$tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM barang_masuk a left join barang b on a.id_barang = b.id_barang where tanggal BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tanggal ASC");
        return $query->result();
    }
    function filterbybulan($tahun1,$bulanawal,$bulanakhir)
    {
        $query = $this->db->query("SELECT * FROM barang_keluar a left join barang b on a.id_barang = b.id_barang where YEAR(tanggal) = '$tahun1' and MONTH(tanggal) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tanggal ASC");
        return $query->result();
    }
    function filterbybulanmasuk($tahun1,$bulanawal,$bulanakhir)
    {
        $query = $this->db->query("SELECT * FROM barang_masuk a left join barang b on a.id_barang = b.id_barang where YEAR(tanggal) = '$tahun1' and MONTH(tanggal) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tanggal ASC");
        return $query->result();
    }
    function filterbytahun($tahun2)
    {
        $query = $this->db->query("SELECT * FROM barang_keluar  a left join barang b on a.id_barang = b.id_barang where YEAR(tanggal) = '$tahun2' ORDER BY tanggal ASC");
        return $query->result();
    }
    function filterbytahunmasuk($tahun2)
    {
        $query = $this->db->query("SELECT * FROM barang_masuk  a left join barang b on a.id_barang = b.id_barang where YEAR(tanggal) = '$tahun2' ORDER BY tanggal ASC");
        return $query->result();
    }
    function admin($id)
    {
        return $this->db->get_where('tbl_member', array('id' => $id))->result();
    }
}