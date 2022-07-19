@extends('admin.main')

@section('head')
    <script src="/web_noi_that1/public/ckeditor/ckeditor.js"></script>
    <style>
        .list-images {
            width: 50%;
            margin-top: 20px;
            display: inline-block;
        }
        .hidden { display: none; }
        .box-image {
            width: 100px;
            height: 108px;
            position: relative;
            float: left;
            margin-left: 5px;
        }
        .box-image img {
            width: 100px;
            height: 100px;
        }
        .wrap-btn-delete {
            position: absolute;
            top: -8px;
            right: 0;
            height: 2px;
            font-size: 20px;
            font-weight: bold;
            color: red;
        }
        .btn-delete-image {
            cursor: pointer;
        }
        /*.table {*/
        /*    width: 15%;*/
        /*}*/
    </style>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Tên Sản Phẩm</label>
                        <input type="text" name="name"  id="name" value="{{ $product->name }}" class="form-control"
                               placeholder="Nhập tên sản phẩm">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Danh Mục</label>
                        <select class="form-control" name="menu_id">
                            @foreach($menus as $menu)
                                <option value="{{ $menu->id }}" {{ $product->menu_id == $menu->id ? 'selected' : '' }}>
                                    {{ $menu->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá Gốc</label>
                        <input type="text" name="price_input" id="price_input" value="{{ $product->price }}"  placeholder="Nhập giá gốc" class="form-control" />

                        <input type="number" hidden name="price" id="price" value="{{ $product->price }}"  class="form-control"/>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá Giảm</label>
                        <input type="text" name="price_input_sale" id="price_input_sale" value="{{ $product->price_sale }}" placeholder="Nhập giá giảm" class="form-control" />
                        <input type="number" hidden name="price_sale" id="price_sale" value="{{ $product->price_sale }}"  class="form-control" />
                    </div>
                </div>
            </div>


            <div class="row">
                <div  class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Chất Liệu</label>
                        <input type="text" name="material" id="material"  value="{{ $product->material }}" class="form-control" placeholder="Nhập chất liệu" >
                    </div>

                    <div class="form-group">
                        <label for="menu">Kiểu Dáng</label>
                        <input type="text" name="style" id="style" value="{{ $product->style }}"  class="form-control" placeholder="Nhập kiểu dáng" >
                    </div>

                    <div class="form-group">
                        <label for="menu">Xuất Xứ</label>
                        <input type="text" name="origin" id="origin"  value="{{ $product->origin }}"  class="form-control" placeholder="Nhập xuất xứ">
                    </div>
                </div>

                <div  class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Màu Sắc</label>
                        <input type="text" name="color" id="color" value="{{ $product->color }}"  class="form-control" placeholder="Nhập màu sắc" >
                    </div>

                    <div class="form-group">
                        <label for="menu">Kích Cỡ</label>
                        <input type="text" name="size"  id="size" value="{{ $product->size }}"  class="form-control" placeholder="Nhập kích cỡ" >
                    </div>

                    <div class="form-group">
                        <label for="menu">Bảo hành</label>
                        <input type="text" name="warranty" id="warranty" value="{{ $product->warranty }}"  class="form-control" placeholder="Nhập thời gian bảo hành" >
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Mô Tả Chi Tiết</label>
                <textarea name="content" id="content" class="form-control">{{ $product->content }}</textarea>
            </div>

            <div class="form-group">
                <label for="menu">Ảnh Chính Sản Phẩm</label>
                <input type="file"  class="form-control" id="upload">
                <div id="image_show">
                    <a href="{{ $product->thumb }}" target="_blank">
                        <img src="{{ $product->thumb }}" width="100px">
                    </a>
                </div>
                <input type="hidden" name="thumb" value="{{ $product->thumb }}" id="thumb">
            </div>

            <label for="menu">Ảnh Chi Tiết Sản Phẩm </label></br>
            <div class="input-group hdtuto control-group lst increment" >
                <div class="list-input-hidden-upload">
                    @foreach($img_detail as $img)
                        <input type="file" name="filenames[]" class="myfrm form-control hidden" id="{{$img->id}}">
                    @endforeach
                    <input type="file" name="filenames[]" id="file_upload" class="myfrm form-control hidden">
                </div>
                <div class="input-group-btn">
                    <button class="btn btn-success btn-add-image" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>+Add image</button>
                </div>
            </div>
            <div class="list-images">

                @foreach($img_detail as $img)
                    <div class="box-image">
                        <input type="hidden" name="images_uploaded[]" value="{{ $img->thumb_detail }}" id="">
                        <img src="{{ $img->thumb_detail }}" class="picture-box">
                        <div class="wrap-btn-delete"><span data-id="{{$img->id}}" class="btn-delete-image">x</span></div>
                        <input type="hidden" name="img_detail[]" id="id_{{$img->id}}" value="{{$img->thumb_detail}}" >
                    </div>
                @endforeach

                @if (isset($list_images) && !empty($list_images))
                    @foreach (json_decode($list_images) as $key => $img)
                        <div class="box-image">
                            <input type="hidden" name="images_uploaded[]" value="{{ $img }}" id="img-{{ $key }}">
                            <img src="{{ asset('files/'.$img) }}" class="picture-box">
                            <div class="wrap-btn-delete"><span data-id="img-{{ $key }}" class="btn-delete-image">x</span></div>
                        </div>
                    @endforeach
                    <input type="hidden" name="images_uploaded_origin" value="{{ $list_images }}">
                    <input type="hidden" name="id" value="{{ $id }}">
                @endif
            </div>

            @if (isset($files) && $files->count() > 0)
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($files as $elm)
                        <tr>
                            <th scope="row">{{ $elm->id }}</th>
                            <td><a href="{{ route('file.edit',['id' => $elm->id]) }}"><button type="button" class="btn btn-info">Edit</button></a></td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            @endif

            <div class="form-group">
                <label>Kích Hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                        {{ $product->active == 1 ? ' checked=""' : '' }}>
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                        {{ $product->active == 0 ? ' checked=""' : '' }}>
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập Nhật Sản Phẩm</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>

        $(document).ready(function () {
            for (var i = 0 ; i<sessionStorage.length ; i++){
                var thuoc_tinh = sessionStorage.key(i);
                console.log(thuoc_tinh);
                if(sessionStorage.getItem(thuoc_tinh)){
                    var dm = document.getElementById('neo_'+thuoc_tinh);
                    dm.style.color = 'dodgerblue';
                    document.getElementById(thuoc_tinh).value =sessionStorage.getItem(thuoc_tinh);
                }
            }
        });

        function neo(thuoctinh){
            var neo = document.getElementById('neo_'+thuoctinh);
            if(neo.style.color === 'dodgerblue'){
                sessionStorage.removeItem(thuoctinh);
                neo.style.color = 'black';
            }else{
                sessionStorage.setItem(thuoctinh,document.getElementById(thuoctinh).value);
                neo.style.color = 'dodgerblue';
            }
        }


        $('#name').keypress(function (event) {
            if (event.keyCode == 13 || event.which == 13) {
                $('#menu_id').focus();
                event.preventDefault();
            }
        });

        $('#menu_id').keypress(function (event) {
            if (event.keyCode == 13 || event.which == 13) {
                $('#price_input').focus();
                event.preventDefault(); //preventDefault() Không load lại form
            }
        });


        $('#price_input').keypress(function (event) {
            if (event.keyCode == 13 || event.which == 13) {
                $('#price_input_sale').focus();
                event.preventDefault();
            }
        });

        $('#price_input_sale').keypress(function (event) {
            if (event.keyCode == 13 || event.which == 13) {
                $('#material').focus();
                event.preventDefault();
            }
        });

        $('#material').keypress(function (event) {
            if (event.keyCode == 13 || event.which == 13) {
                $('#color').focus();
                event.preventDefault(); //preventDefault() Không load lại form
            }
        });

        $('#color').keypress(function (event) {
            if (event.keyCode == 13 || event.which == 13) {
                $('#style').focus();
                event.preventDefault(); //preventDefault() Không load lại form
            }
        });

        $('#style').keypress(function (event) {
            if (event.keyCode == 13 || event.which == 13) {
                $('#size').focus();
                event.preventDefault(); //preventDefault() Không load lại form
            }
        });

        $('#size').keypress(function (event) {
            if (event.keyCode == 13 || event.which == 13) {
                $('#origin').focus();
                event.preventDefault(); //preventDefault() Không load lại form
            }
        });

        $('#origin').keypress(function (event) {
            if (event.keyCode == 13 || event.which == 13) {
                $('#warranty').focus();
                event.preventDefault(); //preventDefault() Không load lại form
            }
        });

        $('#warranty').keypress(function (event) {
            if (event.keyCode == 13 || event.which == 13) {
                $('#upload').focus();
                event.preventDefault(); //preventDefault() Không load lại form
            }
        });

        $('#upload').keypress(function (event) {
            if (event.keyCode == 13 || event.which == 13) {
                $('#btn_file_upload').focus();
                event.preventDefault(); //preventDefault() Không load lại form
            }
        });

        $('#btn_file_upload').keypress(function (event) {
            if (event.keyCode == 13 || event.which == 13) {
                $('#btn_add').focus();
                event.preventDefault(); //preventDefault() Không load lại form
            }
        });
    </script>


    <script>
        CKEDITOR.replace('content');
        /*Upload File */
        $('#upload').change(function () {
            const form = new FormData();
            form.append('file', $(this)[0].files[0]);
            $.ajax({
                processData: false,
                contentType: false,
                cache :false,
                type: 'POST',
                dataType: 'JSON',
                data: form,
                url: '{{route('upload')}}',
                success: function (results) {
                    if (results.error === false) {
                        $('#image_show').html('<a href="' + results.url + '" target="_blank">' +
                            '<img src="' + results.url + '" width="100px"></a>');
                        $('#thumb').val(results.url);
                    } else {
                        alert('Upload File Lỗi');
                    }
                }
            });
        });


        $(document).ready(function() {
            $(".btn-add-image").click(function(){
                $('#file_upload').trigger('click');
            });

            $('.list-input-hidden-upload').on('change', '#file_upload', function(event){
                let today = new Date();
                let time = today.getTime();
                let image = event.target.files[0];
                let file_name = event.target.files[0].name;
                let box_image = $('<div class="box-image"></div>');

                const form = new FormData();
                form.append('file', event.target.files[0]);

                let name_sp = document.getElementById('name').value;
                if (name_sp === ''){
                    alert('Vui lòng nhập tên sản phẩm');
                    return false;
                }else {
                    form.append('name_sp',name_sp)
                }

                $.ajax({
                    processData: false,
                    contentType: false,
                    cache :false,
                    type: 'POST',
                    dataType: 'JSON',
                    data:  form ,
                    url: '{{route('upload_detail')}}',
                    success: function (results) {
                        if (results.error === false) {
                            box_image.append('<img src="' + results.url + '" class="picture-box">');
                            box_image.append('<input type="hidden" name="img_detail[]" id="id_'+ time +'" value="'+ results.url +'" >');
                        } else {
                            alert('Upload File Lỗi');
                        }
                    }
                });

                box_image.append('<div class="wrap-btn-delete"><span data-id='+time+' class="btn-delete-image">x</span></div>');
                $(".list-images").append(box_image);

                $(this).removeAttr('id');
                $(this).attr( 'id', time);

                let input_type_file = '<input type="file" name="filenames[]" id="file_upload" class="myfrm form-control hidden">';
                $('.list-input-hidden-upload').append(input_type_file);
            });


            $(".list-images").on('click', '.btn-delete-image', function(){
                let id = $(this).data('id');
                var img =  document.getElementById('id_'+id).value;

                $('#'+id).remove();
                $(this).parents('.box-image').remove();

                $.ajax({
                    type: 'POST',
                    dataType: 'JSON',
                    data:  {img} ,
                    url: '{{route('upload_delete')}}',
                });

            });
        });

    </script>

    <script type="text/javascript" src="/web_noi_that1/public/template/admin/Inputmask/dist/jquery.inputmask.js"></script>
    <script type="text/javascript" src="/web_noi_that1/public/template/admin/jquery-ui-1.13.1.custom/jquery-ui.min.js"></script>
    {{--    <link rel="stylesheet" href="/web_noi_that1/public/template/admin/ui/jquery-ui.css"/>--}}
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    {{--    <script src="/web_noi_that1/public/template/js/popper.min.js"></script>--}}
    <script>

        $(document).ready(function () {
            var price_input = document.getElementById("price_input");
            Inputmask({
                // prefix: "VNĐ ",
                thousandsSeparator: ',000 ',
                alias: "currency",
                digits: 0,
                digitsOptional: false,
                clearMaskOnLostFocus: false,
                rightAlign: false,
                unmaskAsNumber: true,
                'oncomplete': function () {
                    document.getElementById('price').value = document.getElementById('price_input').value.replace(',','');
                    if(document.getElementById('price_input').value !== document.getElementById('price').value){
                        var str =  document.getElementById('price_input').value;
                        document.getElementById('price').value = str.split(',').join('');
                    }
                    if(sessionStorage.getItem('price_input')){
                        sessionStorage.setItem('price_input',document.getElementById('price_input').value);
                    }
                }
            }).mask(price_input);

            var price_input_sale = document.getElementById("price_input_sale");
            Inputmask({
                // prefix: "VNĐ ",
                alias: "currency",
                digits: 0,
                digitsOptional: false,
                clearMaskOnLostFocus: false,
                rightAlign: false,
                unmaskAsNumber: true,
                'oncomplete': function () {
                    if(document.getElementById('price_input_sale').value !== document.getElementById('price_sale').value){
                        var str =  document.getElementById('price_input_sale').value;
                        document.getElementById('price_sale').value = str.split(',').join('');
                    }
                    if(sessionStorage.getItem('price_input_sale')){
                        sessionStorage.setItem('price_input_sale',document.getElementById('price_input_sale').value);
                    }
                }
            }).mask(price_input_sale);


            if(sessionStorage.getItem('price_input_sale')){
                var str =  document.getElementById('price_input_sale').value;
                document.getElementById('price_sale').value = str.split(',').join('');
            }

            if(sessionStorage.getItem('price_input')){
                var str =  document.getElementById('price_input').value;
                document.getElementById('price').value = str.split(',').join('');
            }


        });

        document.querySelector('#menu_id').addEventListener('change', (event) => {
            if(sessionStorage.getItem('menu_id')){
                sessionStorage.setItem('menu_id',document.getElementById('menu_id').value);
            }
        })

        document.querySelector('#price_input').addEventListener('change', (event) => {
            if(sessionStorage.getItem('price_input')){
                sessionStorage.setItem('price_input',document.getElementById('price_input').value);
            }
        })

        document.querySelector('#price_input_sale').addEventListener('change', (event) => {
            if(sessionStorage.getItem('price_input_sale')){
                sessionStorage.setItem('price_input_sale',document.getElementById('price_input_sale').value);
            }
        })

        document.querySelector('#material').addEventListener('change', (event) => {
            if(sessionStorage.getItem('material')){
                sessionStorage.setItem('material',document.getElementById('material').value);
            }
        })

        document.querySelector('#color').addEventListener('change', (event) => {
            if(sessionStorage.getItem('color')){
                sessionStorage.setItem('color',document.getElementById('color').value);
            }
        })

        document.querySelector('#style').addEventListener('change', (event) => {
            if(sessionStorage.getItem('style')){
                sessionStorage.setItem('style',document.getElementById('style').value);
            }
        })

        document.querySelector('#size').addEventListener('change', (event) => {
            if(sessionStorage.getItem('size')){
                sessionStorage.setItem('size',document.getElementById('size').value);
            }
        })

        document.querySelector('#origin').addEventListener('change', (event) => {
            if(sessionStorage.getItem('origin')){
                sessionStorage.setItem('origin',document.getElementById('origin').value);
            }
        })

        document.querySelector('#warranty').addEventListener('change', (event) => {
            if(sessionStorage.getItem('warranty')){
                sessionStorage.setItem('warranty',document.getElementById('warranty').value);
            }
        })

    </script>

@endsection
