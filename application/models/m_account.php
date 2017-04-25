<?php
class M_account extends CI_Model{
    function get_order(){
        $id_user = $this->session->userdata('id_user');
        return $this->db->get_where('pesanan',array('id_user'=> $id_user))->result_array();
    }
    
    function wishlist(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('cart', 'barang.id_barang = cart.id_barang');
        $this->db->where('cart.id_user', $id_user);
        $this->db->where('cart.status', 'wishlist');
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
    
    public function update_user($data){
        $id_user = $this->session->userdata('id_user');
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);        
    }
    
    public function pay($data){
        return $this->db->insert('payment', $data);
    }
    
    public function update_order($id_order){
        $this->db->where('id_order', $id_order);
        $this->db->update('pesanan', array('status' => 'payed'));        
    }
    
    public function confirm($id_order){
        $this->db->where('id_order', $id_order);
        $this->db->update('pesanan', array('status' => 'done'));        
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
    
    public function feedback($data){
        return $this->db->insert('feedback', $data);
    }
}
?>