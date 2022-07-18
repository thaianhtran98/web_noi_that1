@extends('main')
@section('content')

    <style>
        .product-short-description {
            border: 1px solid #c7c7c7;
            padding: 5px 10px;
            color: #000;
            background: #fbfbfb;
            border-radius: 5px;
            margin: 0 0 20px;
        }

        .product-short-description-header {
            padding: 8px 10px;
            margin: -5px -10px 10px;
            background: #fff;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-bottom: 1px solid #c7c7c7;
            font-weight: 700;
            text-transform: uppercase;
            width: auto;
            font-size: 15px;
        }
    </style>

    <div class="container p-t-80">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{route('home')}}" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="{{  route('index_danhmuc',[$product->menu->id,Str::slug($product->menu->name, "-")]) }}"
               class="stext-109 cl8 hov-cl1 trans-04">
                {{ $product->menu->name }}
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				{{ $title }}
			</span>
        </div>
    </div>

    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">

                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                            <div class="slick3 gallery-lb">

                                @foreach($img_detail as $img)
                                    <div class="item-slick3" data-thumb="{{ $img->thumb_detail }}">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="{{ $img->thumb_detail }}" alt="IMG-PRODUCT">

                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ $img->thumb_detail }}">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">

                        @include('admin.alert')

                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{ $title }}
                        </h4>

                        <span class="mtext-106 cl2">
							{!! \App\Helpers\Helper::price($product->price, $product->price_sale) !!}
						</span>


                        <div class="product-short-description">
                            <h2 class="product-short-description-header">Thông số kỹ thuật</h2>

                            <p>
                                <strong>Màu sắc:</strong> {{$product->color}}<br>
                                <strong>Kích thước:</strong> <span style="font-size: 14px;">{{$product->size}}</span><br>
                                <strong>Chất liệu: </strong><span style="font-size: 14px;">{{$product->material}}</span><br>
                                <strong>Kiểu dáng:&nbsp;</strong>{{$product->style}}<br>
                                @if($product->origin == null)
                                <strong>Xuất xứ:</strong>
                                &nbsp;Sản phẩm của&nbsp;<a href="https://hoaphatnoithat.net.vn/" target="_blank" rel="noopener noreferrer">Nội Thất Phúc Thịnh</a><br>
                                @else
                                    <strong>Xuất xứ:</strong>
                                    &nbsp;Sản phẩm của&nbsp;<a href="https://hoaphatnoithat.net.vn/" target="_blank" rel="noopener noreferrer">   {{$product->origin}}</a><br>
                                @endif
                                <strong>Bảo hành:</strong>&nbsp;{{$product->warrantly}}<br>
                                Giá chưa bao gồm vận chuyển<br>
                            </p>
                        </div>

                        <p class="stext-102 cl3 p-t-23">
                            {{ $product->description }}
                        </p>


                        <!--  -->
                        <div class="p-t-33">
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <form action="{{route('add_cart')}}" method="post">
                                        @if ($product->price !== NULL)
                                            <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                                <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                    <i class="fs-16 zmdi zmdi-minus"></i>
                                                </div>

                                                <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                       name="num_product" value="1">

                                                <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                    <i class="fs-16 zmdi zmdi-plus"></i>
                                                </div>
                                            </div>


                                            <button type="submit"
                                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 ">
                                                Add to cart
                                            </button>
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        @endif
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">

            <span class="stext-107 cl6 p-lr-25">
				Loại: {{ $product->menu->name }}
			</span>
        </div>
    </section>

    <section class="sec-relate-product bg0 p-t-45 p-b-105">
        <div class="container">
            <div class="p-b-45">
                <h3 style="font-family:  Roboto, Sans-Serif;" class="ltext-106 cl5 txt-center">
                    Các sản phẩm khác
                </h3>
            </div>

            @include('products.list')
        </div>
    </section>

@endsection