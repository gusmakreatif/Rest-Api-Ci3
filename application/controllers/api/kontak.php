<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class Kontak extends REST_Controller {
    
    function __construct(){
        parent::__construct();

        $this->load->model('ModelKontak','Mkontak');
    }

    public function index_get(){
        
        $id = $this->get('id');
        if($id===null){
            $kontak = $this->Mkontak->getKontak();            
        }else{
            $kontak = $this->Mkontak->getKontak($id);
        }
        
        if($kontak){
            $this->response([
                'status'=>true,
                'data'=>$kontak
            ], REST_controller::HTTP_OK);   
        }else{
            $this->response([
                'status'=>false,
                'message' => 'No users were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}