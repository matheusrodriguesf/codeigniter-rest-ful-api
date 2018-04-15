<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Animais extends REST_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Animais_model','AnimaisMDL');
    }

    public function index_get(){
        $animais = $this->AnimaisMDL->GetAll('idanimal, nomeanimal');
        if ($animais) {
            $response['data'] = $animais;
            $this->response($response, REST_Controller::HTTP_OK);
        } else {
            $this->response(null,REST_Controller::HTTP_NO_CONTENT);
        }
    }

    

}
