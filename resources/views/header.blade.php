<header class="header-v2">
    @php
        $menusHtml = \App\Helpers\Helper::menus($menus);
        $menusHtml2 = \App\Helpers\Helper::menus_m($menus1);
    @endphp

    <!-- Header desktop -->
    <style>
        .main-menu > li {
            display: block;
            position: relative;
            /*padding: 20px 10px 20px 0px;*/
            margin: 0px 4px 0px 14px;
        }

        .main-menu > li > a {
                font-family: Roboto, Sans-Serif;
                font-size: 18px;
                color: #fffffc;
                padding: 5px 0px;
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
                text-transform: uppercase;
            }

            .header-v3 .main-menu > li > a {
                color: #fff;
            }
            .sub-menu {
                list-style-type: none;
                position: absolute;
                top:0;
                left:100%;
                min-width: 178px;
                max-width: 225px;
                background-color: #575757;
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
                /*padding: 5px 0;*/
                box-shadow: 0 1px 5px 0px rgba(0,0,0,0.2);
                -moz-box-shadow: 0 1px 5px 0px rgba(0,0,0,0.2);
                -webkit-box-shadow: 0 1px 5px 0px rgba(0,0,0,0.2);
                -o-box-shadow: 0 1px 5px 0px rgba(0,0,0,0.2);
                -ms-box-shadow: 0 1px 5px 0px rgba(0,0,0,0.2);

                visibility: hidden;
                opacity: 0;
            }

            .sub-menu li {
                position: relative;
                background-color: transparent;
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
                width: 200px;
            }

            .main-menu > li > .sub-menu {
                top:100%;
                left: 0;
            }

            .sub-menu a {
                font-family: Roboto, Sans-Serif;
                font-size: 18px;
                line-height: 1.5;
                color: #fffffc;
                display: block;
                padding: 8px 20px;
                width: 100%;
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                text-transform: uppercase;
                -moz-transition: all 0.4s;
            }


            .wrap-menu-desktop {
                position: fixed;
                z-index: 1100;
                background-color: #fffffc;
                width: 100%;
                height: 60px;
                top: 0px;
                left: 0px;
                -webkit-transition: height 0.3s, background-color 0.3s;
                -o-transition: height 0.3s, background-color 0.3s;
                -moz-transition: height 0.3s, background-color 0.3s;
                transition: height 0.3s, background-color 0.3s;
            }

            .main-menu > li:hover > a {
                text-decoration: none;
                background: -webkit-linear-gradient(top, rgb(143, 107, 41), rgb(253, 224, 141), rgb(223, 159, 40));
                background: linear-gradient(top, rgb(143, 107, 41), rgb(253, 224, 141), rgb(223, 159, 40));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .sub-menu > li:hover > a {
                text-decoration: none;
                background: -webkit-linear-gradient(top,rgb(143, 107, 41), rgb(253, 224, 141), rgb(223, 159, 40));
                background: linear-gradient(top, rgb(143, 107, 41), rgb(253, 224, 141), rgb(223, 159, 40));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
        </style>

    <div class="container-menu-desktop trans-03"  >
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop p-l-45" style="background-color: #575757">
                <a href="{{route('home')}}" class="logo">
                    <img src="/web_noi_that1/public/template/admin/dist/img/gold3.jpg" >
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop" style="width: auto">
                    <ul class="main-menu">
                        <li class=""><a href="{{route('home')}}">Trang Chủ</a> </li>
                        {!!$menusHtml!!}
                        <li style="border-left: 1px solid #fffffc;padding-left: 25px;line-height: 40px; color: #fffffc">
                            <a>
                                Giới thiệu
                            </a>
                        </li>
                        <li style="border-left: 1px solid #fffffc;padding-left: 25px;line-height: 40px;color: #fffffc">
                            <a>
                                Liên hệ
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="wrap-icon-header flex-w flex-r-m h-full">
                    <div class="flex-c-m h-full p-r-24">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
                            <i style="color: #fffffc" class="zmdi zmdi-search"></i>
                        </div>
                    </div>

                    <div class="flex-c-m h-full p-l-18 p-r-25 bor5">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart"
                             data-notify="{{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}">
                            <i style="color: #fffffc" class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
    </div>


    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{route('home')}}"><img src="/web_noi_that1/public/template/admin/dist/img/gold3.jpg" ></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                 data-notify="{{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li><a href="{{route('home')}}">Trang Chủ</a> </li>

            <li>
                <a>
                    Giới thiệu
                </a>
            </li>

            <li>
                <a>
                    Liên hệ
                </a>
            </li>

            {!!  $menusHtml2 !!}

        </ul>
    </div>


    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="/web_noi_that1/public/template/images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
