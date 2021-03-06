<?php

class Dekan_model extends CI_Model
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

	function proposaltolak()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('status','ditolak');
		
		return $this->db->get()->result();
	}

	function proposalverifikasi($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('proposal',$data);
	}


	function daftarProposalBelumDiVerifikasiDekan()
	{
		$this->db->select('*');
		$this->db->from('proposal');
		$this->db->where('status','belum diverifikasi');
		
		return $this->db->get()->result();
	}
}