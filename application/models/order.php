<?php
class Order extends CI_Model{
	public function read_order(){
		return $this->db->get('pesanan')->result_array();
	}
    
    public function pesanan($no_order){
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('cart', 'barang.id_barang = cart.id_barang');
        $this->db->where('cart.no_pesan', $no_order);
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
    
    public function confirm($id_order){
        $this->db->where('id_order', $id_order);
        $this->db->update('pesanan', array('status' => 'confirmed'));      
    }
}
