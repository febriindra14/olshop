<?php
class Customer_model extends CI_Model
{
	public function getcheckout($id)
	{
		return $this->db->insert('checkout',$id);
	}
	//customer
	public function insert_customer($simpan)
	{	
		return $this->db->insert('customer',$simpan);
	}
	public function getakun($id)
	{
		$this->db->select('*');
   		$this->db->from('customer');
   		$this->db->where('id_customer',$id);
   		$data = $this->db->get();
   		return $data->result();
	}
	public function login_customer($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get('customer');
		return $query->num_rows();
	}
	public function data_login($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get('customer')->row();
	}
	public function getcart($data_produk)
	{	
		return $this->db->insert('cart',$data_produk);
	}
	public function delete_cart($hapus)
	{
		$this->db->where('id_cart',$hapus);
		$query=$this->db->delete('cart');
	}
	public function getshipping($save)
	{
		return $this->db->insert('shipping',$save);
	}
	public function gethitung($id)
	{
		$hitung=0;
		$table=$this->db->where('id_customer',$id)->get('cart');
		foreach ($table->result() as $key => $p) {
			$hitung +=str_replace('', '', $p->total_harga);		
		}

		return $hitung;
	}
	public function getbayar($id)
	{
		$this->db->select('*');
   		$this->db->from('cart');
   		$this->db->where('id_customer',$id);
   		$data = $this->db->get();
   		return $data->result();
	}
	public function gerobak($id)
	{
		$this->db->select('*');
   		$this->db->from('cart');
   		$this->db->where('id_customer',$id);
   		$data = $this->db->get();
   		return $data->result();
	}
	//home
	public function getutama()
	{
		$this->db->select('*');
   		$this->db->from('produk');
   		$data = $this->db->get();
   		return $data->result();
	}
	//list
	public function getlist()
	{
		$this->db->select('*');
   		$this->db->from('produk');
   		$data = $this->db->get();
   		return $data->result();
	}
	//grid
	public function getgrid()
	{
		$this->db->select('*');
   		$this->db->from('produk');
   		$data = $this->db->get();
   		return $data->result();
	}
	//tricolom
	public function gettricol()
	{
		$this->db->select('*');
   		$this->db->from('produk');
   		$data = $this->db->get();
   		return $data->result();
	}
	//4 colom
	public function getfourcol()
	{
		$this->db->select('*');
   		$this->db->from('produk');
   		$data = $this->db->get();
   		return $data->result();
	}
	public function getkategori()
	{
		$this->db->select('*');
   		$this->db->from('kategori_produk');
   		$data = $this->db->get();
   		return $data->result();
	}
	//fashion
	public function getfashion($id)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori_produk','kategori_produk.id_kategori=produk.id_kategori');
		$this->db->where('kategori_produk.id_kategori',(int)$id);
		$query=$this->db->get();

		return $query->result();
	}
	public function getdetail($id)
	{
   		$this->db->where('id_produk',$id);
   		$data = $this->db->get('produk');
   		return $data;
	}
	public function getall($id)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('merk','merk.id_merk=produk.id_merk');
		$this->db->where('merk.id_merk',(int)$id);
		$send=$this->db->get();
		return $send->result();
	}
	public function getmerk()
	{		
		$this->db->select('*');
   		$this->db->from('merk');
   		$data = $this->db->get();
   		return $data->result();
	}
	public function getorder()
	{
		$this->db->select('*');
		$this->db->from('checkout');
		$this->db->join('order','order.id_order=checkout.id_order');
		$this->db->where('order.id_order');
		$kirim=$this->db->get();
		return $kirim->result();
	}
	public function getrelasi()
	{
		$this->db->select('*');
		$this->db->from('order');
		$this->db->join('customer','customer.id_customer=order.id_customer');
		$this->db->where('customer.id_customer');
		$data=$this->db->get();
		return $data->result();
	}
	public function getid($id)
	{
		return $this->db->insert('order',$id);
	}
}