<?php
class Home extends MX_Controller{
	public function index()
	{
	$data=array('view_name'=>'home-view');
	$this->load->view('main-view',$data);
	}
	public function about()
	{
		$data=array('view_name'=>'about-view');
		$this->load->view('main-view',$data);
	}
	public function setting()
	{
		$data=array('view_name'=>'setting-view');
		$this->load->view('main-view',$data);
	}
}