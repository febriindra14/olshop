<?php
class Customer_model extends CI_Model
{
	public function getweb()
	{
   		return $this->db->get('konfigurasi_web');
	}
	public function get_search($title){
		$this->db->like('nama_produk', $title , 'both');
		$this->db->order_by('nama_produk', 'ASC');
		$this->db->limit(10);
		return $this->db->get('produk')->result();
	} 
	public function getcheckout($data)
	{
		return $this->db->insert('checkout',$data);
	}
	//order
	public function getid($id)
	{
		return $this->db->insert('order',$id);
	}
	public function getkonfirm($id=null,$f=null)
	{
		if(!empty($id)&&$this->db->where('keterangan',$f)){
			$this->db->where('id_customer',$id);
		}
		return $this->db->order_by('id_order','DESC')->get('order');
	}
	public function getbeda($idorder=null)
	{
		if(!empty($idorder)){
			$this->db->where('id_order',$idorder);
		}
		return $this->db->order_by('id_order','DESC')->get('order');
	}
	public function getkonfirmasi($data,$id_order)
	{
		return $this->db->where('id_order',$id_order)->update('order',$data);
	}
	public function getambil($id)
	{
		$this->db->join('customer','customer.id_customer=order.id_customer');
		$this->db->where('customer.id_customer',$id);
		return $this->db->get('order');
	}
	public function getcek($idorder=null) 
	{ 
		$this->db->join('order','order.id_order=checkout.id_order');
		if (!empty($kode)) {
			$this->db->where('order.id_order',$idorder);
		}

		return $this->db->order_by('id_checkout','DESC')->get('checkout');
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
	public function getcart($data)
	{	
		return $this->db->insert('cart',$data);
	}
	public function getautoproduk($data,$id_produk,$id)
	{
		return $this->db->where('id_produk',$id_produk)->where('id_customer',$id)->update('cart',$data); 
	}
	public function getulang($id)
	{
		$this->db->join('customer','customer.id_customer=cart.id_customer');
		$this->db->where('customer.id_customer',$id);
		return $this->db->get('cart');
	}
	public function getubah($id,$data)
	{
		return $this->db->where('id_cart',$id)->update('cart',$data);
	}
	public function delete_cart($hapus)
	{
		$this->db->where('id_cart',$hapus);
		$query=$this->db->delete('cart');
	}
	public function delete_item($id)
	{
		$this->db->where('id_customer',$id);
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
   		$this->db->limit(3);
   		return $this->db->get('produk')->result();
	}
	public function gettengah()
	{
		$this->db->where('warna','emas');
   		$this->db->limit(3);
   		return $this->db->get('produk')->result();
	}
	public function getmore()
	{
   		return $this->db->get('produk')->result();
	}
	//list
	public function getlist()
	{
		return $this->db->get('produk')->result();
	}
	public function getside()
	{
		$this->db->where('bahan','emas');
		$this->db->limit(3);
   		return $this->db->get('produk')->result();
	}
	//grid
	public function getgrid()
	{
		return $this->db->get('produk')->result();
	}
	public function getbar()
	{
		$this->db->where('warna','emas');
		$this->db->limit(3);
   		return $this->db->get('produk')->result();
	}
	//threcolom
	public function gettricol()
	{
		return $this->db->get('produk')->result();
	}
	//fourcolom
	public function getfourcol()
	{
		return $this->db->get('produk')->result();
	}
	public function getkategori()
	{
		return $this->db->get('kategori_produk')->result();
	}
	public function getkat($id) 
	{ 
		$this->db->join('merk','merk.id_merk=produk.id_merk')->join('kategori_produk','kategori_produk.id_kategori=produk.id_kategori');

		if (!empty($id)) {
			$this->db->where('kategori_produk.id_kategori',$id);
			$this->db->or_where('merk.id_merk',$id);
		}
		
		return $this->db->get('produk');
	} 
	public function getsamping()
	{
		$this->db->limit(3);
		$this->db->where('bahan','emas');
   		return $this->db->get('produk')->result();
	}
	public function getreg()
	{
		$this->db->limit(3);
		$this->db->where('harga','400000');
   		return $this->db->get('produk')->result();
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
	public function getsebelah()
	{
		$this->db->limit(3);
		$this->db->where('harga','400000');
   		return $this->db->get('produk')->result();
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
		return $this->db->get('merk')->result();
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
}	