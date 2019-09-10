     <!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8" />
    <title>quransquare</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo/logon.PNG">
    <meta name="msapplication-TileColor" content="#ffffff">
 
   <link rel="stylesheet" href="{{ url('design/style') }}/css/style.css">
 </head> 
<body class=" ">
<!--====== start Slider =============================== -->
<!--------------start section Welcom 1 ------------->
     <header class="header-nav " style="    background: #f8f9fa;">
          <!--start nav Bar--> 
        <nav class="navbar navbar-expand-lg navbar-light   fixed-top  navbar-light bg-light  ">
          <div class="container">
           <a class="navbar-brand" href="#"> 
              <img src="https://www.tareequljannah.com/resources/img/logo.png" style="width: 100px;"></a> 
              <span class="tybime"></span>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> <i class="fa faifacebook fa-2x"></i></span>
                </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav ml-auto">
                    <!--  <li class="nav-item active">
                        <a class="nav-link" href="index-slider-border.html">Home</a>
                     </li> -->
                     <li class="nav-item ">
                <a class="nav-link" href="#whyus">whyus<span class="sr-only">(current)</span></a>
                   </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#courses">Courses</a>
                   </li> 
                  <li class="nav-item">
                <a class="nav-link" href="#Videos">Videos</a>
                </li>   
                    <li class="nav-item">
                <a class="nav-link" href="#Teachers">Teachers</a>
                </li> 
                    <li class="nav-item"  >
                <a class="nav-link" href="#Package">Package</a>
                </li>  
                  <li class="nav-item">
                  <a class="nav-link" href="#testimonial" target="_self">testimonial</a>
                      </li> 
                      <li class="nav-item">
                        <a class="nav-link" href="#statistics">statistics</a>
                     </li>  
                      <li class="nav-item">
                        <a style="display: inline-block;" class="nav-link" href="#">



                       


  <a  class="  " data-toggle="modal" data-target="#myModal">
    login/
  </a>
                      </a>
                        <a  style="display: inline-block;" class="nav-link" href="sunup.html">sunup/</a>

                     </li> 
                  </ul>
                </div>
              </div>
            </nav>
          </header><!-- </header>-->

 <!--======================================================-->
<!-- start slider-->
<div class="slider-top">
   <div class="overlay over-slider" id="particles-js" ></div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators indicators-Heder"> 
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">.</li>
   <li data-target="#carouselExampleIndicators" data-slide-to="1">.</li>
   <li data-target="#carouselExampleIndicators" data-slide-to="2">.</li>
   <li data-target="#carouselExampleIndicators" data-slide-to="3">.</li>
   <li data-target="#carouselExampleIndicators" data-slide-to="4">.</li>
   </ol>
  <div class="carousel-inner">
   
    <div class="carousel-item carousel-one active">
      </div>
    <div class="carousel-item  carousel-toow carousel-three">
     </div>
       <div class="carousel-item  carousel-four">
     </div>
    <div class="carousel-item  carousel-five">
     </div>
   </div>
  <a class="carousel-control-prev top" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true">
 </span>
    <span class="sr-only sr-only-left">  </span>
  </a>
   <a class="carousel-control-next top" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"> </span>
  </a>
</div>
</div>
<!--End slider--> 
      <a href="#one-sec">   
           <i data-brackets-id="2485" class=" man   fa fa-angle-down" id=""></i>
           </a>
    <div class="after-img border-img"></div>
  </section> 
<!--====== End Slider =============================== -->
 
 <!-- Button to Open the Modal ------------------------------------------------------------------ -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

 <form method="post" action ="{{url('user/register')}}" >
  <input type="hidden" name="_token" value="{{ csrf_token ()}}">  <div class="row">
    <div class="col-lg-6 left-3-input">
      <input type="text" class="form-control"  name="name"    placeholder="name">
      <input type="email" class="form-control" name="email"   placeholder="email">
      <input type="text" class="form-control"  name="subject" placeholder="subject">
     </div>
    <div class="col-lg-6">
       <input type="text" class="form-control" name="phone"    placeholder="phone">
       <textarea class="form-control"          name="message"   placeholder="Last name"></textarea> 
    <div class="form-group">
        {!! Form::label('icon',trans('admin.news')) !!}
        {!! Form::file('icon',['class'=>'form-control icon']) !!}
 
     </div>

 
     <div class="form-group">
       <img name="icon" class="image" src="{{ asset( 'storage/news/No_Image.jpg')}} "   > 
     </div>
   

   </div>
 </div>
 <center style="margin: 20px 0;">
    <button class="btn btn-primary" type="submit">Submit form</button>
</center>
 <style type="text/css">
   
  textarea{
    height: 93px;
   padding: 0!important;
}  
  .left-3-input input{
  height: 33px;
  margin: 6px 0;
}  

 </style>
</form>     


      <!-- Modal footer -->
      <div class="modal-footer">
<!--         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
 -->      </div>

    </div>
  </div>
