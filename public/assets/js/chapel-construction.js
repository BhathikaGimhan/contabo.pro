window.onload = window.onresize = function (){
    height = $('.sec img').height();
    $('.sec').css({'height' : height + 'px'});
}


$(document).ready(function () {

    $(".go-top").click(function (event) {
        $(window).scrollTop(0);
    });
});
