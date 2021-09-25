<?php
class M_loginpanitia extends CI_Model{
    function cekpanitia($upp,$ppp){
     //   $hasil=$this->db->query("SELECT * FROM tb_peserta WHERE nisn='$u' AND 
     //sandi_peserta=md5('$p')");
     $hasil=$this->db->query("SELECT * FROM tb_admin WHERE username='$upp'");
     
        return $hasil; //return $result->result();
    }

}
