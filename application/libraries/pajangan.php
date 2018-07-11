<?php
class Pajangan
{
	protected $ini;
	function __construct(){
		$this->ini =& get_instance();
	}
	function kirim($bagian,$data=null)
	{
		$data['isi']=$this->ini->load->view($bagian,$data,true);
		$this->ini->load->view('admin/admin_view',$data);
	}
}