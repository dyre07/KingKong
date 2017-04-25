<?php
class Login_model extends CI_Model{
    function check_user($uname, $pass){
            $query = $this->db->get_where('user', array('email' => $uname, 'password' => md5($pass)));
            return $query->num_rows();
        }
    
    function user($uname, $pass){
            $query = $this->db->get_where('user', array('email' => $uname, 'password' => md5($pass)));
            return $query->result_array();
        }
    
    public function insert_user($data){
		$this->db->insert('user',$data);
	}
     
    function check_karyawan($uname, $pass){
            $query = $this->db->get_where('karyawan', array('username' => $uname, 'password' => $pass));
            return $query->num_rows();
        }
    
    function karyawan($uname, $pass){
            $query = $this->db->get_where('karyawan', array('username' => $uname, 'password' => $pass));
            return $query->result_array();
        }
}
?>
