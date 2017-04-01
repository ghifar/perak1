<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
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
			$this->template->admin('admin/beranda');
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
		if (!empty($logged_in) && $level=='admin')
		{
			
			$this->template->admin('admin/home');
		}
		else
		{
			$this->template->home('home/content');
		}		
	}

	function c_proposalBelumDiVerifikasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->proposalbelumverifikasiRektor();
			$data['jumlah'] = count($peserta);
			$data['peserta'] = $this->admin_model->proposalbelumverifikasiRektor();
			$this->template->admin('admin/proposalbelumverifikasi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
	}


	function c_proposaltelahverifikasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->pesertatelahverifikasi();
			$data['jumlah'] = count($peserta);
			$data['peserta'] = $this->admin_model->pesertatelahverifikasi();
			$this->template->admin('admin/proposalbelumverifikasi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}


	function c_daftarProposal()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$proposal = $this->admin_model->daftarProposal();
			$data['jumlah'] = count($proposal);
			$data['proposal'] = $this->admin_model->daftarProposal();
			$this->template->admin('admin/v_daftarProposal',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
	}


	function c_viewDataTransaksi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$transaksiPembelian = $this->admin_model->daftarTransaksiPembelian();
			$data['jumlah'] = count($transaksiPembelian);
			$data['transaksiPembelian'] = $this->admin_model->daftarTransaksiPembelian();
			$this->template->admin('admin/v_viewDataTransaksi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
	}

	function c_prosesHapusTransaksiPembelian($id)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$this->admin_model->hapus_transaksiPembelian($id);
			redirect('admin/c_viewDataTransaksi');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}

	
	function c_tambahTransaksiPembelian()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			
			$this->template->admin('admin/v_tambahTransaksiPembelian');
		}
		else
		{
			$this->template->home('home/content');
		}
	}

	function c_prosesTambahTransaksiPembelian()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['nama']=$this->input->post('nama');
			$data['nama_barang']=$this->input->post('nama_barang');
			$data['banyak']=$this->input->post('banyak');
			$data['harga']=$this->input->post('harga');
			$data['total']=$this->input->post('total');
			
			$this->admin_model->tambahTransaksiPembelian($data);
			redirect('admin/c_tambahTransaksiPembelian');
		}
		else
		{
			$this->template->home('home/content');
		}
			
	}

	function c_tambahTransaksiPenerimaan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			
			$this->template->admin('admin/v_tambahTransaksiPenerimaan');
		}
		else
		{
			$this->template->home('home/content');
		}
	}


	function c_prosesTambahTransaksiPenerimaan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['nama']=$this->input->post('nama');
			$data['nominal']=$this->input->post('nominal');
			$data['detail']=$this->input->post('detail');
			
			$this->admin_model->tambahTransaksiPenerimaan($data);
			redirect('admin/c_tambahTransaksiPenerimaan');
		}
		else
		{
			$this->template->home('home/content');
		}
			
	}

	function c_editTransaksiPembelian($id)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['transaksiPembelian'] = $this->admin_model->select_by_id_transaksiPembelian($id);
			$this->template->admin('admin/v_editTransaksiPembelian',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}

	function c_prosesEditTransaksiPembelian()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['nama']=$this->input->post('nama');
			$data['nama_barang']=$this->input->post('nama_barang');
			$data['banyak']=$this->input->post('banyak');
			$data['harga']=$this->input->post('harga');
			$data['total']=$this->input->post('total');
			
			$id=$this->input->post('id');
			
			$this->admin_model->update_transaksiPembelian($id,$data);
			
			redirect(site_url('admin/c_viewDataTransaksi'));
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}

	function c_buatLaporan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			
			$this->template->admin('admin/v_buatLaporan');
		}
		else
		{
			$this->template->home('home/content');
		}
	}

	function c_viewLaporan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			
			$this->template->admin('admin/v_viewLaporan');
		}
		else
		{
			$this->template->home('home/content');
		}
	}



	function c_prosesBuatLaporan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['transaksi']=$this->input->post('transaksi');
			$data['bulan']=$this->input->post('bulan');

			if ($_POST['transaksi'] === 'transaksi_pembelian') {
				if ($_POST['bulan'] === '01') {
					$this->admin_model->cobasaja();
				
				}

				elseif ($_POST['bulan'] === '02') {
					echo "saya desember";
				
				}

				elseif ($_POST['bulan'] === '03') {
					echo "saya desember";
				
				}

				elseif ($_POST['bulan'] === '04') {
					echo "saya desember";
				
				}
				elseif ($_POST['bulan'] === '05') {
					echo "saya desember";
				
				}
				elseif ($_POST['bulan'] === '06') {
					echo "saya desember";
				
				}
				elseif ($_POST['bulan'] === '07') {
					echo "saya desember";
				
				}
				elseif ($_POST['bulan'] === '08') {
					echo "saya desember";
				
				}
				elseif ($_POST['bulan'] === '09') {
					echo "saya desember";
				
				}
				elseif ($_POST['bulan'] === '10') {
					echo "saya desember";
				
				}elseif ($_POST['bulan'] === '11') {
					echo "saya desember";
				
				}
				elseif ($_POST['bulan'] === '12') {
					echo "saya desember";
				
				}

				
			}
			elseif ( $_POST['transaksi'] === 'transaksi_penerimaan' ) {
			echo "penerimaan";
			}
			
			// $id=$this->input->post('id');
			
			// $this->admin_model->update_transaksiPembelian($id,$data);
			
			// redirect(site_url('admin/c_viewDataTransaksi'));
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
		if (!empty($logged_in) && $level=='admin')
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