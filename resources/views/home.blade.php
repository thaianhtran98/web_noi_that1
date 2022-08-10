@extends('main')

@section('head')
    <style>
        .section-title{margin-bottom:0;padding-top:5px}.title-no-border.mb-0 .section-title b{margin-right:40px}

        .section-title-container{margin-bottom:1.5em}.row-collapse+.section-title-container,.slider-wrapper+.section-title-container,.banner+.section-title-container{margin-top:30px}

        .title-slash .section-title .section-title-main:before {
            content: " ";
            background: #575757 url(/web_noi_that1/public/template/admin/dist/img/gold.jpg) center 35% no-repeat;
            width: 38px;
            height: 38px;
            line-height: 38px;
            position: absolute;
            top: 0;
            left: 0;
            background-size: 70%;
        }

        .title-slash .section-title .section-title-main {
            background: #575757;
            padding: 5px 5px 6px 50px;
            font-weight: 400;
            position: relative;
            margin-top: 0px;
            height: 38px;
        }
        .section-title-normal span {
            border-bottom: 2px solid #575757;
        }
        a.section-title-link, a.section-title-link:hover {
            color: #fff;
            font-size: inherit;
            padding-left: 0;
            padding-top: 5px;
        }
        a.section-title-link, a.section-title-link:hover {
            color: #fff;
            font-size: inherit;
            padding-left: 0;
            padding-top: 5px;
        }

        .title-slash .section-title .section-title-main:after {
            content: " ";
            position: absolute;
            border-bottom: 24px solid transparent;
            border-left: 20px solid #575757;
            border-right: 20px solid transparent;
            border-top: 19px solid #575757;
            top: 0;
            right: -40px;
        }

        .title-slash .section-title .section-title-main:before {
            content: " ";
            background: #575757 url(/web_noi_that1/public/template/admin/dist/img/gold.jpg) center 35% no-repeat;
            width: 38px;
            height: 38px;
            line-height: 38px;
            position: absolute;
            top: 0;
            left: 0;
            background-size: 70%;
        }
        .title-slash .section-title .section-title-main:before {
            content: " ";
            background: #575757 url(/web_noi_that1/public/template/admin/dist/img/gold.jpg) center 35% no-repeat;
            width: 38px;
            height: 38px;
            line-height: 38px;
            position: absolute;
            top: 0;
            left: 0;
            background-size: 70%;
        }

        /*---------------Home-service--------*/
        #home-service {
            transform: translateY(-30px); }
        #home-service .inner {
            background: #ffffff;
            box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.3); }
        #home-service .inner .grid {
            display: -webkit-flex;
            display: flex; }
        #home-service .owl-service {
            border: 1px solid #ddd;
            padding: 15px 0; }
        #home-service .owl-service .owl-dots {
            margin-top: 10px;
            text-align: center; }
        #home-service .owl-service .owl-dots .owl-dot {
            width: 10px;
            height: 10px;
            background: rgba(102, 102, 102, 0.5);
            margin: 0 5px;
            border-radius: 20px; }
        #home-service .owl-service .owl-dots .owl-dot.active {
            background: #666666; }
        #home-service .service-item {
            text-align: center;
            padding: 0px 15px;
            border-left: 1px solid #e6e6e6; }
        #home-service .service-item:last-child {
            border-right: 1px solid #e6e6e6; }
        @media (min-width: 992px) {
            #home-service .service-item {
                width: calc((100% - 30px) / 4); }
            #home-service .service-item:not(:last-child) {
                margin-right: 10px; } }
        @media (max-width: 991px) {
            #home-service .service-item {
                border: none !important;
                padding: 0 5px; } }
        #home-service .service-item [class*='one-third'] {
            width: 36px;
            height: 36px; }
        #home-service .service-item [class*='two-thirds'] {
            width: calc(100% - 51px);
            margin-left: 15px; }
        #home-service .service-item .service-icon {
            margin-bottom: 10px; }
        #home-service .service-item .service-icon img {
            width: 52px;
            margin: 0 auto; }
        #home-service .service-item .service-title {
            font-size: 16px;
            text-align: center;
            position: relative;
            margin-bottom: 5px;
            font-family: "Roboto", sans-serif !important; }

        @media (max-width: 767px) {
            #home-service .service-item .service-title {
                font-size: 14px;
                font-weight: 600; } }

        #home-service .service-item .service-desc {
            text-align: center;
            font-family: "Roboto", sans-serif; }

        #home-service .service-item .service-desc a {
            font-weight: 800;
            font-size: 16px;
            color: #f54603; }

        #home-service .service-item:hover .service-icon {
            transform: rotateY(360deg); }


        @media only screen and (max-width: 750px) {
            #home-service {
                display: none;
            }
        }

    </style>

    <style>
        .title-slash .section-title {
            border-bottom: none;
            border-top: 3px solid #575757;
        }


        a.section-title-link, a.section-title-link:hover {
            color: #fff;
            font-size: inherit;
            padding-left: 0;
            padding-top: 5px;
        }


        .section-title-normal span {
            border-bottom: 2px solid #575757;
        }

        .title-slash .section-title .section-title-main {
            background: #575757;
            padding: 5px 5px 6px 50px;
            font-weight: 400;
            position: relative;
            margin-top: 0px;
            height: 38px;
        }

        .lSAction > .lSPrev {
            background-color: #575757;
            background-position: 2px 0;
            left: -20px;
            border-radius: 50%;
            z-index: 200;
        }

        .lSAction > .lSNext {
            background-color: #575757;
            background-position: -33px 0;
            right: -20px;
            border-radius: 50%;
            z-index: 200;
        }

        .lSAction > a:hover {
            opacity: 1;
        }


        @media (max-width: 2900px) {
            .block2 {
                width: auto;
                height: 400px;
            }

            .item_sp {
                width: auto;
                height: 400px
            }

            .img_sp {
                height: 300px
            }

            .block_width{
                height: 300px;
            }

        }

        @media (max-width: 912px) {
            .block2 {
                width: auto;
                height: 300px;
            }

            .item_sp {
                width: auto;
                height: 300px
            }

            .img_sp {
                width: 80px;
                height: 200px
            }

            .block_width{
                height: 200px;
            }
        }
    </style>

    <style>

        @media (max-width: 2900px) {
          #imageGallery > li {
              height: calc(100%);
          }
        }

        @media (max-width: 912px) {
            #imageGallery > li {
                height: calc(100%);
            }
        }
    </style>
