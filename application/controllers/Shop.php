<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("cart");
	}

	public function index()
	{
		$data['list'] = $this->cart->contents();
        $this->load->view('list_cart', $data);
	}
	public function insert()
    {
        $this->load->model('shop_model');
        $list = $this->shop_model->getList();
        if ($this->cart->insert($list)) {
            echo "Thêm sản phẩm thành công";
        } else{
            echo "Thêm sản phẩm thất bại";
        }
    }
    public function insert1(){
        $data=array(
            "id" => "10",
            "name" => "Máy lạnh",
            "qty" => "10",
            "price" => "400000",
            "option" => array("author" => "Chử Kim Thắng"),
        );
        // Them san pham vao gio hang
        if($this->cart->insert($data)){
             echo "Them san pham thanh cong";
        }else{
            echo "Them san pham that bai";
        }
	}

    public function delete($rowid)
    {
        $this->cart->update(array('rowid' => $rowid, 'qty' => 0));
        //$this->my_function->php_redirect(BASE_URL.'/index.php/shop/index');
        $data['list'] = $this->cart->contents();
        $this->load->view('list_cart', $data);
    }

    public function deleteAll(){
        $this->cart->destroy();
        echo "Done";
    }

}

/* End of file Shop.php */
/* Location: ./application/controllers/Shop.php */