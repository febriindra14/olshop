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
	public function masuk($error = NULL)
	{	
		$id=$this->session->userdata('id_customer');
		$data=array(
			'jumlah' 	=>$this->customer_model->getulang($id),
			'config'	=>$this->customer_model->getweb()->row_array(),
			'total' 	=>$this->customer_model->gethitung($id),
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
			 $this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>E-mail atau password salah !!!</strong></div>");
			  redirect(base_url('index.php/login_customer/masuk'));
		}
	}
	public function logout()
	{
		$this->session->sess_destroy('logged');
		redirect(base_url('index.php/customer'));
	}		
}