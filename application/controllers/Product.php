<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function index()
	{

		$data = json_decode(json_encode($this->Product_model->get()), true);

		
		$this->load->view('pages/detail_product');
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */