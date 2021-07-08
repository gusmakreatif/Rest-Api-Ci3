<?php

class ModelKontak extends CI_Model{

    public function getKontak($id=null){
        if($id===null){
            return $this->db->get('telepon')->result();
        }else{
            return $this->db->get_where('telepon',['id'=>$id])->result();
        }
    }
}