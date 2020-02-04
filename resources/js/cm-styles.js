$(window).on('scroll',function(){
    if ($(this).scrollTop()>65) {
        $('.cm-navbar').css({'opacity':'.6'});
    } else {
        $('.cm-navbar').css({'opacity':'.8'});
    }
});