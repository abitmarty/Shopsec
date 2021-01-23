var clicked = false;
$( document ).ready(function() {
  $("#shop-menu-container").click(function(){
    setMenu();
    clicked = !clicked;
  });

  $("#body").click(function(){
    if ($(window).width() < 568){
      closeMenu();
    }
  });

  $("#foot").click(function(){
    if ($(window).width() < 568){
      closeMenu();
    }
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

function closeMenu(){
  clicked = true;
  setMenu();
  clicked = false;
}

$(window).on('resize', function(){
  if ($(window).width() >= 568){
    clicked = false;
    setMenu();
  }

  if ($(window).width() < 568){
    closeMenu();
  }
});
