<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {


	public function index()
	{
		$this->load->view('index');
	}
	public function login(){
		$this->load->view('login');
	}
	public function landingpage()
	{
		$this->load->view('landingpage');
	}

}
