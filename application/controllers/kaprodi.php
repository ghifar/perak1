<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Kaprodi extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('kaprodi_model');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('download');
	}


	function login()
	{
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		
		$akun = $this->kaprodi_model->cek_akun($username,$password);
		$temp_account = count($akun);
		
		if ($temp_account > 0)
		{
			$data = array(
							'level'=>$akun->level,
							'logged_in'=>true
			);
			
			$this->session->set_userdata($data);
			$this->template->kaprodi('kaprodi/beranda');
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
		if (!empty($logged_in) && $level=='kaprodi')
		{
			
			$this->template->kaprodi('kaprodi/home');
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
		if (!empty($logged_in) && $level=='kaprodi')
		{
			
			$this->template->kaprodi('kaprodi/v_ubahStatusLaporan');
		}
		else
		{
			$this->template->home('home/content');
		}
	}



	function c_ProposalTelahDiVerifikasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='kaprodi')
		{
			$peserta = $this->kaprodi_model->pesertabelumdiverifikasi();
			$data['jumlah'] = count($peserta);
			$data['peserta'] = $this->kaprodi_model->pesertabelumdiverifikasi();
			$this->template->kaprodi('kaprodi/proposalbelumverifikasiKaprodi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
	}

	function c_proposalAjukan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='kaprodi')
		{
			$this->template->kaprodi('kaprodi/v_proposalAjukan');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}


	function c_prosesAjukanProposal()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='kaprodi')
		{		
			$config['upload_path'] = './uploads/proposal';
										//'jpg|jpeg|png|pdf';
	        $config['allowed_types'] = 'txt|pdf|png';
	        $config['max_size']    = '1200';
			$this->load->library('upload',$config);

			if (!$this->upload->do_upload())
			{
				// $upload_error = array('error' => $this->upload->display_errors());
				$error =  $this->upload->display_errors();
				$salah['error'] = '<div class="alert alert-danger"><strong>' . $error. '</strong></div>';
				// $this->session->set_flashdata('info', $upload_error);

				$this->template->kaprodi('kaprodi/v_proposalAjukan', $salah);
				// redirect('kaprodi/proposalajukan');
				 // echo $this->upload->display_errors();
				 
			}
			else{
			$dokumens = $this->upload->data();
			$success['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $dokumens['file_name'] . '</strong> was successfully uploaded!</div>';

			$data['nama']=$this->input->post('nama');
			$data['keterangan']=$this->input->post('keterangan');
			$data['dokumen'] = $dokumens['file_name'];		
			$this->kaprodi_model->proposalajukan($data);
			$this->session->set_flashdata('info', $success);

			 $this->template->kaprodi('kaprodi/v_proposalAjukan', $success);
			}
		}else
		{
			$this->template->home('home/content');
		}
			
	}


}


 ?>