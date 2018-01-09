<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	var $base;
	var $css;
	
	function __construct(){
		parent::__construct();
		$this->base = $this->config->item('base_url');
		$this->css = $this->config->item('css');
	}

	function hello($name){
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		$data['mytitle'] = "Forest's first step!";
		$data['mytext'] = "Hello,$name,now we're getting dynamic!";
		$this->load->library('menu');
		$data['menu'] = $this->menu->show_menu();
		$this->load->view('testview',$data);
	}
	
	function url(){
		$this->load->helper('url');
		echo base_url();
		echo anchor('start/hello/forest','say hello to forest');
	}

}
