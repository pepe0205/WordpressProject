 <?php	
 	function percentSale($price,$price_sale){
		$sale = ($price_sale*100)/$price;
		$percent=100-$sale;
		return number_format($percent);
	}
		function thachpham_load_theme_style()
		{
			wp_enqueue_style('parent-styles', get_template_directory_uri() . '/style.css');
			wp_enqueue_style('child-styles', get_stylesheet_directory_uri() . '/style.css', array('parent-styles'));
		}
		add_action('wp_enqueue_scripts', 'thachpham_load_theme_style', 15);

		//------------------tiki-header-----------------------//
		add_action('shopper_header', 'tiki_product_search', 35);
		add_action('shopper_header', 'tiki_cart', 50);
		add_action('shopper_header', 'tiki_header_logo', 32);
		add_action('shopper_header', 'tiki_header_account', 40);
		add_action('shopper_header', 'tiki_header_top', 4);
		add_action('shopper_header', 'tiki_header_bottom', 60);

		function tiki_header_bottom()
		{
		?>
	<div style="position:relative;display:flex;align-items:center;justify-content:space-between;height:40px" class="Container-itwfbd-0 jFkAwY">
		<div class="Menu__Wrapper-sc-1cav2m-0 jLgptr"><a class="Menu-button"><i class="Menu-icon tikicon icon-burger-menu"></i><span>DANH MỤC SẢN PHẨM</span></a></div>
		<div class="Location__Wrapper-sc-1abff9p-0 cGQBXq"><a data-view-id="header_location_picker"><i class="tikicon icon-location-picker"></i><span>Bạn muốn giao hàng tới đâu?</span></a>
			<div style="display:none" class="Location__TooTip-sc-1abff9p-1 hxjWDx"><a class="icon" title="Ẩn"><i class="tikicon icon-circle-close"></i></a>
				<p>Bạn ơi hãy chọn địa chỉ giao hàng của bạn để có trải nghiệm mua sắm tốt nhất nhé</p>
			</div>
		</div>
		<div data-view-id="header_bottom_icons_recently_view" class="RecentlyView__Wrapper-sc-1ce2e7i-0 jojljn"><a class="RecentlyView__Button-sc-1ce2e7i-1 PZSel"><i class="tikicon icon-arrow-down"></i><span>Sản phẩm <br>bạn đã xem</span></a>
			<div class="RecentlyView__View-sc-1ce2e7i-2 fFfYcb">
				<div class="Container-itwfbd-0 jFkAwY">
					<div class="content" data-view-id="header_bottom_recently_view_container">
						<p class="empty">Bạn chưa xem sản phẩm nào.<br>Hãy tiếp tục khám phá Tiki, các sản phẩm bạn đã xem sẽ hiển thị ở đây!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="Bottom__LinkContainer-azeq0g-1 jTePei"><a data-view-id="header_bottom_icons_tiki_card" href="/chuong-trinh/mo-the-tikicard?src=header_tikicard" target="_blank" class="Bottom__Link-azeq0g-2 kOJvlh"><img class="tikicon" src="https://frontend.tikicdn.com/_desktop-next/static/img/tiki-card.svg" width="64"><span>Hoàn tiền<br>15%</span></a><a data-view-id="header_bottom_icons_tikinow" href="/chuong-trinh/tikinow-uu-dai-tiet-kiem?src=header_tikinow_fast" target="_blank" class="Bottom__Link-azeq0g-2 kOJvlh"><i class="tikicon icon-tikinow"></i><span>Giao nhanh<br>2h &amp; hôm sau</span></a><a data-view-id="header_bottom_icons_tiki_fresh" href="/thuc-pham-tuoi-song/c44792?src=header_tikingon" target="_blank" class="Bottom__Link-azeq0g-2 kOJvlh"><img class="tikicon" src="https://salt.tikicdn.com/ts/upload/c1/cc/d0/6dc657167181c1b6b93c8da654dddac3.png" width="64"><span>Thực phẩm<br>tươi sống</span></a><a data-view-id="header_bottom_icons_genuine" class="Bottom__Link-azeq0g-2 kOJvlh"><i class="tikicon icon-exclusive"></i><span>Sản phẩm<br>chính hiệu</span></a><a data-view-id="header_bottom_icons_return" href="/doi-tra-de-dang?src=header_return_policy" target="_blank" class="Bottom__Link-azeq0g-2 kOJvlh"><i class="tikicon icon-return"></i><span>30 ngày<br>đổi trả</span></a></div>
	</div>
<?php
		}
		function tiki_header_top()
		{
?>
	<div class="Banner__Main-mia9n0-0 eWwVQn"><a data-view-id="header_top_banner" title="https://tiki.vn/chuong-trinh/heineken" href="https://tiki.vn/chuong-trinh/heineken?src=topbar.b53739" target="_blank" class="visible-lg visible-md" rel="noreferrer">
			<div class="top-bar-wrap" style="height: 50px; background-repeat: no-repeat; background-position: center center; background-size: auto 50px; background-image: url(&quot;https://salt.tikicdn.com/ts/banner/72/51/cb/370c88a82442703d4a62bc24e43721cf.jpg&quot;), linear-gradient(to right, rgb(0, 48, 48) 40%, rgb(0, 48, 48) 50%, rgb(0, 48, 48) 60%);"></div>
		</a></div>
	<div data-view-id="header_promo" class="Promotion__Main-sc-162sw45-0 DGJYL">
		<div class="Container-itwfbd-0 jFkAwY">
			<div class="Promotion__Right-sc-162sw45-1 keqhba"><a data-view-id="header_promo_item" data-view-index="0" rel="nofollow" href="https://tiki.vn/ticketbox?src=header_ticketbox" class="Promotion__Item-sc-162sw45-2 cWvEXu"><img style="margin-right:4px" src="https://salt.tikicdn.com/ts/upload/42/f9/5e/7ccf8b09de0e051cc9054bd535f7b1a1.png" alt="Ticketbox" width="18"><span>Ticketbox</span></a>
				<div data-view-id="header_promo_item" data-view-index="1" class="TikiAssistant__Main-sc-1vxy3j2-0 fodycE"><a class="TikiAssistant__Link-sc-1vxy3j2-1 eyPsbF tiki-assistant-link" target="_blank" href="https://chrome.google.com/webstore/detail/tiki-assistant/ncpaceoemnbcjffjpjcgnbaklmkhdmak?hl=en-US&amp;gl=VN&amp;authuser=1" rel="noreferrer nofollow"><img src="https://salt.tikicdn.com/media/upload/2019/01/30/736dfae48db88034a73e7fdb7f72756b.png" alt="Tiki Assistant" width="18"><span>Trợ lý Tiki</span></a>
					<div class="TikiAssistant__Tooltip-sc-1vxy3j2-2 RQjYA tiki-assistant-tooltip">
						<p><a target="_blank" href="https://chrome.google.com/webstore/detail/tiki-assistant/ncpaceoemnbcjffjpjcgnbaklmkhdmak?hl=en-US&amp;gl=VN&amp;authuser=1" rel="noreferrer">Tiki Assistant</a> <!-- -->là tiện ích chạy trực tiếp trên trình duyệt Chrome - giúp gợi ý &amp; tìm kiếm nhanh các sản phẩm tốt nhất trên Tiki, phù hợp với nhu cầu tìm kiếm sản phẩm của bạn.</p>
<p>Cách sử dụng: Bạn không cần phải làm gì khác sau khi cài đặt tiện ích này. Khi bạn tìm kiếm sản phẩm, tiện ích Tiki Assistant sẽ tự động gợi ý các sản phẩm phù hợp (nếu có).
	<!-- -->
</p>
</div>
</div><a data-view-id="header_promo_item" data-view-index="2" href="https://tiki.vn/chuong-trinh/uu-dai-doi-tac?src=header_partner_offers" rel="nofollow" class="Promotion__Item-sc-162sw45-2 cWvEXu"><i class="Promotion__Icon-sc-162sw45-3 bKdpdw tikicon icon-uu-dai-hop-tac"></i>Ưu đãi đối tác</a><a data-view-id="header_promo_item" data-view-index="3" href="https://tiki.vn/dat-ve-may-bay?src=header_flights" rel="nofollow" class="Promotion__Item-sc-162sw45-2 cWvEXu"><i class="Promotion__Icon-sc-162sw45-3 bKdpdw tikicon icon-gotadi"></i>Đặt vé máy bay</a><a data-view-id="header_promo_item" data-view-index="4" href="https://tiki.vn/deal-hot?src=header_promotion" rel="nofollow" class="Promotion__Item-sc-162sw45-2 cWvEXu"><i class="Promotion__IconFire-sc-162sw45-4 emAIGI icomoon icomoon-fire"></i>Khuyến Mãi HOT</a><a data-view-id="header_promo_item" data-view-index="5" href="https://tiki.vn/hang-ngoai-nhap?src=header_international" rel="nofollow" class="Promotion__Item-sc-162sw45-2 cWvEXu"><i class="Promotion__Icon-sc-162sw45-3 bKdpdw tikicon icon-global-18"></i>Hàng quốc tế</a>
<div data-view-id="header_promo_item" data-view-index="6" class="SellerRegister__Main-sc-8ra631-0 chNgxQ"><a rel="nofollow" target="_blank" href="/ban-hang-cung-tiki?ref=header-dropdown&amp;src=header_sell_with_tiki" title="Kinh doanh cùng Tiki"><i class="tikicon icon-money_bag"></i>Bán hàng cùng Tiki <i class="tikicon icon-arrow-down"></i></a></div>
</div>
</div>
</div>
<?php
		}
		function tiki_header_account()
		{
?>
	<div data-view-id="header_user_shortcut_account" class="Userstyle__Item-sc-6e6am-1 lneWsb"><i class="tikicon icon-user"></i><span class="Userstyle__ItemText-sc-6e6am-2 gGRKbG"><span class="Userstyle__NoWrap-sc-6e6am-11 cbYxcp">Đăng nhập</span><br><small>Tài khoản</small></span>
		<div class="Userstyle__UserDropDown-sc-6e6am-5 cVRwHa toggler"><button data-view-id="header_user_shortcut_account_item" class="Userstyle__UserDropDownButton-sc-6e6am-10 dYkBsI">Đăng nhập</button><button data-view-id="header_user_shortcut_account_item" class="Userstyle__UserDropDownButton-sc-6e6am-10 dYkBsI">Tạo tài khoản</button><button data-view-id="header_user_shortcut_account_item" class="Userstyle__UserDropDownButton-sc-6e6am-10 eqGBml"><span class="Userstyle__ButtonIcon-sc-6e6am-9 gUdFI"><i class="tikicon icon-facebook-white"></i></span>Đăng nhập bằng Facebook</button><button data-view-id="header_user_shortcut_account_item" class="Userstyle__UserDropDownButton-sc-6e6am-10 fpkFKZ"><span class="Userstyle__ButtonIcon-sc-6e6am-9 gUdFI"><i class="tikicon icon-google-white"></i></span>Đăng nhập bằng Google</button><button data-view-id="header_user_shortcut_account_item" class="Userstyle__UserDropDownButton-sc-6e6am-10 bsRyYf"><span class="Userstyle__ButtonIcon-sc-6e6am-9 gUdFI"><i class="tikicon icon-zalo"></i></span>Đăng nhập bằng Zalo</button></div>
	</div>
<?php
		}
		function tiki_header_logo()
		{
?>

	<div class="Logo-sc-1o8jwnd-0 kfetWg"><a data-view-id="header_main_logo" href="<?php echo esc_url(home_url('/')); ?>"><i class="tikicon icon-tiki_short"></i></a><a href="https://tiki.vn/tikinow?src=header_tikinow" aria-label="" data-view-id="header_campaign_logo"><img style="margin-left:-1px;margin-right: 50px;float: left;" src="https://salt.tikicdn.com/ts/banner/33/ba/89/54c02d2475983f93a024c0cd13f238e4.png" alt="" height="33"></a></div>
<?php
		}
		function tiki_product_search()
		{
?>
	<div class="FormSearch__Root-sc-1fwg3wo-0 iPNSVE">
		<div class="FormSearch__Form-sc-1fwg3wo-1 ciGWvl"><input type="text" data-view-id="main_search_form_input" value="" placeholder="Tìm sản phẩm, danh mục hay thương hiệu mong muốn ..." class="FormSearch__Input-sc-1fwg3wo-2 eUnWAD"><button data-view-id="main_search_form_button" class="FormSearch__Button-sc-1fwg3wo-3 ieXBRV"><i class="tikicon icon-search"></i>Tìm kiếm</button>
			<div class="SearchAutocomplete__Root-sc-35nyl5-0 fYqpdw">
			</div>
		</div>
	</div>
<?php
		}

		function tiki_cart()
		{
?>
	<a class="Userstyle__Item-sc-6e6am-1 dFYIFY" href="<?php echo esc_url(wc_get_cart_url()); ?>"><i class="tikicon icon-cart"></i>
		<span class="Userstyle__ItemText-sc-6e6am-2 gGRKbG">Giỏ hàng<span class="Userstyle__ItemCartQty-sc-6e6am-4 bDWZEC"><?php echo wp_kses_data(WC()->cart->get_cart_contents_count()); ?>

			</span></span></a>
<?php
		}


		//------------------tiki-footer-----------------------//
		add_action('shopper_footer', 'tiki_credit', 20);
		function tiki_credit()
		{
?>
	<footer class="Footer__Wrapper-e3clg6-0 iNMiSy">
		<div class="Footer__NewsLetter-e3clg6-1 jMsQbz">
			<div style="display: flex; height: 100px; padding-top: 32px;" class="Container-itwfbd-0 jFkAwY">
				<div class="NewsLetter-icon"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/newsletter.png" alt="" width="163"></div>
				<div class="NewsLetter-description">
					<h3>Đăng ký nhận bản tin Tiki</h3>
					<h5>Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình siêu hấp dẫn</h5>
				</div>
				<div class="NewsLetter-form">
					<div><input type="email" placeholder="Địa chỉ email của bạn" value=""></div><button>Đăng ký</button>
				</div>
			</div>
		</div>
		<div class="Footer__Information-e3clg6-3 dZezzK">
			<div style="display: flex; justify-content: space-between;" class="Container-itwfbd-0 jFkAwY">
				<div class="block" style="width: 268px;">
					<h4>HỖ TRỢ KHÁCH HÀNG</h4>
					<p class="hotline">Hotline chăm sóc khách hàng: <a href="tel:1900-6035">1900-6035</a><span class="small-text">(1000đ/phút , 8-21h kể cả T7, CN)</span></p><a rel="noreferrer" href="https://hotro.tiki.vn/hc/vi" class="small-text" target="_blank">Các câu hỏi thường gặp</a><a rel="noreferrer" href="https://hotro.tiki.vn/hc/vi/requests/new" class="small-text" target="_blank">Gửi yêu cầu hỗ trợ</a><a rel="noreferrer" href="https://hotro.tiki.vn/hc/vi/categories/200126644" class="small-text" target="_blank">Hướng dẫn đặt hàng</a><a rel="noreferrer" href="https://hotro.tiki.vn/hc/vi/categories/200123960" class="small-text" target="_blank">Phương thức vận chuyển</a><a rel="noreferrer" href="https://tiki.vn/doi-tra-de-dang" class="small-text" target="_blank">Chính sách đổi trả</a><a rel="noreferrer" href="https://tiki.vn/chuong-trinh/dieu-kien-tra-gop" class="small-text" target="_blank">Hướng dẫn trả góp</a><a rel="noreferrer" href="https://hotro.tiki.vn/hc/vi/articles/360000822643" class="small-text" target="_blank">Chính sách hàng nhập khẩu</a>
					<p class="security">Hỗ trợ khách hàng: <a href="mailto:hotro@tiki.vn">hotro@tiki.vn</a></p>
					<p class="security">Báo lỗi bảo mật: <a href="mailto:security@tiki.vn">security@tiki.vn</a></p>
				</div>
				<div class="block">
					<h4>VỀ TIKI</h4><a rel="noreferrer" href="https://tiki.vn/gioi-thieu-ve-tiki" class="small-text" target="_blank">Giới thiệu Tiki</a><a rel="noreferrer" href="https://tuyendung.tiki.vn" class="small-text" target="_blank">Tuyển Dụng</a><a rel="noreferrer" href="https://tiki.vn/bao-mat-thanh-toan" class="small-text" target="_blank">Chính sách bảo mật thanh toán</a><a rel="noreferrer" href="https://tiki.vn/bao-mat-thong-tin-ca-nhan" class="small-text" target="_blank">Chính sách bảo mật thông tin cá nhân</a><a rel="noreferrer" href="https://hotro.tiki.vn/hc/vi/articles/115005575826" class="small-text" target="_blank">Chính sách giải quyết khiếu nại</a><a rel="noreferrer" href="https://hotro.tiki.vn/hc/vi/articles/201971214" class="small-text" target="_blank">Điều khoản sử dụng</a><a rel="noreferrer" href="https://hotro.tiki.vn/hc/vi/articles/201710754-Tiki-Xu-l%C3%A0-g%C3%AC-Gi%C3%A1-tr%E1%BB%8B-quy-%C4%91%E1%BB%95i-nh%C6%B0-th%E1%BA%BF-n%C3%A0o" class="small-text" target="_blank">Giới thiệu Tiki Xu</a><a rel="noreferrer" href="https://tiki.vn/chuong-trinh/ban-hang-doanh-nghiep" class="small-text" target="_blank">Bán hàng doanh nghiệp</a>
				</div>
				<div class="block">
					<h4>HỢP TÁC VÀ LIÊN KẾT</h4><a rel="noreferrer" href="https://tiki.vn/quy-che-hoat-dong-sgdtmdt" class="small-text" target="_blank">Quy chế hoạt động Sàn GDTMĐT</a><a rel="noreferrer" href="https://tiki.vn/ban-hang-cung-tiki" class="small-text" target="_blank">Bán hàng cùng Tiki</a>
				</div>
				<div class="block">
					<h4>PHƯƠNG THỨC THANH TOÁN</h4>
					<p><img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/visa.svg" alt="" width="54"><img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/mastercard.svg" alt="" width="54"><img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/jcb.svg" alt="" width="54"><img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/cash.svg" alt="" width="54"><img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/internet-banking.svg" alt="" width="54"><img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/installment.svg" alt="" width="54"></p>
				</div>
				<div class="block">
					<h4>KẾT NỐI VỚI CHÚNG TÔI</h4>
					<p><a rel="noreferrer" href="https://www.facebook.com/tiki.vn/" class="icon" target="_blank" title="Facebook"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/fb.svg" alt="" width="32"></a><a rel="noreferrer" href="https://www.youtube.com/user/TikiVBlog" class="icon" target="_blank" title="Youtube"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/youtube.svg" alt="" width="32"></a><a rel="noreferrer" href="http://zalo.me/589673439383195103" class="icon" target="_blank" title="Zalo"><i class="icon tikicon icon-footer-zalo"></i></a></p>
					<h4 class="store-title">TẢI ỨNG DỤNG TRÊN ĐIỆN THOẠI</h4>
					<p><a rel="noreferrer" href="https://itunes.apple.com/vn/app/id958100553" class="icon" target="_blank" aria-label=""><img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/appstore.png" alt="" width="134"></a><a rel="noreferrer" href="https://play.google.com/store/apps/details?id=vn.tiki.app.tikiandroid" class="icon" target="_blank" aria-label=""><img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/playstore.png" alt="" width="134"></a></p>
				</div>
			</div>
		</div>
		<div class="Footer__Addresses-e3clg6-4 gVMMJt">
			<div style="display: flex;" class="Container-itwfbd-0 jFkAwY">
				<div class="address"><i class="tikicon icon-location"></i>
					<div class="address-info">
						<p class="address-title small-text"><b>Địa chỉ văn phòng:</b> 52 Út Tịch, phường 4, quận Tân Bình, thành phố Hồ Chí Minh</p>
						<p class="address-text small-text">Tiki nhận đặt hàng trực tuyến và giao hàng tận nơi, chưa hỗ trợ mua và nhận hàng trực tiếp tại văn phòng hoặc trung tâm xử lý đơn hàng</p>
					</div>
				</div>
			</div>
		</div>
		<div class="Footer__Copyright-e3clg6-5 dxcbAb">
			<div style="display: flex; justify-content: space-between; align-items: center;" class="Container-itwfbd-0 jFkAwY">
				<div>
					<h5>© 2016 - Bản quyền của Công Ty Cổ Phần Ti Ki - Tiki.vn</h5>
					<p>Giấy chứng nhận Đăng ký Kinh doanh số 0309532909 do Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh cấp ngày 06/01/2010</p>
				</div>
				<div class="block"><a href="https://hotro.tiki.vn/hc/vi/articles/115005575826" rel="noreferrer" aria-label=""><img src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/bo-cong-thuong-2.png" alt="" width="36"></a><a href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=21201" rel="noreferrer" aria-label=""><img src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/bo-cong-thuong.svg" alt="" width="120"></a></div>
			</div>
		</div>
	</footer>
<?php
		}
		//------------------tiki-homepage-----------------------//

		add_action('shopper_tiki_homepage', 'slider_banner',10);
		function slider_banner()
		{
?>
	
	<div wrap="true" class="Banners__MainGrid-sc-1yy2fzy-0 iNmJbx">
		<div width="584px" class="Banners__MainGrid-sc-1yy2fzy-0 buXpLe">

			<div id="carouselExampleIndicators" class="carousel slide slide-test cFfSYr" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="https://salt.tikicdn.com/cache/w584/ts/banner/57/d3/6d/745f86f8d00b881efeda06e84901cfcc.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="https://salt.tikicdn.com/cache/w584/ts/banner/2d/d5/b8/6b272783a9862ba817a54a1a14049f2b.png" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="https://salt.tikicdn.com/cache/w584/ts/banner/24/3e/ad/31eba61ee2e438d368c348054ca858f6.png" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

			<div width="100%" data-view-id="home_top_banner_bottom_container" class="Banners__MainGrid-sc-1yy2fzy-0 eGnGQs">
				<div width="50%" height="181px" class="Banners__MainGrid-sc-1yy2fzy-0 eIZlUx"><a data-view-id="home_top_banner_bottom_item" data-view-index="0" href="https://tiki.vn/chuong-trinh/coca-cola?src=home_v4_sub_banner.s1.b54002" aria-label=""><img src="https://salt.tikicdn.com/cache/w292/ts/banner/32/20/61/d985a31a3c4495ffad401f22132c2f75.png" srcset="https://salt.tikicdn.com/cache/w292/ts/banner/32/20/61/d985a31a3c4495ffad401f22132c2f75.png 1x, https://salt.tikicdn.com/cache/w584/ts/banner/32/20/61/d985a31a3c4495ffad401f22132c2f75.png 2x" alt="" width="292" height="181"></a></div>
				<div width="50%" height="181px" class="Banners__MainGrid-sc-1yy2fzy-0 jcODDZ"><a data-view-id="home_top_banner_bottom_item" data-view-index="1" href="https://tiki.vn/khuyen-mai/ngay-hoi-quoc-te?src=home_v4_sub_banner.s2.b54003" aria-label=""><img src="https://salt.tikicdn.com/cache/w292/ts/banner/3d/1d/91/2d8b087e14e7f1a12f33eee468a865b1.png" srcset="https://salt.tikicdn.com/cache/w292/ts/banner/3d/1d/91/2d8b087e14e7f1a12f33eee468a865b1.png 1x, https://salt.tikicdn.com/cache/w584/ts/banner/3d/1d/91/2d8b087e14e7f1a12f33eee468a865b1.png 2x" alt="" width="292" height="181"></a></div>
			</div>
		</div>
		<div width="412px" data-view-id="home_top_banner_right_container" class="Banners__MainGrid-sc-1yy2fzy-0 hUcUTe">
			<div width="50%" height="181px" class="Banners__MainGrid-sc-1yy2fzy-0 eIZlUx"><a data-view-index="0" data-view-id="home_top_banner_right_container" href="https://tiki.vn/chuong-trinh/flash-sale-dien-gia-dung?src=home_v4_mini_banner.s1.b54004" aria-label=""><img src="https://salt.tikicdn.com/cache/w206/ts/banner/31/49/73/c199c19b946816ae37e606d1702c427b.png" srcset="https://salt.tikicdn.com/cache/w206/ts/banner/31/49/73/c199c19b946816ae37e606d1702c427b.png 1x, https://salt.tikicdn.com/cache/w412/ts/banner/31/49/73/c199c19b946816ae37e606d1702c427b.png 2x" alt="" width="206" height="181"></a></div>
			<div width="50%" height="181px" class="Banners__MainGrid-sc-1yy2fzy-0 jcODDZ"><a data-view-index="1" data-view-id="home_top_banner_right_container" href="https://tiki.vn/chuong-trinh/me-san-hang-chinh-hang-tiki-trading?src=home_v4_mini_banner.s2.b54005" aria-label=""><img src="https://salt.tikicdn.com/cache/w206/ts/banner/da/d4/cb/f0bfabcdb3eedeb8d062f59e2f8e5d6d.png" srcset="https://salt.tikicdn.com/cache/w206/ts/banner/da/d4/cb/f0bfabcdb3eedeb8d062f59e2f8e5d6d.png 1x, https://salt.tikicdn.com/cache/w412/ts/banner/da/d4/cb/f0bfabcdb3eedeb8d062f59e2f8e5d6d.png 2x" alt="" width="206" height="181"></a></div>
			<div width="50%" height="181px" class="Banners__MainGrid-sc-1yy2fzy-0 jcODDZ"><a data-view-index="2" data-view-id="home_top_banner_right_container" href="https://tiki.vn/chuong-trinh/top-deal-tv-mda?src=home_v4_mini_banner.s3.b54006" aria-label=""><img src="https://salt.tikicdn.com/cache/w206/ts/banner/d0/38/f4/6ce64ee630702faaea07325cfc96128c.png" srcset="https://salt.tikicdn.com/cache/w206/ts/banner/d0/38/f4/6ce64ee630702faaea07325cfc96128c.png 1x, https://salt.tikicdn.com/cache/w412/ts/banner/d0/38/f4/6ce64ee630702faaea07325cfc96128c.png 2x" alt="" width="206" height="181"></a></div>
			<div width="50%" height="181px" class="Banners__MainGrid-sc-1yy2fzy-0 eIZlUx"><a data-view-index="3" data-view-id="home_top_banner_right_container" href="https://tiki.vn/chuong-trinh/laptop-thiet-bi-it-chinh-hang?src=home_v4_mini_banner.s4.b54007" aria-label=""><img src="https://salt.tikicdn.com/cache/w206/ts/banner/29/30/27/f78a0750861482e883f1b4381b22b4db.png" srcset="https://salt.tikicdn.com/cache/w206/ts/banner/29/30/27/f78a0750861482e883f1b4381b22b4db.png 1x, https://salt.tikicdn.com/cache/w412/ts/banner/29/30/27/f78a0750861482e883f1b4381b22b4db.png 2x" alt="" width="206" height="181"></a></div>
			<div width="50%" height="181px" class="Banners__MainGrid-sc-1yy2fzy-0 eIZlUx"><a data-view-index="4" data-view-id="home_top_banner_right_container" href="https://tiki.vn/chuong-trinh/khuyen-mai-hot-lam-dep-suc-khoe?src=home_v4_mini_banner.s5.b54008" aria-label=""><img src="https://salt.tikicdn.com/cache/w206/ts/banner/7f/a4/66/73e72fca3ea016f7dfb6351a4395783b.png" srcset="https://salt.tikicdn.com/cache/w206/ts/banner/7f/a4/66/73e72fca3ea016f7dfb6351a4395783b.png 1x, https://salt.tikicdn.com/cache/w412/ts/banner/7f/a4/66/73e72fca3ea016f7dfb6351a4395783b.png 2x" alt="" width="206" height="181"></a></div>
			<div width="50%" height="181px" class="Banners__MainGrid-sc-1yy2fzy-0 jcODDZ"><a data-view-index="5" data-view-id="home_top_banner_right_container" href="https://tiki.vn/chuong-trinh/chuyen-trang-xe-dap-xe-dien?src=home_v4_mini_banner.s6.b54009" aria-label=""><img src="https://salt.tikicdn.com/cache/w206/ts/banner/09/02/88/73c8e73c06ebb54817bb801b9300142a.png" srcset="https://salt.tikicdn.com/cache/w206/ts/banner/09/02/88/73c8e73c06ebb54817bb801b9300142a.png 1x, https://salt.tikicdn.com/cache/w412/ts/banner/09/02/88/73c8e73c06ebb54817bb801b9300142a.png 2x" alt="" width="206" height="181"></a></div>
		</div>
	</div>
	<div class="Container-itwfbd-0 jFkAwY">
		<div class="style__StyledCallout-g2h8v0-0 bSfpQf"><img src="https://salt.tikicdn.com/ts/banner/7c/aa/05/05f8119e8d13328a782a35ec01a7ea8d.png"></div>
	</div>
	
	<div class="Container-itwfbd-0 jFkAwY">
		<div data-view-id="home_primary_banner_container" class="PrimaryBanner__PrimaryGrid-sc-188xwxz-0 LypDc"><a data-view-id="home_primary_banner_item" data-view-index="0" href="https://tiki.vn/chuong-trinh/mo-the-tikicard?src=home_v4_primary_banner.s1.b54010" title="https://tiki.vn/chuong-trinh/mo-the-tikicard"><img alt="https://tiki.vn/chuong-trinh/mo-the-tikicard" src="https://salt.tikicdn.com/cache/w295/ts/banner/d8/c0/28/e80bcad44252412416f71d48b6006b3e.png"></a><a data-view-id="home_primary_banner_item" data-view-index="1" href="https://tiki.vn/chuong-trinh/sieu-sale-hang-me-be-bam-la-co?src=home_v4_primary_banner.s2.b54011" title="https://tiki.vn/chuong-trinh/sieu-sale-hang-me-be-bam-la-co"><img alt="https://tiki.vn/chuong-trinh/sieu-sale-hang-me-be-bam-la-co" src="https://salt.tikicdn.com/cache/w295/ts/banner/53/ee/67/52d5f0384c4c1d54baa1494215ef625a.png"></a><a data-view-id="home_primary_banner_item" data-view-index="2" href="https://tiki.vn/chuong-trinh/sach-tieng-anh-gia-re?src=home_v4_primary_banner.s3.b54012" title="https://tiki.vn/chuong-trinh/sach-tieng-anh-gia-re"><img alt="https://tiki.vn/chuong-trinh/sach-tieng-anh-gia-re" src="https://salt.tikicdn.com/cache/w295/ts/banner/70/2a/62/6b1a6c026277fcfa87f1a01835c9e305.png"></a><a data-view-id="home_primary_banner_item" data-view-index="3" href="https://tiki.vn/chuong-trinh/xu-huong-thoi-trang-online?src=home_v4_primary_banner.s4.b54013" title="https://tiki.vn/chuong-trinh/xu-huong-thoi-trang-online"><img alt="https://tiki.vn/chuong-trinh/xu-huong-thoi-trang-online" src="https://salt.tikicdn.com/cache/w295/ts/banner/21/7a/5f/6fbcf1bb33b95900efccdad30d5e740d.png"></a></div>
	</div>
	
<?php
		}
		add_action('shopper_tiki_homepage', 'price_shock',20);
		function price_shock(){
			if ( shopper_is_woocommerce_activated() ) {

				$args = apply_filters( 'shopper_popular_products_args', array(
					'limit'   => 4,
					'columns' => 4,
					'title'   => __( 'Sản phẩm ưa thích', 'shopper' ),
				) );
	
				echo '<section class="shopper-product-section shopper-popular-products" aria-label="Popular Products">';
	
				do_action( 'shopper_homepage_before_popular_products' );
	
				echo '<h2 class="section-title"><span>' . wp_kses_post( $args['title'] ) . '</span></h2>';
	
				do_action( 'shopper_homepage_after_popular_products_title' );
	
				echo shopper_do_shortcode( 'top_rated_products', array(
					'per_page' => intval( $args['limit'] ),
					'columns'  => intval( $args['columns'] ),
				) );
	
				do_action( 'shopper_homepage_after_popular_products' );
	
				echo '</section>';
			}
		}
		add_action('shopper_tiki_homepage', 'product_sale',30);
		function product_sale(){
			if ( shopper_is_woocommerce_activated() ) {

				$args = apply_filters( 'shopper_on_sale_products_args', array(
					'limit'   => 4,
					'columns' => 4,
					'title'   => __( 'On Sale', 'shopper' ),
				) );
	
				echo '<section class="shopper-product-section shopper-on-sale-products" aria-label="On Sale Products">';
	
				do_action( 'shopper_homepage_before_on_sale_products' );
	
				echo '<h2 class="section-title"><span>' . wp_kses_post( $args['title'] ) . '</span></h2>';
	
				do_action( 'shopper_homepage_after_on_sale_products_title' );
	
				echo shopper_do_shortcode( 'sale_products', array(
					'per_page' => intval( $args['limit'] ),
					'columns'  => intval( $args['columns'] ),
				) );
	
				do_action( 'shopper_homepage_after_on_sale_products' );
	
				echo '</section>';
			}
		}

	
		add_action('init', 'tp_header_blocks');
		function tp_header_blocks()
		{	
			//remove_action( 'shopper_sidebar',        'shopper_get_sidebar',          		10 );
			remove_action('shopper_header', 'shopper_site_branding', 32);
			remove_action('shopper_header', 'shopper_header_cart', 50);
			remove_action('shopper_header', 'shopper_custom_product_search', 35);
			//remove_action('shopper_header', 'shopper_header_myacount_cart_wrapper', 38);
			remove_action('shopper_header', 'shopper_header_myacount', 40);
			//remove hook header

		}
		add_action('init', 'tp_footer_blocks');
		function tp_footer_blocks()
		{
			remove_action('shopper_footer', 			'shopper_credit',         	20);
			//remove hook footer

		}
		add_action('init', 'tp_single_blocks');
		function tp_single_blocks(){
			//remove hook single 
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
		
			//add mieu ta san pham 
			add_action('woocommerce_after_single_product_summary','woocommerce_template_single_excerpt',1);
			
		}