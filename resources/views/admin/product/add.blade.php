@extends('admin.main')

@section('head')
    <script src="/web_noi_that1/public/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="{{route('store_sp')}}" method="POST">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Tên Sản Phẩm</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"  placeholder="Nhập tên sản phẩm">
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
                        <input type="number" name="price" value="{{ old('price') }}"  class="form-control" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="menu">Giá Giảm</label>
                        <input type="number" name="price_sale" value="{{ old('price_sale') }}"  class="form-control" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Mô Tả </label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label>Mô Tả Chi Tiết</label>
                <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="menu">Ảnh Sản Phẩm</label>
                <input type="file" name="file" class="form-control" id="upload">
                <div id="image_show">

                </div>
                <input type="hidden" name="thumb" id="thumb">
            </div>


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
    </script>
@endsection
