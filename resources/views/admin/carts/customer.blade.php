@extends('admin.main')

@section('content')
    <table id="table_customer" class="table">
        <thead>
        <tr>
            <th style="width: 50px">STT</th>
            <th>Tên Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Ngày Đặt hàng</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $key => $customer)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->created_at }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('customers_detail',$customer->id)  }}">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $customer->id }}, '{{route('customers_delete')}}')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

{{--    <div class="card-footer clearfix">--}}
{{--        {!! $customers->links() !!}--}}
{{--    </div>--}}
@endsection

@section('footer')
    <script>
        $(document).ready(function() {
            $('#table_customer').DataTable( {
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
                        targets: [ 1,3 ,4]
                    },
                    {
                        searchPanes: {
                            show: false
                        },
                        targets: [ 0,2 ]
                    },
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

{{--    <style>--}}
{{--        div.dtsp-panesContainer button.dtsp-clearAll,--}}
{{--        div.dtsp-panesContainer button.dtsp-collapseAll,--}}
{{--        div.dtsp-panesContainer button.dtsp-showAll {--}}
{{--            float: right;--}}
{{--            padding: 10px;--}}
{{--            margin-bottom: 30px;--}}
{{--        }--}}
{{--    </style>--}}
    {{--<script src="/web_noi_that1/public/template/admin/dist/js/jquery-3.5.1.js" ></script>--}}
    <script src="/web_noi_that1/public/template/admin/dist/js/bootstrap.min.js"></script>
    <script src="/web_noi_that1/public/template/admin/dist/js/jquery.dataTables.min.js"></script>
    <script src="/web_noi_that1/public/template/admin/dist/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="/web_noi_that1/public/template/admin/dist/js/dataTables.searchPanes.min.js"></script>
    <script type="text/javascript" src="/web_noi_that1/public/template/admin/dist/js/searchPanes.bootstrap4.min.js"></script>
    <script type="text/javascript" src="/web_noi_that1/public/template/admin/dist/js/dataTables.select.min.js"></script>
@endsection

