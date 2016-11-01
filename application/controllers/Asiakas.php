<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {
	public function list(){
		$this->load->model('asiakas_model');
		$data['customers']=$this->asiakas_model->getCustomers();
		$this->load->view('customer/list', $data);
	}
}

