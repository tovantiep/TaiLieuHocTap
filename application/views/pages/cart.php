<?php $this->load->view('./inc/header'); ?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail clearfix">
                <h3 class="title fl-left">Giỏ hàng</h3>
                <ul class="list-breadcrumb fl-right">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Giỏ hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>Ảnh sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Số lượng</td>
                            <td colspan="2">Thành tiền</td>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="<?= base_url() ?>Cart/update" method="POST">
                        <?php foreach ($cart_list as $value): ?>
                            
                        <tr>
                            <td><?= $value['product_code'] ?></td>
                            <td>
                                <a href="" title="" class="thumb">
                                    <img src="<?= base_url() ?>images/product/<?= $value['image_link'] ?>" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="" title="" class="name-product"><?= $value['name'] ?></a>
                            </td>
                            <td><?= $value['price'] ?>đ</td>
                            <td>
                                <input type="text" name="qty_<?= $value['id'] ?>" value="<?= $value['qty'] ?>" class="num-order">
                            </td>
                            <td><?= $value['subtotal'] ?></td>
                            <td>
                                <a href="<?= base_url() ?>Cart/delete/<?= $value['rowid'] ?>" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <p id="total-price" class="fl-right">Tổng giá: <span><?php echo $this->cart->total(); ?>đ</span></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <div class="fl-right">
                                        <!-- <a href="" title="" id="update-cart">Cập nhật giỏ hàng</a> -->
                                        <input id="update-cart" type="submit" value="Cập nhật giỏ hàng">
                                        <a href="?page=checkout" title="" id="checkout-cart">Thanh toán</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                    </form>
                </table>
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br/>
                <a href="" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('./inc/footer'); ?>