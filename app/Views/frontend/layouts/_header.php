<div class="d-none d-lg-block">
    <div id="top">
        <div id="new-menu-top">
            <div class="container">
                <div class="left">
                    <a href="/lien-he" class="left"><i class="fa fa-home text-20 text-red"></i> <b style="
    font-weight: 500;font-size: 13px;">Hệ thống cửa hàng</b> </a>
                    <div class="location"><i class="fa fa-map-marker text-red text-20"></i> Xem tại <a href=""><b id="cLoc">Tp.HCM</b> <i class="icon-drop"></i></a>
                        <ul>
                            <li><a onclick="setUserOption('user_location', 1, 'https://www.petcity.vn/');">Hà Nội</a></li>
                            <li><a onclick="setUserOption('user_location', 2, 'https://www.petcity.vn/');">Tp.HCM</a></li>
                            <li><a onclick="setUserOption('user_location', 5, 'https://www.petcity.vn/');">Hải Phòng</a></li>
                            <li><a onclick="setUserOption('user_location', 4, 'https://www.petcity.vn/');">Đà Nẵng</a></li>

                        </ul>
                    </div>
                </div>

                <div id="login-top" class="txt_b">
                  
                    <i class="fa fa-user text-18"></i>
                    <a class="" data-type="ajax" data-fancybox="ajax" rel="nofollow" data-src="/dang-nhap?cmd=ajax" href="/dang-nhap?cmd=ajax">Đăng nhập</a>


                </div>
                <div id="language">
                    <a href="javascript:void(0)" onclick="doGTranslate('vi|vi');">VN <i class="icon-deli icon-vn"></i></a>
                    <a href="javascript:void(0)" id="lang_en" onclick="doGTranslate('vi|en');">EN <i class="icon-deli icon-en"></i></a>
                    <a href="javascript:void(0)" id="lang_jp" onclick="doGTranslate('vi|ja');">JP <i class="icon-deli icon-jp"></i></a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <a href="/" id="logo" class="col-3">
                    <h1 class="format inline-block"><img src="<?= base_url("assets/images/logo.png") ?>" alt=""></h1>
                </a>
                <div id="search" class="col-5">
                    <form method="get" name="searchForm" action="/tim" enctype="multipart/form-data">
                        <input type="text" class="text-search" name="q" id="text_search" autocomplete="off" placeholder="Bạn muốn tìm gì cho bé hôm nay?">
                        <div class="search_catlist hide">
                            <strong name="scat_id">Tất cả</strong><i class="ico fa fa-angle-down"></i>
                            <ul class="s_list">
                                <li alt="Tất cả" rel="0">Tất cả</li>
                                <li alt="Shop cho Chó" rel="131">Shop cho Chó</li>
                                <li alt="Shop cho Mèo" rel="55">Shop cho Mèo</li>
                                <li alt="Shop vật nuôi khác" rel="215">Shop vật nuôi khác</li>
                            </ul>
                            <select name="scat_id" id="scat_id" style="display: none;">
                                <option value="0">Tất cả</option>
                                <option value="131">Shop cho Chó</option>
                                <option value="55">Shop cho Mèo</option>
                                <option value="215">Shop vật nuôi khác</option>
                            </select>
                        </div>
                        <button id="submit-search"><i class="fa fa-search"></i></button>
                    </form>
                    <div id="suggestions" class="autocomplete-suggestions"></div>
                </div>
                <div class="new-user-box col-2">
                    <a class="box-icon" href="/dang-nhap">
                        <img src="<?= base_url("assets/images/icon-new-user-petcity.png") ?>" alt="Icon kiem tra don hang">
                        <span>Kiểm tra đơn hàng</span>
                    </a>
                </div>
                <div class="cart-box col-1">
                    <a id="cart-header" href="javascript:;" class="newicon iconnew-cart" data-type="ajax" data-fancybox="ajax" rel="nofollow" data-src="/gio-hang?cmd=ajax">
                        <b id="count_shopping_cart_store">0</b>
                    </a>
                </div>
                <div class="icon_hotline col-1">
                    <img src="<?= base_url("assets/images/hotline.png") ?>" alt="hotline" class="img">
                </div>
            </div>

        </div>
    </header>
    <nav id="nav-hori" class="transition default ">
        <div class="container">

            <div class="navone">

                <p class="lbl">DANH MỤC SẢN PHẨM <i class="fa fa-caret-down text-18"></i></p>
                <ul class="ul primary">

                    <li class="is-brand" onmouseover="loadBrand()">
                        <a href="javscript:;"><span class="span-root">Nhãn hiệu <i class="fa fa-angle-down"></i></span></a>

                        <div class="level2">
                            <div class="row">
                                <div class="col-md-9 pull-left">
                                    <div id="loadBrand" class="text-14 ">

                                        <ul class="ul">

                                            <li><a href="/brand/8in1-usa" title="8in1 (USA)">8in1 (USA)</a></li>

                                            <li><a href="/brand/abc" title="ABC">ABC</a></li>
                                            <li><a href="/brand/afp" title="AFP (Pháp)">AFP (Pháp)</a></li>

                                            <li><a href="/brand/bayer" title="Bayer">Bayer</a></li>
                                            <li><a href="/brand/beaphar" title="Beaphar">Beaphar</a></li>
                                            <li><a href="/brand/bio" title="Bio-Pharmachemie">Bio-Pharmachemie</a></li>

                                            <li><a href="/brand/cats-eye-han-quoc" title="Cat's Eye (Hàn Quốc)">Cat's Eye (Hàn Quốc)</a></li>
                                            <li><a href="/brand/catsrang-han-quoc" title="Catsrang (Hàn Quốc)">Catsrang (Hàn Quốc)</a></li>
                                            <li><a href="/brand/cature-han-quoc" title="Cature ( Hàn Quốc)">Cature ( Hàn Quốc)</a></li>
                                            <li><a href="/brand/ciao-nhat-ban" title="Ciao (Nhật Bản)">Ciao (Nhật Bản)</a></li>
                                            <li><a href="/brand/classic" title="Classic">Classic</a></li>
                                            <li><a href="/brand/codos" title="Codos">Codos</a></li>
                                            <li><a href="/brand/ctc-bio-korea" title="CTC Bio (Korea)">CTC Bio (Korea)</a></li>

                                            <li><a href="/brand/davis" title="Davis">Davis</a></li>
                                            <li><a href="/brand/doggyman-japan" title="Doggyman (Japan)">Doggyman (Japan)</a></li>

                                            <li><a href="/brand/earthborn-holistic-usa" title="Earthborn Holistic (USA)">Earthborn Holistic (USA)</a></li>

                                            <li><a href="/brand/farmina" title="Farmina (Italia)">Farmina (Italia)</a></li>
                                            <li><a href="/brand/fay" title="Fay">Fay</a></li>
                                            <li><a href="/brand/ferplast" title="Ferplast (Italia)">Ferplast (Italia)</a></li>
                                            <li><a href="/brand/flexi-chlb-duc" title="Flexi (Đức)">Flexi (Đức)</a></li>
                                            <li><a href="/brand/frontline-plus" title="Frontline Plus">Frontline Plus</a></li>
                                            <li><a href="/brand/furminator" title="Furminator (USA)">Furminator (USA)</a></li>

                                            <li><a href="/brand/golden-pet-usa" title="Golden Pet (USA)">Golden Pet (USA)</a></li>

                                            <li><a href="/brand/hagen-canada" title="Hagen (Canada)">Hagen (Canada)</a></li>
                                            <li><a href="/brand/hana-pet" title="Hana Pet">Hana Pet</a></li>

                                            <li><a href="/brand/iskhan-han-quoc" title="Iskhan (Hàn Quốc)">Iskhan (Hàn Quốc)</a></li>

                                            <li><a href="/brand/joyce-dolls" title="Joyce &amp; Dolls">Joyce &amp; Dolls</a></li>

                                            <li><a href="/brand/kong-usa" title="Kong (USA)">Kong (USA)</a></li>

                                            <li><a href="/brand/makar" title="Makar">Makar</a></li>
                                            <li><a href="/brand/maneki-neko" title="Maneki Neko">Maneki Neko</a></li>
                                            <li><a href="/brand/me-o" title="Me-o (Thailand)">Me-o (Thailand)</a></li>
                                            <li><a href="/brand/mon-ami" title="Mon ami">Mon ami</a></li>
                                            <li><a href="/brand/monge-italy" title="Monge (Italy)">Monge (Italy)</a></li>
                                            <li><a href="/brand/morando-italy" title="MORANDO (Italy)">MORANDO (Italy)</a></li>
                                            <li><a href="/brand/mypet" title="MyPet">MyPet</a></li>

                                            <li><a href="/brand/natures-protection" title="Nature’s Protection">Nature’s Protection</a></li>
                                            <li><a href="/brand/nutri-cara-han-quoc" title="Nutri Cara (Hàn Quốc)">Nutri Cara (Hàn Quốc)</a></li>
                                            <li><a href="/brand/nutrisource-my" title="NutriSource (Mỹ)">NutriSource (Mỹ)</a></li>

                                            <li><a href="/brand/ofresh-onature-cj" title="O'Fresh- O'Nature (CJ)">O'Fresh- O'Nature (CJ)</a></li>

                                            <li><a href="/brand/pawise" title="Pawise (Pháp)">Pawise (Pháp)</a></li>
                                            <li><a href="/brand/pedigree" title="Pedigree">Pedigree</a></li>
                                            <li><a href="/brand/petag" title="PetAg">PetAg</a></li>
                                            <li><a href="/brand/petcity" title="PetCity">PetCity</a></li>
                                            <li><a href="/brand/petstar" title="PetStar">PetStar</a></li>
                                            <li><a href="/brand/pro-pac-ultimates-usa" title="PRO PAC  Ultimates (USA)">PRO PAC Ultimates (USA)</a></li>
                                            <li><a href="/brand/prunus-han-quoc" title="Prunus ( Hàn Quốc)">Prunus ( Hàn Quốc)</a></li>

                                            <li><a href="/brand/royal-canin" title="Royal Canin (Pháp)">Royal Canin (Pháp)</a></li>
                                            <li><a href="/brand/rubbert" title="RubberT">RubberT</a></li>

                                            <li><a href="/brand/sanicat-tay-ban-nha" title="Sanicat (Tây Ban Nha)">Sanicat (Tây Ban Nha)</a></li>
                                            <li><a href="/brand/shd-viet-nam" title="SHD (Việt Nam)">SHD (Việt Nam)</a></li>
                                            <li><a href="/brand/simbae-uc" title="Simbae (Úc)">Simbae (Úc)</a></li>
                                            <li><a href="/brand/smartheart" title="SmartHeart">SmartHeart</a></li>
                                            <li><a href="/brand/sos" title="SOS">SOS</a></li>

                                            <li><a href="/brand/tellme-viet-nam" title="Tellme (Việt Nam)">Tellme (Việt Nam)</a></li>
                                            <li><a href="/brand/trixie-duc" title="Trixie (Đức)">Trixie (Đức)</a></li>
                                            <li><a href="/brand/tropiclean" title="Tropiclean">Tropiclean</a></li>

                                            <li><a href="/brand/virbac" title="Virbac">Virbac</a></li>

                                            <li><a href="/brand/whiskas" title="Whiskas">Whiskas</a></li>

                                            <li><a href="/brand/yaho" title="Yaho">Yaho</a></li>
                                            <li><a href="/brand/yu-oriental-natural-herbs" title="YÚ">YÚ</a></li>

                                        </ul>

                                    </div>
                                </div>

                                <div class="col-md-3 pull-right">
                                    <ul class="ul hover-1 img-responsive bnn"></ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="is-pro"><a href="/cho-131.html"><span class="span-root">Shop cho Chó <i class="fa fa-angle-down"></i></span></a>

                        <div class="level2">

                            <div class="box-sub-nav clear">
                                <a href="/thuc-an-cho-cho-gia-re-10.html" class="cat1" title="Thức ăn cho chó">Thức ăn cho chó</a>
                                <a href="/pate-cho-cho-134.html" class="cat2" title="Pate Cho Chó">Pate Cho Chó</a>
                                <a href="/thuc-an-kho-cho-cho-gia-re-132.html" class="cat2" title="Thức ăn khô">Thức ăn khô</a>
                                <a href="/thuc-an-uot-cho-cho-133.html" class="cat2" title="Thức ăn ướt cho chó">Thức ăn ướt cho chó</a>
                                <a href="/thuc-an-dam-huan-luyen-135.html" class="cat2" title="Thức ăn dặm huấn luyện">Thức ăn dặm huấn ...</a>
                                <a href="/thuc-an-tuoi-song-136.html" class="cat2" title="Thức ăn tươi sống">Thức ăn tươi sống</a>
                                <a href="/snack-xuong-banh-thuong-cho-cho-137.html" class="cat2" title="Snack, xương &amp; bánh thưởng cho chó">Snack, xương &amp; bánh ...</a>
                                <a href="/sua-binh-sua-cho-cho-138.html" class="cat2" title="Sữa, bình sữa cho cho">Sữa, bình sữa cho cho</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/quan-ao-163.html" class="cat1" title="Quần áo cho chó">Quần áo cho chó</a>
                                <a href="/quan-ao-221.html" class="cat2" title="Quần áo">Quần áo</a>
                                <a href="/vay-dam-222.html" class="cat2" title="Váy đầm">Váy đầm</a>
                                <a href="/phu-kien-227.html" class="cat2" title="Phụ kiện">Phụ kiện</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/vong-co-day-dat-ro-mom-cho-meo-2.html" class="cat1" title="Vòng cổ, dây dắt, rọ mõm chó mèo">Vòng cổ, dây dắt, rọ mõm chó mèo</a>
                                <a href="/vong-co-223.html" class="cat2" title="Vòng cổ">Vòng cổ</a>
                                <a href="/day-dat-224.html" class="cat2" title="Dây dắt">Dây dắt</a>
                                <a href="/ro-mom-cho-dep-sanh-dieu-225.html" class="cat2" title="Rọ mõm chó đẹp sành điệu">Rọ mõm chó đẹp sành ...</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/vat-dung-an-uong-7.html" class="cat1" title="Vật dụng ăn uống cho chó">Vật dụng ăn uống cho chó</a>
                                <a href="/bat-chen-an-139.html" class="cat2" title="Bát, chén ăn">Bát, chén ăn</a>
                                <a href="/binh-nuoc-140.html" class="cat2" title="Bình nước">Bình nước</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/y-te-thuoc-141.html" class="cat1" title="Y tế &amp; thuốc cho chó">Y tế &amp; thuốc cho chó</a>
                                <a href="/calxi-vitamins-143.html" class="cat2" title="Canxi &amp; Vitamin">Canxi &amp; Vitamin</a>
                                <a href="/thuoc-tri-noi-ngoai-ky-sinh-trung-144.html" class="cat2" title="Thuốc trị nội, ngoại ký sinh trùng">Thuốc trị nội, ngoại ...</a>
                                <a href="/cham-soc-da-long-mong-145.html" class="cat2" title="Chăm sóc da lông móng">Chăm sóc da lông móng</a>
                                <a href="/cham-soc-rang-mieng-146.html" class="cat2" title="Chăm sóc răng miệng">Chăm sóc răng miệng</a>
                                <a href="/cham-soc-tai-mat-147.html" class="cat2" title="Chăm sóc tai &amp; mắt">Chăm sóc tai &amp; mắt</a>

                            </div>
                            <div class="box-sub-nav clear">
                                <a href="/my-pham-va-lam-dep-151.html" class="cat1" title="Mỹ phẩm &amp; làm đẹp">Mỹ phẩm &amp; làm đẹp</a>
                                <a href="/sua-tam-cho-cho-dau-xa-nuoc-hoa-152.html" class="cat2" title="Sữa tắm cho chó, dầu xả, nước hoa">Sữa tắm cho chó, dầu ...</a>
                                <a href="/cham-soc-tai-mieng-153.html" class="cat2" title="Chăm sóc tai &amp; miệng">Chăm sóc tai &amp; miệng</a>
                                <a href="/khu-mui-hoi-sach-nha-154.html" class="cat2" title="Khử mùi hôi, sạch nhà, huấn luyện">Khử mùi hôi, sạch nhà, ...</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/dung-cu-ve-sinh-155.html" class="cat1" title="Dụng cụ vệ sinh">Dụng cụ vệ sinh</a>
                                <a href="/cat-tia-cham-soc-da-long-mong-156.html" class="cat2" title="Cắt tỉa/ chăm sóc da lông móng">Cắt tỉa/ chăm sóc da ...</a>
                                <a href="/dung-cu-hot-phan-cat-ve-sinh-157.html" class="cat2" title="Dụng cụ hót phân/ cát vệ sinh">Dụng cụ hót phân/ cát ...</a>
                                <a href="/chai-ve-sinh-158.html" class="cat2" title="Chai vệ sinh">Chai vệ sinh</a>
                                <a href="/ta-quan-tam-lot-234.html" class="cat2" title="Tã quần - Tấm lót">Tã quần - Tấm lót</a>

                            </div>
                            <div class="box-sub-nav ">
                                <a href="/chuong-cho-giuong-nha-tui-159.html" class="cat1" title="Chuồng chó, giường, nhà, túi">Chuồng chó, giường, nhà, túi</a>
                                <a href="/nha-nem-giuong-cho-cho-160.html" class="cat2" title="Nhà, nệm, giường cho chó">Nhà, nệm, giường cho ...</a>
                                <a href="/long-tui-van-chuyen-cho-meo-gia-re-161.html" class="cat2" title="Lồng, túi vận chuyển chó mèo">Lồng, túi vận chuyển ...</a>
                                <a href="/gio-xach-162.html" class="cat2" title="Giỏ xách">Giỏ xách</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/do-choi-va-phu-kien-huan-luyen-164.html" class="cat1" title="Đồ chơi, phụ kiện huấn luyện">Đồ chơi, phụ kiện huấn luyện</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/san-pham-chi-ban-online-226.html" class="cat1" title="Sản phẩm chỉ bán Online">Sản phẩm chỉ bán Online</a>

                            </div>


                        </div>
                    </li>



                    <li class="is-pro"><a href="/meo-55.html"><span class="span-root">Shop cho Mèo <i class="fa fa-angle-down"></i></span></a>

                        <div class="level2">

                            <div class="box-sub-nav clear">
                                <a href="/thuc-an-cho-meo-165.html" class="cat1" title="Thức ăn cho mèo">Thức ăn cho mèo</a>
                                <a href="/thuc-an-kho-cho-meo-gia-re-174.html" class="cat2" title="Thức ăn khô">Thức ăn khô</a>
                                <a href="/thuc-an-uot-175.html" class="cat2" title="Thức ăn ướt">Thức ăn ướt</a>
                                <a href="/pate-176.html" class="cat2" title="Pate">Pate</a>
                                <a href="/thuc-an-dam-huan-luyen-177.html" class="cat2" title="Thức ăn dặm huấn luyện">Thức ăn dặm huấn ...</a>
                                <a href="/thuc-an-tuoi-song-178.html" class="cat2" title="Thức ăn tươi sống">Thức ăn tươi sống</a>
                                <a href="/snack-xuong-banh-cho-meo-179.html" class="cat2" title="Snack, xương &amp; bánh cho mèo">Snack, xương &amp; bánh cho ...</a>
                                <a href="/sua-binh-sua-cho-meo-180.html" class="cat2" title="Sữa, bình sữa cho mèo">Sữa, bình sữa cho mèo</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/chuong-giuongnha-tui-170.html" class="cat1" title="Chuồng, giường, nhà, túi">Chuồng, giường, nhà, túi</a>
                                <a href="/nha-nem-giuong-cho-meo-199.html" class="cat2" title="Nhà, nệm, giường cho mèo">Nhà, nệm, giường cho ...</a>
                                <a href="/long-tui-van-chuyen-200.html" class="cat2" title="Lồng, túi vận chuyển">Lồng, túi vận chuyển</a>
                                <a href="/gio-xach-201.html" class="cat2" title="Giỏ xách">Giỏ xách</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/vong-co-day-dat-ro-mom-171.html" class="cat1" title="Vòng cổ, dây dắt, rọ mõm">Vòng cổ, dây dắt, rọ mõm</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/vat-dung-an-uong-166.html" class="cat1" title="Vật dụng ăn uống">Vật dụng ăn uống</a>
                                <a href="/bat-chen-an-181.html" class="cat2" title="Bát, chén ăn">Bát, chén ăn</a>
                                <a href="/binh-nuoc-182.html" class="cat2" title="Bình nước">Bình nước</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/y-te-thuoc-167.html" class="cat1" title="Y tế &amp; thuốc cho mèo">Y tế &amp; thuốc cho mèo</a>
                                <a href="/calxi-vitamins-185.html" class="cat2" title="Calxi &amp; vitamins">Calxi &amp; vitamins</a>
                                <a href="/thuoc-tri-noi-ngoai-ky-sinh-trung-186.html" class="cat2" title="Thuốc trị nội ngoại ký sinh trùng">Thuốc trị nội ngoại ...</a>
                                <a href="/cham-soc-da-long-mong-187.html" class="cat2" title="Chăm sóc da lông móng">Chăm sóc da lông móng</a>
                                <a href="/cham-soc-rang-mieng-188.html" class="cat2" title="Chăm sóc răng miệng">Chăm sóc răng miệng</a>
                                <a href="/cham-soc-tai-mat-189.html" class="cat2" title="Chăm sóc tai, mắt">Chăm sóc tai, mắt</a>
                                <a href="/thuoc-gay-me-190.html" class="cat2" title="Thuốc gây mê">Thuốc gây mê</a>
                                <a href="/thuoc-sat-trung-191.html" class="cat2" title="Thuốc sát trùng">Thuốc sát trùng</a>
                                <a href="/kich-duc-to-192.html" class="cat2" title="Kích dục tố">Kích dục tố</a>

                            </div>

                            <div class="box-sub-nav clear">
                                <a href="/my-pham-lam-dep-168.html" class="cat1" title="Mỹ phẩm &amp; làm đẹp">Mỹ phẩm &amp; làm đẹp</a>
                                <a href="/sua-tam-dau-xa-nuoc-hoa-193.html" class="cat2" title="Sữa tắm, dầu xả, nước hoa">Sữa tắm, dầu xả, ...</a>
                                <a href="/cham-soc-tai-mieng-194.html" class="cat2" title="Chăm sóc tai, miệng">Chăm sóc tai, miệng</a>

                            </div>
                            <div class="box-sub-nav ">
                                <a href="/dung-cu-ve-sinh-169.html" class="cat1" title="Dụng cụ vệ sinh">Dụng cụ vệ sinh</a>
                                <a href="/khu-mui-hoi-sach-nha-195.html" class="cat2" title="Khử mùi kháng khuẩn">Khử mùi kháng khuẩn</a>
                                <a href="/cat-tia-cham-soc-da-long-mong-196.html" class="cat2" title="Cắt tỉa/ chăm sóc da lông móng">Cắt tỉa/ chăm sóc da ...</a>
                                <a href="/cat-ve-sinh-cho-meo-dung-cu-hut-phan-meo-197.html" class="cat2" title="Cát vệ sinh cho mèo - Dụng cụ hót phân">Cát vệ sinh cho mèo - ...</a>
                                <a href="/chai-ve-sinh-198.html" class="cat2" title="Chai vệ sinh">Chai vệ sinh</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/quan-ao-172.html" class="cat1" title="Quần Áo">Quần Áo</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/do-choi-cho-meo-phu-kien-huan-luyen-173.html" class="cat1" title="Đồ chơi  cho mèo, phụ kiện huấn luyện">Đồ chơi cho mèo, phụ kiện huấn luyện</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/cat-ve-sinh-229.html" class="cat1" title="Cát vệ sinh">Cát vệ sinh</a>
                                <a href="/cat-ve-sinh-huu-co-cho-meo-230.html" class="cat2" title="Cát hữu cơ">Cát hữu cơ</a>
                                <a href="/cat-thuy-tinh-232.html" class="cat2" title="Cát thủy tinh">Cát thủy tinh</a>
                                <a href="/cat-dat-set-231.html" class="cat2" title="Cát đất sét">Cát đất sét</a>

                            </div>

                        </div>
                    </li>



                    <li class="is-pro"><a href="/vat-nuoi-khac-215.html"><span class="span-root">Shop vật nuôi khác <i class="fa fa-angle-down"></i></span></a>

                        <div class="level2">

                            <div class="box-sub-nav clear">
                                <a href="/chim-202.html" class="cat1" title="Chim">Chim</a>
                                <a href="/chuong-long-va-phu-kien-207.html" class="cat2" title="Chuồng, lồng và phụ kiện">Chuồng, lồng và phụ ...</a>
                                <a href="/thuc-an-203.html" class="cat2" title="Thức ăn">Thức ăn</a>
                                <a href="/vat-dung-an-uong-204.html" class="cat2" title="Vật dụng ăn uống">Vật dụng ăn uống</a>
                                <a href="/y-te-thuoc-205.html" class="cat2" title="Y Tế &amp; Thuốc">Y Tế &amp; Thuốc</a>
                                <a href="/dung-cu-ve-sinh-206.html" class="cat2" title="Dụng cụ vệ sinh">Dụng cụ vệ sinh</a>

                            </div>

                            <div class="box-sub-nav ">
                                <a href="/ca-208.html" class="cat1" title="Cá">Cá</a>
                                <a href="/thuc-an-209.html" class="cat2" title="Thức ăn">Thức ăn</a>
                                <a href="/vat-dung-an-uong-210.html" class="cat2" title="Vật dụng ăn uống">Vật dụng ăn uống</a>
                                <a href="/y-te-thuoc-211.html" class="cat2" title="Y tế &amp; thuốc">Y tế &amp; thuốc</a>
                                <a href="/dung-cu-ve-sinh-212.html" class="cat2" title="Dụng cụ vệ sinh">Dụng cụ vệ sinh</a>
                                <a href="/be-ca-bo-loc-phu-kien-213.html" class="cat2" title="Bể cá, bộ lọc &amp; phụ kiện">Bể cá, bộ lọc &amp; phụ ...</a>
                                <a href="/suoi-den-214.html" class="cat2" title="Sưởi &amp; đèn">Sưởi &amp; đèn</a>

                            </div>
                            <div class="box-sub-nav ">
                                <a href="/hamster-228.html" class="cat1" title="Hamster">Hamster</a>
                                <a href="/thuc-an-216.html" class="cat2" title="Thức ăn">Thức ăn</a>
                                <a href="/vat-dung-an-uong-217.html" class="cat2" title="Vật dụng ăn uống">Vật dụng ăn uống</a>
                                <a href="/y-te-thuoc-218.html" class="cat2" title="Y tế &amp; thuốc">Y tế &amp; thuốc</a>
                                <a href="/dung-cu-ve-sinh-219.html" class="cat2" title="Dụng cụ vệ sinh">Dụng cụ vệ sinh</a>
                                <a href="/chuong-long-phu-kien-220.html" class="cat2" title="Chuồng, lồng &amp; phụ kiện">Chuồng, lồng &amp; phụ ...</a>

                            </div>


                        </div>
                    </li>




                    <li><a href="/collection/bon-mua-sach-thom-cung-hana-pet"><span class="span-root">Khuyến mại <i class="fa fa-star text-red" style="color:#f4b514;"></i></span></a></li>
                    <li class="not-pro"><a href="/Quy-Pet-Smile/ac16.html"><span class="span-root"> Quỹ Pet Smile</span></a></li>

                    <li class="mm-news not-pro"><a href="/tin-tuc" target="_blank"><span class="span-root">Tin tức</span></a>
                        <div class="level2" style="left:100px">

                            <div class="row">
                                <div class="col-md-5 pull-left">

                                </div>
                                <div class="col-md-7 pull-right">
                                    <ul class="ul hover-1 img-responsive bnn"></ul>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="not-pro"><a href="/lien-he" target="_blank" rel="nofollow"><span class="span-root">Liên hệ</span></a></li>



                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </nav>


