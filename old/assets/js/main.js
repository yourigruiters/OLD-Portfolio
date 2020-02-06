// Direct Sticky Navbar //
$(document).ready(function(){
  if ($(window).scrollTop() > 1) {
    $('#navbar').addClass('scrolling');
 };
});
// END //

// Sticky navbar //
$(document).ready(function() {
  $(window).scroll(function () { 
    $('html, body').bind('mousewheel', function(e){ 
      $(this).stop();
    });

    if ($(window).scrollTop() > 1) {
      $('#navbar').addClass('scrolling');
    }

    if ($(window).scrollTop() < 2) {
      $('#navbar').removeClass('scrolling');
    }
  });
});
// END //

// SmoothScroll to anchor points //
$(document).ready(function(){
  $("a").on('click', function(e) {
      if (this.hash !== "") {
        e.preventDefault();
        var hash = this.hash;
  
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
          window.location.hash = hash;
        });
      }
    });
  });
  // END //

  // Sticky navbar //
  $(document).ready(function() {
    $(".portfolio-item").on("mouseenter", function (e) { 
      $(this).children(".overlay").stop(true, true).fadeIn(500);
    }).on("mouseleave", function() {
      $(this).children(".overlay").fadeOut(500);
    });
  });
  // END //  

  // FadeInEffects
  $(document).ready(function() {
    
    $(window).scroll( function(){
    
        $('.fadeIn').each( function(i){

          var object_top = $(this).offset().top;
          var window_top = $(window).scrollTop();

          // VOOR BOVENKANT VAN ELEMENT
          if( (object_top - window_top) < 500 ){
              
              $(this).animate({opacity: '1', top: '0px'},500);
                  
          }
           
          // VOOR ONDERKANT VAN ELEMENT
          // var bottom_of_object = $(this).offset().top + $(this).outerHeight();
          // var bottom_of_window = $(window).scrollTop() + $(window).height(); 
          
          // if( bottom_of_window > bottom_of_object ){
              
          //     $(this).animate({opacity: '1', top: '0px'},500);
                  
          // }
        }); 
    });
});
// END //

// PORTFOLIO SWITCHER
$(document).ready(function(){
  $("#portfolio-switcher li").on('click', function(e) {
        var selected = this.innerHTML;
        $("#portfolio-switcher li").removeClass("active");
        $(this).addClass("active");
        $(".item").hide();
        $("."+selected).show();
        // $('html, body').animate({
        //   scrollTop: $(hash).offset().top
        // }, 800, function(){
        //   window.location.hash = hash;
        // });
    });
  });
// END //