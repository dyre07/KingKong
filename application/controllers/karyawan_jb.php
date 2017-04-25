<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Karyawan_jb extends CI_Controller {
    function index(){
        $data['jenis_barang'] = $this->jenis_barang->read_jb();
        
        $this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('karyawan_jb',$data);
        $this->load->view('karyawan_footer');
    }
    
    public function input_jb(){
        $this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('tambah_jb');
        $this->load->view('karyawan_footer');
	}
    
    public function input_proses(){
        $id_jenis_barang=$this->input->post('id_jb');
		$jenis_barang=$this->input->post('jenis_barang');
	
		$data=array(
		      'jenis_barang'=>$jenis_barang,
		);
		
		
		$this->jenis_barang->insert_jb($data);
		redirect(base_url('karyawan_jb'));
	}
    
    public function delete_jb($id_jb=null){

		$this->jenis_barang->delete_jb($id_jb);
		redirect(base_url('karyawan_jb'));
	}
}
?>