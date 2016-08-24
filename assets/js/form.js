$("#form-email").submit(function(e){
  e.preventDefault();
  $.post('https://www.fininsite.com/wp-content/themes/fininsite/assets/php/send-mail.php',$(this).serialize(),function(response){
    swal("Thank You!", "We will be in touch soon.");
  })
  .fail(function(response){
    swal("Oops...", "Something went wrong!", "error");
    // console.log(response.responseText);
  })
})