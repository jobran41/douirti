/*global $, jQuery, alert*/

$(window).load(function () {
    $("ul#menu-main-navigation li a").attr("data-scroll","data-scroll");
});


 

// Loading Screen

// $(window).load(function () {
    
//     // Loading Elements
    
//     $(".loading-overlay .spinner").fadeOut(2000, function () {
        
//         // Show The Scroll

//         //$("body").css("overflow", "auto");
        
//         $(this).parent().fadeOut(2000, function () {
            
//             $(this).remove();
//         });
//     });
// });




audiojs.events.ready(function() {
    var as = audiojs.createAll();
  });



$(document).ready(function(){
    
    $("#myModal.tabimg img").mousedown(function(){
        var stylesmousedown = {
        width : "1200px",
        height: "700"
      };
        $(this).css(stylesmousedown);
    });
    
    $(".open").click(function(){
        $(".field").slideToggle();
    });
    $('#myslide .carousel-inner  .item:first-child').addClass("active");

    $("section").height($(window).height());
  
  //smoth scroll init
  smoothScroll.init({
    speed: 800,
    easing: 'easeOutQuad',
    updateURL: false,
    offset: 100,
  }
     
    );

 var scrollButton = $("#scroll-top");
  // Nice Scroll
    
    $("html").niceScroll();
    
    $('.carousel').carousel({
        
        interval: 6000
        
    });

    // Caching The Scroll Top Element
    
    $(window).scroll(function () {
        
        if ($(this).scrollTop() >= 700) {
            
            scrollButton.show();
            
        } else {
            
            scrollButton.hide();
        }
    });
    
    // Click On Button To Scroll Top
    
    scrollButton.click(function () {
        
        $("html,body").animate({ scrollTop : 0 }, 600);
        
    });
    $('.detaille').click(function(){
        var src = $(this).data('src');
        $('#img-arch').attr('src',src);
        $('#myModal').modal();
    });
});

function wow_init() { 
new WOW().init();
}


// carousol product

// $(document).ready(
//     function()
//     {
//         //-----------------------------------------
//         $("#carousel").carousel
//         ({
//             activate: function(){}, 
//             timerAnimSlide:400,
//             itensDisplay: 4,
//             spaceBetweenItens: 10,
//             itensMove:1,
//             breakPoint:[{width:800,itensDisplay:3},{width:580,itensDisplay:1},{width:700,itensDisplay:2}],
//             responsive:true
//         });
        
        
//         //-----------------------------------------
//     });
    
//     function activate ()
//     {
//     }

// $(window).resize(function(){     

//        if ($('header').width() == 320 ){

//               // is mobile device
//               console.log("mobile");
//        }
// });
