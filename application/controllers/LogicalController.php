<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogicalController extends CI_Controller {
 

	public function login_validation()
	{
		
			$value['user'] = $this->input->post('user_name');
            $value['pass'] = $this->input->post('pass_word');
   //          $this->load->helper(array('form', 'url'));
			// $this->load->library('form_validation');

			// $this->form_validation->set_rules('user_name', 'Username', 'required');
			// $this->form_validation->set_rules('pass_word', 'Password', 'required');
			


		        			  //true
                	$this->load->model('MainModel');
                    $this->MainModel->userValid();

                	// if(!$result){	
                	// 	$val['error1'] = "Incorrect Username or Password ";
                	// 	$this->load->view('login',$val);
                		
                	// }else{
                	// 		/// ari ko ma role kung user baka or admin
                	// 		$session = $this->session->userdata('user_type');
                	// 	    $this->load->view('Customers/homepage');
                	// 	 }


           	

 	
	}

}
