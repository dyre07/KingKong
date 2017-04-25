<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function index()
	{
        $data['cart_total'] = $this->user_home->total_cart();
        $data['barang'] = $this->user_home->get_barang();
        
		$this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer');
	}
    
    public function detail_product($id_barang = NULL){
        $data['cart_total'] = $this->user_home->total_cart();
        $data['detail'] = $this->user_home->detail_product($id_barang);
        $data['feedback'] = $this->user_home->feedback($id_barang);
        
		$this->load->view('header', $data);
        $this->load->view('detail_product', $data);
        $this->load->view('footer');
    }
    
    public function food(){
        $seg = $this->uri->segment(3);
        $config = array();
        $config["base_url"] = base_url('home/food/').$seg;
        $config["total_rows"] = $this->user_home->record_count();
        $config["per_page"] = 6;
        $config["uri_segment"] = 4;
        
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['cart_total'] = $this->user_home->total_cart();
        $data["food"] = $this->user_home->get_food($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        
        $this->load->view('header', $data);
        $this->load->view("product", $data);
        $this->load->view('footer');
    }
    
    public function add_to_cart(){
        $price = $this->input->post('harga');
        $qty = $this->input->post('qty');
        $total = $price * $qty;
        $id_barang = $this->uri->segment(3);
        
        $data = array(
            'id_barang' => $id_barang,
            'id_user' => $this->session->userdata('id_user'),
            'quantity' => $qty,
            'total' => $total,
            'status' => 'cart'            
        );
        
        $this->user_home->cart_update($id_barang, $qty);
        $this->user_home->cart_add($data);
        
        echo "<script>
                    window.location.href='".base_url('home/cart')."';
                    alert('Your items successfully added to cart');
                 </script>";
    }
    
    public function add_to_wishlist(){
        $data = array(
            'id_barang' => $this->uri->segment(3),
            'id_user' => $this->session->userdata('id_user'),
            'status' => 'wishlist'            
        );
        
        $this->user_home->cart_add($data);
        
        echo "<script>
                    window.location.href='".base_url('home')."';
                    alert('Your items successfully added to wishlist');
                 </script>";
    }
    
    public function cart(){
        $data['cart_total'] = $this->user_home->total_cart();
        $data['cart'] = $this->user_home->cart();
        
        $this->load->view('header', $data);
        $this->load->view('cart', $data);
        $this->load->view('footer');
    }
    
    public function delete($id_cart = NULL){
        $this->user_home->update_stock();
        $this->user_home->delete($id_cart);
		redirect('home/cart');
    }
    
    public function delete_wishlist($id_cart = NULL){
        $this->user_home->delete($id_cart);
		redirect('account');
    }
    
    public function about(){
        $data['cart_total'] = $this->user_home->total_cart();        
        $this->load->view('header', $data);
        $this->load->view('about');
        $this->load->view('footer');
    }
    
    public function contact(){
        $data['cart_total'] = $this->user_home->total_cart();        
        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
    }
    
    public function pet(){
        $data['cart_total'] = $this->user_home->total_cart();
        $data['pet'] = $this->user_home->get_pet();
        
        $this->load->view('header', $data);
        $this->load->view('pet', $data);
        $this->load->view('footer');
    }
    
    public function checkout(){
        $data['cart_total'] = $this->user_home->total_cart();
        $data['cart'] = $this->user_home->cart();
        
        $this->load->view('header', $data);
        $this->load->view('checkout', $data);
        $this->load->view('footer');
    }
    
    public function place_order(){  
        $method = $this->input->post('method');
        $no_order = time();
        
        if($method == 'cod'){
            $status = 'cod';
        }else{
            $status = 'order';
        }
        $data = array(
            'id_user' => $this->session->userdata('id_user'),
            'alamat' => $this->input->post('alamat'),
            'kode_pos' => $this->input->post('postcode'),
            'method' => $method,
            'telp' => $this->input->post('telp'),
            'total' => $this->input->post('total'),
            'status' => $status,
            'no_order' => $no_order
        );
        
        $this->user_home->add_order($data);
        $this->user_home->update_cart($no_order);
        redirect(base_url('home'));
    }
    
    public function pet_detail($id_pet = null){
        $data['cart_total'] = $this->user_home->total_cart();
        $data['pet'] = $this->user_home->pet_detail($id_pet);
        
        $this->load->view('header', $data);
        $this->load->view('detail_pet', $data);
        $this->load->view('footer');
    }
    
}

/*
    echo "<pre>";
        print_r($data);
        echo "</pre>";
*/
