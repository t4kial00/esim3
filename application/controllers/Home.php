<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		echo "Tämä on Home-controllerin Index-funktio";
	}

	public function second(){
		echo "Tämä on Home-controllerin toinen funktio";
	}

	public function third(){
		$data['nimet']=array(
			array("en"=>'Tuuve',"sn"=>'Luu'),
			array("en"=>'Antti',"sn"=>'Juovinen'),
			array("en"=>'Tättärää',"sn"=>'Perkele')
			);
		$data['user']="Pekka";
		$data['vuosi']="2016";

		$this->load->view('home/third', $data);
	}

	public function fourth(){
		$this->load->model('home_model');
		$data['sisalto']=$this->home_model->getNames();
		$this->load->view('home/fourth', $data);
	}
}

