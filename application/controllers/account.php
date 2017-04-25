<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    
	public function index(){
        
                $data['cart_total'] = $this->user_home->total_cart();
                $data['wishlist'] = $this->m_account->wishlist();
                $data['order'] = $this->m_account->get_order();

                $this->load->view('header', $data);
                $this->load->view('account', $data);
                $this->load->view('footer');
	}
    
    public function update_account(){
        $pass = $this->input->post('pass');
	    $data=array(
			  'nama' => $this->input->post('nama'),
		      'alamat' => $this->input->post('alamat'),
              'email' => $this->input->post('email'),
              'no_telp' => $this->input->post('no_telp'),
              'jk' => $this->input->post('jk'),
              'password' => md5($pass)			
		);
		
		$this->m_account->update_user($data);
        
        $session = array(
                'id_user' => $this->session->userdata('id_user'),
				'nama' => $this->input->post('nama'),
		        'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
                'no_telp' => $this->input->post('no_telp'),
                'jk' => $this->input->post('jk'),                
				'login' => TRUE
            );
        $this->session->set_userdata($session);
        
        redirect('account');
    }
    
    public function payment(){
        $id_order = $this->input->post('id_order');
        
        $data=array(
			  'id_order' => $id_order,
		      'bank' => $this->input->post('bank'),
              'bank_account' => $this->input->post('bank_account'),
              'nominal' => $this->input->post('nominal'),
              'date' => $this->input->post('date')		
		);
		
        $this->m_account->update_order($id_order);
		$this->m_account->pay($data);
    }
    
    public function confirm($id_order = null){
        $this->m_account->confirm($id_order);
        redirect('account');
    }
    
    public function pesanan($no_order = null){
        $data['pesanan'] = $this->m_account->pesanan($no_order);
        $data['cart_total'] = $this->user_home->total_cart();

        $this->load->view('header', $data);
        $this->load->view('items', $data);
        $this->load->view('footer');
    }
    
    public function feedback(){
        $id_user = $this->session->userdata('id_user');
        $data = array(
            'id_barang' => $this->input->post('id_barang'),
            'id_user' => $id_user,
            'feedback' => $this->input->post('feedback')
        );
        
        $this->m_account->feedback($data);
        redirect('account');
    }
    
}

/*
    echo "<pre>";
        print_r($data);
        echo "</pre>";
*/
