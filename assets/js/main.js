$(window).scroll(function() { // check if scroll event happened
  if ($(document).scrollTop() > 0) { // check if user scrolled more than 50 from top of the browser window
    $(".navbar-fixed-top").addClass('navbar-small'); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
  } else {
    $(".navbar-fixed-top").removeClass("navbar-small"); // if not, change it back to transparent
  }
});

$('.navbar-toggle').click(function(){
  $(".navbar-fixed-top").toggleClass("clicked-burger");
})

$("a").on('click', function(event) {
  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {
    // Prevent default anchor click behavior
    event.preventDefault();

    $('#navbar-links').collapse('hide');
    $('.clicked-burger').removeClass('clicked-burger')

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
  
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  } // End if
});