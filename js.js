$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if (scroll) {
      $(".navigation").css('background', 'rgba(24, 24, 24, 0.6)');
    }
    else{
    $(".navigation").css('background', 'rgba(24, 24, 24, 0)');
    }
});
