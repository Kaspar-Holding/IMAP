<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <!-- <link rel="icon" href="{{ asset('new/images/fevicon.png')}}" type="image/png" /> -->
      <!-- bootstrap css -->
      <!-- <link rel="stylesheet" href="{{ asset('new/css/bootstrap.min.css')}}" /> -->
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('new/style.css')}}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('new/css/responsive.css')}}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('new/css/colors.css')}}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('new/css/bootstrap-select.css')}}" />
      <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('new/css/perfect-scrollbar.css')}}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('new/css/custom.css')}}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif] -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
      <link rel="stylesheet" href=" https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/src/js/bootstrap-datetimepicker.js" type="text/css" media="all">
      <link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/build/css/bootstrap-datetimepicker.css">
     
      

   </head> 
   <body class="dashboard dashboard_1">
       
        <script src="{{ asset('new/js/jquery.min.js')}}"></script>
      <script src="{{ asset('new/js/popper.min.js')}}"></script>
      <script src="{{ asset('new/js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{ asset('new/js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{ asset('new/js/bootstrap-select.js')}}"></script>
      <!-- owl carousel -->
      <script src="{{ asset('new/js/owl.carousel.js')}}"></script> 
      <!-- chart js -->
      <!-- <script src="{{ asset('new/js/Chart.min.js')}}"></script> -->
      <!-- <script src="{{ asset('new/js/Chart.bundle.min.js')}}"></script> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.js" integrity="sha512-Lii3WMtgA0C0qmmkdCpsG0Gjr6M0ajRyQRQSbTF6BsrVh/nhZdHpVZ76iMIPvQwz1eoXC3DmAg9K51qT5/dEVg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="{{ asset('new/js/utils.js')}}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- <script src="{{ asset('new/js/analyser.js')}}"></script> -->
      <!-- nice scrollbar -->
      <script src="{{ asset('new/js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

      <!-- custom js -->
      <script src="{{ asset('new/js/custom.js')}}"></script>
      <script src="{{ asset('new/js/chart_custom_style1.js')}}"></script>
      
      
      
       
        <script>
            $(function(){
                var dtToday = new Date();
                
                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if(month < 10)
                    month = '0' + month.toString();
                if(day < 10)
                    day = '0' + day.toString();
                
                var maxDate = year + '-' + month + '-' + day;
            
                // or instead:
                // var maxDate = dtToday.toISOString().substr(0, 10);
                $('#txtDate').attr('min', maxDate);
            });
        </script>
        <script>
    
        $('.job-title').click(function() {
            var jobId = $(this).data('job-id');
            $('#job-' + jobId).toggle();
            $('.dummy').toggle();
            document.querySelector('#cursor').innerHTML = 'Read Less';
            // var closebtns = $('.cursor').
            // var i;
            // console.log(closebtns)
            // for (i = 0; i < closebtns.length; i++) {
            //     console.log("hi")
            //     var txt = closebtns[i].text();
            //     // if(txt = "Read More"){
            //     //     closebtns[i].text("Read Less");
            //     // }
            // // closebtns[i].addEventListener("click", function() {
            // //     this.parentElement.style.display = 'none';
            // // });
            // }
          
         
           
        });
    
</script>
<script>
  function showDiv() {
    var selectValue = document.getElementById("mySelect").value;
    
    // Hide all divs
    var divs = document.getElementsByClassName("profile");
    for (var i = 0; i < divs.length; i++) {
      divs[i].style.display = "none";
    }
    
    // Show the selected div
    if (selectValue) {
      document.getElementById(selectValue).style.display = "block";
    }
  }
</script>
<script>
  $('#exampleModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
<script>
    
    // A $( document ).ready() block.
    $( document ).ready(function() {
      $('#OpenImgUpload').click(function(){ 
        $('#imgupload').trigger('click'); 
      });
      $('#imgupload').change(function(){ 
        var output = document.getElementById('output');
        console.log(URL.createObjectURL(event.target.files[0]));
        output.src = URL.createObjectURL(event.target.files[0]);
      });
    });
    
  </script>
  <script type="text/javascript">
     $(document).ready(function() {
      $(".js-example-basic-single").select2();
      });
  </script>
   <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
  <script type="text/javascript">
  $(function() {
     
      var $form = $(".require-validation");
     
      $('form.require-validation').bind('submit', function(e) {
          var $form     = $(".require-validation"),
          inputSelector = ['input[type=email]', 'input[type=password]',
                           'input[type=text]', 'input[type=file]',
                           'textarea'].join(', '),
          $inputs       = $form.find('.required').find(inputSelector),
          $errorMessage = $form.find('div.error'),
          valid         = true;
          $errorMessage.addClass('hide');
    
          $('.has-error').removeClass('has-error');
          $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
              $input.parent().addClass('has-error');
              $errorMessage.removeClass('hide');
              e.preventDefault();
            }
          });
     
          if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
              number: $('.card-number').val(),
              cvc: $('.card-cvc').val(),
              exp_month: $('.card-expiry-month').val(),
              exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
          }
    
    });
    
    function stripeResponseHandler(status, response) {
          if (response.error) {
              $('.error')
                  .removeClass('hide')
                  .find('.alert')
                  .text(response.error.message);
          } else {
              /* token contains id, last4, and card type */
              var token = response['id'];
                 
              $form.find('input[type=text]').empty();
              $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
              $form.get(0).submit();
          }
      }
     
  });
  </script>
</body>
            
</html>
