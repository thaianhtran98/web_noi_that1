@extends('admin.main')

@section('content')
    <table id="table_sp" class="table ">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Danh Mục</th>
            <th>Giá Gốc</th>
            <th>Giá Khuyến Mãi</th>
            <th>Tình Trạng</th>
            <th>Update</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            @foreach($products as $key => $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>
                    <img src="{{ $product->thumb }}" width="60px" height="60px" alt="IMG">
                    {{ $product->name }}</td>
                <td style="line-height: 60px">{{ $product->menu->name }}</td>
                <td style="line-height: 60px">{{ number_format($product->price) }}</td>
                <td style="line-height: 60px">{{ number_format($product->price_sale) }}</td>
                <td style="line-height: 60px">{!! \App\Helpers\Helper::active($product->active) !!}</td>
                <td style="line-height: 60px">{{ $product->updated_at }}</td>
                <td style="line-height: 60px">
                    <a class="btn btn-primary btn-sm" href="{{route('edit_sp',$product->id)}}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $product->id }}, '{{route('delete_sp')}}')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

{{--    <div class="card-footer clearfix">--}}
{{--        {!! $products->links() !!}--}}
{{--    </div>--}}
@endsection
@section('footer')
<script>
    $(document).ready(function() {
        $('#table_sp').DataTable( {
            pagingType: 'full_numbers',
            "language": {
                "sProcessing":   "Đang xử lý...",
                "sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
                "sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                "sInfoEmpty":    "Đang xem 0 đến 0 trong tổng số 0 mục",
                "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                "sInfoPostFix":  "",
                "sSearch":       "Tìm:",
                "sUrl":          "",
                "sLengthMenu":   "Xem _MENU_ Mục",
                "oPaginate": {
                    "sFirst":    "Đầu",
                    "sPrevious": "<",
                    "sNext":     ">",
                    "sLast":     "Cuối"
                },
                searchPanes: {
                    title: {
                        _:''
                    },
                    collapseMessage: 'Ẩn bảng thống kê',
                    showMessage: 'Hiển thị bảng thống kê',
                    clearMessage: 'Chọn lại'
                }
            },
            dom: 'Plfrtip',
            "processing": true, // tiền xử lý trước
            "aLengthMenu": [[ 10, 20, 50], [10, 20, 50]], // danh sách số trang trên 1 lần hiển thị bảng
            "order": [[ 0, 'asc' ]], //sắp xếp giảm dần theo cột thứ 1
            "scrollY": "515px",
            "scrollCollapse": true,
            columnDefs: [
                {
                    searchPanes: {
                        show: true
                    },
                    targets: [ 2,3,4]
                },
                // {
                //     searchPanes: {
                //         show: false
                //     },
                //     targets: [ 7]
                // },
            ],
            searchPanes: {
                cascadePanes: true,
                orderable: false,
                viewCount: false,
                initCollapsed: true,
                dtOpts: {
                    select: {
                        style: 'multi'
                    }
                }
            },
        } );
    } );
</script>

<style>
    div.dtsp-panesContainer button.dtsp-clearAll,
    div.dtsp-panesContainer button.dtsp-collapseAll,
    div.dtsp-panesContainer button.dtsp-showAll {
        float: right;
        padding: 10px;
        margin-bottom: 30px;
    }
</style>
{{--<script src="/web_noi_that1/public/template/admin/dist/js/jquery-3.5.1.js" ></script>--}}
<script src="/web_noi_that1/public/template/admin/dist/js/bootstrap.min.js"></script>
<script src="/web_noi_that1/public/template/admin/dist/js/jquery.dataTables.min.js"></script>
<script src="/web_noi_that1/public/template/admin/dist/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="/web_noi_that1/public/template/admin/dist/js/dataTables.searchPanes.min.js"></script>
<script type="text/javascript" src="/web_noi_that1/public/template/admin/dist/js/searchPanes.bootstrap4.min.js"></script>
<script type="text/javascript" src="/web_noi_that1/public/template/admin/dist/js/dataTables.select.min.js"></script>
@endsection



