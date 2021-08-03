<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getList(){
            return array(
                array('id' => '1', 'name' => 'Quạt điện', 'qty' => '2', 'price' => '10000'),
                array('id' => '2', 'name' => 'Đèn học', 'qty' => '5', 'price' => '20000'),
                array('id' => '3', 'name' => 'Quần áo', 'qty' => '3', 'price' => '200000'),
                array('id' => '4', 'name' => 'Cặp sách', 'qty' => '1', 'price' => '500000')
            );
        }

}

/* End of file Shop_model.php */
/* Location: ./application/models/Shop_model.php */