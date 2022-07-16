$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url) {
    if (confirm('Xóa mà không thể khôi phục. Bạn có chắc ?')) {
        $.ajax({
            type: 'DELETE',
            datatype: 'JSON',
            data: { id },
            url: url,
            success: function (result) {
                if (result.error === false) {
                    alert(result.message);
                    location.reload();
                } else {
                    alert('Xóa lỗi vui lòng thử lại');
                }
            }
        })
    }
}



//
// $('#upload_thumb').change(function (){
//     console.log('123');
//     const form =new FormData();
//     form.append('thumb',$(this)[0].files[0]);
//     $.ajax({
//         processData: false,
//         contentType: false,
//         type: 'POST',
//         datatype: 'JSON',
//         data:form,
//         url: '/admin/upload_thumb/services',
//         success: function (results){
//             if(results.error === false){
//                 $('#thumb_show').html('<a href=" ' + results.url + '" target="_blank">' +
//                     '<img src="' + results.url + '" width="100px"></a>');
//                 // $('#img_show').html('<audio controls href=" ' + results.url + '" target="_blank">' +
//                 //         '<source src="' + results.url + '" type="audio/mpeg"></audio>');
//                 $('#thumb').val(results.url);
//             }else {
//                 alert('Tải file bị lỗi');
//             }
//         }
//     })
// });
