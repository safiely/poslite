<?php

class CustomersController Extends CI_Controller {


	public function index() {

		$data['page'] = "Suppliers";

		$this->load->view('header',$data);
		$this->load->view('side_menu');
		$this->load->view('customers/index',$data);
		$this->load->view('footer');
	}

}