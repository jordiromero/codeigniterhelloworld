<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
        
        function __construct() {
                parent::__construct();
                
                $this->load->model('user_model');
        }
        
        
        
        public function createUser(){
                
                
                $this->load->view('createUser');
                
                
        }
        
        
        public function deleteUser($id) {
                
                $this->load->view('deleteUser');
        }
        public function updateUser($id){
                
                
                $this->load->view('updateUser');
        }
        public function listusers(){
                
                                
                $this->load->view('listUser');
        
                
        }
        
}


