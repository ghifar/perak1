<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dekan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('dekan_model');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('download');
	}

	function login()
	{
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		
		$akun = $this->dekan_model->cek_akun($username,$password);
		$temp_account = count($akun);
		
		if ($temp_account > 0)
		{
			$data = array(
							'level'=>$akun->level,
							'logged_in'=>true
			);
			
			$this->session->set_userdata($data);
			$this->template->dekan('dekan/beranda');
		}
		else
		{
			echo "<script> alert('Username atau Password anda salah');</script>";
			$this->template->home('home/template');
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->template->home('home/content');
	}

	function home()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='dekan')
		{
			
			$this->template->dekan('dekan/home');
		}
		else
		{
			$this->template->home('home/content');
		}		
	}

	function c_ubahStatusLaporan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='dekan')
		{
			
			$this->template->dekan('dekan/v_ubahStatusLaporan');
		}
		else
		{
			$this->template->home('home/content');
		}
	}

	function c_daftarProposalBelumDiVerifikasiDekan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='dekan')
		{
			$proposal = $this->dekan_model->daftarProposalBelumDiVerifikasiDekan();
			$data['jumlah'] = count($proposal);
			$data['proposal'] = $this->dekan_model->daftarProposalBelumDiVerifikasiDekan();
			$this->template->dekan('dekan/v_daftarProposalBelumDiVerifikasiDekan',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
	}

	function c_proposalTolak($id)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='dekan')
		{
			$data['status'] = 'ditolak';
			$this->dekan_model->proposalverifikasi($id,$data);
			redirect('dekan/c_daftarProposalBelumDiVerifikasiDekan');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}

	function c_proposalVerifikasi($id)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='dekan')
		{
			$data['status'] = 'diverifikasi dekan';
			$this->dekan_model->proposalverifikasi($id,$data);
			redirect('dekan/c_daftarProposalBelumDiVerifikasiDekan');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}

	function download($nama)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='dekan')
		{
			$name = $nama;
			$data = file_get_contents('uploads/proposal/'.$nama);
			force_download($name, $data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}




	
	
}



 ?>