<?php
class Customer_model extends CI_Model
{
	/*public function gethalaman($hal)
	{
		$this->db->where('id_hal',$hal);
		return $this->db->get('halaman');
	}*/
	/*public function getfooter($fot)
	{
		$this->db->where('id_footer',$fot);
		return $this->db->get('footer');
	}*/
	public function getweb()
	{
   		return $this->db->get('konfigurasi_web');
	}
	public function gethal()
	{
		return $this->db->get('about');
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
	public function getcek($id)
	{
		$this->db->join('customer','customer.id_customer=checkout.id_customer');
		$this->db->where('customer.id_customer',$id);
		return $this->db->get('checkout');
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