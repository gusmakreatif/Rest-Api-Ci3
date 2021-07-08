<?php

class ModelKontak extends CI_Model{

    public function getKontak($id=null){
        if($id===null){
            return $this->db->get('telepon')->result();
        }else{
            return $this->db->get_where('telepon',['id'=>$id])->result();
        }
    }

    public function deleteKontak($id){
        $this->db->delete('telepon',['id'=>$id]);
        return $this->db->affected_rows();
    }

    public function createKontak($data){
        $this->db->insert('telepon',$data);
        return $this->db->affected_rows();
    }

    public function updateKontak($data, $id){
        $this->db->update('telepon',$data, ['id'=>$id]);
        return $this->db->affected_rows();
    }
}