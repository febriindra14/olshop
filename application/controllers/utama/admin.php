<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{	
	function __construct()
	{
		parent:: __construct();
		$this->load->library('pajangan');
	} 
	public function index()
	{	
		$this->pajangan->kirim('admin/depan');
	}

	// user
	public function tampil()
	{	
		$data['coba']=$this->user_model->tes();
		$this->pajangan->kirim('admin/user_view',$data);
		/*
		$pertama=$this->user_model->tes();
		$this->pajangan->kirim('admin/user_view',array('coba'=>$pertama)); */
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
			'password'		=>$this->input->post('password'),
			'hak_akses'		=>$this->input->post('hak_akses'));
		$this->user_model->insert($save);
		redirect(base_url('index.php/utama/admin/tampil'));
	}
	public function hapus()
	{
		$satu=$this->uri->segment(4);
		$dua=$this->user_model->delete($satu);
		redirect(base_url('index.php/utama/admin/tampil'));
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
			'password'		=>$this->input->post('password'),
			'hak_akses'		=>$this->input->post('hak_akses'));
		$c=$this->user_model->update($b,$a);
		redirect(base_url('index.php/utama/admin/tampil'));
	}
	
	
	//halaman
	public function halaman()
	{
		$this->pajangan->kirim('admin/halaman');
	}

	// kategori produk
	public function kategori_produk()
	{
		$ketiga=$this->user_model->muncul();
		$this->pajangan->kirim('admin/kategori_produk',array('kirim'=>$ketiga));
	}
	public function form_kaduk()
	{
		$this->pajangan->kirim('admin/tambah_kategori');
	}
	public function tambah_kaduk()
	{
		$save=array(
			'id_kategori'=>$this->input->post('id_kategori'),
			'nama_kategori'=>$this->input->post('nama_kategori'));
		$this->user_model->insert_kaduk($save);
		redirect(base_url('index.php/utama/admin/kategori_produk'));
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
			'nama_kategori'	=>$this->input->post('nama_kategori'));
		$y=$this->user_model->update_kaduk($x,$z);
		redirect(base_url('index.php/utama/admin/kategori_produk'));
	}
	public function hapus_kaduk()
	{
		$w=$this->uri->segment(4);
		$r=$this->user_model->delete_kaduk($w);
		redirect(base_url('index.php/utama/admin/kategori_produk'));
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
		$config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '8000';
        $config['max_width'] = '8000';
        $config['max_height'] = '4000';
      $this->upload->initialize($config);
      $this->load->library('upload', $config);
      $this->upload->do_upload('gambar');
      
    	$coba = $this->upload->data();
		$ve=array(
			'id_merk'=>$this->input->post('id_merk'),
			'nama_merk'=>$this->input->post('nama_merk'),
			'gambar' =>$coba['file_name']);
		$this->user_model->insert_merk($ve);
		redirect(base_url('index.php/utama/admin/merk'));
	}
	public function ganti_merk()
	{
		$r=$this->uri->segment(4);
		$m['tau']=$this->user_model->ubah_merk($r);
		$this->pajangan->kirim('admin/edit_merk',$m);
	}
	public function edit_merk()
	{
		$config['upload_path'] = './assets/images/';
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
			'nama_merk'	=>$this->input->post('nama_merk'),
			'gambar'	=>$coba['file_name']);
		$q=$this->user_model->update_merk($v,$b);
		redirect(base_url('index.php/utama/admin/merk'));
	}
	public function hapus_merk()
	{
		$n=$this->uri->segment(4);
		$m=$this->user_model->delete_merk($n);
		redirect(base_url('index.php/utama/admin/merk'));
	}
	//detail merk produk
	 public function detailmerk()
	{
  		$data['detail'] = $this->user_model->getmerk();
  		$this->pajangan->kirim('admin/detail_merk', $data);
	}

	//produk
	public function produk()
	{	
		$data['produk']=$this->user_model->kardus();
		$this->pajangan->kirim('admin/produk',$data);
	}
	public function form_produk()
	{
     	$this->pajangan->kirim('admin/tambah_produk');
	}
	public function tambahproduk()
	{
		$config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '8000';
        $config['max_width'] = '8000';
        $config['max_height'] = '4000';
      $this->upload->initialize($config);
      $this->load->library('upload', $config);
      $this->upload->do_upload('foto');

    	$file = $this->upload->data();
          $data = array(  
           'id_produk' => $this->input->post('id_produk'),
           'id_kategori' => $this->input->post('id_kategori'),
           'id_merk' => $this->input->post('id_merk'),
           'nama_produk' => $this->input->post('nama_produk'),
           'bahan' => $this->input->post('bahan'),
           'warna' => $this->input->post('warna'),
           'deskripsi' => $this->input->post('deskripsi'),
       	   'harga' => $this->input->post('harga'),
       	   'foto' => $file['file_name']);
          $this->user_model->insert_produk($data); 
          redirect(base_url('index.php/utama/admin/produk')); 
	  }
	 

	  public function editproduk()
	{
		$c=$this->uri->segment(4);
		$d['kiriman']=$this->user_model->ubah_produk($c);
		$this->pajangan->kirim('admin/edit_produk',$d);
	}
	public function proses_edit()
	{
		$config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '8000';
        $config['max_width'] = '8000';
        $config['max_height'] = '4000';
      $this->upload->initialize($config);
      $this->load->library('upload', $config);
      $this->upload->do_upload('foto');

    	$file = $this->upload->data();

		$c=$this->input->post('id_produk');
		$d=array(
			'id_produk'			=>$this->input->post('id_produk'),
			'id_kategori'			=>$this->input->post('id_kategori'),
			'id_merk'			=>$this->input->post('id_merk'),
			'nama_produk'			=>$this->input->post('nama_produk'),
			'bahan'			=>$this->input->post('bahan'),
			'warna'		=>$this->input->post('warna'),
			'deskripsi'			=>$this->input->post('deskripsi'),
			'harga'		=>$this->input->post('harga'),
			'foto'		=>$file['file_name']);
		$e=$this->user_model->update_produk($d,$c);
		redirect(base_url('index.php/utama/admin/produk'));
	}
	public function hapusproduk()
	{
		$empat=$this->uri->segment(4);
		$lima=$this->user_model->delete_produk($empat);
		redirect(base_url('index.php/utama/admin/produk'));
	}
	//detail produk
	 public function detailproduk()
	{
  		$data['ayo'] = $this->user_model->getproduk();
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
			'id_customer'=>$this->input->post('id_customer'),
			'id_user'=>$this->input->post('id_user'),
			'tgl_lahir'=>$this->input->post('tgl_lahir'),
			'kode_pos'=>$this->input->post('kode_pos'),
			'no_telp'=>$this->input->post('no_telp'),
			'no_rekening'=>$this->input->post('no_rekening'),
			'alamat'=>$this->input->post('alamat'));
		$this->user_model->insert_cus($simpan);
		redirect(base_url('index.php/utama/admin/customer'));
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
			'id_customer'		=>$this->input->post('id_customer'),
			'id_user'			=>$this->input->post('id_user'),
			'tgl_lahir'			=>$this->input->post('tgl_lahir'),
			'kode_pos'			=>$this->input->post('kode_pos'),
			'no_telp'			=>$this->input->post('no_telp'),
			'no_rekening'		=>$this->input->post('no_rekening'),
			'alamat'			=>$this->input->post('alamat'));
		$e=$this->user_model->update_cus($d,$c);
		redirect(base_url('index.php/utama/admin/customer'));
	}
	public function hapus_cus()
	{
		$empat=$this->uri->segment(4);
		$lima=$this->user_model->delete_cus($empat);
		redirect(base_url('index.php/utama/admin/customer'));
	}

	//order
	public function order()
	{
		$this->pajangan->kirim('admin/order');
	}

	//konfigurasi web
	public function konfigurasi_web()
	{
		$this->pajangan->kirim('admin/konfigurasi_web');
	}
}