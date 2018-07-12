<?php
class User_model extends CI_Model
{
	//user
	public function tes()
	{	
		return $this->db->get('user')->result_array();
		/*
		$satu=$this->db->get("user");
		return $satu->result_array(); */
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
	public function kardus($perPage,$start)
	{
		$get=$this->db->get('produk',$perPage,$start);
		return $get->result_array();

		//return $this->db->get('produk')->result_array();
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
	//detail merk
	public function getproduk()
	{
   		$this->db->select('*');
   		$this->db->from('produk');
   		$data = $this->db->get();
   		return $data->result();
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
	//detail merk
	public function getmerk()
	{
   		$this->db->select('*');
   		$this->db->from('merk');
   		$data = $this->db->get();
   		return $data->result();
 	}
}