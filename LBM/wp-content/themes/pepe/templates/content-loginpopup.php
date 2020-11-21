

<div class="ReactModalPortal">
    <div class="ReactModal__Overlay ReactModal__Overlay--after-open" >
        <div class="ReactModal__Content ReactModal__Content--after-open" tabindex="-1" role="dialog" style="position: relative; top: 0px; left: 0px; right: 0px; bottom: 0px; border: none; background: rgb(255, 255, 255); overflow: unset; border-radius: 4px; outline: none; padding: 0px; width: 900px; margin: 0px auto;">
            <div class="UserModalstyle__Root-tngk37-0 lmVrvP">
                <a class="UserModalstyle__CloseButton-tngk37-10 fIfNjl"><span class="tikicon icon-circle-close"></span></a>
                <div class="UserModalstyle__Left-tngk37-1 bZfMdt">
                    <h2>Đăng nhập</h2>
                    <p>Đăng nhập để theo dõi đơn hàng, lưu <br>danh sách sản phẩm yêu thích, nhận<br> nhiều ưu đãi hấp dẫn.</p>
                    <img src="https://frontend.tikicdn.com/_desktop-next/static/img/graphic-map.png">
                </div>
                <div class="UserModalstyle__Right-tngk37-2 kInmCv">
                    <div class="UserModalstyle__Tab-tngk37-3 famyFO">
                        <div class="UserModalstyle__TabItem-tngk37-5 bCSujG">Đăng nhập</div>
                        <div class="UserModalstyle__TabItem-tngk37-5 cuMNQR">Tạo tài khoản</div>
                    </div>
                    <div class="UserModalstyle__TabContent-tngk37-4 dGmdpf">
                        <?php
                            $args = array(
                                    'redirect'       => site_url( $_SERVER['REQUEST_URI'] ),
                                    'form_id'        => 'dangnhap', //Để dành viết CSS
                                    'label_username' => __( 'Email / SĐT' ),
                                    'label_password' => __( 'Mật khẩu' ),
                                    'label_log_in'   => __( 'Đăng nhập' ),
                            );
                            wp_login_form($args);
                            ?>
                        <form class="login" >
                            <p class="forgot-password">Quên mật khẩu? Nhấn vào <a>đây</a></p>
                            <button type="button" class="UserModalstyle__RightButton-tngk37-8 kdniUC"><span class="UserModalstyle__ButtonIcon-tngk37-7 cKFcSW"><i class="tikicon icon-facebook-white"></i></span>Đăng nhập bằng Facebook</button><button type="button" class="UserModalstyle__RightButton-tngk37-8 cqTOYU"><span class="UserModalstyle__ButtonIcon-tngk37-7 cKFcSW"><i class="tikicon icon-google-white"></i></span>Đăng nhập bằng Google</button><button type="button" class="UserModalstyle__RightButton-tngk37-8 jxznff"><span class="UserModalstyle__ButtonIcon-tngk37-7 cKFcSW"><i class="tikicon icon-zalo"></i></span>Đăng nhập bằng Zalo</button>
                        </form>
                        <?php
                            $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
                            if ( $login === "failed" ) {
                                    echo '<p><strong>ERROR:</strong> Sai username hoặc mật khẩu.</p>';
                            } elseif ( $login === "empty" ) {
                                    echo '<p><strong>ERROR:</strong> Username và mật khẩu không thể bỏ trống.</p>';
                            } elseif ( $login === "false" ) {
                                    echo '<p><strong>ERROR:</strong> Bạn đã thoát ra.</p>';
                            }
                            ?>
                        <form method="post"  class="sign" style="display: none;">
                            <?php 
                                $err = ''; 
                                $success = ''; 
                                global $wpdb, $PasswordHash, $current_user, $user_ID; 
                                if(isset($_POST['task']) && $_POST['task'] == 'register' ) { 
                                   $pwd1 = $wpdb->escape(trim($_POST['password']));
                                   $phone = $wpdb->escape(trim($_POST['phone_number']));
                                   $email = $wpdb->escape(trim($_POST['email']));
                                   $username = $wpdb->escape(trim($_POST['full_name']));
                                   if( $email == "" || $pwd1 == "" || $phone == "" || $username == "") {
                                       $err = 'Vui lòng không bỏ trống những thông tin bắt buộc!';
                                   } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                       $err = 'Địa chỉ Email không hợp lệ!.';
                                   } else if(email_exists($email) ) {
                                       $err = 'Địa chỉ Email đã tồn tại!.';
                                   } else {
                                      
                                       $new_user_id = wp_create_user( $username, $pwd1, $email,$phone );
                                       if( is_wp_error($user_id) ) {
                                           $err = 'Error on user creation.';
                                       } else {
                                           do_action('user_register', $user_id);
                                           $success = 'Bạn đã đăng ký thành công!';
                                       }
                                   }
                                }
                                ?>
                            <!--display error/success message-->
                            <div id="message">
                                <?php
                                    if(! empty($err) ) :
                                    echo '<p class="error">'.$err.'';
                                    endif;
                                    ?>
                            </div>
                            <div class="UserModalstyle__FormItem-tngk37-6 hUNsqy"><label for="full_name">Họ tên</label><input type="text" id="full_name" name="full_name" placeholder="Nhập họ tên" class="Input-sc-17i9bto-0 bYlDgr" value=""></div>
                            <div class="UserModalstyle__FormItem-tngk37-6 hUNsqy">
                                <label for="otp_code">SĐT</label><input type="text" id="phone_number" name="phone_number" placeholder="Nhập số điện thoại" class="Input-sc-17i9bto-0 bYlDgr" value="">
                            </div>
                            <div class="UserModalstyle__FormItem-tngk37-6 hUNsqy"><label for="email">Email</label><input type="text" id="email" name="email" placeholder="Nhập email" class="Input-sc-17i9bto-0 bYlDgr" value=""></div>
                            <div class="UserModalstyle__FormItem-tngk37-6 hUNsqy"><label for="password">Mật khẩu</label><input type="password" id="password" name="password" placeholder="Mật khẩu từ 6 đến 32 ký tự" class="Input-sc-17i9bto-0 bYlDgr" value=""></div>
                            <div class="UserModalstyle__FormItem-tngk37-6 hUNsqy" style="margin: 20px 0px;"><label>Giới tính</label><span><label style="cursor: pointer;"><label class="Input__RadioFake-sc-17i9bto-2 kdUEwV male" style="margin-top: -4px;"><input name="gender" type="radio" value="male" style="display: none;"><span><i class="tikicon icon-radio-button-on icon-on-male"></i><i class="tikicon icon-radio-button-off icon-off-male"></i></span></label> Nam</label><label style="cursor: pointer;"><label class="Input__RadioFake-sc-17i9bto-2 kdUEwV female" style="margin-top: -4px; margin-left: 120px;"><input name="gender" type="radio" value="female" style="display:none;"><span><i class="tikicon icon-radio-button-on icon-on-female"></i><i class="tikicon icon-radio-button-off icon-off-female"></i></span></label> Nữ</label></span></div>
                            <div class="UserModalstyle__FormItem-tngk37-6 hUNsqy">
                                <label for="birthday">Ngày sinh</label>
                                <div style="width: calc(100% - 75px); display: inline-block;">
                                    <div class="Birthday__Row-sc-1lz8j2f-0 eLPanE">
                                        <div class="Birthday__Col-sc-1lz8j2f-1 iqWyGH">
                                            <div class="css-9m7dnd-container">
                                                <div class="css-8dpn5j-control">
                                                    <div class="css-1hwfws3">
                                                        <div class="css-dvua67-singleValue">Ngày</div>
                                                        <div class="css-1g6gooi">
                                                            <div class="" style="display: inline-block;">
                                                                <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-14-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 13px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="css-c0jtsf">
                                                        <span class="css-bgvzuu-indicatorSeparator"></span>
                                                        <div aria-hidden="true" class="css-16pqwjk-indicatorContainer">
                                                            <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Birthday__Col-sc-1lz8j2f-1 iqWyGH">
                                            <div class="css-9m7dnd-container">
                                                <div class="css-8dpn5j-control">
                                                    <div class="css-1hwfws3">
                                                        <div class="css-dvua67-singleValue">Tháng</div>
                                                        <div class="css-1g6gooi">
                                                            <div class="" style="display: inline-block;">
                                                                <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-15-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 13px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="css-c0jtsf">
                                                        <span class="css-bgvzuu-indicatorSeparator"></span>
                                                        <div aria-hidden="true" class="css-16pqwjk-indicatorContainer">
                                                            <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Birthday__Col-sc-1lz8j2f-1 iqWyGH">
                                            <div class="css-9m7dnd-container">
                                                <div class="css-8dpn5j-control">
                                                    <div class="css-1hwfws3">
                                                        <div class="css-dvua67-singleValue">Năm</div>
                                                        <div class="css-1g6gooi">
                                                            <div class="" style="display: inline-block;">
                                                                <input autocapitalize="none" autocomplete="off" autocorrect="off" id="react-select-16-input" spellcheck="false" tabindex="0" type="text" aria-autocomplete="list" value="" style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;">
                                                                <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 13px; font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="css-c0jtsf">
                                                        <span class="css-bgvzuu-indicatorSeparator"></span>
                                                        <div aria-hidden="true" class="css-16pqwjk-indicatorContainer cc_cursor">
                                                            <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                                                <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
                            <div class="message">
                                <p><?php if($success != "") { echo $success; } ?> <?php if($err != "") { echo $err; } ?></p>
                            </div>
                            <div class="UserModalstyle__FormItem-tngk37-6 hUNsqy">
                                <label for=""></label>
                                <div style="width: calc(100% - 75px); display: inline-block;">
                                    <p style="margin: 10px 0px 15px; font-size: 12px; line-height: 22px;"><label class="Input__CheckboxFake-sc-17i9bto-3 lblfxX" style="margin-top: -3px;">
                                        <input name="task" type="checkbox" value="register" style="display: none;"><span><i class="tikicon icon-check-on"></i><i class="tikicon icon-check-off"></i></span></label> Nhận các thông tin và chương trình khuyến mãi của Tiki qua email.
                                    </p>
                                    <button class="UserModalstyle__RightButton-tngk37-8 GBpke">Tạo tài khoản</button>
                                    <input type="hidden" name="task" value="register" />
                                    <p style="margin-bottom: 15px; font-size: 12px; line-height: 22px;">Khi bạn nhấn Đăng ký, bạn đã đồng ý thực hiện mọi giao dịch mua bán theo <a target="_blank" href="http://hotro.tiki.vn/hc/vi/articles/201971214" rel="noreferrer">điều kiện sử dụng và chính sách của Tiki</a>.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