</div>
</div>
<!-- ==================================== -->
 

<!--=======start exprets========================================-->
     <!----------------start  section title---------------------->
<section class=" title">
    <div class="container ">
        <div class="section-header text-center">
          <span class="span-title">quransquare</span>
               <h2 class="h2-section-title">
choose              </h2>
              <div class="line">
            </div><!--/.heazder-->
          <span class="span-border"></span>
          </div><!--/.cont div-title-->
    </div><!--/.line-->
</section><!--/.sec-title-->
<!----------------End section title------------------------->
 <!--------------------------------------------------------->
<section class="center" style="">
    <div class="container">
         <div class="content-img-sunup">


<!-- ---------------------------------- -->
<section class="center">
<center class="">
  <a href="student.html">
    <div class="div-img">
      <img src="https://qutor.com/assets/Student-Button.png">
    </div>
  </a>
 <!-- ---------------------------------- -->
   <a href="tutor.html">
    <div class="div-img">
      <img src="https://qutor.com/assets/Tutor-Button.png">
    </div>
  </a>
 <!-- ---------------------------------- -->
   <a href=""  data-toggle="modal" data-target="#myModal-login-studant">
    <div class="div-img">
      <img src="https://qutor.com/assets/Facebook-Button.png">
    </div>
  </a>
   </center>
 
        
      </div>
    </div>
  </div>
</div>
</section>
 <style type="text/css">
   
.center a div{
margin: 20px 0;
}

 </style>
<!--=======start exprets========================================-->

 
 

<!-- =====Start footer======================================== -->
 <footer class="footer-area footer--light">
  <div class="footer-big">
    <!-- start .container -->
    <div class="container">
      <div class="row">
              <div class="col-md-3 col-sm-12">
          <div class="footer-widget">
            <div class="widget-about">
         <h3 class="footer-title">About us</h3>
          <p align="justify" class="p-linhight">
                   @foreach($footer as $foot)
                     {{$foot->aboutus_en}}
                     @endforeach
                    </p>
            </div>
          </div>

          <!-- Ends: .footer-widget -->
        </div> <!-- end /.col-md-4 -->
            <div class="col-sm-6 col-lg-3">
                    <h3 class="footer-title">important links</h3>
                    <ul class="list-unstyled contact-info text-left" >
                    @foreach($footer as $foot)
                    <?php   $str =$foot->import_info_en ?>
                    <?php
                    $arr = explode("," , $str);
                    for ($i = 0; $i < count($arr); $i ++) {
                    echo "  <p style='color:#c1c4c6;'> <i class='fa fa-check-circle-o'></i>". $arr[$i]."</p>";
                    }?> 
                 @endforeach
   </li>
</ul>
                </div>
                <div class="col-sm-6 col-lg-3 p-linhight-smol">
                    <h3 class="footer-title">Contact information</h3>
                    <!-- <p>Tel: 9892-62156 int 6126</p> -->
                    <p class="p-linhight-smol">
                     @foreach($footer as $foot)
                     {{$foot->contact_en}}
                     @endforeach
                   </p>
                      <p class="p-linhight-smol">Call Us: <font color="orange" size="3">
                     @foreach($footer as $foot)
                     {{$foot->callus_en}}
                     @endforeach
                   </font></p>
                    <p class="p-linhight-smol">Support Email: <font color="orange"> 
                      @foreach($footer as $foot)
                     {{$foot->emaill}}
                     @endforeach
                   </font></p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h3 class="footer-title">payments</h3>
                    <p align="justify"> 
                    @foreach($footer as $foot)
                     {{$foot->payment_en}}
                     @endforeach
                   </p>
                    <ul class="pay list-unstyled">
                        <span><img src="https://www.tareequljannah.com/resources/img/visa.png" alt="//"></span>
                        <span><img src="https://www.tareequljannah.com/resources/img/discov.png" alt="//"></span>
                        <span><img src="https://www.tareequljannah.com/resources/img/master.png" alt="//"></span>
                        <span><img src="https://www.tareequljannah.com/resources/img/paypal.png" alt="//"></span>
                    </ul>
              </div>
        </div>
      <!-- end /.row -->
    </div>
    <!-- end /.container -->
  </div>
  <!-- end /.footer-big -->
