@extends('main')

@section('head')
    <style>

        @media (max-width: 2900px) {
            #img_banner {
                width: calc(100%);
            }

            /*#sort {*/
            /*   */
            /*}*/
        }

        @media (max-width: 912px) {
            #img_banner  {
                width: calc(100%);
            }
        }
    </style>
@endsection

@section('content')
    <div class="container" style="text-align: center">
        <img id="img_banner"  src="\web_noi_that1\public\template\admin\dist\img\banner menu.jpg">
    </div>
    <div class="bg0 m-t-23 p-b-140 p-t-30">
        <div class="container">
            <div class="flex-w flex-sb-m" id="sort" style="background-color: rgba(87,87,87,0.11); margin-bottom: 20px">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10" >
{{--                   <h1>{{ $title }}</h1>--}}
                    <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                        @if(count($menu_child)!=0)
                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                            Các sản phẩm của danh mục {{ $title }}
                        </button>
                        @else
                            <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                              Các sản phẩm của danh mục {{ $title }}
                            </button>
                        @endif

                        @if(count($menu_child)!=0)
                            @foreach($menu_child as $child)
                                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{$child->id}}">
                                    {{$child->name}}
                                </button>
                            @endforeach
                        @endif
                    </div>
                </div>


                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Sắp xếp
                    </div>
                </div>

                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                    </div>
                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10" style="position: relative; z-index:  202000">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15" style="font-family: Roboto, Sans-Serif;">
                                Sắp xếp
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="{{ request()->url() }}" class="filter-link stext-106 trans-04">
                                        Mặc định
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ request()->fullUrlWithQuery(['price' => 'asc']) }}" class="filter-link stext-106 trans-04">
                                        Giá: Thấp đến cao
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ request()->fullUrlWithQuery(['price' => 'desc']) }}" class="filter-link stext-106 trans-04">
                                        Giá: Cao đến thấp
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row isotope-grid">
                @foreach($products as $key => $product)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->menu_id}}">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <a href="{{ route('index_sanpam',[$product->id,Str::slug($product->name, '-') ])}}">
                                    <img width="95%" height="95%"  src="{{ $product->thumb }}" alt="{{ $product->name }}">
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="{{ route('index_sanpam',[$product->id,Str::slug($product->name, '-') ])}}" style="width: 100%; display: flex"
                                       class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        <div>{{ $product->name }} {{ $product->id_sp }}</div>
                                        <div style="margin-right: 0;margin-left: auto"></div>
                                    </a>

                                    <span class="stext-105 cl3">
							{!!  \App\Helpers\Helper::price($product->price, $product->price_sale)  !!}
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <style>
                #wrapper {
                    width: 500px;
                    height: 200px;
                    margin: 50px auto;
                }

                .center {
                    width: 50%;
                    height: 50%;
                    margin: auto;
                }
            </style>
            <div id="wrapper">
                <div class="center" >
                    {!! $products->links("pagination::bootstrap-4")!!}
                </div>
            </div>

        </div>
    </div>
@endsection
