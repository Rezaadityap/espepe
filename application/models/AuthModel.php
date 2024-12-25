<?php

class AuthModel extends CI_Model
{   
    public function auth_check(){
        $username = set_value('username');
        $password = set_value('password');

        $hasil = $this->db->where('username',$username)
                ->where('password',md5($password))
                ->limit(1)
                ->get('users');
        
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    } 

}

?>