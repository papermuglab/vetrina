$(document).ready(function () {
    CKEDITOR.replace('editor1');
    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
            width: 500,
            height: 300,
            type: 'square' //circle
        },
        boundary: {
            width: 700,
            height: 500
        }
    });

    $('#image_upload_attr').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (event) {
            $image_crop.croppie('bind', {
                url: event.target.result
            }).then(function () {
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#uploadimageModal').modal('show');
    });
    $('.crop_image').click(function (event) {
        $image_crop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (response) {
            var blog_id = $("#blog_id").val();
            $.ajax({
                url: base_url + '/blog/uploadImage',
                type: "POST",
                data: {image: response, blog_id: blog_id},
                success: function (data)
                {
                    $("#blog_id").val(data);
                    $('#uploadimageModal').modal('hide');
                }
            });
        })
    });
});
function deleteRecord(type, record_id) {
    if (confirm("Are you sure?")) {
        $.ajax({
            url: base_url + '/common/delete',
            method: 'POST',
            async: false,
            data: {record_id: record_id, type: type},
            success: function (response) {
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
function viewInquiry(inquiry_id) {
    $.ajax({
        url: base_url + '/inquiries/get_info',
        method: 'POST',
        async: false,
        dataType: "json",
        data: {inquiry_id: inquiry_id},
        success: function (response) {
            $("#name").html(response['name']);
            $("#email").html(response['email']);
            $("#mobile").html(response['mobile']);
            $("#message").html(response['message']);
            $("#date").html(response['added_on']);
            $("#infoModal").modal('show');
        }
    });
}
function approveComment(comment_id) {
    if (confirm('Are you sure you want to approve this comment?')) {
        $.ajax({
            url: base_url + '/blog/approveComment',
            method: 'POST',
            async: false,
            dataType: "json",
            data: {comment_id: comment_id},
            success: function (response) {
                if (response == '1' || response == 1) {
                    alert('Comment approved successfully.');
                    $('#comment_' + comment_id).remove();
                }
            }
        });
    }
}
function addComment(comment_id) {
    $('#blog_id').val(comment_id);
    $('#active_blog').val(comment_id);
    $("#addCommentModal").modal('show');
}