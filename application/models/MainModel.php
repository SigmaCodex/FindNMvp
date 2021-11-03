<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MainModel extends CI_Model{
	////total roomsin the dashboard
	public function userValid(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		 // $this->db->where('username',$user);
		 // $this->db->where('password',$pass);
		 // $query = $this->db->get('users');
		//$query = $this->db->query("SELECT * FROM users where username = "+$user+";");




		// echo json_encode($data);
		echo "hwllow wlrds";
		// if(!empty($query->result_array()))
		// {

		// 	$row = $query->row();
		// 	$data  = array(
		// 		'user_id' => $row->id,
		// 		'username'  => $row->username,
		// 		'password'  => $row->password,
		// 		'user_type' => $row->user_type

		// 	);
		// 	$this->session->set_userdata($data);
		// 	return true;

		// }
		// else
		// {
		// 	return false;
		// }
	}





}
