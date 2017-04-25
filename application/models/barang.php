<?php
class Barang extends CI_Model{
    public $table = 'barang';
	public $primary_key='id_barang';
    
    public function record_count() {
        return $this->db->get('barang')->num_rows();
    }
    
    function read_barang($limit, $start){
        $this->db->limit($limit, $start);
        $query = $this->db->get('barang');

        if ($query->result_array() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    public function select_jb(){
		$this->db->select('*');
		$query = $this->db->get('jenis_barang');
		
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
    
    function select_barang_by_id($id_barang){
		return $this->db->get_where($this->table,array($this->primary_key=> $id_barang))->row();
	}
    
    public function insert_barang($data){
		$this->db->insert($this->table,$data);
	}
	
	public function update_barang($id_barang,$data){
		$this->db->where($this->primary_key,$id_barang);
		$this->db->update($this->table,$data);
	}
	
	public function delete_barang($id_barang){
		$this->db->delete($this->table, array($this->primary_key=>$id_barang));
	}
}
?>
