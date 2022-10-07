// Main Form
$('#contactForm1').on('submit',function(e){
    e.preventDefault();
    let full_name = $('#full_name').val();
    let email = $('#email').val();
    let phone = $('#phone').val();
    let subject = $('#subject').val();
    let message = $('#message').val();

    $.ajax({
      url: "contact-form1",
      type:"POST",
      data:{
        full_name:full_name,
        email:email,
        phone:phone,
        subject:subject,
        message:message,
      },
      headers: {
		//Make sure Meta token in included in meta file!!!!!!!!!!
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }, 
      success:function(response){
        console.log(response);
          if (response) {
          $('#success-message1').text(response.success); 
          $('#hid').removeClass('hidden');          
          document.getElementById("success-message1").style.color = 'white';
          $("#contactForm1")[0].reset(); 

        }
      },
      error: function(response) {}
     });
});



// Main Form
$('#contactForm2').on('submit',function(e){
  e.preventDefault();
  let full_name = $('#full_name').val();
  let email = $('#email').val();
  let phone = $('#phone').val();
  let subject = $('#subject').val();
  let message = $('#message').val();

  $.ajax({
    url: "contact-form1",
    type:"POST",
    data:{
      full_name:full_name,
      email:email,
      phone:phone,
      subject:subject,
      message:message,
    },
    headers: {
  //Make sure Meta token in included in meta file!!!!!!!!!!
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
    success:function(response){
      console.log(response);
        if (response) {
          $('#btn2').text('Redirecting...'); 

          $(function(){
            function waitt(){
              location.href = "https://signup.creditrepaircloud.com/base/billing_info?token=9a8c4e1895f7396c1f44e2a1f60a5144"
            };
            window.setTimeout( waitt, 1000 ); // 5 seconds
          });

      }
    },
    error: function(response) {}
   });
});


// Unsubscribe
$('#contactForm3').on('submit',function(e){
  e.preventDefault();
  let email = $('#email').val();
  $.ajax({
    url: "contact-form3",
    type:"POST",
    data:{
      email:email,
    },
    headers: {
   //Make sure Meta token in included in meta file!!!!!!!!!!
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }, 
    success:function(response){
      console.log(response);
        if (response) {
          $('#success-message3').text(response.success); 
          $('#hiduns').removeClass('hidden');          
          document.getElementById("success-message3").style.color = 'white';
          $("#contactForm3")[0].reset();
      }
    },
    error: function(response) {}
   });
});