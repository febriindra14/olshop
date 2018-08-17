<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{	
	function __construct()
	{
		parent:: __construct();
		$this->load->library('pajangan');
		
		//mendeteksi user sudah login atau belum
		if(!$this->session->userdata('logged'))
		{
			redirect(base_url('login'));
		}
	}
	//dashboard 
	public function index()
	
	{	
		$data=array
		(
			'user' 				=>$this->db->get('user')->num_rows(),
			'kategori_produk'	=>$this->db->get('kategori_produk')->num_rows(),
			'merk'				=>$this->db->get('merk')->num_rows(),
			'produk'			=>$this->db->get('produk')->num_rows(),
			'customer'			=>$this->db->get('customer')->num_rows(),
			'order'				=>$this->db->get('order')->num_rows());
		$this->pajangan->kirim('admin/depan',$data);
	}
	// user
	public function tampil()
	{	
		$data['coba']=$this->user_model->tes();
		$this->pajangan->kirim('admin/user_view',$data);
	}
	//cari user
	public function cari()
	{
		$keyword=$this->input->post('keyword');
		$data['coba']=$this->user_model->tangkap($keyword);
		$this->pajangan->kirim('admin/cari_user',$data);
	}
	public function daftar()
	{
		$this->pajangan->kirim('admin/daftar_user');
	}
	public function tambah()
	{
		$save=array(
			'id_user'		=>$this->input->post('id_user'),
			'nama'			=>$this->input->post('nama'),
			'username'		=>$this->input->post('username'),
			'email'			=>$this->input->post('email'),
			'password'		=>$this->input->post('password'));
		$this->user_model->insert($save);
		redirect(base_url('utama/admin/tampil'));
	}
	public function hapus()
	{
		$satu=$this->uri->segment(4);
		$dua=$this->user_model->delete($satu);
		redirect(base_url('utama/admin/tampil'));
	}
	public function tampil_edit()
	{
		$a=$this->uri->segment(4);
		$b['sukses']=$this->user_model->ganti($a);
		$this->pajangan->kirim('admin/edit_user',$b);
	}
	public function edit()
	{
		$a=$this->input->post('id_user');
		$b=array(
			'id_user'		=>$this->input->post('id_user'),
			'nama'			=>$this->input->post('nama'),
			'username'		=>$this->input->post('username'),
			'email'			=>$this->input->post('email'),
			'password'		=>$this->input->post('password'));
		$c=$this->user_model->update($b,$a);
		redirect(base_url('utama/admin/tampil'));
	}
	// kategori produk
	public function kategori_produk()
	{
		$row=$this->user_model->getpro();
		$config['base_url']=base_url().'utama/admin/kategori_produk';
		$config['total_rows']=$row;
		$config['per_page']=4;
		$config['first_link']='Pertama';
		$config['last_link']='Terakhir'; 
		$config['next_link']='Berikutnya';
		$config['prev_link']='Sebelumnya';

		$config['full_tag_open']='<div>';
		$config['full_tag_close']='</div>';
		$config['num_tag_open']='<div class="page">';
		$config['num_tag_close']='</div>';
		$config['cur_tag_open']='<div class="page active">';
		$config['cur_tag_close']='</div>';
		$config['next_tag_open']='<div class="page">';
		$config['next_tag_close']='</div>';
		$config['prev_tag_open']='<div class="page">';
		$config['prev_tag_close']='</div>';
		$config['first_tag_open']='<div class="page">';
		$config['first_tag_close']='</div>';
		$config['last_tag_open']='<div class="page">';
		$config['last_tag_close']='</div>';

		$start=$this->uri->segment(4);
		$this->pagination->initialize($config);
		$data['kirim']=$this->user_model->muncul($config['per_page'],$start);
		$this->pajangan->kirim('admin/kategori_produk',$data);
	}
	public function form_kaduk()
	{
		$this->pajangan->kirim('admin/tambah_kategori');
	}
	public function tambah_kaduk()
	{
		$save=array(
			'id_kategori'	=>$this->input->post('id_kategori'),
			'nama_kategori'	=>$this->input->post('nama_kategori'));
		$this->user_model->insert_kaduk($save);
		redirect(base_url('utama/admin/kategori_produk'));
	}
	public function form_kategori()
	{
		$t=$this->uri->segment(4);
		$u['apa']=$this->user_model->ubah_kaduk($t);
		$this->pajangan->kirim('admin/edit_kaduk',$u);
	}
	public function edit_kaduk()
	{
		$z=$this->input->post('id_kategori');
		$x=array(
			'id_kategori'		=>$this->input->post('id_kategori'),
			'nama_kategori'		=>$this->input->post('nama_kategori'));
		$y=$this->user_model->update_kaduk($x,$z);
		redirect(base_url('utama/admin/kategori_produk'));
	}
	public function hapus_kaduk()
	{
		$w=$this->uri->segment(4);
		$r=$this->user_model->delete_kaduk($w);
		redirect(base_url('utama/admin/kategori_produk'));
	}

	// Merk produk	
	public function merk()
	{
		$v=$this->user_model->menu();
		$this->pajangan->kirim('admin/merk_produk',array('belajar'=>$v));
	}
	public function form_merk()
	{
		$this->pajangan->kirim('admin/tambah_merk');
	}
	public function tambah_merk()
	{	
		$config['upload_path'] = './assets/fronted/assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '8000';
        $config['max_width'] = '8000';
        $config['max_height'] = '4000';
      $this->upload->initialize($config);
      $this->load->library('upload', $config);
      $this->upload->do_upload('gambar'); 
      
    	$coba = $this->upload->data(); 
		$ve=array(
			'id_merk'	=>$this->input->post('id_merk'),
			'nama_merk'	=>$this->input->post('nama_merk'),
			'gambar' 	=>$coba['file_name']);
		$this->user_model->insert_merk($ve);
		redirect(base_url('utama/admin/merk'));
	}
	public function ganti_merk()
	{
		$r=$this->uri->segment(4);
		$m['tau']=$this->user_model->ubah_merk($r);
		$this->pajangan->kirim('admin/edit_merk',$m);
	}
	public function edit_merk()
	{
		$config['upload_path'] = './assets/fronted/assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '8000';
        $config['max_width'] = '8000';
        $config['max_height'] = '4000';
      $this->upload->initialize($config);
      $this->load->library('upload', $config);
      $this->upload->do_upload('gambar');
    	$coba = $this->upload->data();  

		$b=$this->input->post('id_merk');
		$v=array(
			'id_merk'		=>$this->input->post('id_merk'),
			'nama_merk'		=>$this->input->post('nama_merk'),
			'gambar'		=>$coba['file_name']);
		$q=$this->user_model->update_merk($v,$b);
		redirect(base_url('utama/admin/merk'));
	}
	public function hapus_merk()
	{
		$n=$this->uri->segment(4);
		$m=$this->user_model->delete_merk($n);
		redirect(base_url('utama/admin/merk'));
	}
	//produk
	public function produk()
	{	
		$row=$this->user_model->larik();
		$config['base_url']=base_url().'utama/admin/produk';
		$config['total_rows']=$row;
		$config['per_page']=2;
		$config['first_link']='Pertama';
		$config['last_link']='Terakhir'; 
		$config['next_link']='Berikutnya';
		$config['prev_link']='Sebelumnya';

		$config['full_tag_open']='<div>';
		$config['full_tag_close']='</div>';
		$config['num_tag_open']='<div class="page">';
		$config['num_tag_close']='</div>';
		$config['cur_tag_open']='<div class="page active">';
		$config['cur_tag_close']='</div>';
		$config['next_tag_open']='<div class="page">';
		$config['next_tag_close']='</div>';
		$config['prev_tag_open']='<div class="page">';
		$config['prev_tag_close']='</div>';
		$config['first_tag_open']='<div class="page">';
		$config['first_tag_close']='</div>';
		$config['last_tag_open']='<div class="page">';
		$config['last_tag_close']='</div>';

		$start=$this->uri->segment(4);
		$this->pagination->initialize($config);
		$data['produk']=$this->user_model->kardus($config['per_page'],$start);
		$this->pajangan->kirim('admin/produk',$data);
	}
	public function form_produk()
	{
		$b['sama']=$this->user_model->relasi()->result_array();
		$b['kat']=$this->user_model->kat()->result_array();
		
     	$this->pajangan->kirim('admin/tambah_produk',$b);
	}
	public function tambahproduk()
	{
		$config['upload_path'] = './assets/fronted/assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '8000';
        $config['max_width'] = '8000';
        $config['max_height'] = '4000';
      $this->upload->initialize($config);
      $this->load->library('upload', $config);
      $this->upload->do_upload('foto');

    	$file = $this->upload->data();
          $data = array(  
           'id_produk' 		=>$this->input->post('id_produk'),
           'id_kategori'	=>$this->input->post('id_kategori'),
           'id_merk' 		=>$this->input->post('id_merk'),
           'nama_produk'	=>$this->input->post('nama_produk'),
           'bahan' 			=>$this->input->post('bahan'),
           'warna' 			=>$this->input->post('warna'),
           'deskripsi' 		=>$this->input->post('deskripsi'),
       	   'harga' 			=>$this->input->post('harga'),
       	   'foto' 			=>$file['file_name']);
          $this->user_model->insert_produk($data); 
          redirect(base_url('utama/admin/produk')); 
	  }
	public function editproduk()
	{
		$c=$this->uri->segment(4);
		$d['kiriman']=$this->user_model->ubah_produk($c);
		$this->pajangan->kirim('admin/edit_produk',$d);
	}
	public function proses_edit()
	{
		$config['upload_path'] 		= './assets/fronted/assets/img/';
        $config['allowed_types'] 	= 'gif|jpg|png';
        $config['max_size'] 		= '8000';
        $config['max_width'] 		= '8000';
        $config['max_height'] 		= '4000';
      $this->upload->initialize($config);
      $this->load->library('upload', $config);
      $this->upload->do_upload('foto');

    	$file = $this->upload->data();

		$c=$this->input->post('id_produk');
		$d=array(
			'id_produk'			=>$this->input->post('id_produk'),
			'id_kategori'		=>$this->input->post('id_kategori'),
			'id_merk'			=>$this->input->post('id_merk'),
			'nama_produk'		=>$this->input->post('nama_produk'),
			'bahan'				=>$this->input->post('bahan'),
			'warna'				=>$this->input->post('warna'),
			'deskripsi'			=>$this->input->post('deskripsi'),
			'harga'				=>$this->input->post('harga'),
			'foto'				=>$file['file_name']);
		$e=$this->user_model->update_produk($d,$c);
		redirect(base_url('utama/admin/produk'));
	}
	public function hapusproduk()
	{
		$empat=$this->uri->segment(3);
		$lima=$this->user_model->delete_produk($empat);
		redirect(base_url('utama/admin/produk'));
	}
	//detail produk
	 public function detailproduk()
	{
		$id = $this->uri->segment(4);
  		$data['ayo'] = $this->user_model->getproduk($id)->row_array();
  		$this->pajangan->kirim('admin/detail_produk', $data);
	}
	//customer
	public function customer()
	{
		$kedua=$this->user_model->masuk();
		$this->pajangan->kirim('admin/customer',array('isi'=>$kedua));
	}
	public function form()
	{
		$this->pajangan->kirim('admin/tambah_customer');
	}
	public function tambah_cus()
	{
		$simpan=array(
			'id_customer'	=>$this->input->post('id_customer'),
			'nama_lengkap'	=>$this->input->post('nama_lengkap'),
			'email'			=>$this->input->post('email'),
			'password'		=>$this->input->post('password'),
			'tgl_lahir'		=>$this->input->post('tgl_lahir'),
			'no_telp'		=>$this->input->post('no_telp'),
			'nama_rek'		=>$this->input->post('nama_rek'),
			'no_rek'		=>$this->input->post('no_rek'),
			'alamat'		=>$this->input->post('alamat'));
		$this->user_model->insert_cus($simpan);
		redirect(base_url('utama/admin/customer'));
	}
	public function form_edit()
	{
		$c=$this->uri->segment(4);
		$d['konten']=$this->user_model->ubah($c);
		$this->pajangan->kirim('admin/edit_customer',$d);
	}
	public function edit_cus()
	{
		$c=$this->input->post('id_customer');
		$d=array(
			'id_customer'	=>$this->input->post('id_customer'),
			'nama_lengkap'	=>$this->input->post('nama_lengkap'),
			'email'			=>$this->input->post('email'),
			'password'		=>$this->input->post('password'),
			'tgl_lahir'		=>$this->input->post('tgl_lahir'),
			'no_telp'		=>$this->input->post('no_telp'),
			'nama_rek'		=>$this->input->post('nama_rek'),
			'no_rek'		=>$this->input->post('no_rek'),
			'alamat'		=>$this->input->post('alamat'));
		$e=$this->user_model->update_cus($d,$c);
		redirect(base_url('utama/admin/customer'));
	}
	public function hapus_cus()
	{
		$empat=$this->uri->segment(4);
		$lima=$this->user_model->delete_cus($empat);
		redirect(base_url('utama/admin/customer'));
	}
	//order
	public function order()
	{
		$row=$this->user_model->getbaris();
		$config['base_url']=base_url().'utama/admin/order';
		$config['total_rows']=$row;
		$config['per_page']=10;
		$config['first_link']='Pertama';
		$config['last_link']='Terakhir'; 
		$config['next_link']='Berikutnya';
		$config['prev_link']='Sebelumnya';

		$config['full_tag_open']='<div>';
		$config['full_tag_close']='</div>';
		$config['num_tag_open']='<div class="page">';
		$config['num_tag_close']='</div>';
		$config['cur_tag_open']='<div class="page active">';
		$config['cur_tag_close']='</div>';
		$config['next_tag_open']='<div class="page">';
		$config['next_tag_close']='</div>';
		$config['prev_tag_open']='<div class="page">';
		$config['prev_tag_close']='</div>';
		$config['first_tag_open']='<div class="page">';
		$config['first_tag_close']='</div>';
		$config['last_tag_open']='<div class="page">';
		$config['last_tag_close']='</div>';

		$id=$this->uri->segment(4);
		$this->pagination->initialize($config);
		$data['order']=$this->user_model->order($config['per_page'],$id);
		$this->pajangan->kirim('admin/order',$data);
	}
	public function hapus_order()
	{
		$id=$this->uri->segment(4);
		$data=$this->user_model->delete_order($id);
		redirect(base_url('utama/admin/order'));
	}
	public function detailorder() 
	{ 
		$id = $this->uri->segment(4);
		$data = array(
				'pembeli'  	=>$this->user_model->getdetail($id)->row_array(),
				'detail'  	=>$this->user_model->getdetail($id));
		$this->pajangan->kirim('admin/detail_order', $data);
	}
	//konfigurasi web
	public function konfigurasi_web()
	{
		$data['konfig']=$this->user_model->getkonfig();
		$this->pajangan->kirim('admin/konfigurasi_web',$data);
	}
	public function ubah_konfig()
	{
		$nama=$this->uri->segment(4);
		$data['web']=$this->user_model->edit_konfig($nama);
		$this->pajangan->kirim('admin/edit_konfig',$data);
	}
	public function edit_konfig()
	{
		$id=$this->input->post('id_web');
		$data=array(
			'id_web'	=>$this->input->post('id_web'),
			'nama_web'	=>$this->input->post('nama_web'),
			'email_web'	=>$this->input->post('email_web'),
			'telp_web'	=>$this->input->post('telp_web'),
			'deskripsi'	=>$this->input->post('deskripsi'),
			'share1'	=>$this->input->post('share1'),
			'share2'	=>$this->input->post('share2'),
			'share3'	=>$this->input->post('share3'));
		$aka=$this->user_model->update_konfig($data,$id);
		redirect(base_url('utama/admin/konfigurasi_web'));
	}
	//halaman
	public function halaman()
	{	
		$data=array(
			'halaman'	=>$this->user_model->gethalaman());
		$this->pajangan->kirim('admin/halaman',$data);
	}
	public function ubah_halaman()
	{
		$tc=$this->uri->segment(4);
		$data['data']=$this->user_model->edit_hal($tc);
		$this->pajangan->kirim('admin/edit_halaman',$data);
	}
	public function edit_halaman()
	{
		$id=$this->input->post('id_hal');
		$data=array(
			'id_hal'		=>$this->input->post('id_hal'),
			'menu'			=>$this->input->post('menu'),
			'judul1'		=>$this->input->post('judul1'),
			'judul2'		=>$this->input->post('judul2'),
			'judul3'		=>$this->input->post('judul3'),
			'judul4'		=>$this->input->post('judul4'),
			'deskripsi_hal'	=>$this->input->post('deskripsi_hal'));
		$hal=$this->user_model->updatehalaman($data,$id);
		redirect(base_url('utama/admin/halaman'));
	}
}