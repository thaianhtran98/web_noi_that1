@extends('main')

@section('content')
    <!-- Slider -->
    <section class="section-slide" >
        <div class="wrap-slick1 rs1-slick1">
            <div class="slick1">
                @foreach($sliders as $slider)
                    <div class="item-slick1 h-full" style="background-image: url({{$slider->thumb}});">
                        <div class="container">
                            <div class="flex-col-l-m p-t-100 p-b-30">
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 cl2 respon2">
									HOT
								</span>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                    <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                        {{ $slider->name }}
                                    </h2>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                    <a href="{{ $slider->url }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Xem chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


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

        .title-slash .section-title .section-title-main:before {
            content: " ";
            background: #575757 url('/web_noi_that1/public/template/admin/dist/img/gold.jpg') center 35% no-repeat;
            width: 38px;
            height: 38px;
            line-height: 38px;
            position: absolute;
            top: 0;
            left: 0;
            background-size: 70%;
        }


        .title-slash .section-title .section-title-main:after {
            content: " ";
            position: absolute;
            border-bottom: 25px solid transparent;
            border-left: 20px solid #575757;
            border-right: 20px solid transparent;
            border-top: 19px solid #575757;
            top: 0;
            right: -40px;
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
            line-height: 38px;
        }

        .lSAction > .lSPrev {
            background-color: #575757;
            background-position: 0 0;
            left: -20px;
        }
        .lSAction > .lSNext {
            background-color: #575757;
            background-position: -32px 0;
            right: -20px;
        }

        .lSAction > a:hover {
            opacity: 1;
        }

        @media (max-width: 1880px) {
            .item_sp {
                width: 300px;
                height: 350px;
            }

            .img_sp {
                width: 250px;
                height: 250px
            }
            .block_width{
                width: 250px;
                height: 250px
            }

        }

        @media (max-width: 768px) {
            .item_sp {
                width: 100px;
                height: 200px
            }

            .img_sp {
                width: 80px;
                height: 80px
            }

            .block_width{
                width: 80px;
                height: 80px
            }
        }
    </style>
    <link type="text/css" rel="stylesheet" href="/web_noi_that1/public/template/lightslider-master/dist/css/lightslider.css" />

    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
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
                        <p></p>
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
                                                {{ $product->name }}
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


    {{--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
    <script src="/web_noi_that1/public/template/lightslider-master/dist/js/lightslider.js"></script>
    <script>
    {{--function loadMore()--}}
    {{--    {--}}
    {{--        $.ajaxSetup({--}}
    {{--            headers: {--}}
    {{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
    {{--            }--}}
    {{--        });--}}

    {{--        const page = $('#page').val();--}}
    {{--        $.ajax({--}}
    {{--            type : 'POST',--}}
    {{--            dataType : 'JSON',--}}
    {{--            data : { page },--}}
    {{--            url : '{{ route('loadProduct') }}',--}}
    {{--            success : function (result) {--}}
    {{--                if (result.html !== '') {--}}
    {{--                    $('#loadProduct').append(result.html);--}}
    {{--                    $('#page').val(page + 1);--}}
    {{--                } else {--}}
    {{--                    // alert('Đã load xong Sản Phẩm');--}}
    {{--                    $('#button-loadMore').css('display', 'none');--}}
    {{--                }--}}
    {{--            }--}}
    {{--        })--}}
    {{--    }--}}


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
    });
    </script>
@endsection
