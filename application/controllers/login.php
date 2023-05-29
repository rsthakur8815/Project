<?php
class Login extends CI_controller
{
    public function index()
    {
       $this->load->library('form_validation');
       $this->form_validation->set_rules('uname','User Name','required' );
       $this->form_validation->set_rules('pass','Password','required|max_length[12]' );
       $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
       //above for errors in red colour 

       if($this->form_validation->run())
       {
       $uname=$this->input->post('uname');
       $pass=$this->input->post('pass');
       
       $this->load->model('loginM');
     $this->loginM->isvalidate($uname,$pass);
       echo"p";
       }
       else{
        $this->load->view('login/loginV');
       }
       
    }
}



?>