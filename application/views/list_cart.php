<h1 style="text-align: center; margin-top: 100px;">Your Cart</h1>
    <table border="1" width="700px" style="text-align: center; margin: 1px 300px;">
        <tr>
            <td>Index</td>
            <td>Name</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>Amount</td>
            <td>Action</td>
        </tr>
        <?php $count = 1;
        foreach ($list as $p) { ?>
        <tr>
            <td><?php echo $count++; ?></td>
            <td><?php echo $p['name']; ?></td>
            <td><?php echo $p['qty']; ?></td>
            <td><?php echo number_format($p['price']); ?></td>
            <td><?php echo number_format($p['subtotal']); ?></td>
            <td><a href="<?= base_url() ?>shop/delete/<?php echo $p['rowid'];?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
    <div style="margin-left: 300px;">
        <h2>Tổng giá: <?php echo $this->cart->format_number($this->cart->total()); ?></h2>
    </div>