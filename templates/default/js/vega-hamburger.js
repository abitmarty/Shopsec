var clicked = false;
$( document ).ready(function() {
  $("#shop-menu-container").click(function(){
    setMenu();
    clicked = !clicked;
  });
});

function setMenu(){
  if(!clicked){
    $("#head3").css({"display":"block"});
  }
  else {
    $("#head3").css({"display":"none"});
  }
}

$(window).on('resize', function(){
  if ($(window).width() >= 568){
    clicked = false;
    setMenu();
  }

  if ($(window).width() < 568){
    clicked = true;
    setMenu();
    clicked = false;
  }
});
