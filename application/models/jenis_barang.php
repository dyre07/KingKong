<?php
class Jenis_barang extends CI_Model{
    public $table = 'jenis_barang';
	public $primary_key='id_jb';
    
    function read_jb(){
        $query = $this->db->get('Jenis_barang');
        return $query->result_array();
    }
    
    public function insert_jb($data){
		$this->db->insert($this->table,$data);
	}
	
	public function delete_jb($id_jb){
		$this->db->delete($this->table, array($this->primary_key=>$id_jb));
	}
}
?>