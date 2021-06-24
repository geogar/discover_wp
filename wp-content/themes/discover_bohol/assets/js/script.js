// typed custom




window.onload = function() {
    setTimeout(function() {
        $("#typed").typed({
            strings: [' <span>ESCAPE <br/ ><strong>COMPLETELY.</strong></span>', 'It\'s more <br/>fun to:', 'Dream. <br/>Explore.', 'You\'ll love <br />where we take you.','A new <br/>point of <em>view</em>.'],
  			stringsElement: null,
            startDelay: 0,
            typeSpeed: 60,
            backDelay: 3500,
            loop: !0,
            contentType: 'html',
            loopCount: !1,
        })
    }, 0)
}






//slider 


$(document).ready(function() {
    $("#slideshow > div:gt(0)").hide();

    setInterval(function() {
      $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
    }, 6000);

    $('#myTab a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })
});


//lazy load images
/*
$(function() {          
  $("#slideshow .lazy").lazyload({
      event : "sporty"
      
  });
});

$(window).bind("load", function() { 
  var timeout = setTimeout(function() { $("#slideshow .lazy").trigger("sporty") }, 50000);
});      
*/

//TABS


/* Countryside Tour tabs*/
$(document).ready(function() {    
        
    $('#tabs li a:not(:first)').addClass('inactive');
    $('.wrapper').hide();
    $('.wrapper.tab1C').show();
        
    $('#tabs li a').click(function(){
        var t = $(this).attr('id');
      if($(this).hasClass('inactive')){ //this is the start of our condition 
        $('#tabs li a').addClass('inactive');           
        $(this).removeClass('inactive');
        
        $('.wrapper').hide();
        $('.'+ t + 'C').fadeIn('slow');
     }
    });

});
/*Panglao Tour Tabs*/
$(document).ready(function() {    
        
    $('#tabs_2 li a:not(:first)').addClass('inactive');
    $('.panglao_wrapper').hide();
    $('.panglao_wrapper.panglao_tab1C').show();
        
    $('#tabs_2 li a').click(function(){
        var t = $(this).attr('id');
      if($(this).hasClass('inactive')){ //this is the start of our condition 
        $('#tabs_2 li a').addClass('inactive');           
        $(this).removeClass('inactive');
        
        $('.panglao_wrapper').hide();
        $('.'+ t + 'C').fadeIn('slow');
     }
    });

});
$(document).ready(function() {    
        
    $('#tabs_3 li a:not(:first)').addClass('inactive');
    $('.ihdw_wrapper').hide();
    $('.ihdw_wrapper.ihdw_tab1C').show();
        
    $('#tabs_3 li a').click(function(){
        var t = $(this).attr('id');
      if($(this).hasClass('inactive')){ //this is the start of our condition 
        $('#tabs_3 li a').addClass('inactive');           
        $(this).removeClass('inactive');
        
        $('.ihdw_wrapper').hide();
        $('.'+ t + 'C').fadeIn('slow');
     }
    });

});


//owl carousel
$('.owl-carousel').owlCarousel({
    items:1,
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    navText: ["<i class='fas fa-angle-left owl-prev'></i>","<i class='fas fa-angle-right owl-next'></i>"]
})

// smooth scroll

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });



  // hamburger menu

  $(document).ready(function(){
    $('#nav-icon2').click(function(){
        event.stopPropagation();
        $(this).toggleClass('open');
        $('nav').toggleClass('toggle_menu');
    });
    // Deciding whether to leave it open when Choosing the menu or close after choosing
    // $('nav').click(function(){
    //     event.stopPropagation();
    // });
});

$(document).on("click touch", function () {
    $('#nav-icon2').removeClass('open');
        $('nav').removeClass('toggle_menu');
});
