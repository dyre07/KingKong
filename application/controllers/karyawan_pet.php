<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Karyawan_pet extends CI_Controller {
     public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

    function index(){
        $data['pet'] = $this->pet->read_pet();
        
        $this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('karyawan_pet',$data);
        $this->load->view('karyawan_footer');
    }
    
    public function update_pet($id_pet=NULL){
        $data['pet']=$this->pet->select_pet_by_id($id_pet);
        $this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('update_pet', $data);
        $this->load->view('karyawan_footer');
	}	

	public function update_pet_proses(){
        $id_pet=$this->input->post('id_pet');
		$kategori=$this->input->post('kategori');
		$species=$this->input->post('species');
		$ras=$this->input->post('ras');
		$umur=$this->input->post('umur');
		$tgl_lahir=$this->input->post('tgl_lahir');
		$gambar=$this->input->post('gambar');
        $deskripsi=$this->input->post('deskripsi');
        $harga=$this->input->post('harga');
        $id_toko=$this->input->post('id_toko');
        $id_karyawan=$this->input->post('id_karyawan');
	
		$data=array(
		      'kategori'=>$kategori,
              'species'=>$species,
              'ras'=>$ras,
              'umur'=>$umur,
		      'tgl_lahir'=>$tgl_lahir,
		      'gambar'=>$gambar,
              'deskripsi'=>$deskripsi,
              'harga'=>$harga,
              'id_toko'=>$id_toko,
              'id_karyawan'=>$id_karyawan
		);
		
		
		$this->pet->update_pet($id_pet,$data);
	
		redirect(base_url('karyawan_pet'));
	}
    
    public function input_pet(){
        $data['karyawan'] = $this->pet->select_karyawan();
        $data['toko'] = $this->pet->select_toko();
        
        $this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('tambah_pet', $data);
        $this->load->view('karyawan_footer');
	}
    
    public function input_proses(){
        $config['upload_path'] = './pet/';
        $name = 'pet_'.time();
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 250;
        $config['file_name'] = $name;
        
        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar');
        $data_upload = $this->upload->data();
        $image = $data_upload['file_name']; 

        $data = array(
                    'kategori'=>$this->input->post('kategori'),
                    'species'=>$this->input->post('species'),
                    'ras'=> $this->input->post('ras'),
                    'umur'=> $this->input->post('umur'),
		            'tgl_lahir'=>$this->input->post('tgl_lahir'),
		            'gambar'=>$image,
                    'deskripsi'=>$this->input->post('deskripsi'),
                    'harga'=>$this->input->post('harga'),
                    'id_toko'=>$this->input->post('id_toko'),
                    'id_karyawan'=>$this->input->post('id_karyawan')
        ); 
        
		$this->pet->insert_pet($data);
		redirect(base_url('karyawan_pet'));
	}
    
    public function delete_pet($id_pet=null){

		$this->pet->delete_pet($id_pet);
		redirect(base_url('karyawan_pet'));
	}
}
?>