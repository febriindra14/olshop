<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_customer extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pajangan');
		$this->load->model('customer_model');
	}

	//login
	public function masuk()
	{	
		$data=array(
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/login_customer',$data);
	}
	public function login_cus()
	{
		$login=$this->customer_model->login_customer($this->input->post('email'),($this->input->post('password')));
		if($login==1)
		{
			$row=$this->customer_model->data_login($this->input->post('email'),($this->input->post('password')));
			$data=array('logged' =>TRUE, 'email' =>$row->email ,'id_customer'=>$row->id_customer);
			$this->session->set_userdata($data);
			redirect(base_url('index.php/customer/keranjang'));
		}else
		{
			echo "email atau password salah!";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy('logged');
		redirect(base_url('index.php/customer'));
	}		
}