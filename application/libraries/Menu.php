<?php
class Menu {
	function show_menu(){
		$obj =& get_instance();
		$obj->load->helper('url');
		$menu = anchor("start/hello/fred","Say hello to Fred |");
		$menu .= anchor("start/hello/bert","Say hello to Bert |");
		$menu .= anchor("start/url","Do something else |");
		return $menu;
	}
}