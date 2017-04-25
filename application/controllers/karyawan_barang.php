<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Karyawan_barang extends CI_Controller {
    function barang(){
        $config = array();
        $config["base_url"] = base_url('karyawan_barang/barang');
        $config["total_rows"] = $this->barang->record_count();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;
        
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

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['barang'] = $this->barang->read_barang($config["per_page"], $page);
        $data['links'] = $this->pagination->create_links();

        $this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('karyawan_barang', $data);
        $this->load->view('karyawan_footer');
    }
	
	public function update_barang($id_barang=NULL){
        $data['barang']=$this->barang->select_barang_by_id($id_barang);
        $this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('update_barang', $data);
        $this->load->view('karyawan_footer');
	}	

	public function update_barang_proses(){
        $id_barang=$this->input->post('id_barang');
		$id_jb=$this->input->post('id_jb');
		$id_karyawan=$this->input->post('id_karyawan');
		$merk=$this->input->post('merk');
		$stock=$this->input->post('stock');
		$harga=$this->input->post('harga');
		$diskon=$this->input->post('diskon');
        $deskripsi=$this->input->post('deskripsi');
        $gambar=$this->input->post('gambar');
        $harga_akhir=$this->input->post('harga_akhir');
	
		$data=array(
		      'id_jb'=>$id_jb,
		      'id_karyawan'=>$id_karyawan,
		      'merk'=>$merk,
              'stock'=>$stock,
		      'harga'=>$harga,
		      'diskon'=>$diskon,
              'deskripsi'=>$deskripsi,
              'gambar'=>$gambar,
              'harga_akhir'=>$harga_akhir	
		);
		
		
		$this->barang->update_barang($id_barang,$data);
	
		redirect(base_url('karyawan_barang/barang'));
	}
    
    public function input_barang(){
		$data['content'] = $this->barang->select_karyawan();
        $data['show'] = $this->barang->select_jb();
		$this->load->view('karyawan_header');
        $this->load->view('karyawan_sidebar');
        $this->load->view('tambah_barang', $data);
        $this->load->view('karyawan_footer');
	}
	
	public function delete_barang($id_barang=null){
        $gambar = $this->uri->segment(4);
        unlink(FCPATH.'product/'.$gambar);
		$this->barang->delete_barang($id_barang);
		redirect(base_url('karyawan_barang'));
	}
    
    public function input_barang_proses(){
        $diskon = $this->input->post('diskon');
        $harga =  $this->input->post('harga');
        $harga_diskon = $diskon / 100 * $harga;
        $harga_akhir = $harga - $harga_diskon;
        
        $config['upload_path'] = './product/';
        $name = 'product_'.time();
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 250;
        $config['file_name'] = $name;
        
        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar');
        $data_upload = $this->upload->data();
        $image = $data_upload['file_name']; 

        $data = array(
                    'id_karyawan' => $this->input->post('id_karyawan'),
                    'id_jb' => $this->input->post('id_jb'),
		            'merk' => $this->input->post('merk'),
		            'stock' => $this->input->post('stock'),
		            'harga' => $this->input->post('harga'),
		            'diskon' => $this->input->post('diskon'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $image,
                    'harga_akhir' => $harga_akhir
        ); 
		
		$this->barang->insert_barang($data);
		redirect(base_url('karyawan_barang/barang'));
	}
}