<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pajangan');
		$this->load->model('customer_model');
	}
	public function index()
	{
		$id=$this->session->userdata('id_customer');
		$data=array(
			'total' 	=>$this->customer_model->gethitung($id),
			'semua' 	=>$this->customer_model->getutama(),
			'produk' 	=>$this->customer_model->getkategori(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/utama',$data);
	}
	//cari data
	public function get_autocomplete(){
		if (isset($_GET['term'])) {
		  	$result = $this->customer_model->get_search($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'	=>$row->nama_produk,);
		     	echo json_encode($arr_result);
		   	}
		}
	}
	public function search(){
		$id=$this->session->userdata('id_customer');
		$title=$this->input->get('title');
		$data=array(
			'data'		=>$this->customer_model->get_search($title),
			'total' 	=>$this->customer_model->gethitung($id),
			'produk' 	=>$this->customer_model->getkategori(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/search_view',$data);
	} 
	public function kategori()
	{
		$toba=$this->session->userdata('id_customer');
		$id=$this->uri->segment(3);
		$data=array(
			'total' 	=>$this->customer_model->gethitung($toba),
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
		$toba=$this->session->userdata('id_customer');
		$id=$this->uri->segment(3);
		$data=array(
			'total' 	=>$this->customer_model->gethitung($toba),
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
			'merk'	=>$this->customer_model->getmerk());
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
		$id=$this->session->userdata('id_customer');
		$data=array(
			'total' 	=>$this->customer_model->gethitung($id),
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
			'total' 	=>$this->customer_model->gethitung($id),
			'akun'		=>$this->customer_model->getakun($id),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/akun',$data);
	}
	public function kontak()
	{
		$id=$this->session->userdata('id_customer');
		$data=array(
			'total' 	=>$this->customer_model->gethitung($id),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/kontak',$data);
	}
	
	public function list()
	{
		$id=$this->session->userdata('id_customer');
		$data=array(
			'total' 	=>$this->customer_model->gethitung($id),
			'list' 		=>$this->customer_model->getlist(),
			'produk' 	=>$this->customer_model->getkategori(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/list',$data);
	}
	public function grid()
	{
		$id=$this->session->userdata('id_customer');
		$data=array(
			'total' 	=>$this->customer_model->gethitung($id),
			'grid' 		=>$this->customer_model->getgrid(),
			'produk' 	=>$this->customer_model->getkategori(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/grid',$data);
	}
	public function tigacol()
	{
		$id=$this->session->userdata('id_customer');
		$data=array(
			'total' 	=>$this->customer_model->gethitung($id),
			'tricol' 	=>$this->customer_model->gettricol(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/tigacolom',$data);
	}
	public function empatcol()
	{
		$id=$this->session->userdata('id_customer');
		$data=array(
			'total' 	=>$this->customer_model->gethitung($id),
			'fourcol' 	=>$this->customer_model->getfourcol(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/empatcolom',$data);
	}
	public function tentang()
	{
		$id=$this->session->userdata('id_customer');
		$data=array(
			'total' 	=>$this->customer_model->gethitung($id),
			'produk' 	=>$this->customer_model->getkategori(),
			'merk'		=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/tentang',$data);
	}
	public function pembayaran()
	{
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
		$f='belum bayar';
		$coba=array(
			'id_order' 		=>$this->input->post('id_order'),
			'id_customer'	=>$this->input->post('id_customer'),
			'total_bayar' 	=>$this->input->post('total'),
			'tgl_order'		=>date('Y-m-d H:i:s'),
			'keterangan'	=>$f);
		$this->customer_model->getid($coba);
		$id_order =$this->db->insert_id();

		$query=$this->db->where('id_customer',$id)->get('cart');
			foreach ($query->result() as $key => $row) {
		$data=array(
			'id_checkout'		=>$this->input->post('id_checkout'),
			'id_order'			=>$id_order,
			'id_customer'		=>$this->input->post('id_customer'),
			'nama_produk'		=>$row->nama_produk,
			'jumlah'			=>$row->jumlah,
			'total_harga'		=>$row->total_harga,
			'negara'			=>$this->input->post('negara'),
			'provinsi'			=>$this->input->post('provinsi'),
			'kabupaten'			=>$this->input->post('kabupaten'),
			'kode_pos'			=>$this->input->post('kode_pos'),
			'alamat_lengkap'	=>$this->input->post('alamat_lengkap'),
			'pil_bayar'			=>$this->input->post('pil_bayar'));
		$this->customer_model->getcheckout($data);
		$this->customer_model->delete_item($id);
		}
		$rava=array(
			'id_order'		=>$id_order,
			'total' 		=>$this->input->post('total'),
			'tgl_order'		=>date('Y-m-d H:i:s'),
			'pil_bayar'		=>$this->input->post('pil_bayar'),
			'keterangan'	=>$f,			
			'merk'			=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/konfirmasi',$rava);
	}
	public function konfirmasi()
	{
		$id_order=$this->input->post('id_order');
		$g='bayar';
		$data=array(
			'id_order'			=>$this->input->post('id_order'),
			'nama'				=>$this->input->post('nama'),
			'total_bayar'		=>$this->input->post('total'),
			'tgl_order' 		=>$this->input->post('tgl_order'),
			'keterangan'		=>$g);
		$this->customer_model->getkonfirmasi($data,$id_order);
		$id=$this->session->userdata('id_customer');
		$data=array(
			'cart'  			=>$this->customer_model->gerobak($id),
			'total' 			=>$this->customer_model->gethitung($id),
			'merk'				=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/pemberitahuan',$data);
	} 
	public function penitipan()
	{
		if(!$this->session->userdata('logged'))
		{
			redirect(base_url('index.php/login_customer/masuk'));
		}
		$id=$this->session->userdata('id_customer');
		$f='belum bayar';
		$data=array(
			'titip'			=>$this->customer_model->getkonfirm($id,$f)->result_array(),
			'cek'			=>$this->customer_model->getcek($id)->result_array(),
			'total' 		=>$this->customer_model->gethitung($id),
			'merk'			=>$this->customer_model->getmerk());		
		$this->pajangan->kiriman('customer/penitipan',$data);	
	}
	public function rekonfirm()
	{
		$id=$this->session->userdata('id_customer');
		$g='belum bayar';
		$data=array(
			'nama'			=>$this->input->post('nama'),
			'titip'			=>$this->customer_model->getkonfirm()->row_array(),
			'cek'			=>$this->customer_model->getcek($id)->row_array(),
			'total' 		=>$this->customer_model->gethitung($id),
			'keterangan'	=>$g,

			'merk'			=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/rekonfirmasi',$data);	
	}
	public function selesai()
	{
		$id_order=$this->input->post('id_order');
		$g='bayar';
		$data=array(
			'id_order'			=>$this->input->post('id_order'),
			'nama'				=>$this->input->post('nama'),
			'keterangan'		=>$g);
		$this->customer_model->getkonfirmasi($data,$id_order);
		$id=$this->session->userdata('id_customer');
		$data=array(
			'merk'				=>$this->customer_model->getmerk());
		$this->pajangan->kiriman('customer/pemberitahuan',$data);
	}
}