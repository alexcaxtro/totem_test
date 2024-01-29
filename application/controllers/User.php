<?php 


class User extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model("user_model");
    }

    function index() 
    {
        if ($_SERVER['REQUEST_METHOD']=='POST')
        {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $address = $this->input->post('username');
            $data = array(
                'username'=> $username, 
                'email'=> $email,
                'mobile'=> $mobile,
                'address'=> $address,
            );

            $status = $this->user_model->insertUser($data);
            if ($status==true){
                $this->session->set_flashdata('success','Agregado');
                redirect(base_url('user/index'));
            }
            else
            {
                $this->session->set_flashdata('error','Error no se agrego');
                $this->load->view("/user/add_user");
            }
        }
        else {
            $this->load->view("/user/add_user");
        }    
    }
    
}