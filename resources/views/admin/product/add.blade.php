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

    <form action="{{route('store_sp')}}" method="POST"  enctype="multipart/form-data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Tên Sản Phẩm</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control"  placeholder="Nhập tên sản phẩm">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label>Danh Mục</label>
                        <select class="form-control" id="menu_id" name="menu_id">
                            @foreach($menus as $menu)
                                <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-1">
                    <button type="button" style="margin-top: 35px; border: 0" onclick="neo_danhmuc()">
                        <span id="neo_danhmuc" style="font-size: 14px;color: black;">
                            <i class="fas fa-anchor"></i>
                        </span>
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá Gốc</label>
                        <input type="number" name="price" id="price" value="{{ old('price') }}" placeholder="Nhập giá gốc" class="form-control" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá Giảm</label>
                        <input type="number" name="price_sale" id="price_sale" value="{{ old('price_sale') }}" placeholder="Nhập giá giảm" class="form-control" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div  class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Chất Liệu</label>
                        <input type="text" name="material" id="material" class="form-control" placeholder="Nhập chất liệu" >
                    </div>

                    <div class="form-group">
                        <label for="menu">Kiểu Dáng</label>
                        <input type="text" name="style" id="style" class="form-control" placeholder="Nhập kiểu dáng" >
                    </div>

                    <div class="form-group">
                        <label for="menu">Xuất Xứ</label>
                        <input type="text" name="origin" id="origin" class="form-control" placeholder="Nhập xuất xứ">
                    </div>
                </div>

                <div  class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Màu Sắc</label>
                        <input type="text" name="color" id="color" class="form-control" placeholder="Nhập màu sắc" >
                    </div>

                    <div class="form-group">
                        <label for="menu">Kích Cỡ</label>
                        <input type="text" name="size"  id="size" class="form-control" placeholder="Nhập kích cỡ" >
                    </div>

                    <div class="form-group">
                        <label for="menu">Bảo hành</label>
                        <input type="text" name="warranty" id="warranty" class="form-control" placeholder="Nhập thời gian bảo hành" >
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Mô Tả Chi Tiết</label>
                <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="menu">Ảnh Chính Sản Phẩm</label>
                <input type="file" name="file" class="form-control" id="upload">
                <div id="image_show">

                </div>
                <input type="hidden" name="thumb" id="thumb">
            </div>

            <label for="menu">Ảnh Chi Tiết Sản Phẩm </label></br>
            <div class="input-group hdtuto control-group lst increment" >
                <div class="list-input-hidden-upload">
                    <input type="file" name="filenames[]" id="file_upload" class="myfrm form-control hidden">
                </div>
                <div class="input-group-btn">
                    <button class="btn btn-success btn-add-image" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>+Add image</button>
                </div>
            </div>
            <div class="list-images">
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

            <input style="display: none" id="view" name="view" value="0">

            <div class="form-group">
                <label>Kích Hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>
        </div>
{{--        <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        document.querySelector('#menu_id').addEventListener('change', (event) => {
            if(sessionStorage.getItem('ct')){
                sessionStorage.setItem('ct',document.getElementById('menu_id').value);
            }
        })

        $(document).ready(function () {
            if(sessionStorage.getItem('ct')){
                var dm = document.getElementById('neo_danhmuc');
                dm.style.color = 'dodgerblue';
                document.getElementById('menu_id').value =sessionStorage.getItem('ct');
            }
        });

        function neo_danhmuc(){
            var dm = document.getElementById('neo_danhmuc');
            if(dm.style.color === 'dodgerblue'){
                sessionStorage.removeItem('ct');
                dm.style.color = 'black';
            }else{
                sessionStorage.setItem('ct',document.getElementById('menu_id').value);
                dm.style.color = 'dodgerblue';
            }
        }
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
                            box_image.append('<img src="' + results.url + '" class="picture-box">');
                            box_image.append('<input type="hidden" name="img_detail[]" value="'+ results.url +'" >');
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
                $('#'+id).remove();
                $(this).parents('.box-image').remove();


            });
        });

    </script>

    <script>

    </script>
@endsection
