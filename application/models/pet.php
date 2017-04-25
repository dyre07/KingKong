<?php
class Pet extends CI_Model{
    public $table = 'pet';
	public $primary_key='id_pet';
    
    public function select_toko(){
		$this->db->select('*');
        $this->db->from('kota');
        $this->db->join('toko', 'kota.id_kota = toko.id_kota');
		$query = $this->db->get();
		
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
    
    public function select_karyawan(){
		$this->db->select('*');
		$query = $this->db->get('karyawan');
		
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
    
    function read_pet(){
        $query = $this->db->get('pet');
        return $query->result_array();
    }
    
    function select_pet_by_id($id_pet){
		return $this->db->get_where($this->table,array($this->primary_key=> $id_pet))->row();
	}
    
    public function insert_pet($data){
		$this->db->insert($this->table,$data);
	}
	
	public function update_pet($id_pet,$data){
		$this->db->where($this->primary_key,$id_pet);
		$this->db->update($this->table,$data);
	}
	
	public function delete_pet($id_pet){
		$this->db->delete($this->table, array($this->primary_key=>$id_pet));
	}
}
?>