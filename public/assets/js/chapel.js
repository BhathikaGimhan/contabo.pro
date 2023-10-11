window.onload = window.onresize = function (){
    divHeight = $('.sec-3 img').height();
    height3 = divHeight + 100;
    $('.sec-3').css({'height' : height3 + 'px'});

    height = $('.sec img').height();
    $('.sec').css({'height' : height + 'px'});

    onYouTubeIframeAPIReady();

}


$(document).ready(function () {

    $(".go-top").click(function (event) {
        $(window).scrollTop(0);
    });
});

function onYouTubeIframeAPIReady() {
    var ctrlq = document.getElementById("youtube-player");
    var player = new YT.Player('youtube-player', {
      height: ctrlq.dataset.height,
      width: ctrlq.dataset.width,
      events: {
        'onReady': function(e) {
          e.target.cueVideoById({
            videoId: ctrlq.dataset.video,
            startSeconds: ctrlq.dataset.startseconds,
            endSeconds: ctrlq.dataset.endseconds
          });
        }
      }
    });
  }
