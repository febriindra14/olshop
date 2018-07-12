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
	public function produk()
	{
		$this->pajangan->kiriman('customer/produk');
	}
}