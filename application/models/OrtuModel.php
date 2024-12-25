<?php 

class OrtuModel extends CI_Model{
    public function get_ortu(){
        return $this->db->get('ortu')->result();
    }


    public function tambah_data($table, $data){
        return $this->db->insert($table, $data);
    }

    public function edit_data($table, $where, $data)
    {
        return $this->db->update($table, $data, $where);
    }

    public function hapus_data($where, $table){
        return $this->db->delete($table, $where);
    }
}

?>