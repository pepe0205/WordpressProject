<!DOCTYPE html>
<html lang="en">
<?php get_header(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <title>Hóa đơn</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="invoice-title">
                    <h2>Đơn Đặt Hàng</h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6">

                        <address>
                            <p class="custom-title"><strong>Khách hàng: </strong><span class="cus-name">Name</span></p>
                            <p class="custom-title"><strong>Số điện thoại: </strong><span class="cus-phone">0911</span></p>
                            <p class="custom-title"><strong>Giao tới địa chỉ: </strong><span class="cus-address">Quận Phú Nhuận</span></p>
                            <p class="custom-title"><strong>Email: </strong><span class="cus-mail">Không có</span></p>


                        </address>
                    </div>

                </div>
                <div class="row">

                    <div class="col-xs-6">
                        <address>
                            <strong>Ngày đặt hàng:<span class="custom-order-date">01/07/2019</span></strong>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Sản phẩm đã đặt</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th scope="col"> </th>
                                        <th class="custom-name" scope="col">Sản phẩm</th>

                                        <th class="custom-quantity" scope="col" class="text-center">Số lượng</th>
                                        <th class="custom-price" scope="col" class="text-right">Giá</th>
                                        <th> </th>
                                    </tr>
                                    <?php
                                    global $woocommerce;
                                    $items = $woocommerce->cart->get_cart();
                                    if (count($items) >= 1) {
                                        foreach ($items as $item => $values) {
                                            $products =  wc_get_product($values['data']->get_id());
                                            //product image
                                            $getProductDetail = wc_get_product($values['product_id']);
                                            $Sale = number_format($products->get_sale_price(), 0, ",", ".");


                                    ?>
                                            <tr>
                                                <td><?php echo $getProductDetail->get_image(); ?></td>
                                                <td><?php echo $products->get_title(); ?></td>
                                                <td><?php echo $values['quantity']; ?></td>
                                                <?php if ($products->is_on_sale()) { ?>
                                                    <td><?php echo $Sale . "đ"; ?></td>
                                                <?php } else { ?>
                                                    <td><?php echo $products->get_price_html(); ?></td>
                                                <?php } ?>


                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </thead>
                                <tbody class="product-item">


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button class="btn-paying btn btn-lg btn-block btn-success text-uppercase custom-btn-back-home">Trang chủ</button>
            </div>
        </div>
    </div>



</body>

</html>
<?php get_footer(); ?>
<?php global $woocommerce; ?>

<script>
    var customerInfo = JSON.parse(sessionStorage.getItem('customerInfo'));
    $('.custom-order-date').text("<?php echo date("F j, Y"); ?>");
    $('.cus-name').text(customerInfo.name);
    $('.cus-phone').text(customerInfo.phone);
    $('.cus-address').text(customerInfo.add);
    $('.cus-mail').text(customerInfo.email);
    $('.custom-btn-back-home').click(function() {
        sessionStorage.removeItem('customerInfo');
        <?php $woocommerce->cart->empty_cart(); ?>
        window.location.replace("<?php echo home_url(); ?>");

    });
</script>