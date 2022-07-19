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
                        <input type="number" name="price" value="{{ $product->price }}"  class="form-control" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá Giảm</label>
                        <input type="number" name="price_sale" value="{{ $product->price_sale }}"  class="form-control" >
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

    <script>

    </script>
@endsection
