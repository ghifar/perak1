	<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rektor extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('rektor_model');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('download');
	}

	function login()
	{
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		
		$akun = $this->rektor_model->cek_akun($username,$password);
		$temp_account = count($akun);
		
		if ($temp_account > 0)
		{
			$data = array(
							'level'=>$akun->level,
							'logged_in'=>true
			);
			
			$this->session->set_userdata($data);
			$this->template->rektor('rektor/home');
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
		$this->template->home('home/template');
	}

	function home()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='rektor')
		{
			
			$this->template->rektor('rektor/home');
		}
		else
		{
			$this->template->home('home/template');
		}		
	}

	function c_ubahStatusLaporan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='rektor')
		{
			$this->template->rektor('rektor/v_ubahStatusLaporan');
		}
		else
		{
			$this->template->home('home/content');
		}
	}

	function c_daftarProposalBelumDiVerifikasiRektor()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='rektor')
		{
			$proposal = $this->rektor_model->proposalBelumDiVerifikasiRektor();
			$data['jumlah'] = count($proposal);
			$data['proposal'] = $this->rektor_model->proposalBelumDiVerifikasiRektor();
			$this->template->rektor('rektor/v_daftarProposalBelumDiVerifikasiRektor',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
	}


	function c_daftarProposalTelahDiVerifikasiRektor()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='rektor')
		{
			$proposal = $this->rektor_model->daftarProposalTelahDiVerifikasiRektor();
			$data['jumlahProposal'] = count($proposal);
			$data['proposal'] = $this->rektor_model->daftarProposalTelahDiVerifikasiRektor();
			$this->template->rektor('rektor/v_daftarProposalBelumDiVerifikasiRektor',$data);
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
		if (!empty($logged_in) && $level=='rektor')
		{
			$data['status'] = 'ditolak';
			$this->rektor_model->proposalverifikasi($id,$data);
			redirect('rektor/c_daftarProposalBelumDiVerifikasiRektor');
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
		if (!empty($logged_in) && $level=='rektor')
		{
			$data['status'] = 'diverifikasi rektor';
			$this->rektor_model->proposalverifikasi($id,$data);
			redirect('rektor/c_daftarProposalBelumDiVerifikasiRektor');
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
		if (!empty($logged_in) && $level=='rektor')
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