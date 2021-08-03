<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function index()
	{
		$data = json_decode(json_encode($this->Product_model->get()), true);
		$data['product_all']=$data;
		$this->load->view('pages/home', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */