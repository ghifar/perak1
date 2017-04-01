<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('admin_model');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('download');
	}
	
	function login()
	{
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		
		$akun = $this->admin_model->cek_akun($username,$password);
		$temp_account = count($akun);
		
		if ($temp_account > 0)
		{
			$data = array(
							'level'=>$akun->level,
							'logged_in'=>true
			);
			
			$this->session->set_userdata($data);

			if ($this->session->userdata('level')=='admin') {
				site_url('admin/login');
				$this->template->admin('admin/home');
			}
			elseif ($this->session->userdata('level')=='rektor') {
				site_url('rektor/login');
				$this->template->rektor('rektor/home');
			}
			elseif ($this->session->userdata('level')=='dekan') {
				site_url('dekan/login');
				$this->template->dekan('dekan/home');
			}
			elseif ($this->session->userdata('level')=='kaprodi') {
				site_url('dekan/login');
				$this->template->kaprodi('kaprodi/home');
			}	
		}
		else
		{
			echo "<script> alert('Username atau Password anda salah');history.go(-1);</script>";
			 // $this->template->home('home/template');
			
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		 $this->template->home('home/template');
	}



}



 ?>