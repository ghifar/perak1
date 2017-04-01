<?php

class Admin_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function cek_akun($username,$password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		
		return $this->db->get()->row();
	}


	
	function daftarProposal(){
		return $this->db->get('proposal')->result();
	}


	function proposaltolak()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('status','ditolak');
		
		return $this->db->get()->result();
	}

	function proposalbelumverifikasiRektor()
	{
		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->where('status','diverifikasi dekan');
		
		return $this->db->get()->result();
	}

	function proposalverifikasi($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('proposal',$data);
	}

	function daftarTransaksiPembelian(){
		return $this->db->get('transaksi_pembelian')->result();
	}

	function tambahTransaksiPembelian($data)
	{
		$this->db->insert('transaksi_pembelian',$data);
	}

	function tambahTransaksiPenerimaan($data)
	{
		$this->db->insert('transaksi_penerimaan',$data);
	}

	function hapus_transaksiPembelian($id_transaksi)
	{
		$this->db->where('id',$id_transaksi);
		$this->db->delete('transaksi_pembelian');
	}

	function select_by_id_transaksiPembelian($id)
	{
		$this->db->where('id',$id);
		
		return $this->db->get('transaksi_pembelian')->row();
	}

	function update_transaksiPembelian($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('transaksi_pembelian',$data);
	}


	
}