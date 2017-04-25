<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Karyawan_toko extends CI_Controller {
    function index(){
        $data['toko'] = $this->toko->read_toko();
        
        $this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('karyawan_toko',$data);
        $this->load->view('karyawan_footer');
    }
    
    public function update_toko($id_toko=NULL){
        $data['toko']=$this->toko->select_toko_by_id($id_toko);
        $this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('update_toko', $data);
        $this->load->view('karyawan_footer');
	}	

	public function update_toko_proses(){
        $id_toko=$this->input->post('id_toko');
		$id_provinsi=$this->input->post('id_provinsi');
		$id_kota=$this->input->post('id_kota');
		$alamat=$this->input->post('alamat');
	
		$data=array(
		      'id_provinsi'=>$id_provinsi,
              'id_kota'=>$id_kota,
              'alamat'=>$alamat
		);
		
		
		$this->toko->update_toko($id_toko,$data);
	
		redirect(base_url('karyawan_toko'));
	}
    
    public function input_toko(){
        $data['provinsi'] = $this->toko->select_provinsi();
        $data['kota'] = $this->toko->select_kota();
        $this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('tambah_toko', $data);
        $this->load->view('karyawan_footer');
	}
    
    public function input_proses(){
        $id_toko=$this->input->post('id_toko');
		$id_provinsi=$this->input->post('id_provinsi');
		$id_kota=$this->input->post('id_kota');
		$alamat=$this->input->post('alamat');
	
		$data=array(
		      'id_provinsi'=>$id_provinsi,
              'id_kota'=>$id_kota,
              'alamat'=>$alamat
		);		
		
		$this->toko->insert_toko($data);
		redirect(base_url('karyawan_toko'));
	}
    
    public function delete_toko($id_toko=null){

		$this->toko->delete_toko($id_toko);
		redirect(base_url('karyawan_toko'));
	}
}
?>