$(document).ready(function () {
    CKEDITOR.replace('editor1');
});
function deleteRecord(type, record_id) {
    if (confirm("Are you sure?")) {
        $.ajax({
            url: base_url + '/common/delete',
            method: 'POST',
            async: false,
            data: {record_id: record_id, type: type},
            success: function (response) {
                if (type == 'inquiry') {
                    getUnreadInquiry();
                }
                $(".message").html(response);
                $("#row_" + record_id).remove();
            }
        });
    }
}
function deleteImage(id, image_name) {
    if (confirm('Are you sure?')) {
        $.ajax({
            url: base_url + '/products/delete_image',
            method: 'POST',
            async: false,
            data: {image_name: image_name},
            success: function (response) {
                $("#image_" + id).remove();
            }
        });
    }
}