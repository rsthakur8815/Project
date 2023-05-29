<?php
class Loginm extends CI_model
{
    public function isvalidate($username,$password)
    {
        // $q=$this->db->where(['username'=>$username,'password'=>$password])->get('login');
        $q ="SELECT * FROM login WHERE username='$username' and password='$password'";
         $data=$this->db->query($q);
         return $data->result();
     }
}

?>