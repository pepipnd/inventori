<?php 

class Login_model extends CI_Model
{
    function tambah_data()
    {
        $nama = $this->input->post('nama');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        //cek apakah email sudah ada
        $cekemail = $this->db->get_where('tbl_member', array('email'=>$email))->result();
        if(empty($cekemail)){
            //insert data user baru
            $data = array(
                'nama_lengkap' => $nama,
                'no_hp' => $no_hp,
                'alamat_lengkap' => $alamat,
                'email' => $email,
                'password' => md5($password),
                'level' => 'admin'
            );

            $data = $this->db->insert('tbl_member', $data);
            return $data;
        }
        
    }

    function cekuser()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        return $this->db->get_where('tbl_member', array('email' => $email, 'password' => $password))->result();
        
    }
}