<?php

class Kaprodi_model extends CI_Model
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

	function proposalajukan($data)
	{
		$this->db->insert('proposal',$data);
	}
}