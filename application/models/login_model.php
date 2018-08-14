<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model
{
	//customer login
	public function login_customer($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get('customer');
		return $query->num_rows();
	}
	public function ambil_login($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get('customer')->row();
	}
//admin login
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
	public function insert($simpan)
	{
		return $this->db->insert('user',$simpan);
	}
	public function check($email) 
	{
        $this->db->where('email', $email);
        return $this->db->get('customer'); 
    }
    public function getforgot($simpan,$id) {
        return $this->db->where('id_customer',$id)->update('customer',$simpan);
    }
}