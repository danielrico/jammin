// Youtbe player controls
var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('video', {
    events: {
      'onReady': onPlayerReady
    }
  });
}
function onPlayerReady(event) {
  var playButton = document.getElementById("play-button");
  playButton.addEventListener("click", function() {
    player.playVideo();
  });
  var pauseButton = document.getElementById("pause-button");
  pauseButton.addEventListener("click", function() {
    player.pauseVideo();
  });
}
// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);



jQuery(document).ready(function ($) {

  $('body').addClass("displaynone").delay(600).fadeIn(400);

  // Scrollto editorial
  $("#view_details").on("click", function(){
    $("html, body").animate({ scrollTop: $('#editorial').offset().top - 60 }, 500);
  });

  // Play/pause buttons switch
  $("#controls").on("click", function(){
    $(this).children().toggleClass("active");
  });

  // Newsletter label swap
  $('#mc_embed_signup .email').focus(function(){
    if($(this).val() == 'Your email'){
      $(this).val('');
      $(this).css('color', '#bbb');
    }
  }).blur(function(){
    if($(this).val() == ''){
      $(this).val('Your email');
      $(this).css('color', '#444');
    }
  });

  var modal=$("#modal_player");
  modal.detach();
  if ($(window).width() < 769) {
  $('#play-button').click(function(){
      $('#overlay').fadeIn(300);
      modal.prependTo("body");
      modal.css('display','block'); // IE
    });
  }
  $('#overlay').click(function(){
    modal.detach();
    modal.css('display','none'); // IE
    $(this).fadeOut(300);
  });

});