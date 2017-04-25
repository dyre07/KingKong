<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Karyawan_order extends CI_Controller {
    public function index(){
        $data['order'] = $this->order->read_order();
        
        $this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('karyawan_order', $data);
        $this->load->view('karyawan_footer');
    }
    
    public function pesanan($no_order = null){
        $data['pesanan'] = $this->order->pesanan($no_order);
        
        $this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('pesanan', $data);
        $this->load->view('karyawan_footer');
    }
    
    public function confirm($id_order = null){
        $this->order->confirm($id_order);
        redirect('karyawan_order');
    }
}
?>