$('document').ready(function(){
	$('.homeSlider').slick();
	$('.testimonialSlider').slick();
        $('.input').click(function () {
            var search_val = $("input[name=search_val]").val();
            window.location.href = window.location.hostname + '/vetrina_pro/search/' + search_val;
            return false;
        });
});