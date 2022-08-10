
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

    @media (max-width: 2900px) {
        .block2 {
            width: auto;
            height: 450px;
        }

        .item_sp {
            width: auto;
            height: 450px
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
            height: 350px;
        }

        .item_sp {
            width: auto;
            height: 350px
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


<div class="row isotope-grid">
    @foreach($products as $key => $product)
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
            <!-- Block2 -->
            <div class="block2">
                <div class="block2-pic hov-img0">
                    <a href="{{ route('index_sanpam',[$product->id,Str::slug($product->name, '-') ])}}">
                        <img height="95%"  class="img_sp"  src="{{ $product->thumb }}" alt="{{ $product->name }}">
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
        </div>
    @endforeach
</div>
