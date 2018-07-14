<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pajangan');
	}
	public function index()
	{
		$this->pajangan->kiriman('customer/utama');
	}
	public function fashion()
	{
		$this->pajangan->kiriman('customer/fashion');
	}
	public function register()
	{
		$this->pajangan->kiriman('customer/registrasi');
	}
	public function kontak()
	{
		$this->pajangan->kiriman('customer/kontak');
	}
	public function keranjang()
	{
		$this->pajangan->kiriman('customer/keranjang');
	}
	public function list()
	{
		$this->pajangan->kiriman('customer/list');
	}
	public function grid()
	{
		$this->pajangan->kiriman('customer/grid');
	}
	public function tigacol()
	{
		$this->pajangan->kiriman('customer/tigacolom');
	}
	public function empatcol()
	{
		$this->pajangan->kiriman('customer/empatcolom');
	}
	public function tentang()
	{
		$this->pajangan->kiriman('customer/tentang');
	}
}