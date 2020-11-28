<!--Thông tin mua hàng-->
<?php get_header() ?>
<div class="spinner" tabindex="-1" role="dialog">

    <div class="loader"></div>
</div>
<div class="col-12 custom-paying">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <!--Thông tin mua hàng-->
            <?php
            $current_user = wp_get_current_user();

            $mail = $current_user->user_email;


            $name = $current_user->display_name;
            $phone = get_user_meta($current_user->ID, 'user_phone', true);

            ?>

            <h4>Thông tin thanh toán</h2>
                <form id="customer-info">
                    <div class="form-group">
                        <!--<label>Tên Đầy Đủ</label>-->
                        <input id="cusName" name="name" type="text" class="form-control" id="full-name" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                        <!--<label>Số Điện Thoại</label>-->
                        <input id="cusPhone" name="phone" type="text" class="form-control" placeholder="SĐT" id="tel-number" value="<?php echo $phone; ?>">
                    </div>
                    <div class="form-group">
                        <!--<label>Email</label>-->
                        <input id="cusMail" name="email" type="email" class="form-control" id="mail" value="<?php echo $mail; ?>">
                    </div>
                    <div class="form-group">
                        <div class="row ">
                            <!--<label>Địa Chỉ</label>-->
                            <div class="col-md-12 col-sm-12 col-12 custom-input-address">
                                <input id="cusAdd" name="address" type="text" class="form-control" placeholder="địa chỉ của bạn" id="address">
                            </div>

                        </div>

                    </div>

                    <div class="form-group">
                        <!--<label for="exampleFormControlTextarea1">Ghi Chú</label>-->
                        <textarea id="notes" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Lưu ý khi giao hàng"></textarea>
                    </div>

                </form>
        </div>
        <div class="col-sm-12 col-md-6 custom-paying-option">
            <?php
            global $woocommerce;
            $items = $woocommerce->cart->get_cart();
            if (count($items) >= 1) {
            ?>
                <div class="cart">
                    <div class="cart-inner">
                        <div class="styles__StyledCartProducts-p4m208-0 jgcBwz">
                            <h2 class="cart-products__title">Giỏ hàng <span class="cart-products__count">(<?php echo WC()->cart->get_cart_contents_count(); ?> sản phẩm)</span></h2>
                            <div class="cart-products-inner">
                                <?php
                                foreach ($items as $item => $values) {
                                    $products =  wc_get_product($values['data']->get_id());
                                    //product image
                                    $getProductDetail = wc_get_product($values['product_id']);
                                    $cart_item_remove_url = wc_get_cart_remove_url($item);

                                ?>
                                    <div class="cart-products__group">

                                        <ul class="cart-products__products">
                                            <li class="cart-products__product">
                                                <div class="cart-products__inner">
                                                    <div class="cart-products__img"><a href="<?php the_permalink(); ?>"><?php echo $getProductDetail->get_image(); ?></a></div>
                                                    <div class="cart-products__content">
                                                        <div class="cart-products__content--inner">
                                                            <div class="cart-products__desc">
                                                                <a class="cart-products__name" href="<?php the_permalink(); ?>"><?php echo $products->get_title(); ?></a>

                                                            </div>
                                                            <div class="cart-products__details">

                                                                <div class="cart-products__qty">
                                                                    <div class="CartQty__StyledCartQty-o1bx97-0 iaIXXn" style="margin-right:80px;"><input type="tel" class="qty-input" value="<?php echo $values['quantity'] ?>"></div>
                                                                </div>
                                                                <script type="text/javascript">
                                                                    $(document).ready(function() {
                                                                        $('.qty-increase').click(function() {
                                                                            var numb = $('.qty-input').val();

                                                                            console.log(<?php echo $products->get_id(); ?>)

                                                                            $.ajax({
                                                                                url: '<?php echo admin_url('admin-ajax.php'); ?>',

                                                                                type: "post",
                                                                                data: {
                                                                                    action: "setquantity",
                                                                                    setquantity: numb,
                                                                                    setproductID: <?php echo $products->get_id(); ?>
                                                                                },
                                                                                success: function(response) {


                                                                                    alert("DONE");
                                                                                },
                                                                                error: function(xhr, status, errorThrown) {
                                                                                    //Here the status code can be retrieved like;
                                                                                    console.log(xhr.status);
                                                                                    console.log(errorThrown);
                                                                                    //The message added to Response object in Controller can be retrieved as following.
                                                                                    console.log(xhr.responseText);
                                                                                }
                                                                            });
                                                                        });
                                                                    });
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="cart-products__gift-items"></ul>
                                            </li>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <h4>Tổng tiền</h4>
            <div class="CartPrices__StyledCartPrices-yhdjkc-0 ENgjL">
                <div class="prices">
                    <ul class="prices__items">
                        <li class="prices__item"><span class="prices__text">Tạm tính</span><span class="prices__value"><?php global $woocommerce;
                                                                                                                        echo $woocommerce->cart->get_cart_total(); ?></span></li>
                    </ul>
                    <p class="prices__total"><span class="prices__text">Tổng tiền</span><span class="prices__value prices__value--final"><?php echo $woocommerce->cart->get_cart_total(); ?></span></p>
                </div>
            </div>
            <!--Phương thức thanh toán-->
            <h4>Phương thức thanh toán</h4>

            <div class="form-check radio-option">
                <input class="form-check-input" type="radio" name="exampleRadios" id="cash" value="option1" checked>
                <label class="form-check-label custom-cash-note custom-paying-method" for="exampleRadios1">
                    Thanh toán khi nhận hàng
                </label>
                <p class="cash-note">* Bạn sẽ phải trả tổng thanh toán, chỉ áp dụng trên lãnh thổ Việt Nam</p>
            </div>
            <div class="form-check radio-option">
                <input class="form-check-input" type="radio" name="exampleRadios" id="transfer" value="option2">
                <label class="form-check-label custom-transfer-note" for="exampleRadios2">
                    Chuyển khoản
                </label>
                <p class="transfer-note">* Bạn sẽ phải chuyển khoản trước cho chúng tôi, bao gồm tổng thanh toán và phí chuyển khoản sau khi xác nhận thanh toán đơn hàng. Lưu ý rằng đơn hàng của bạn sẽ chỉ được gửi đi khi chúng tôi đã nhận được khoản thanh toán của bạn</p>

            </div>
        </div>
    </div>
</div>
<!---->

<div class="col mb-2">
    <div class="row custom-btn">
        <div class="col-sm-12  col-md-6">
            <button class="btn btn-block btn-light custom-btn-back">Tiếp tục mua sắm</button>
        </div>
        <div class="col-sm-12 col-md-6 text-right">
            <button class="btn-paying btn btn-lg btn-block btn-success text-uppercase custom-btn-order">Thanh toán</button>
        </div>
    </div>
</div>


<?php get_footer() ?>
<script type="text/javascript">
    <?php
    global $woocommerce;
    $items = $woocommerce->cart->get_cart();
    $product_args = array();
    $i = 0;
    $jsonArg;
    if (count($items) >= 1) {
        foreach ($items as $item => $values) {
            $products =  wc_get_product($values['data']->get_id());

            array_push($product_args, ['id' => $products->get_id(), 'qty' => $values['quantity']]);
        }


        $jsonArg = json_encode($product_args);
    }
    ?>

    $(document).ready(function() {
        $('.custom-btn-order').click(function() {
            $cusName = $('#cusName').val();
            $cusPhone = $('#cusPhone').val();
            $cusAdd = $('#cusAdd').val();
            $cusMail = $('#cusMail').val();

            function customer(name, phone, add, email) {
                this.name = name;
                this.phone = phone;
                this.add = add;
                this.email = email;
            }
            sessionStorage.setItem('customerInfo', JSON.stringify(new customer($cusName, $cusPhone, $cusAdd, $cusMail)));




            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',

                type: "post",
                data: {
                    action: "order",
                    cusName: $('#cusName').val(),
                    cusAdd: $('#cusAdd').val(),
                    cusMail: $('#cusMail').val(),
                    cusPhone: $('#cusPhone').val(),
                    arg: <?php echo $jsonArg; ?>
                },
                beforeSend: function() {
                    $('.spinner').show();
                },
                complete: function() {
                    $('.spinner').hide();
                },
                success: function(response) {
                    var data = $.trim(response)
                    console.log(data);
                    window.location.replace("http://localhost:88/LBM/hoa-don/");


                },
                error: function(xhr, status, errorThrown) {
                    //Here the status code can be retrieved like;
                    console.log(xhr.status);

                    //The message added to Response object in Controller can be retrieved as following.
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>