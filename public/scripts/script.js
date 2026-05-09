$(document).ready(function(){
    $('.toggle-menu').on('click', function() {
        if ($(this).hasClass('menu-show')) {
            $(this).removeClass('menu-show').addClass('menu-hide').text('✕');
            $('.nav-links').css({
                "right": "0"
            });
        } else {
            $(this).removeClass('menu-hide').addClass('menu-show').text('☰');
            $('.nav-links').css({
                "right": "-80%"
            });
        }
    });
});