<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->library('pajangan');
		$this->load->model('login_model');
		$this->load->model('customer_model');
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
	//user_admin
	public function tambah()
	{
		$save=array(
			'id_user'		=>$this->input->post('id_user'),
			'nama'			=>$this->input->post('nama'),
			'username'		=>$this->input->post('username'),
			'email'			=>$this->input->post('email'),
			'password'		=>$this->input->post('password'));
		$this->user_model->insert($save);
		redirect(base_url('login'));
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
			redirect(base_url('utama/admin'));
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