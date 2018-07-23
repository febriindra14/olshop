<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pajangan');
		$this->load->model('customer_model');
		$this->load->library('cart');
	}
	public function index()
	{
		$data=array(
			'semua' 	=>$this->customer_model->getutama(),
			'produk' 	=>$this->customer_model->getkategori(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/utama',$data);
	}
	//fashion
	public function kategori()
	{
		$id=$this->uri->segment(3);
		$data=array(
			'view' 		=>$this->customer_model->getfashion($id),
			'produk' 	=>$this->customer_model->getkategori(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/kategori',$data);
	}
	public function detail()
	{
		$id = $this->uri->segment(3);
		$data=array(
			'detail' 	=>$this->customer_model->getdetail($id)->row_array(),
			'produk'	=>$this->customer_model->getkategori(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/detail_kategori',$data);
	}
	public function merk()
	{
		$id=$this->uri->segment(3);
		$data=array(
			'tampil'	=>$this->customer_model->getall($id),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/merk',$data);
	}
	// add to cart
	public function tambah_cart()
	{	
		$harga=$this->input->post('harga');
		$data_produk=array('id_cart'=>$this->input->post('id_cart'),
			'id_customer'	=>$this->session->userdata('id_customer'),
			'id_produk'		=>$this->input->post('id_produk'),
			'foto'			=>$this->input->post('foto'),
			'nama_produk'	=>$this->input->post('nama_produk'),
			'harga'			=>$harga,
			'jumlah'		=>1,
			'total_harga'	=>$harga*1);
		$this->customer_model->getcart($data_produk);
		redirect(base_url('index.php/customer/keranjang'));
	}
	public function hapus_cart()
	{
		$data=$this->uri->segment(3);
		$hapus=$this->customer_model->delete_cart($data);
		redirect(base_url('index.php/customer/keranjang'));
	} 
	public function keranjang()
	{
		if(!$this->session->userdata('logged'))
		{
			redirect(base_url('index.php/login_customer/masuk'));
		}	
		//supaya berbeda barangnya dengan pembeli yang lainnya
		$id=$this->session->userdata('id_customer');

		$data =array(
			'cart'  =>$this->customer_model->gerobak($id),
			'total' =>$this->customer_model->gethitung($id),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/keranjang',$data);
	}
	public function tambah_customer()
	{
		$save=array(
			'id_customer'	=>$this->input->post('id_customer'),
			'nama_depan'	=>$this->input->post('nama_depan'),
			'nama_belakang'	=>$this->input->post('nama_belakang'),
			'email'			=>$this->input->post('email'),
			'password'		=>$this->input->post('password'),
			'tgl_lahir'		=>$this->input->post('tgl_lahir'),
			'no_telp'		=>$this->input->post('no_telp'),
			'nama_rek'		=>$this->input->post('nama_rek'),
			'no_rek'		=>$this->input->post('no_rek'),
			'alamat'		=>$this->input->post('alamat'));
		$this->customer_model->insert_customer($save);
		redirect(base_url('index.php/customer/akunku'));
	}
	public function register()
	{
		$data=array(
			'produk' 	=>$this->customer_model->getkategori(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/registrasi',$data);
	}
	public function akunku()
	{
		if(!$this->session->userdata('logged'))
		{
			redirect(base_url('index.php/login_customer/masuk'));
		}
		$id=$this->session->userdata('id_customer');
		$data=array(
			'akun'		=>$this->customer_model->getakun($id));
		$this->pajangan->kiriman('customer/akun',$data);
	}
	public function kontak()
	{
		$data=array(
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/kontak',$data);
	}
	
	public function list()
	{
		$data=array(
			'list' 		=>$this->customer_model->getlist(),
			'produk' 	=>$this->customer_model->getkategori(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/list',$data);
	}
	public function grid()
	{
		$data=array(
			'grid' 		=>$this->customer_model->getgrid(),
			'produk' 	=>$this->customer_model->getkategori(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/grid',$data);
	}
	public function tigacol()
	{
		$data=array(
			'tricol' 	=>$this->customer_model->gettricol(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/tigacolom',$data);
	}
	public function empatcol()
	{
		$data=array(
			'fourcol' 	=>$this->customer_model->getfourcol(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/empatcolom',$data);
	}
	public function tentang()
	{
		$data=array(
			'produk' 	=>$this->customer_model->getkategori(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/tentang',$data);
	}
	public function pembayaran()
	{
		//$this->session->set_flashdata('message','anda harus membeli barang dulu');
		$id=$this->session->userdata('id_customer');
		$data=array(
			'bayar'				=>$this->customer_model->getbayar($id),
			'total' 			=>$this->customer_model->gethitung($id),

			'negara'			=>$this->input->post('negara'),
			'provinsi'			=>$this->input->post('provinsi'),
			'kabupaten'			=>$this->input->post('kabupaten'),
			'kode_pos'			=>$this->input->post('kode_pos'),
			'alamat_lengkap' 	=>$this->input->post('alamat_lengkap'),
			'merk'				=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/pembayaran',$data);
	}
	public function checkout()
	{
		$id=$this->session->userdata('id_customer');
		$coba=array(
			'id_order' 		=>$this->input->post('id_order'),
			'id_customer'	=>$this->input->post('id_customer'));

		$this->customer_model->getid($coba);
		$id_order =$this->db->insert_id();

		$query=$this->db->get('checkout',1);
			foreach ($query->result() as $key => $row) {
		$data=array(
			'id_checkout'		=>$this->input->post('id_checkout'),
			'id_order'			=>$id_order,
			'id_customer'		=>$this->input->post('id_customer'),
			'id_produk'			=>$this->input->post('id_produk'),
			'jumlah'			=>$this->input->post('jumlah'),
			'harga'				=>$this->input->post('harga'),
			'negara'			=>$this->input->post('negara'),
			'provinsi'			=>$this->input->post('provinsi'),
			'kabupaten'			=>$this->input->post('kabupaten'),
			'kode_pos'			=>$this->input->post('kode_pos'),
			'alamat_lengkap'	=>$this->input->post('alamat_lengkap'),
			'pil_bayar'			=>$this->input->post('pil_bayar'));
		$this->customer_model->getcheckout($data);
		}
		$rava=array(
				'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/konfirmasi',$rava);
	}
	public function konfirmasi()
	{
		$id=$this->session->userdata('id_customer');
		/*$tgl=date('Y-m-d H-i-s');
		$data=array(
			'nama'			=>$this->input->post('nama'),
			'id_order' 		=>$this->input->post('id_order'),
			'total' 		=>$this->customer_model->gethitung($id),
			'tgl_order'		=>$tgl,
			'pil bayar'		=>$this->input->post('pil_bayar'),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/konfirmasi',$data);*/
	}
}