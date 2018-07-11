<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->library('pajangan');
	} 
	public function index()
	{
		$this->load->view('login_view');
	}

	public function view_admin()
	{
		$this->pajangan->kirim('admin/admin_view');
	}
	public function view_customer()
	{
		$this->pajangan->kirim('customer/mencoba');
	}
	public function daftar()
	{
		$this->load->view('daftar_login');
	} 

	 //user login
	public function ceklogin()
	{
		if(isset($_POST['login']))
		{
			$username=$this->input->post('username',true);
			$password=$this->input->post('password',true);
			$cek=$this->login_model->proseslogin($username,$password);
			$hasil=count($cek);
			if($hasil>0)
			{
				$cobalogin=$this->db->get_where('user',array(
					'username'=>$username,
					'password'=>$password))->row();
				$data=array('udhmasuk'=> true,'nama'=>$cobalogin->nama,'email'=>$cobalogin->email,'username'=>$cobalogin->username);
				$this->session->set_userdata($data);
				if($cobalogin->hak_akses=='admin')
				{
					redirect('index.php/login/view_admin');
				}else if($cobalogin->hak_akses=='customer')
				{
					redirect('index.php/login/view_customer');
				}else
				{   
					redirect('index.php/login');
					
				}
			}
		}
	}	
}