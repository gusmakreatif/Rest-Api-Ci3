<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class Kontak extends REST_Controller {
    
    function __construct(){
        parent::__construct();

        $this->load->model('ModelKontak','Mkontak');
    }

    //menampilkan data
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

    public function index_delete(){
        $id = $this->delete('id');
        if($id===null){
            $this->response([
                'status'=>false,
                'message' => 'Provide an id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->Mkontak->deleteKontak($id) > 0){
                $this->response([
                    'status'=>true,
                    'id' =>$id, 
                    'message'=>'deleted.'
                ], REST_Controller::HTTP_NO_CONTENT);
            }else{
                $this->response([
                    'status'=>false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }

    }

    public function index_post(){
        $data =[
            'nama'=>$this->post('nama'),
            'nomor'=>$this->post('nomor')
        ];

        if($this->Mkontak->createKontak($data) > 0){
            $this->response([
                'status'=>true,
                'message' => 'data new kontak has been created'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status'=>false,
                'message' => 'failed to create new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $id= $this->put('id');
        $data =[
            'nama'=>$this->put('nama'),
            'nomor'=>$this->put('nomor')
        ];
        
        if($this->Mkontak->updateKontak($data, $id) > 0){
            $this->response([
                'status'=>true,
                'message' => 'data kontak has been update'
            ], REST_Controller::HTTP_NO_CONTENT);
        }else{
            $this->response([
                'status'=>false,
                'message' => 'failed to update data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }

        
        
    }
}