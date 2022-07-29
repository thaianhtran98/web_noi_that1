
<!-- Footer -->
<footer class="bg10 p-t-75 p-b-32">
    <div class="container">
        <div class="row">

                <div class="col-sm-6 col-lg-3 p-b-50">
                <img height="100"
                     src="/web_noi_that1/public/template/admin/dist/img/277528884_305346451684807_4696188226227418095_n.jpg" >
                <h4 class="stext-301 cl0 p-t-5 p-b-5">
                    CÁC DANH MỤC
                </h4>
                <ul>
                    @foreach($menus as $menu)
                        @if($menu->parent_id == 0)
                    <li class=" p-b-10">
                        <a href="{{route('index_danhmuc',[$menu->id,\Illuminate\Support\Str::slug($menu->name, "-")])}}" class="stext-107 cl7 hov-cl1 trans-04">
                            {{$menu->name}}
                        </a>
                    </li>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Hỗ trợ khách hàng
                </h4>

                <ul>
                    <li class="p-b-10 stext-107 cl7 hov-cl1 trans-04">Hotline: 0907 466 879</li>
                    <li class="p-b-10 stext-107 cl7 hov-cl1 trans-04">Email: tranthuong5885@gmail.com</li>
                    <li class="p-b-10 stext-107 cl7 hov-cl1 trans-04">Địa chỉ: Quận Ninh Kiều, TP Cần Thơ</li>
                </ul>

            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Bản đồ
                </h4>

                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.91063304488!2d105.76630731525776!3d10.024233275365813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0883aef5aaaad%3A0xdbb86a7e6f1429f!2sBilliards%20Club%20Th%E1%BB%8Bnh%20Ph%C3%A1t!5e0!3m2!1svi!2s!4v1659081109136!5m2!1svi!2s"
                            width="255" height="300" style="border:0;"
                            allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="3DoZRTIj"></script>
                <h4 class="stext-301 cl0 p-b-30">
                    Fanpage
                </h4>
                <div class="fb-page" data-href="https://www.facebook.com/N%E1%BB%98I-TH%E1%BA%A4T-PH%C3%9AC-TH%E1%BB%8ANH-109158808390146/?ref=page_internal"
                     data-tabs="timeline" data-width="500" data-height="300" data-small-header="false"
                     data-adapt-container-width="true"
                     data-hide-cover="false"
                     data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/N%E1%BB%98I-TH%E1%BA%A4T-PH%C3%9AC-TH%E1%BB%8ANH-109158808390146/?ref=page_internal" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/N%E1%BB%98I-TH%E1%BA%A4T-PH%C3%9AC-TH%E1%BB%8ANH-109158808390146/?ref=page_internal">NỘI THẤT PHÚC THỊNH</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>

<!-- Modal1 -->
<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
    <div class="overlay-modal1 js-hide-modal1"></div>

    <div class="container">
        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                <img src="/web_noi_that1/public/template/images/icons/icon-close.png" alt="CLOSE">
            </button>

        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="/web_noi_that1/public/template/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/web_noi_that1/public/template/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/web_noi_that1/public/template/vendor/bootstrap/js/popper.js"></script>
<script src="/web_noi_that1/public/template/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/web_noi_that1/public/template/vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="/web_noi_that1/public/template/vendor/daterangepicker/moment.min.js"></script>
<script src="/web_noi_that1/public/template/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/web_noi_that1/public/template/vendor/slick/slick.min.js"></script>
<script src="/web_noi_that1/public/template/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="/web_noi_that1/public/template/vendor/parallax100/parallax100.js"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="/web_noi_that1/public/template/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>
<!--===============================================================================================-->
<script src="/web_noi_that1/public/template/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="/web_noi_that1/public/template/vendor/sweetalert/sweetalert.min.js"></script>
<script>
    $('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function(){
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function(){
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });
    });

</script>
<!--===============================================================================================-->
<script src="/web_noi_that1/public/template/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function(){
        $(this).css('position','relative');
        $(this).css('overflow','hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function(){
            ps.update();
        })
    });
</script>
<!--===============================================================================================-->

<!--===============================================================================================-->
<script src="/web_noi_that1/public/template/js/main.js"></script>
{{--<script src="/web_noi_that1/public/template/js/public.js"></script>--}}
{{--<script src="/web_noi_that1/public/template/owlcarousel/owl.carousel.min.js"></script>--}}

@yield('footer')