<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model
{
//user login
	public function login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get('user');
		return $query->num_rows();
	}
	public function data_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('user')->row();
	}
}

/*
public function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}
	*/