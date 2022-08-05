@extends('main')

@section('content')
    @include('admin.alert')
    <form class="bg0 p-b-85" method="post">
        @if (count($products) != 0)
            <div style="width: 90%">
                <div class="row">
                    <div class="col-lg-10 col-xl-5 m-lr-auto m-b-50">
                        <div class="m-l-25 m-r--38 m-lr-0-xl">
                            <div class="wrap-table-shopping-cart">
                                @php $total = 0; @endphp
                                <table class="table-shopping-cart">
                                    <tbody>
                                    <tr class="table_head" >
                                        <th >Sản Phẩm</th>
                                        <th >Đơn Giá</th>
                                        <th style="text-align: center" >Số lượng</th>
                                        <th   style="text-align: center" >Tổng</th>
                                        <th>&nbsp;</th>
                                    </tr>

                                    @foreach($products as $key => $product)

                                        @php
                                            $price = $product->price_sale != 0 ? $product->price_sale : $product->price;
                                            $priceEnd = $price * $carts[$product->id];
                                            $total += $priceEnd;
                                        @endphp
                                        <tr class="table_row">
                                            <td >
                                                <div style="display: flex; line-height: 80.08px">
                                                    <img width="60px" class="m-r-10" src="{{ $product->thumb }}" alt="IMG">
                                                     {{ $product->name }}
                                                </div>
                                            </td>

                                            <td >{{ number_format($price, 0, '', '.') }} VNĐ</td>
                                            <td style="text-align: center" >
                                                <div style="margin: 0 auto;" class="wrap-num-product flex-w m-l-0 m-r-0 ">
                                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                                    </div>

                                                    <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                           name="num_product[{{ $product->id }}]" value="{{ $carts[$product->id] }}"/>

                                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id_product[{{ $product->id }}]" value="{{ $product->id }}"/>
                                            </td>
                                            <td  style="text-align: center" >{{ number_format($priceEnd, 0, '', '.') }} VNĐ</td>
                                            <td class=" p-r-15">
                                                <a href="{{ route('remove_cart',$product->id) }}">
                                                    <i STYLE="font-size: 30px; color: #a4a4a4" class="fa fa-times-circle-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
{{--                                <div class="flex-w flex-m m-r-20 m-tb-5">--}}
{{--                                    <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text"--}}
{{--                                           name="coupon" placeholder="Coupon Code">--}}

{{--                                    <div--}}
{{--                                        class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">--}}
{{--                                        Apply coupon--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <input type="submit" value="Cập Nhật Giỏ Hàng" formaction="{{route('update_cart')}}"
                                    class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                @csrf
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-lg-7 m-lr-auto m-b-50">
                        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">


                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">

                                <div style="width: 100%">
                                    <div class="p-t-15">
                                        <span class="stext-112 cl8" style="font-weight: bold; font-size: 30px">
                                            Thông Tin Thanh toán
                                        </span>

                                        <div class=" bg0 m-b-12 m-t-12">
                                            <label>
                                                <p style="font-weight: bold; color: #222222">
                                                    Họ và tên *
                                                </p>
                                              </label>
                                            <input class="stext-111 bor8 cl8 plh3 size-111 p-lr-15" type="text" name="name" placeholder="Tên khách Hàng" >
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class=" bg0 m-b-12">
                                                    <label>
                                                        <p style="font-weight: bold; color: #222222">
                                                            Số điện thoại *
                                                        </p>
                                                    </label>
                                                    <input class="stext-111 bor8 cl8 plh3 size-111 p-lr-15 " type="text" name="phone" placeholder="Số Điện Thoại" >
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class=" bg0 m-b-12">
                                                    <label>
                                                        <p style="font-weight: bold; color: #222222">
                                                            Email *
                                                        </p>
                                                    </label>
                                                    <input class="stext-111 bor8 cl8 plh3 size-111 p-lr-15" type="text" name="email" placeholder="Email Liên Hệ">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <p class="bg0 m-b-12 m-t-12 m-l-10" style="color: #8c8b8b" >
                                                    Chúng tôi sẽ liên hệ với quý khách qua <strong> số điện thoại hoặc Email </strong>  nên quý khách phải nhập đúng <strong> số điện thoại và Email </strong>
                                                </p>
                                            </div>
                                        </div>







                                        <div class=" bg0 m-b-12">
                                            <label>
                                                <p style="font-weight: bold; color: #222222">
                                                    Địa chỉ *
                                                </p>
                                            </label>
                                            <input class="stext-111 bor8 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Địa Chỉ Giao Hàng">
                                        </div>



                                        <div class=" bg0 m-b-12">
                                            <label>
                                                <p style="font-weight: bold;">
                                                    <span style="color: #222222" >Ghi chú đơn hàng (tuỳ chọn)</span>
                                                </p>
                                            </label>
                                            <textarea class="cl8 plh3 size-111 p-lr-15 p-t-15 bor8 " style="height: 200px" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn.Mô tả" name="content"></textarea>
                                        </div>

                                        <h4 class="mtext-109 cl2 p-b-30">
                                            Tổng Tiền Giỏ Hàng
                                        </h4>

                                        <div class="flex-w flex-t p-t-27 p-b-33">
                                            <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Tổng tiền:
                                    </span>
                                            </div>

                                            <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2">
                                        {{ number_format($total, 0, '', '.') }} VNĐ
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                               Đặt Hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    @else
        <div class="text-center p-b-100"><h2>Giỏ hàng trống</h2></div>
    @endif
@endsection
