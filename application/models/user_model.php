<?php
class User_model extends CI_Model
{
	//user
	public function tes()
	{	
		return $this->db->get('user')->result_array();
	}
	//user cari
	public function tangkap($keyword)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->like('id_user',$keyword);
		$this->db->or_like('nama',$keyword);
		return $this->db->get()->result_array();
	}
	public function insert($simpan)
	{
		return $this->db->insert('user',$simpan);
	}
	public function delete($tiga)
	{
		$this->db->where('id_user',$tiga);
		$query=$this->db->delete('user');
	}
	public function ganti($a)
	{
		$b=$this->db->get_where('user',array('id_user'=>$a));
		return $b;
	}
	public function update($b,$a)
	{
		$this->db->where('id_user',$a);
		$this->db->update('user',$b);
	}
	//produk
	public function kardus()
	{	
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori_produk','kategori_produk.id_kategori=produk.id_kategori');
		$this->db->join('merk','merk.id_merk=produk.id_merk');
		return $this->db->get();
	}
	//relasi
	public function relasi(){
		return $this->db->get('merk');
	}
	public function kat()
	{
		return $this->db->get('kategori_produk');
	}
	public function insert_produk($coba)
	{
		return $this->db->insert('produk',$coba);	
	}
		public function ubah_produk($e)
	{
		$f=$this->db->get_where('produk',array('id_produk'=>$e));
		return $f;
	}
	public function update_produk($g,$h)
	{
		$this->db->where('id_produk',$h);
		$this->db->update('produk',$g);
	}
	public function delete_produk($enam)
	{
		$this->db->where('id_produk',$enam);
		$query=$this->db->delete('produk');
	}
	//detail produk
	public function getproduk($id)
	{
		$this->db->where('id_produk',$id);
   		$data = $this->db->get('produk');
   		return $data;
 	}
 	//pagination produk
 	public function larik()
 	{
		return $this->db->get('produk')->num_rows();
	}
	//customer
	public function masuk()
	{
		$dua=$this->db->get('customer');
		return $dua->result_array();
	}
	public function insert_cus($save)
	{	
		return $this->db->insert('customer',$save);
	}
	public function ubah($e)
	{
		$f=$this->db->get_where('customer',array('id_customer'=>$e));
		return $f;
	}
	public function update_cus($g,$h)
	{
		$this->db->where('id_customer',$h);
		$this->db->update('customer',$g);
	}
	public function delete_cus($enam)
	{
		$this->db->where('id_customer',$enam);
		$query=$this->db->delete('customer');
	}
	//kategori produk
	public function muncul($perPage,$start)
	{
		$cepat=$this->db->get('kategori_produk',$perPage,$start);
		return $cepat->result_array();
	}
	public function insert_kaduk($simpan)
	{	
		return $this->db->insert('kategori_produk',$simpan);
	}
	public function ubah_kaduk($p)
	{
		$k=$this->db->get_where('kategori_produk',array('id_kategori'=>$p));
		return $k;
	}
	public function update_kaduk($o,$m)
	{
		$this->db->where('id_kategori',$m);
		$this->db->update('kategori_produk',$o);
	}
	public function delete_kaduk($s)
	{
		$this->db->where('id_kategori',$s);
		$query=$this->db->delete('kategori_produk');
	}
	//pagination kategori produk
 	public function getpro()
 	{
		return $this->db->get('kategori_produk')->num_rows();
	}
	//merk
	public function menu()
	{
		$s=$this->db->get('merk');
		return $s->result_array();
	}
	public function insert_merk($save)
	{	
		return $this->db->insert('merk',$save);
	}
	public function ubah_merk($we)
	{
		$top=$this->db->get_where('merk',array('id_merk'=>$we));
		return $top;
	}
	public function update_merk($is,$are)
	{
		$this->db->where('id_merk',$are);
		$this->db->update('merk',$is);
	}
	public function delete_merk($he)
	{
		$this->db->where('id_merk',$he);
		$query=$this->db->delete('merk');
	}
 	//order
 	public function order($perPage,$start)
	{
		$data=$this->db->get('order',$perPage,$start);
		return $data->result_array();
	}
 	public function insert_order($save)
 	{
 		return $this->db->insert('order',$save);
 	}
 	public function kirim_order($id)
	{
		$data=$this->db->get_where('order',array('id_order'=>$id));
		return $data;
	}
	public function update_order($tb,$id)
	{
		$this->db->where('id_order',$id);
		$this->db->update('order',$tb);
	}
	public function delete_order($id)
	{
		$this->db->where('id_order',$id);
		$query=$this->db->delete('order');
	}
 	public function getbaris()
 	{
		return $this->db->get('order')->num_rows();
	}
 	public function getorder()
	{
		$this->db->select('*');
		$this->db->from('order');
		$this->db->join('customer','customer.id_customer=order.id_customer');
		$this->db->where('customer.id_customer');
		return $this->db->get();
	}
	public function id_cus()
	{
		return $this->db->get('customer');
	}
	//konfigurasi web
	public function getkonfig()
	{
		return $this->db->get('konfigurasi_web')->result();
	}
	public function edit_konfig($id)
	{
		$data=$this->db->get_where('konfigurasi_web',array('id_web'=>$id));
		return $data;
	}
	public function update_konfig($tb,$id)
	{
		$this->db->where('id_web',$id);
		$this->db->update('konfigurasi_web',$tb);
	}
	//halaman
	public function gethal()
	{
		return $this->db->get('halaman')->result();
	}
	public function edit_hal($id)
	{
		$data=$this->db->get_where('halaman',array('id_hal'=>$id));
		return $data;
	}
	public function update_hal($tb,$id)
	{
		$this->db->where('id_hal',$id);
		$this->db->update('halaman',$tb);
	}
}