@endsection
@section('content')
    <div class="container"  style="margin-bottom: 50px ;margin-top: -24px">
        <ul id="imageGallery" style="text-align: center; height: auto">
            @foreach($sliders as $slide)
            <li data-thumb="{{$slide->thumb}}" data-src="{{$slide->thumb}}">
                <a href="{{$slide->url}}">
                    <img width="95%" height="95%" src="{{$slide->thumb}}" />
                </a>
            </li>
            @endforeach
        </ul>
    </div>

{{-- Giới thiệu các khuyến mãi của xưởng--}}

    <section id="home-service">
        <div class="container">
            <div class="home-service-inner">
                <div class="wrapper">
                    <div class="inner">
                        <div class="grid mg-left-0 medium--hide small--hide">
                            <div class="grid__item xxx-xl large--one-third medium--one-third small--one-whole service-item pd-left-0">
                                <div class="grid__item xxx-xl">
                                    <div class="service-icon" style="background: #f4f4f5;
                                          /*border: 0.1875em solid #0F1C3F;*/
                                          border-radius: 50%;
                                          height: 52px;
                                          width: 52px;margin-left: auto;margin-right: auto">
                                        <i style="color: #1d88fe; font-size: 30px;margin-top: 10px;" class="fa fa-truck" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="grid__item xxx-xl">
                                    <div class="service-title">
                                        <b>Miễn phí giao hàng</b>
                                    </div>
                                    <div class="service-desc">
                                        Bán kính 10km
                                    </div>
                                </div>
                            </div>


                            <div class="grid__item xxx-xl large--one-third medium--one-third small--one-whole service-item pd-left-0">
                                <div class="grid__item xxx-xl">
                                    <div class="service-icon" style="background: #f4f4f5;
                                          /*border: 0.1875em solid #0F1C3F;*/
                                          border-radius: 50%;
                                          height: 52px;
                                          width: 52px;margin-left: auto;margin-right: auto">
                                        <i style="color: #1d88fe; font-size: 30px;margin-top: 10px;" class="fa fa-usd" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="grid__item xxx-xl">
                                    <div class="service-title">
                                        <b>Tiết Kiệm Chi Phí</b>
                                    </div>
                                    <div class="service-desc">
                                        Miễn phí lắp đặt và thiết kế
                                    </div>
                                </div>
                            </div>

                            <div class="grid__item xxx-xl large--one-third medium--one-third small--one-whole service-item pd-left-0">
                                <div class="grid__item xxx-xl">
                                    <div class="service-icon">
                                        <img src="//theme.hstatic.net/1000240719/1000698562/14/service_icon_1.png?v=942" alt="<b>Bảo Hành Sản Phẩm</b>">
                                    </div>
                                </div>
                                <div class="grid__item xxx-xl">
                                    <div class="service-title">
                                        <b>Bảo Hành Sản Phẩm</b>
                                    </div>
                                    <div class="service-desc">
                                        Tất cả sản phẩm được bảo hành trên 6 tháng về lỗi KỸ THUẬT
                                    </div>
                                </div>
                            </div>


                            <div class="grid__item xxx-xl large--one-third medium--one-third small--one-whole service-item pd-left-0">
                                <div class="grid__item xxx-xl">
                                    <div class="service-icon">
                                        <img src="//theme.hstatic.net/1000240719/1000698562/14/service_icon_2.png?v=942" alt="<b>100% Chất Liệu Chính Hãng<br> An toàn sức khỏe</b>">
                                    </div>
                                </div>
                                <div class="grid__item xxx-xl">
                                    <div class="service-title">
                                        <b>Chất Liệu Chính Hãng <br> An toàn sức khỏe</b>
                                    </div>
                                    <div class="service-desc">
                                    </div>
                                </div>
                            </div>

                            <div class="grid__item xxx-xl large--one-third medium--one-third small--one-whole service-item pd-left-0">
                                <div class="grid__item xxx-xl">
                                    <div class="service-icon">
                                        <img src="//theme.hstatic.net/1000240719/1000698562/14/service_icon_3.png?v=942" alt="<b>Máy Đo Sản Phẩm</b>">
                                    </div>
                                </div>
                                <div class="grid__item xxx-xl">
                                    <div class="service-title">
                                        <b>Thiết Kế Sản Phẩm</b>
                                    </div>
                                    <div class="service-desc">
                                        Theo kích thước và màu sắc ưu thích của khách hàng
                                    </div>
                                </div>
                            </div>

                            <div class="grid__item xxx-xl large--one-third medium--one-third small--one-whole service-item pd-left-0">
                                <div class="grid__item xxx-xl">
                                    <div class="service-icon">
                                        <img src="//theme.hstatic.net/1000240719/1000698562/14/service_icon_4.png?v=942" alt="<b>Tư Vấn 24/7</b>">
                                    </div>
                                </div>

                                <div class="grid__item xxx-xl">
                                    <div class="service-title">
                                        <b>Tư Vấn</b>
                                    </div>
                                    <div class="service-desc">
                                        Hotline &amp; Zalo Từ 9h - 21h<br><a href="tel:0907466879">0907 466 879</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <link type="text/css" rel="stylesheet" href="/web_noi_that1/public/template/lightslider-master/dist/css/lightslider.css" />

    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-52">
                <div class="container section-title-container title-slash title-has-child" style="margin-top: 0px; margin-bottom: 10px;margin-left: -15px">
                    <h3 class="section-title section-title-normal"><span class="section-title-main" style="color: #ffffff;">
                            <a>Sản Phẩm Mới</a></span>
                    </h3>
                </div>

                <ul id="product_new" class="cs-hidden">
                    @foreach($new_products as $product)
                    <li class="item_sp" >
                        <div class="block2">
                            <div class="block2-pic hov-img0 block_width">
                                <a href="{{ route('index_sanpam',[$product->id,Str::slug($product->name, '-') ])}}">
                                    <img class="img_sp" src="{{ $product->thumb }}" alt="{{ $product->name }}">
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="{{ route('index_sanpam',[$product->id,Str::slug($product->name, '-') ])}}"
                                       class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $product->name }} {{ $product->id_sp }}
                                    </a>

                                    <span class="stext-105 cl3">
                                        {!!  \App\Helpers\Helper::price($product->price, $product->price_sale)  !!}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>


            @foreach($menus as $menu)
                @php
                    $count = 0;
                    foreach($menu->menu_child($menu) as $menu_child)
                        $count+= count($menu_child->products);
                @endphp
                @if($menu->parent_id == 0 && $count>=5)
                <div class="flex-w flex-sb-m p-b-52">
                    <div class="container section-title-container title-slash title-has-child" style="margin-top: 0px; margin-bottom: 10px;margin-left: -15px">
                        <h3 class="section-title section-title-normal"><span class="section-title-main" style="color: #ffffff;">
                                <a class="section-title-link" href="{{ route('index_danhmuc',[$menu->id,Str::slug($menu->name, "-")]) }}">{{$menu->name}}</a></span>
                        </h3>
                    </div>

                    <ul id="product_{{$menu->id}}" class="cs-hidden">
                        @foreach($menu->menu_child($menu) as $menu_child)
                            @foreach($menu_child->products as $product)
                            <li class="item_sp" >
                                <div class="block2">
                                    <div class="block2-pic hov-img0 block_width">
                                        <a href="{{ route('index_sanpam',[$product->id,Str::slug($product->name, '-') ])}}">
                                            <img class="img_sp" src="{{ $product->thumb }}" alt="{{ $product->name }}">
                                        </a>
                                    </div>

                                    <div class="block2-txt flex-w flex-t p-t-14">
                                        <div class="block2-txt-child1 flex-col-l ">
                                            <a href="{{ route('index_sanpam',[$product->id,Str::slug($product->name, '-') ])}}"
                                               class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                {{ $product->name }} {{ $product->id_sp }}
                                            </a>

                                            <span class="stext-105 cl3">
                                                {!!  \App\Helpers\Helper::price($product->price, $product->price_sale)  !!}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        @endforeach
                    </ul>
                </div>
                @endif
            @endforeach

        </div>
    </section>


@endsection

@section('footer')
    <script src="/web_noi_that1/public/template/lightslider-master/dist/js/lightslider.js"></script>
    <script>
    $(document).ready(function() {
    @foreach($menus as $menu)
        @if($menu->parent_id == 0)
            $('#product_{{$menu->id}}').lightSlider({
                item:5,
                slideMove:5,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed:600,
                loop:false,
                responsive : [
                    {
                        breakpoint:800,
                        settings: {
                            item:3,
                            slideMove:3,
                            slideMargin:6,
                        }
                    },
                    {
                        breakpoint:480,
                        settings: {
                            item:2,
                            slideMove:2
                        }
                    }
                ]
            });
        @endif
    @endforeach

        $('#product_new').lightSlider({
            item:5,
            slideMove:5,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            loop:false,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:3,
                        slideMargin:6,
                    }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:2
                    }
                }
            ]
        });

    });
    </script>


    <script>
        $(document).ready(function() {
            var autoplaySlider = $('#imageGallery').lightSlider({
                auto:true,
                speed:500,
                pause:5000,
                item:1,
                loop:true,
                // enableDrag: false,
            });
            autoplaySlider.play();
        });
    </script>

@endsection
