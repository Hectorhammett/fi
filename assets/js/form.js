$("#form-email").submit(function(e){
  e.preventDefault();
  $.post('',function(response){
    swal("Thank You!", "We will be in touch soon.");
  })
  .fail(function(response){
    swal("Oops...", "Something went wrong!", "error");
    // console.log(response.responseText);
  })
})