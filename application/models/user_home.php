<?php
class User_home extends CI_Model{
    function get_barang(){
        $this->db->limit(6);
        $query = $this->db->get('barang');
        return $query->result_array();
    }
    
    function detail_product($id_barang){
       return $this->db->get_where('barang',array('id_barang'=> $id_barang))->row();
    }
    
    function get_food($limit, $start){
        $id_jb = $this->uri->segment(3);
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('barang',array('id_jb'=> $id_jb));

        if ($query->result_array() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    public function record_count() {
        $id_jb = $this->uri->segment(3);
        return $this->db->get_where('barang',array('id_jb'=> $id_jb))->num_rows();
    }
    
    public function cart_add($data){
		$this->db->insert('cart',$data);
	}
    
    function total_cart(){
       $id_user = $this->session->userdata('id_user');
       $query = $this->db->get_where('cart', array('id_user'=> $id_user, 'status' => 'cart'));
       return $query->num_rows();
    }
    
    function cart(){
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('cart', 'barang.id_barang = cart.id_barang');
        $this->db->where('cart.id_user', $id_user);
        $this->db->where('cart.status', 'cart');
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
    
    public function delete($id_cart){
        return $this->db->delete('cart', array('id_cart' => $id_cart));
    }
    
    function get_pet(){
        $pet = $this->uri->segment(3);
        return $this->db->get_where('pet',array('kategori'=> $pet))->result_array();
    }
    
    function pet_detail($id_pet){
        $this->db->select('*');
        $this->db->from('toko');
        $this->db->join('pet', 'toko.id_toko = pet.id_toko');
        $this->db->join('kota', 'toko.id_kota = kota.id_kota');
        $this->db->join('provinsi', 'toko.id_provinsi = provinsi.id_provinsi');
        $this->db->where('pet.id_pet', $id_pet);
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
    
    public function add_order($data){
		$this->db->insert('pesanan',$data);
	}
    
    public function update_cart($no_pesan){
        $id_user = $this->session->userdata('id_user');
        $this->db->where(array('id_user' => $id_user, 'status' => 'cart'));
        $this->db->update('cart', array('status' => 'order', 'no_pesan' => $no_pesan));        
    }
    
    public function cart_update($id_barang, $qty){
        $sql = "UPDATE barang SET stock = stock - ".$qty." WHERE id_barang = ".$id_barang."";
        return $this->db->query($sql);
    }
    
    public function update_stock(){
        $qty = $this->uri->segment(5);
        $id_barang = $this->uri->segment(4);
        $sql = "UPDATE barang SET stock = stock + ".$qty." WHERE id_barang = ".$id_barang."";
        return $this->db->query($sql);
    }
    
    function feedback($id_barang){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('feedback', 'user.id_user = feedback.id_user');
        $this->db->where('feedback.id_barang', $id_barang);
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

}
?>
