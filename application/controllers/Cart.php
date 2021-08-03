<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function index()
	{
		$this->load->view('pages/cart');
	}
	public function insert($id){
		$where = ['id' => $id];

		$product = $this->Product_model->get($where);		
		
		
        $data=array(
            "id" => "$product->id",
            "name" => "$product->name",
            "qty" => "1",
            "price" => "$product->price",
            "image_link" => "$product->image_link",
            "product_code" => "$product->product_code"            
        );


        
        // Them san pham vao gio hang
        if($this->cart->insert($data)){
             echo "Thêm sản phẩm vào giỏ hàng thành công";
             $data = $this->cart->contents();
             $data['cart_list'] = $data;
             $this->load->view('pages/cart', $data);
        }else{
            echo "Them san pham that bai";
        }
	}
	public function delete($rowid)
    {
        $this->cart->update(array('rowid' => $rowid, 'qty' => 0));
        $data = $this->cart->contents();
	    $data['cart_list'] = $data;
	    $this->load->view('pages/cart', $data);
    }
    public function update()
	{
	    //buoc1: Lay toan bo san pham trong gio hang
	    $carts = $this->cart->contents();
	    //Bước 2: lay id cua san pham muốn cập nhật
	    //$id = '8';
	    foreach ($carts as $key => $value)
	    {	         
	    	$qty_update = $this->input->post('qty_'.$value['id']);
	        $data = ['rowid' => $key, 'qty' => $qty_update];
	        $this->cart->update($data);
	    }	
	    $data = $this->cart->contents();
	    $data['cart_list'] = $data;
	    $this->load->view('pages/cart', $data); 
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */