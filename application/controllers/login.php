<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->library('pajangan');
		$this->load->model('login_model');
	} 
	public function index()
	{
		$this->load->view('admin/login');
	}
	
	public function view_admin()
	{
		$this->pajangan->kirim('admin/admin_view');
	}	
	public function daftar()
	{
		$this->load->view('admin/daftar');
	}

	 //user login
	public function login()
	{
		$login=$this->login_model->login($this->input->post('username'),($this->input->post('password')));
		if($login==1)
		{
			$row=$this->login_model->data_login($this->input->post('username'),($this->input->post('password')));
			$data=array('logged' =>TRUE, 'username' =>$row->username);
			$this->session->set_userdata($data);
			redirect(base_url('index.php/utama/admin'));
		}else
		{
			echo "username atau password salah!";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy('logged');
		redirect(base_url('login'));
	}			
}

/*
public function aksi_login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$where=array
		(
			'username' =>$username,
			'password' =>$password
		);
		$cek=$this->login_model->cek_login('user',$where)->num_rows();
		if($cek>0)
		{
			$data_session=array('nama'=>$username);

			$this->session->set_userdata($data_session);
			redirect(base_url('index.php/utama/admin'));
		}else
		{
			echo "username dan password salah!";
		}
	} */