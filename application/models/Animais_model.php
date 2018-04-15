<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Animais_model extends CI_Model {
    
    public function __construct(){
    
    }

    public function GetAll($fields = null){
        $this->db->select($fields)
        ->from('ANIMAL')
        ->order_by('nomeanimal','ASC');
        return $this->db->get()->result_array();
    }


}