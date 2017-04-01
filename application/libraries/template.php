<?php

class Template
{
	protected $_ci;
	function __construct()
	{
		$this->_ci = &get_instance();
	}
	
	function home($template,$data=NULL)
	{
		$this->_ci->load->view('home/template',$data);
	}
	
	function ppdb($content,$data=null)
	{
		$data['_content']=$this->_ci->load->view($content,$data,true);
		$data['_top_menu']=$this->_ci->load->view('ppdb/top_menu',$data,true);
		$this->_ci->load->view('ppdb/template_ppdb',$data);
	}
	
	function dashboard_user($content,$data=null)
	{
		$data['_content']=$this->_ci->load->view($content,$data,true);
		$data['_top_menu']=$this->_ci->load->view('ppdb/dashboard/top_menu',$data,true);
		$this->_ci->load->view('ppdb/dashboard/template',$data);
	}
	
	function admin($content,$data=null)
	{
		$data['_content']=$this->_ci->load->view($content,$data,true);
		$data['_top_menu']=$this->_ci->load->view('admin/top_menu',$data,true);
		$data['_sidebar']=$this->_ci->load->view('admin/sidebar',$data,true);
		$this->_ci->load->view('admin/template',$data);
	}

	function dekan($content,$data=null)
	{
		$data['_content']=$this->_ci->load->view($content,$data,true);
		$data['_top_menu']=$this->_ci->load->view('dekan/top_menu',$data,true);
		$data['_sidebar']=$this->_ci->load->view('dekan/sidebar',$data,true);
		$this->_ci->load->view('dekan/template',$data);
	}

	function kaprodi($content,$data=null)
	{
		$data['_content']=$this->_ci->load->view($content,$data,true);
		$data['_top_menu']=$this->_ci->load->view('kaprodi/top_menu',$data,true);
		$data['_sidebar']=$this->_ci->load->view('kaprodi/sidebar',$data,true);
		$this->_ci->load->view('kaprodi/template',$data);
	}

	function rektor($content,$data=null)
	{
		$data['_content']=$this->_ci->load->view($content,$data,true);
		$data['_top_menu']=$this->_ci->load->view('rektor/top_menu',$data,true);
		$data['_sidebar']=$this->_ci->load->view('rektor/sidebar',$data,true);
		$this->_ci->load->view('rektor/template',$data);
	}
}