<?php
class toko extends CI_Model{
    public $table = 'toko';
	public $primary_key='id_toko';
    
    public function select_provinsi(){
		$this->db->select('*');
		$query = $this->db->get('provinsi');
		
		if($query->num_rows() > 0){
			foreach($query->result_array() as $y){
				$hasil_array[]=$y;
			}
			return $hasil_array;
		}
		else {
			return FALSE;
		}
    }
    
    public function select_kota(){
		$this->db->select('*');
		$query = $this->db->get('kota');
		
		if($query->num_rows() > 0){
			foreach($query->result_array() as $y){
				$hasil_array[]=$y;
			}
			return $hasil_array;
		}
		else {
			return FALSE;
		}
    }
    
    function read_toko(){
        $query = $this->db->get('toko');
        return $query->result_array();
    }
    
    function select_toko_by_id($id_toko){
		return $this->db->get_where($this->table,array($this->primary_key=> $id_toko))->row();
	}
    
    public function insert_toko($data){
		$this->db->insert($this->table,$data);
	}
	
	public function update_toko($id_toko,$data){
		$this->db->where($this->primary_key,$id_toko);
		$this->db->update($this->table,$data);
	}
	
	public function delete_toko($id_toko){
		$this->db->delete($this->table, array($this->primary_key=>$id_toko));
	}
}
?>