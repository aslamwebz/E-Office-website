$(document).ready(function() {
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

    $(window).scroll(function() {
        navbar = $('#navbar');
        navlink = $('#navbar.nav-link');
        navbrand = $('#navbar.navbar-brand');
        if ($(window).scrollTop() >= 50) {
            navbar.addClass('color');
            navlink.addClass('color-a');
            navbrand.addClass('color-a');
        } else {
            navbar.removeClass('color');
            navlink.removeClass('color-a');
            navbrand.removeClass('color-a');
        }
    });
});

// Scroll To Top

    $(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$("#top").offset().top},"1000");return false})})

// Data Table


$(document).ready( function () {
  $('.table').DataTable();


//Active Links

  var page = $('#page').val();
$("#navbar1 li:contains('"+page+"')").parent().addClass('active')
$("#admin-panel a:contains('"+page+"')").parent().addClass('active')

});

// Sidebar Button Toggle

  $('#menu-toggle').click(function(e){
     e.preventDefault();
     console.log('a');
     $('#admin-panel').toggleClass('menuDisplayed');
     $('#button').toggleClass('button-hidden');
  });

//sidebar resize

  $( window ).resize(function() {
   var width = $(window).width();
   var height = $(window).height();
   console.log(height + width);
   if(width <= 1200){
     $('#button').addClass('button-hidden');
     $('#admin-panel').removeClass('menuDisplayed');
   } else {
     $('#button').removeClass('button-hidden');
     $('#admin-panel').addClass('menuDisplayed');
   }
  });
