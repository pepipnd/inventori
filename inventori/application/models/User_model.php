<?php 

class User_model extends CI_Model {
    public function data_barang()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.kategori_id');
        return $query = $this->db->get()->result();
    }
    function br_masuk()
    {
        // $query = $this->db->query("SELECT tt.*, tb.nama_barang, tb.id_barang AS nomorbarang FROM barang_masuk AS tt
        // LEFT JOIN barang tb
        // ON tt.id_barang = tb.id_barang");
        $query = $this->db->query("SELECT * FROM barang_masuk a left join barang b on a.id_barang = b.id_barang");
        return $query->result();
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
   function br_keluar()
    {
        $query = $this->db->query("SELECT tk.*, tb.nama_barang, tb.id_barang AS nomorbarang FROM barang_keluar AS tk
        LEFT JOIN barang tb
        ON tk.id_barang = tb.id_barang");
        return $query->result();
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
   function user($id)
    {
        return $this->db->get_where('tbl_member', array('id' => $id))->result();
    }
    function gantipass($gantipass,$where)
    {        
        $this->db->update('tbl_member', $gantipass,$where);
    }
    public function showbarang()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.kategori_id');
        return $query = $this->db->get()->result();
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
}