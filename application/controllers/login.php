<?php
class Login extends CI_Controller {
    function index(){
        $data['cart_total'] = $this->user_home->total_cart();
        $this->load->view('header', $data);
        $this->load->view('login', $data);
        $this->load->view('footer');
    }
    
    function dologin(){
        $uname = $this->input->post('email');
        $pass = $this->input->post('password');
        $num_rows = $this->login_model->check_user($uname, $pass);
        
        if($num_rows==1){
            $data['user'] = $this->login_model->user($uname, $pass);
            $session = array(
                'id_user' => $data['user'][0]['id_user'],
				'nama' => $data['user'][0]['nama'],
				'alamat' => $data['user'][0]['alamat'],
				'jk' => $data['user'][0]['jk'],
				'no_telp' => $data['user'][0]['no_telp'],
                'email' => $data['user'][0]['email'],
                
				'login' => TRUE
            );
            $this->session->set_userdata($session);
            echo "<script>
                    window.location.href='".base_url()."';
                    alert('Login Success');
                 </script>";
        }else{
            echo "<script>
                    window.location.href='".base_url('login')."';
                    alert('Login Failed, Wrong Username or Password');
                 </script>";
        }
    }
    
    function register(){
        $data['cart_total'] = $this->user_home->total_cart(); 
        
        $this->load->view('header', $data);
        $this->load->view('register');
        $this->load->view('footer');
    }
    
    public function add_register(){
        $pass = $this->input->post('password');
	    $data=array(
			  'nama' => $this->input->post('name'),
		      'alamat' => $this->input->post('address'),
              'email' => $this->input->post('email'),
              'no_telp' => $this->input->post('no_telp'),
              'jk' => $this->input->post('jk'),
              'password' => md5($pass)			
		);
		
		$this->login_model->insert_user($data);
		redirect(base_url('login'));
	}
    
    function karyawan_login(){
        $this->load->view('karyawan_login');
    }
    
    function karyawan_dologin(){
        $uname = $this->input->post('uname');
        $pass = $this->input->post('password');
        $num_rows = $this->login_model->check_karyawan($uname, $pass);
        
        if($num_rows==1){
            $data['karyawan'] = $this->login_model->karyawan($uname, $pass);
            $ses = array(
                'id_karyawan' => $data['karyawan'][0]['id_karyawan'],
				'nama' => $data['karyawan'][0]['nama'],
				'alamat' => $data['karyawan'][0]['alamat'],
				'jk' => $data['karyawan'][0]['jk'],
				'foto' => $data['karyawan'][0]['foto'],
				'login' => TRUE
            );
            $this->session->set_userdata($ses);
            echo "<script>
                    window.location.href='".base_url('karyawan_barang/barang')."';
                    alert('Login Success');
                 </script>";
        }else{
            echo "<script>
                    window.location.href='".base_url('login/karyawan_login')."';
                    alert('Login Failed, Wrong Username or Password');
                 </script>";
        }
    }
    
    function sign_out(){
		$this->session->sess_destroy();
		redirect('login/karyawan_login');
	}
    
    function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