<article  class="img-and-icon-footer">
      <div class="container">
              <span> 
               <span class="s-medie">
                  <a href="{{$foot->twitter}} " target="_blank"  ><i class="fa fa-twitter"></i></a>
                  <a href="{{$foot->facebook}} " target="_blank"  ><i class="fa fa-facebook"></i></a>
                  <a href="{{$foot->googel}}  " target="_blank"  ><i class="fa fa-google"></i></a>
                  <a href="{{$foot->youtube}} " target="_blank"  ><i class="fa fa-youtube"></i></a>
                  </span>
      @foreach($footer as $foot)
                  
              <a href="{{$foot->link_appstore}}" target="_blank">   <img class="img-downlode-app " src="storage/{{$foot->img_appstore}}"></a>
              <a href="{{$foot->link_googelplay}}" target="_blank"> <img class="img-downlode-app " src="storage/{{$foot->img_googelplay}}"></a> 
                 @endforeach
                  </div>
                </span>
                  <br><br><br> 
                 <div class="text-left">
                  
                  <a href="#"><i class="fa fa-angle-double-up icon-up-to-top  "></i></a>
                  <p class="p-capy"> 
                  <span class="color">
                    ©2019 .<sapn class="yellow"> All rights</sapn> reserved for <span class="copy"> quransquare.</span> 
                  <sapn class="yellow">© Developed by
                  <span class="color">
                  mohamed Elsaeed
                  </span>
                  </span>
                <span class="s-medie by-me">
                  @foreach($footer as $foot)
                  <a href="{{$foot->twitter}}"><i class="fa fa-twitter"></i></a>
                  <a href="{{$foot->facebook}}"><i class="fa fa-facebook"></i></a>
                  <a href="{{$foot->youtube}}"><i class="fa fa-google"></i></a>
                  <a href="{{$foot->youtube}}"><i class="fa fa-youtube"></i></a>
                   @endforeach

                  </span>
                  </span>
               </p>
          </div>
  </article>
</footer>
 
<!--=======================================================--> 
</body>

<script type="text/javascript">
  
$( document ).ready(function() {








    console.log( "ready!" );


$('.price-minus').on('click',function(){
$('.half-an-hour').slideDown(1000);
$('.one-hour').slideUp(1000); 
$(".price_value").html('30 Mins');

 });
$('.price-plus').on('click',function(){
$('.half-an-hour').slideUp(1000);
$('.one-hour').slideDown(1000); 
$(".price_value").html('60 Mins');

 });




  $('.topbar').click(function() {
    if ($('.topbar').hasClass("isUp")) {
    $('.topbar').animate({top: '45px'}, 1000);
    $('.nav').animate({top: '0px'}, 1000);
    $('.topbar').removeClass("isUp");
    }
  
    else {
      $('.topbar').animate({top: '0px'}, 1000);
      $('.nav').animate({top: '-50px'}, 1000);
      $('.topbar').addClass("isUp");
    }  
  });


$( ".up" ).click(function() {
  $( ".section-bartop" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});




















$('#newsTicker15').breakingNews({
    // position : 'fixed-top',
    // borderWidth: 3,
    // height: 45,
    // themeColor: '#ce2525'
  }); 
//  $( ".up" ).click(function() {
//   alert( "Handler for .click() called." );
// });



$( ".up" ).click(function() {
  $( ".section-bartop" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});








/*
 *By Suleyman Tekin 02/07/2017
 */

var minute, hour, sec;
function setup(){
  var date = new Date();
  sec = addZero(date.getSeconds());
  minute = addZero(date.getMinutes());
  hour = addZero(date.getHours());
  showSecond();
  if(sec==00){
    showMinute();
    if(minute == 59){
      showHour();
    }
  }
}

function showSecond(){
  $('.card.effect.secondEf').hasClass( "flipped" )  === true ? $('.card.effect.secondEf').removeClass("flipped") : $('.card.effect.secondEf').addClass("flipped");
  $('.second').text(sec);
 
}

function showMinute(){
  $('.card.effect.minuteEf').hasClass( "flipped" )  === true ?      $('.card.effect.minuteEf').removeClass("flipped") :     $('.card.effect.minuteEf').addClass("flipped");
  if($('.minuteEf .front').is(':visible')) {
      $('.back .minute').text(minute);
      $('.front .minute').text(addZero(minute-1));
  }else{
      $('.front .minute').text(minute);
      $('.back .minute').text(addZero(minute-1));
  }  
}

function showHour(){
   
  $('.card.effect.hourEf').hasClass( "flipped" )  === true ? $('.card.effect.hourEf').removeClass("flipped") : $('.card.effect.hourEf').addClass("flipped");
  $('.hour').text(hour);
}

setup();
setInterval(setup, 500);
showSecond();
showMinute();
showHour();

function addZero(a){
  if(a == -1){return "00";}
  if(a <10){
    return "0" + a;
  }
  return a;
}











// -----------------------------







  });


</script>
 <script src="{{ url('design/style') }}/js/vendrs/jquery.js"></script>
 <script src="{{ url('design/style') }}/js/vendrs/owl.carousel.min.js"></script>
<!-- isopte -->
<script src="{{ url('design/style') }}/js/vendrs/isotope.js"></script>
<script src="{{ url('design/style') }}/js/vendrs/jquery.countTo.js"></script>
<script src="{{ url('design/style') }}/js/vendrs/wow.min.js"></script>
<script src="{{ url('design/style') }}/js/bootstrip-slider/bootstrap.min.js"></script>
<script src="{{ url('design/style') }}/js/vendrs/lity.min.js"></script>
 <script src="{{ url('design/style') }}/js/script.js"></script>
 </html>
