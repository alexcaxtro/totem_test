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


    //
    // // Cargar la librería text_to_speech
    // $this->load->library('text_to_speech');
    
    // // Establecer la clave de API de Google
    // $this->text_to_speech->setKey('TU_CLAVE_DE_API');
    
    // // Establecer el idioma y la voz del audio
    // $this->text_to_speech->setLanguage('es-ES');
    // $this->text_to_speech->setVoice('es-ES-Standard-A');
    
    // // Establecer el formato del audio
    // $this->text_to_speech->setOutputFormat('mp3');
    
    // // Obtener el nombre del paciente desde la base de datos
    // $nombre = $this->db->get_where('pacientes', array('id' => $id))->row()->nombre;
    
    // // Generar el audio con el nombre del paciente
    // $this->text_to_speech->synthesize($nombre);
    
    // // Guardar el audio en un archivo
    // $this->text_to_speech->save('audio/'.$nombre.'.mp3');
    
    // // Reproducir el audio
    // $this->text_to_speech->play('audio/'.$nombre.'.mp3');
    // 
    
    // Instala la biblioteca usando Composer
// composer require google/cloud-text-to-speech

// En tu controlador o clase
// use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
// use Google\Cloud\TextToSpeech\V1\AudioConfig;
// use Google\Cloud\TextToSpeech\V1\SynthesisInput;
// use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;

// class PacientesController extends CI_Controller {
//     public function decirNombre($nombre) {
//         // Configuración del cliente
//         $textToSpeechClient = new TextToSpeechClient();
        
//         // Configuración de voz y entrada de texto
//         $voice = (new VoiceSelectionParams())
//             ->setLanguageCode('es-ES') // Ajusta según el idioma necesario
//             ->setName('es-ES-Wavenet-D'); // Ajusta según el modelo de voz necesario

//         $audioConfig = (new AudioConfig())
//             ->setAudioEncoding('MP3'); // Puedes ajustar el formato de audio según tus necesidades

//         $synthesisInputText = (new SynthesisInput())
//             ->setText($nombre);

//         // Llamada al servicio de Text-to-Speech
//         $response = $textToSpeechClient->synthesizeSpeech(
//             $synthesisInputText,
//             $voice,
//             $audioConfig
//         );

//         // Guardar el audio generado en un archivo o reproducir directamente
//         file_put_contents('path/to/audio.mp3', $response->getAudioContent());

//         // Cerrar el cliente
//         $textToSpeechClient->close();
//     }
// }

//https://www.texvoz.com/blog/alternativas-a-google-cloud-text-to-speech



}