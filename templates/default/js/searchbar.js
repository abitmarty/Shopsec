 $( document ).ready(function() {
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
}

function setDefault() {
  $("#searchForm").css({"display":"inline-block"});
  $("#shop-account").css({"display":"inline-block"});
  $("#cart-count-indicator").css({"display":"flex"});
  $("#shoping-cart-icon").css({"display":"inline-block"});
  $("#shop-logo-container").css({"display":"inline-block"});
  $("#header-icons-container").addClass("pure-u-1-2");
  $("#shop-search").css({"display":"none"});
}

function setDefaultSmall() {
  $("#searchForm").css({"display":"none"});
  $("#shop-search").css({"display":"inline-block"});
  $("#shop-account").css({"display":"inline-block"});
  $("#cart-count-indicator").css({"display":"flex"});
  $("#shoping-cart-icon").css({"display":"inline-block"});
  $("#shop-logo-container").css({"display":"inline-block"});
  $("#header-icons-container").addClass("pure-u-1-2");
}

$(window).on('resize', function(){
  if ($(window).width() >= 568){
    setDefault();
  }

  if ($(window).width() < 568){
    setDefaultSmall();
  }
});