</div>

<div class="d-lg-none">
    <div class="header">
        <div class="wrap">

            <nav id="nav-hori" class="">

                <div class="navone">

                    <a onclick="$('#mnuTop').toggle()" class="lbl fl"><i class="fa fa-bars"></i> <span class="hide"> <i class="fa fa-caret-right"></i></span></a>

                    <div class="header-two text-center">


                     
                        <a href="/" id="logo"><img src="<?= base_url("assets/images/logo.png") ?>" alt=""></a>
                        <a id="cart-header" href="/gio-hang" class="">
                            <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 24px;color: #e51f28;"></i>

                            <b id="count_shopping_cart_store">0</b>
                        </a>
                    </div>

                    <ul class="ul primary slideInLeft animated" id="mnuTop" style="max-height: 733px;">



                        <li><a href="/taikhoan" class=""><i class="icon fa fa-user"></i> Đăng nhập/ Đăng ký</a>
                            <i onclick="$('#mnuTop').toggle()" class="fa fa-chevron-circle-left"></i>
                        </li>

                        <li><a href="/page/he-thong-cua-hang" class=""><i class="icon fa fa-home"></i> Hệ thống cửa hàng</a></li>
                        <li class="divider"></li>

                        <li><a href="/deal" class=""><i class="icon fa fa-gift"></i> Khuyến mại</a>
                            <span><i class="fa fa-angle-right" data-id=""></i></span>
                        </li>


                        <li><a class="level1" href="/cho-131.html">

                                <i class="icon" style="background-image:url(/media/category/cat_4bbb64675ab4b551a86bc1ea8abe5ba3.png)"></i>


                                Shop cho Chó</a>
                            <span><i class="fa fa-angle-right" data-id="#mnu131"></i></span>
                            <ul id="mnu131" class="level2">
                                <li><a href="/thuc-an-cho-cho-gia-re-10.html">Thức ăn cho chó</a>
                                </li>
                                <li><a href="/quan-ao-163.html">Quần áo cho chó</a>
                                </li>
                                <li><a href="/vong-co-day-dat-ro-mom-cho-meo-2.html">Vòng cổ, dây dắt, rọ mõm chó mèo</a>
                                </li>
                                <li><a href="/vat-dung-an-uong-7.html">Vật dụng ăn uống cho chó</a>
                                </li>
                                <li><a href="/y-te-thuoc-141.html">Y tế &amp; thuốc cho chó</a>
                                </li>
                                <li><a href="/my-pham-va-lam-dep-151.html">Mỹ phẩm &amp; làm đẹp</a>
                                </li>
                                <li><a href="/dung-cu-ve-sinh-155.html">Dụng cụ vệ sinh</a>
                                </li>
                                <li><a href="/chuong-cho-giuong-nha-tui-159.html">Chuồng chó, giường, nhà, túi</a>
                                </li>
                                <li><a href="/do-choi-va-phu-kien-huan-luyen-164.html">Đồ chơi, phụ kiện huấn luyện</a>
                                </li>
                                <li><a href="/san-pham-chi-ban-online-226.html">Sản phẩm chỉ bán Online</a>
                                </li>
                            </ul>
                        </li>


                        <li><a class="level1" href="/meo-55.html">

                                <i class="icon" style="background-image:url(/media/category/cat_8821b74edfd5417b21b5d06a883383b0.png)"></i>


                                Shop cho Mèo</a>
                            <span><i class="fa fa-angle-right" data-id="#mnu55"></i></span>
                            <ul id="mnu55" class="level2">
                                <li><a href="/thuc-an-cho-meo-165.html">Thức ăn cho mèo</a>
                                </li>
                                <li><a href="/chuong-giuongnha-tui-170.html">Chuồng, giường, nhà, túi</a>
                                </li>
                                <li><a href="/vong-co-day-dat-ro-mom-171.html">Vòng cổ, dây dắt, rọ mõm</a>
                                </li>
                                <li><a href="/vat-dung-an-uong-166.html">Vật dụng ăn uống</a>
                                </li>
                                <li><a href="/y-te-thuoc-167.html">Y tế &amp; thuốc cho mèo</a>
                                </li>
                                <li><a href="/my-pham-lam-dep-168.html">Mỹ phẩm &amp; làm đẹp</a>
                                </li>
                                <li><a href="/dung-cu-ve-sinh-169.html">Dụng cụ vệ sinh</a>
                                </li>
                                <li><a href="/quan-ao-172.html">Quần Áo</a>
                                </li>
                                <li><a href="/do-choi-cho-meo-phu-kien-huan-luyen-173.html">Đồ chơi cho mèo, phụ kiện huấn luyện</a>
                                </li>
                                <li><a href="/cat-ve-sinh-229.html">Cát vệ sinh</a>
                                </li>
                            </ul>
                        </li>


                        <li><a class="level1" href="/vat-nuoi-khac-215.html">

                                <i class="icon" style="background-image:url(/media/category/cat_50d3a9fc6df03ebbf6034f53fd473d4b.jpg)"></i>


                                Shop vật nuôi khác</a>
                            <span><i class="fa fa-angle-right" data-id="#mnu215"></i></span>
                            <ul id="mnu215" class="level2">
                                <li><a href="/chim-202.html">Chim</a>
                                </li>
                                <li><a href="/ca-208.html">Cá</a>
                                </li>
                                <li><a href="/hamster-228.html">Hamster</a>
                                </li>
                            </ul>
                        </li>




                        <li class="divider"></li>

                        <li class="is-bullet"><a href="/tin-tuc" class="">Tin tức</a></li>
                        <li class="is-bullet"><a href="" class="">Tạp chí thú cưng</a></li>
                        <li class="is-bullet"><a href="" class="">Qũy Pet Fund</a></li>
                        <li class="is-bullet"><a href="/lien-he" class="">Liên Hệ</a></li>

                        <li class="tel"><i class="fa fa-phone"></i> <a href="tel:19002214">19002214</a> - <a href="tel:098 761 2727">098 761 2727</a></li>

                        <li onclick="$('#mnuTop').toggle()" class="primary_bg"></li>

                    </ul>

                </div>


            </nav>
            <div class="header3">
                <ul class="mb-location">
                    <li class="is-location" onclick="$('#ul-location').slideToggle();">
                        <a href="javascript:;"><i class="fa fa-map-marker text-violet text-20 icon"></i> <span id="cLoc" class="txt_violet">Tp.HCM</span> <i class="fa fa-caret-down"></i></a>
                        <ul id="ul-location" class="ul level2">
                            <li><a onclick="setUserOption('user_location', 1, 'https://www.petcity.vn/');">Hà Nội</a></li>
                            <li><a onclick="setUserOption('user_location', 2, 'https://www.petcity.vn/');">Tp.HCM</a></li>
                            <li><a onclick="setUserOption('user_location', 5, 'https://www.petcity.vn/');">Hải Phòng</a></li>
                            <li><a onclick="setUserOption('user_location', 4, 'https://www.petcity.vn/');">Đà Nẵng</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="mb-lan">
                    <a href="javascript:void(0)" onclick="doGTranslate('vi|vi');">VN <i class="icon-deli icon-vn"></i></a>
                    <a href="javascript:void(0)" id="lang_en" onclick="doGTranslate('vi|en');">EN <i class="icon-deli icon-en"></i></a>
                    <a href="javascript:void(0)" id="lang_jp" onclick="doGTranslate('vi|ja');">JP <i class="icon-deli icon-jp"></i></a>
                </ul>
            </div>
            <div class="header-four-container transition">
                <div class="header-four">

                    <a class="mnu-bar hide"><i class="fa fa-bars"></i></a>

                    <div id="search">
                        <form method="get" name="searchForm" action="/tim" enctype="multipart/form-data">
                            <input type="text" class="text-search" id="text_search" name="q" autocomplete="off" placeholder="Bạn muốn tìm gì hôm nay?">
                            <button id="submit-search"><i class="fa fa-search"></i></button>
                        </form>

                    </div>
                </div>
                <div id="suggestions" class="autocomplete-suggestions"></div>
            </div>
        </div>
    </div>
</div>