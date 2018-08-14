<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_customer extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pajangan');
		$this->load->model('customer_model');
		$this->load->model('login_model');
	}
	public function masuk($error=null)
	{
		$id=$this->session->userdata('id_customer');
		$data=array(
			'jumlah'	=>$this->customer_model->getulang($id),
			'config'	=>$this->customer_model->getweb()->row_array(),
			'total'		=>$this->customer_model->gethitung($id),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/login_customer',$data);
	}
	public function login_cus()
	{
		$login=$this->login_model->login_customer($this->input->post('email'),($this->input->post('password')));
		if($login==1)
		{
			$row=$this->login_model->ambil_login($this->input->post('email'),($this->input->post('password')));
			$data=array('logged' =>TRUE, 'email' =>$row->email ,'id_customer'=>$row->id_customer);
			$this->session->set_userdata($data);
			redirect(base_url('customer/keranjang'));
		}else
		{
			 $this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>E-mail atau password salah !!!</strong></div>");
			  redirect(base_url('login_customer/masuk'));
		}
	}
	public function ganti() 
    {
    	$id=$this->session->userdata('id_customer');
		$data = array(
			'jumlah' 	=>$this->customer_model->getulang($id),
			'total' 	=>$this->customer_model->gethitung($id),
			'config'	=>$this->customer_model->getweb()->row_array(),
			'produk' 	=>$this->customer_model->getkategori(),
            'sidebar'	=>$this->customer_model->getsamping(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/ubah_password',$data);
	}
	public function forgot() 
	{
		$toba=$this->session->userdata('id_customer');
        $email = $this->login_model->check($this->input->post('email'))->num_rows();
        if ($email == 1) {
            $id = $this->login_model->check($this->input->post('email'))->row();
            $data = array(
                'id'    	=>$id->id_customer,
                'email' 	=>$this->input->post('email'),

                'jumlah' 	=>$this->customer_model->getulang($toba),
				'total' 	=>$this->customer_model->gethitung($toba),
                'produk' 	=>$this->customer_model->getkategori(),
                'sidebar'	=>$this->customer_model->getsamping(),
				'config'	=>$this->customer_model->getweb()->row_array(),
				'merk'		=>$this->customer_model->getmerk());
            $this->pajangan->kiriman('customer/new_password',$data);
        } else {
            $this->session->set_flashdata("error","<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <strong>E-mail yang anda masukkan salah!</strong></div>");

            redirect(base_url('login_customer/ganti'));
        }
    }
    public function ubah_password() 
    {
        $id = $this->input->post('id');
        $simpan = array(
                'id_customer' 	=> $this->input->post('id'),
                'email'    		=> $this->input->post('email'),
                'password' 		=> $this->input->post('password'));
        $this->login_model->getforgot($simpan,$id);
        redirect(base_url('login_customer/masuk'));
    }
	public function logout()
	{
		$this->session->sess_destroy('logged');
		redirect(base_url('customer'));
	}		
}