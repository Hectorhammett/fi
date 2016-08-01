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