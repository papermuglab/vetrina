
// $(function(){
    $(function () {
    $('input[type=file]').change(function(){
        // alert('d');
        var val = $(this).val().toLowerCase(),
            regex = new RegExp("(.*?)\.(docx|doc|pdf)$");

        if (!(regex.test(val))) {
            $(this).val('');
            alert('Please select correct file format');
        }
    });
});
    
// });
