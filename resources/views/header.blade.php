<header>
    @php
        $menusHtml = \App\Helpers\Helper::menus($menus);
        $menusHtml2 = \App\Helpers\Helper::menus_m($menus1);
    @endphp

    <!-- Header desktop -->
    <style>
            .main-menu > li > a {
                font-family: Roboto, Sans-Serif;
                font-size: 18px;
                color: #333;
                padding: 5px 0px;
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
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
                background-color: #fff;
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
                padding: 5px 0;

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
                color: #555;

                display: block;
                padding: 8px 20px;
                width: 100%;

                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
            }


            .wrap-menu-desktop {
                position: fixed;
                z-index: 1100;
                background-color: #fffffc;
                width: 100%;
                height: 80px;
                top: 0px;
                left: 0px;
                -webkit-transition: height 0.3s, background-color 0.3s;
                -o-transition: height 0.3s, background-color 0.3s;
                -moz-transition: height 0.3s, background-color 0.3s;
                transition: height 0.3s, background-color 0.3s;
            }


        </style>
    <div class="container-menu-desktop" >
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">
                <a href="{{route('home')}}" class="logo">
                    <img src="/web_noi_that1/public/template/admin/dist/img/09a1b65a422c8172d83d.jpg" >
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="active-menu"><a href="{{route('home')}}">Trang Chủ</a> </li>
                        {!!$menusHtml!!}
                    </ul>
                </div>
                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                         data-notify="{{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                </div>
            </nav>
        </div>
    </div>


    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{route('home')}}"><img src="/web_noi_that1/public/template/admin/dist/img/09a1b65a422c8172d83d.jpg" alt="IMG-LOGO"></a>
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
                <a href="contact.html">Liên Hệ</a>
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
