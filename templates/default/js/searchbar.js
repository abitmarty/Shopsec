var screenWidth = $(window).width();

 $( document ).ready(function() {
   console.log(screenWidth);
   $("#shop-search").click(function(){
     if ($(window).width() < 568){
       setSearchBarVisible();
     }
   });

   $("#close-search-icon").click(function(){
     setDefaultSmall();
   });
});
function setSearchBarVisible() {
  $("#searchForm").css({"display":"inline-block"});
  $("#shop-account").css({"display":"none"});
  $("#cart-count-indicator").css({"display":"none"});
  $("#shoping-cart-icon").css({"display":"none"});
  $("#shop-search").css({"display":"none"});
  $("#shop-logo-container").css({"display":"none"});
  $("#header-icons-container").removeClass("pure-u-1-2");
  $("#shop-menu-container").css({"display":"none"});
}

function setDefault() {
  $("#searchForm").css({"display":"inline-block"});
  $("#shop-account").css({"display":"inline-block"});
  $("#cart-count-indicator").css({"display":"flex"});
  $("#shoping-cart-icon").css({"display":"inline-block"});
  $("#shop-logo-container").css({"display":"inline-block"});
  $("#header-icons-container").addClass("pure-u-1-2");
  $("#shop-search").css({"display":"none"});
  $("#shop-menu-container").css({"display":"none"});
}

function setDefaultSmall() {
  $("#searchForm").css({"display":"none"});
  $("#shop-search").css({"display":"inline-block"});
  $("#shop-account").css({"display":"inline-block"});
  $("#cart-count-indicator").css({"display":"flex"});
  $("#shoping-cart-icon").css({"display":"inline-block"});
  $("#shop-logo-container").css({"display":"inline-block"});
  $("#header-icons-container").addClass("pure-u-1-2");
  $("#shop-menu-container").css({"display":"inline-block"});
}

$(window).on('resize', function(){
  var screenWidthNew = $(window).width();

  if(screenWidth != screenWidthNew){
    if ($(window).width() >= 568){
      setDefault();
    }

    if ($(window).width() < 568){
      setDefaultSmall();
    }
  }
  screenWidth = $(window).width();
});
