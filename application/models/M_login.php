<?php
class M_login extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function cek_user_password($username, $password){
		$sql = "SELECT f_cek_login(?,?) total";
		$query = $this->db->query($sql, array($username, $password));
		$row = $query->row();
		return $row->total;
	}

	function ambil_data_user($username, $password){
		$sql = "CALL sp_ambil_data_user(?,?)";
		$query = $this->db->query($sql, array($username, $password));
		$row = $query->row();
		$data_user = array('id' => $row->id,
							'nama' => $row->nama, 
							'username' => $row->username, 
							'level' => $row->level);
		return $data_user;
	}
}
?>