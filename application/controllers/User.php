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
    public function addUser()

    {
        $this->load->view("/user/add_user");
    }
    
    public function listUser()
    {
        $data['users'] = $this->user_model->listUsers();
        $this->load->view("user/list_user",$data);
    } 
    
    // funcion para actualizar la tabla de usuarios 
    
    public function listUpdateUsers() {
        $this->load->model('User_model');
        $users = $this->User_model->getUsers();
        header('Content-Type: application/json'); //el servidor está diciendo al cliente que los datos que se envían de vuelta están en formato JSON
        echo json_encode($users);  //conviert un array PHP $users en una cadena JSON JavaScript Object Notation formatted string
    }

    // public function refreshView() {
    //     $this->load->model('model_totem_farma');
    //     $data['antecedentes'] = $this->model_totem_farma->getAntecedentes();
    //     $this->load->view('vista_pantalla', $data);
    // }

    public function refreshView() {
        $this->load->model('User_model');
        $users = $this->User_model->listUsersActive();
        //$data['users'] = $this->user_model->listUsersActive();
        //$data['antecedentes'] = $this->model_totem_farma->getAntecedentes();
        header('Content-Type: application/json');
        echo json_encode($users);
    }

    public function viewScreen()
    {
        $data['users'] = $this->user_model->listUsersActive();
        $this->load->view('/user/vista_pantalla',$data);
    }
}