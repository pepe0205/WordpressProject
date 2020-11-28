<?php get_header() ?>
<main>
    <div class="Container-itwfbd-0 jFkAwY">
        <div style="margin:auto" width="64" color="#189eff" class="Loader__Root-c26pk3-0 kbBufS">
            <div class="styles__StyledCartPage-sc-1n0ze23-0 BTbnH">
                <?php
                    global $woocommerce;
                    $items = $woocommerce->cart->get_cart();
                    if(count($items)>=1){
                                 ?>
                <div class="cart">
                    <div class="cart-inner">
                        <div class="styles__StyledCartProducts-p4m208-0 jgcBwz">
                            <h2 class="cart-products__title">Giỏ hàng <span class="cart-products__count">(<?php echo WC()->cart->get_cart_contents_count();?> sản phẩm)</span></h2>
                            <div class="cart-products-inner">
                                <?php 
                                    foreach($items as $item => $values) { 
                                        $products =  wc_get_product( $values['data']->get_id() );
                                        //product image
                                        $getProductDetail = wc_get_product( $values['product_id'] );
                                        $cart_item_remove_url = wc_get_cart_remove_url($item);
                                         
                                                ?>
                                <div class="cart-products__group">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" size="20" color="#787878" height="20" width="20" xmlns="http://www.w3.org/2000/svg" style="color: rgb(120, 120, 120);">
                                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                                    </svg>
                                    <ul class="cart-products__products">
                                        <li class="cart-products__product">
                                            <div class="cart-products__inner">
                                                <div class="cart-products__img"><a href="<?php  the_permalink();?>"><?php echo $getProductDetail->get_image();?></a></div>
                                                <div class="cart-products__content">
                                                    <div class="cart-products__content--inner">
                                                        <div class="cart-products__desc">
                                                            <a class="cart-products__name" href="<?php  the_permalink();?>"><?php echo $products->get_title();?></a>
                                                            <p class="cart-products__actions"><span class="cart-products__del" 
                                                                onclick="window.location.href='<?php echo $cart_item_remove_url;?>';">Xóa</span><span class="cart-products__buy-later">Để dành mua sau</span></p>
                                                        </div>
                                                        <div class="cart-products__details">
                                                            <div class="cart-products__pricess">
                                                                <?php if($products->is_on_sale()){    ?>
                                                                <p class="cart-products__real-prices"><?php echo $products->get_price_html();?>
                                                                    <span class="cart-products__percent-prices">-<?php echo percentSale($products->get_regular_price(),$products->get_sale_price());?>%</span>
                                                                </p>
                                                                <?php }else{ ?>
                                                                <p class="cart-products__real-prices"><?php echo $products->get_price_html();?></p>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="cart-products__qty">
                                                                <div class="CartQty__StyledCartQty-o1bx97-0 iaIXXn"><span class="qty-decrease qty">-</span><input type="tel" class="qty-input" value="<?php echo $values['quantity']?>"><span class="qty-increase ">+</span></div>
                                                            </div>
                                                            <script type="text/javascript">
                                                                $(document).ready(function(){
                                                                $('.qty-increase').click(function(){
                                                                var numb=$('.qty-input').val();
                                                                
                                                                console.log(<?php echo $products->get_id();?>)
                                                                
                                                                $.ajax({
                                                                url : '<?php echo admin_url('admin-ajax.php');?>',
                                                                
                                                                type : "post",
                                                                data : {
                                                                action : "setquantity",
                                                                setquantity : numb,
                                                                setproductID : <?php echo $products->get_id();?>
                                                                },
                                                                success : function (response){
                                                                
                                                                console.log(response);
                                                                
                                                                alert("DONE");
                                                                },
                                                                error: function (xhr, status, errorThrown) {
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
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="cart-total-prices">
                        <div class="cart-total-prices__inner">
                            <div class="styles__StyledCartCoupon-sc-166rx9n-0 escOkF">
                                <div class="title-usage">
                                    <p class="coupon-title">Mã khuyến mãi</p>
                                    <p class="max-usage">Có thể chọn 2<img class="max-usage__info" src="https://frontend.tikicdn.com/_desktop-next/static/img/mycoupon/icons-info-gray.svg" alt="info"></p>
                                </div>
                                <div class="eligible_coupon_list"></div>
                                <div class="show-more"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/mycoupon/coupon_icon.svg"><span>Chọn hoặc nhập Khuyến mãi </span></div>
                            </div>
                            <div class="CartPrices__StyledCartPrices-yhdjkc-0 ENgjL">
                                <div class="prices">
                                    <ul class="prices__items">
                                        <li class="prices__item"><span class="prices__text">Tạm tính</span><span class="prices__value"><?php echo $woocommerce->cart->get_cart_total();?></span></li>
                                    </ul>
                                    <p class="prices__total"><span class="prices__text">Thành tiền</span><span class="prices__value prices__value--final"><?php echo $woocommerce->cart->get_cart_total();?><i>(Đã bao gồm VAT nếu có)</i></span></p>
                                </div>
                            </div>
                            <button type="button" class="cart__submit">Tiến hành đặt hàng</button>
                        </div>
                    </div>
                </div>
                <?php }else{ ?>
                <div type="error" class="CartNotice__StyledCartNotice-sc-1b5bk36-0 XqEPK">
                    <div class="messages">
                        <p class="messages__inner">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" size="20" class="messages__icon" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.59 8L12 10.59 9.41 8 8 9.41 10.59 12 8 14.59 9.41 16 12 13.41 14.59 16 16 14.59 13.41 12 16 9.41 14.59 8zM12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                            </svg>
                            <span class="messages__text">Giỏ hàng không có sản phẩm. Vui lòng thực hiện lại.</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="CartEmpty__StyledCartEmpty-sc-1vx42mq-0 dExlGl">
                        <h2>Giỏ hàng <span>(0 sản phẩm)</span></h2>
                        <div class="empty">
                            <img src="https://salt.tikicdn.com/desktop/img/mascot@2x.png" alt="" class="empty__img">
                            <p class="empty__note">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
                            <a href="/" class="empty__btn">Tiếp tục mua sắm</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    $(document).ready(function () {
$('.cart__submit').click(function () {
     <?php 
       if (get_current_user_id()) {
        ?> 
        window.location.replace("http://localhost:88/LBM/thanh-toan/");
        <?php

       }else{ 
        ?>
        $('.ReactModal__Overlay--after-open').css('display','block');
        <?php
       }

         
       
    ?>
    });
});
</script>
<?php get_footer() ?>