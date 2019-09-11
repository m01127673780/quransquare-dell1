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
    contact/
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
   
    <div class="carousel-item slider-bootstrap carousel-one active">
      </div>
    <div class="carousel-item slider-bootstrap  carousel-toow carousel-three">
     </div>
       <div class="carousel-item slider-bootstrap  carousel-four">
     </div>
    <div class="carousel-item slider-bootstrap  carousel-five">
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
 
<!-- ==================================== -->
<!-- ==================================== -->
 
<!--====== start Why Choose Us ?=============================== -->
 <!----------------start  section title---------------------->
<section class=" title" >
    <div class="container ">
        <div class="section-header text-center">
           
               <h2 class="h2-section-title" id="whyus">
              Why Choose Us ?
               </h2>
              <div class="line">
            </div><!--/.heazder-->
          <span class="span-border"></span>
          </div><!--/.cont div-title-->
    </div><!--/.line-->
</section><!--/.sec-title-->
<!----------------End section title------------------------->

 <!-- Button to Open the Modal -->


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
 <!--    <div class="form-group">
        {!! Form::label('icon',trans('admin.news')) !!}
        {!! Form::file('icon',['class'=>'form-control icon']) !!}
 
     </div>

 
     <div class="form-group">
       <img name="icon" class="image" src="{{ asset( 'storage/news/No_Image.jpg')}} "   > 
     </div> -->
   

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
 <!-- ===================================== -->
 <!--start section  statistk-->
 <section>
 
     <div id="whyus" class="div-whyus">
        <div class="container">
         <div class="row"> 
@foreach($whyus as $why)
 <div  class="col-sm-6 col-lg-3  col-lg-padding">
              <div class="  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility:    visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class=" text-center">
                   <img src="storage/{{$why->icon}}"class="img-whyus">

                <h2 class="h2-whyus">{{$why->head_ar}}</h2>  
                       <h4 class="h4-whyus">{{$why->text_en}} <span class="span-whyus">  {{$why->color_diffe_en}} </span> </h4>
                  </div><!-- contant -->
              </div><!-- col-sm-6 -->
            </div><!-- col-sm-6 -->
@endforeach  

         </div><!-- row" -->
       </div><!--  container -->
     </div><!--  data-n -->
</section><!--End section  -->
<!--End section stitstk -->
 <!--====== start Why Choose Us ?=============================== -->



 
      <!-- ==============start section All courses================= -->
 
 <!-- ===================================== -->
 <!--start section All courses -->
      <section  >
        <svg preserveAspectRatio="none" viewBox="0 0 100 100" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" id="curveUpColor">
        <path class="paths-setionpath-courses" sty d="M0 100 C 20 0 50 0 100 100 Z"></path>
    </svg>
     <div class="scetionpath-courses">
           <!----------------start  section title---------------------->
      <section class=" title " id="courses">
          <div class="container ">
              <div class="section-header text-center">
                 
                     <h2 class="h2-section-title">
                     All the Courses
                    </h2>
                    <div class="line">
                  </div><!--/.heazder-->
                <span class="span-border"></span>
                </div><!--/.cont div-title-->
          </div><!--/.line-->
      </section><!--/.sec-title-->
<!----------------End section title------------------------->
        <div class="container">
         <div class="row"> 
   
        <!----------------------------------->
            <!----------------------------------->
        @foreach($courses as $course)

        <div  class="col-sm-6 col-lg-3">
           <div class="  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="contant">
                <div class="wrapper">
                       <div class="card cardhover">
                           <img src="storage/{{$course->icon}}"class="img-whyus">
                              <div class="descriptions">
                                <h3 style="color: red;">{{$course->head_en}}</h3>
                                  <p class="item-description" align="justify">
 
                     <?php  $str =$course->text_en ?>
                     <?php
                      $arr = explode("," , $str);
                      for ($i = 0; $i < count($arr); $i ++) {
                      echo    $arr[$i] .'<br>';
                     }?> 
                     <!-- 
                         echo  '<ol>';
                      echo  '<li>';
                        $arr[$i] ;
                       echo'</li>'; 
                      echo  '<ol>';

                      -->
                           </p>
                              <button> <i class="fa  fa-youtube"></i>{{$course->color_diffe_en}}</button>
                           </div><!-- descriptions -->
                       </div><!-- card cardhover -->
                  </div><!-- wrapper -->
              </div><!--contant -->
            </div><!-- wow -->
          </div><!-- col-sm-6" -->
          @endforeach  
    

        <!----------------------------------->    <!----------------------------------->
 
           </div><!-- row" -->
         </div><!--  container -->
       </div><!--  data-n -->
</section><!--End section   -->

 <!-- ==============End  section All courses================= -->




   <!-- =======start Videos ========================= --> 
      <!----------------start  section title---------------------->
<section class=" title" id="Videos">
    <div class="container ">
        <div class="section-header text-center">
           
               <h2 class="h2-section-title">
              All our Training Videos

              </h2>
              <div class="line">
            </div><!--/.heazder-->
          <span class="span-border"></span>
          </div><!--/.cont div-title-->
    </div><!--/.line-->
</section><!--/.sec-title-->
<!----------------End section title------------------------->
    <section class="   ">
        <div class="container ">
          <div class="row "> 
            <div class="  container"  ><div id="demo-video" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo-video" data-slide-to="0" class="active"></li>
                <li data-target="#demo-video" data-slide-to="1"></li>
                <li data-target="#demo-video" data-slide-to="2"></li>
              </ul>
                          <!-- The slideshow -->
              <div class="carousel-inner">
              
           
                  <div class="carousel-item slider-bootstrap  ">
                  <img class="img-slider-vido" src="{{ url('design/style') }}/img/slider-vido/4.PNG" alt="Chicago" >
                  <a  class="video-icon " href= 
                  "https://www.youtube.com/watch?v=9yb8BjGuWxE"
                  data-lity="">
<!--                   <i class=" fa-ico-play  icon-video" ></i>
 -->                  </a>
                  </div>
                  <!---------------->
                  <div class="carousel-item slider-bootstrap active ">
                  <img class="img-slider-vido" src="{{ url('design/style') }}/img/slider-vido/3.PNG" alt="Chicago" style=" ">  
                  <a  class="video-icon " href= 
                  "https://www.youtube.com/watch?v=gyI6XXYaAIc"
                  data-lity="">
                  <i class=" fa-ico-play fa fa-youtube-play" ></i>
                  </a>
                  </div>
                 <!---------------->
                  <!---------------->
                  @foreach($videos as $video)  
             


                  <div class="carousel-item slider-bootstrap   ">
                  <img class="img-slider-vido" src="storage/{{$video->img}}" alt="Chicago" style=" ">  
                  <a  class="video-icon " href= 
                  " {{$video->link}}"
                  data-lity="">
                  <i class=" fa-ico-play fa fa-youtube-play" ></i>
                  </a>
                  </div>
                 @endforeach  
                 <!---------------->

                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo-video" data-slide="prev">
               <span class="carousel-control-prev-icon"></span>
               </a>
               <a class="carousel-control-next" href="#demo-video" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
       </div>
    </div>
  </div>
</div>
</section>
 <!-- =======End Videos ========================= --> 

 
 <!--============start Teachers=================================-->
 
 
 <!--============start Teachers=================================-->
<!--     <svg preserveAspectRatio="none" viewBox="0 0 100 100" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" id="curveUpColor">
        <path class="paths-app-review" sty d="M0 100 C 20 0 50 0 100 100 Z"></path>
    </svg> -->
  <section class="app-review " id="review ">
  <div class="thm-container" id="Teachers"> 
      <section class="custm-head">
        <!----------------start  section title---------------------->
        <section class=" title" style="display: none;">
            <div class="container ">
                <div class="section-header text-center">
                  <!-- <span class="span-title">teacher We Do</span> -->
                       <h2 class="h2-section-title">
                      Our teacher</h2>


                      <div class="line">
                    </div><!--/.heazder-->
                  <span class="span-border"></span>
                  </div><!--/.cont div-title-->
            </div><!--/.line-->
        </section><!--/.sec-title-->
        <div style="margin-top: 62px;">
<center style="margin-top: 200px;">      

  <img style="width: 200px; height: 200px; " src="https://www.tareequljannah.com/resources/img/homepage-collaborate.png">  

</center>
</div>
<br>
<br>
<br>
 
        <!----------------End section title------------------------->
          </section>
        <div class="app-review-carousel owl-theme owl-carousel wow fadeInUp" data-wow-duration="2s"   data-wow-offset="100">
       @foreach($teachers as $teacher)
          <div class="item">
          <div class="d-hover">
             <div class="d-ul ">
               <div class=" d-img-teme">
                    <img src="storage/{{$teacher->img}}">
                         <div class="c-img-video video ">{{$teacher->name}}
                     </div><!--./col-8-->
                   </div>
                  <ul class="ul-icon-det ">
                     <li style="">
                      <a href="#">
                      <i class="fa fa-Teacher-record">
                            Teacher of Quran    
                        <a  
                        class="video-icon" href= 
                        "{{$teacher->link}}"
                        data-lity="">
                       <i class="fa fa-play record-icon"></i>
                    </a>
                    </i>
                    </a>
                 </li>
                 <span class="back-g"> </span>
                </ul>
             </div>
            </div>
          </div><!--itm-->

    @endforeach  

     </div><!-- /.app-review-carousel owl-theme owl-carousel -->
   </div><!-- /.thm-container -->
</section><!-- /.app-review -->
  <!--============End  Teachers ( )=================================-->

 
  <!--============End  Teachers ( )=================================-->




 
 <!-- =================start  sectionPackage ==================== --> 
      <!----------------start  section title---------------------->
<section class=" title"  id="Package-Pricing">
    <div class="container ">
        <div class="section-header text-center">
           
               <h2 class="h2-section-title">
             Package-Pricing
              </h2>
              <div class="line">
            </div><!--/.heazder-->
          <span class="span-border"></span>
          </div><!--/.cont div-title-->
    </div><!--/.line-->
</section><!--/.sec-title-->
<!----------------End section title------------------------->
    <section id="Package" class="prices generic" >
       <div class="container" >
         <div class="row" >
            <aside class="asid-title-price" style="font-size: 22px">
               <div class="prograss_bar">
                   <button class="pull-left btn-danger price-minus" style="font-size: 22px">-</button>
                     <span class="text-center price_value" >30 Mins</span>
                       <button class="pull-right btn-success price-plus" style="font-size: 22px">+</button>
                    </div>
              </aside>
                <hr>
   <div class="row  half-an-hour" style="width: 100%;"> 
  @foreach($halfhour as $half)
   <div class="col-sm-6 col-lg-3">
    <div class="superduper">
      <div class="price-package">
        <div class="package-name">
         <h2>{{$half->head_en}}</h2>
          </div>
           <div class="package-price">
           <div class="package-arrow"></div>
          <div class="price">
             <span>${{$half->number}}</span>
          </div>
          <div class="term">
            <sup></sup>
            <span>{{$half->dateshow_en}}</span>
          </div>
        <div class="package-features">
          <div class="package-arrow"></div>
          <ul>
               
                      <?php  $str =$half->content_en ?>
                     <?php
                      $arr = explode("," , $str);
                      for ($i = 0; $i < count($arr); $i ++) {
                      echo   '<li><em>'. $arr[$i] .'</em></li>';
                     }?> 
               <li style="    padding: 0px 19px;"><em>{{$half->descount3_en}}
                <span >(<span style="color:#ffcc00">{{$half->percentage3}}</span>)</span></em>
               </li>
                <!--  ------------->
               <li style="    padding: 0px 19px;"><em>{{$half->descount6_en}}
                <span >(<span style="color:#ffcc00">{{$half->percentage6}}</span>)</span></em>
               </li>
                <!--  ------------->
               <li style="    padding: 0px 19px;"><em>{{$half->descount12_en}}
                <span >(<span style="color:#ffcc00">{{$half->percentage12}}</span>)</span></em>
               </li>
                <!--  ------------->
               <li><em>{{$half->percentage6}}</em></li>
                  <li><em>{{$half->descount12_en}}</em></li>
               <li><em>{{$half->percentage12}}</em></li>
                   
           </ul>
          <button class="sign-up">
            <h3>sign up now!</h3>
          </button>
        </div><!--package-features-->
      </div><!--package-price-->
    </div><!--price-package-->
  </div><!--superduper-->
 </div><!--col-->
@endforeach
 </div> <!-- half-an-hour-->
  <div class="row one-hour" style="width: 100%;  display: none;"> 
  @foreach($hour as $ho)
   <div class="col-sm-6 col-lg-3">
    <div class="superduper">
      <div class="price-package">
        <div class="package-name">
         <h2>{{$ho->head_en}}</h2>
          </div>
           <div class="package-price">
           <div class="package-arrow"></div>
          <div class="price">
             <span>${{$ho->number}}</span>
          </div>
          <div class="term">
            <sup></sup>
            <span>{{$ho->dateshow_en}}</span>
          </div>
        <div class="package-features">
          <div class="package-arrow"></div>
          <ul>
    <?php  $str =$ho->content_en ?>
                     <?php
                      $arr = explode("," , $str);
                      for ($i = 0; $i < count($arr); $i ++) {
                      echo   '<li><em>'. $arr[$i] .'</em></li>';
                     }?> 
               <li style="    padding: 0px 19px;"><em>{{$ho->descount3_en}}
                <span >(<span style="color:#ffcc00">{{$ho->percentage3}}</span>)</span></em>
               </li>
                <!--  ------------->
               <li style="    padding: 0px 19px;"><em>{{$ho->descount6_en}}
                <span >(<span style="color:#ffcc00">{{$ho->percentage6}}</span>)</span></em>
               </li>
                <!--  ------------->
               <li style="    padding: 0px 19px;"><em>{{$ho->descount12_en}}
                <span >(<span style="color:#ffcc00">{{$ho->percentage12}}</span>)</span></em>
               </li>
                <!--  ------------->
               <li><em>{{$ho->percentage6}}</em></li>
                  <li><em>{{$ho->descount12_en}}</em></li>
               <li><em>{{$ho->percentage12}}</em></li>
                   
           </ul>
          <button class="sign-up">
            <h5 style="font-size: 18px">sign up now!</h5>
          </button>
        </div><!--package-features-->
      </div><!--package-price-->
    </div><!--price-package-->
  </div><!--superduper-->
 </div><!--col-->
@endforeach
              </div> <!--one-hour-->
          </div><!-- row" -->
     </div><!--  container -->
  </section>
 <!--=====================================s=================-->


  <!--=====================================s=================-->
     <!----------------start  section title---------------------->
<section class=" title" id="testimonial">
    <div class="container ">
        <div class="section-header text-center">
           
               <h2 class="h2-section-title">
               testimonial
              </h2>
              <div class="line">
            </div><!--/.heazder-->
          <span class="span-border"></span>
          </div><!--/.cont div-title-->
    </div><!--/.line-->
</section><!--/.sec-title-->
<!----------------End section title------------------------->
 <!--============= start section teestmonls (9)============ --> 
         <!-- testimonials -->
  <section class="testimonials p-relative text-center">
    <div class="overlay-bg sec-padding">
      <div class=" ">
        <div class="owl-carousel owl-theme one-catousel-custom">
           
         <!-- ---------------------- -->
             @foreach( $testimonial as $test)
            <div class="single-review">
             <div class="carousel-item active">
               <div class=" our-tteam-inf  ">
                 <div class="bak-g-c-inf"></div>
              <div class=" pic-inf  ">
               <img src="storage/{{$test->img}}">
               </div><!-- pic-->
                      <div class=" team-content-inf  ">
                       <h5 class="title-inf">{{$test->name_en}}</h5>
                       <p class="post-inf">{{$test->job_en}}</p>
                       <p class=" ">
                        <i class="fa fa-star fa-spin"></i>
                        <i class="fa fa-star fa-spin"></i>
                        <i class="fa fa-star fa-spin"></i>
                        <i class="fa fa-star fa-spin"></i>
                        <i class="fa fa-star fa-spin"></i>
                     </p>
                      <p class="post-inf">
                       {{$test->text_en}}
                       </p>
                      <p class="p-ul-inf ">
                      <span class="">
                    <i class="fa fa-star fa-spin"></i>
                    {{$test->country_en}}
                   </span>
                    </p>
                  </div><!--team-content -->
                </div><!-- test-info-->
             </div><!--/.carousel-item-->
          </div>
        @endforeach  
         <!-- ---------------------- -->         
         </div>
      </div>
    </div>
  </section>
 <!--============= End section teestmonls (10?)============ -->


 <!--=========================Start Statistics =================-->
 <!----------------start  section title---------------------->
<section class=" title">
    <div class="container ">
        <div class="section-header text-center">
           
               <h2 class="h2-section-title">
                Statistics
              </h2>
              <div class="line">
            </div><!--/.heazder-->
          <span class="span-border"></span>
          </div><!--/.cont div-title-->
    </div><!--/.line-->
</section><!--/.sec-title-->
<!----------------End section title------------------------->
 <!-- ===================================== -->
 <!--start section  statistk-->
      <section class="statistics-n   " id="statistics">
     <div class="data-n">
        <div class="container">
         <div class="row"> 
         <!-- ------------------------------------------ -->
            @foreach($stat as $st)
            <div  class="col-sm-6 col-lg-3">
            <div class="stats wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
              <div class="contant">





 

              <i class="{{$st->font_awesome}} icon-sta"></i> 
              <!-- <img src="storage/{{$st->img}}" class="icon-sta"> -->
               

<?php 
      // if (!empty($st->font_awesome)){ 
      // echo'<i class="  {{$st->font_awesome}} icon-sta"></i>'; 

//}else{   
           //   echo'<img src="storage/{{$st->img}}" class="icon-sta">';
//}
 ?> 


<!--  
 -->
 

               <span class="nuumber coutn-tow">{{$st->number}}</span>
                <p class="p-p-statst">{{$st->head_ar}} </p>
                </div><!-- contant -->
              </div><!-- col-sm-6 -->
            </div><!-- col-sm-6 -->
           @endforeach

 <!-- ------------------------------------------ -->
          
         </div><!--  container -->
       </div><!--  data-n -->
</section><!--End section  -->
<!--==============End section stitstk  ===================-->



 <!--==============Start the perfect student blog ===================-->
<!----------------start  section title---------------------->
<section class="background-perfect-student" style="background:#f4f4f4;">
<section class=" title">
    <div class="container ">
        <div class="section-header text-center">
           
               <h2 class="h2-section-title">
                the perfect student
              </h2>
              <div class="line">
            </div><!--/.heazder-->
          <span class="span-border"></span>
          </div><!--/.cont div-title-->
    </div><!--/.line-->
</section><!--/.sec-title-->
<!----------------End section title------------------------->
 <br>
  <section class="wandiw text-center">
    <section class="section-all-fotar">
          <div class="statstk">
 <!--=======startlatest-posts plog=========================-->
<section class="app-review" id="review">
  <div class="thm-container"> 
      <div class=" blog owl-theme owl-carousel wow fadeInUp" data-wow-duration="2s" data-wow-offset="100">
  
        <!-- ------------------------------------>
           @foreach( $beststudent as $best)
           <div class="item">
            <div class="card ">  
               <div class ="background-f4">  
                <img class="card-img-top" src="storage/{{$best->img}}"    alt="Card image cap">
                 </div>
                  <div class="card-body">
                     <h4 class="card-title">{{$best->name_en}} </h4>
                      <article class="article-subtitle" > 
                      <i class="icon-calendar"></i>  
                      <span class="card-subtitle">{{$best->date_en}} </span>
                      <i class="icon-chat"></i> 
                        <span class="card-subtitle">{{$best->Lecture_en}} </span>
                    </article><!--  article-subtitle --> 
                    <p class="card-text section-desc text-left">{{$best->text_en}} </p>
                      <a href="#Package" class="a-img-Ather ">
              <span class="span-a-bolog"> 
              <i>sunup</i>
              <i class="fa fa-long-arrow-right"></i>
              </span>
                  </a>
                  <hr>
              <a href="#" class="a-img-Ather ">
               <img  src="storage/{{$best->img_Teacher}}" alt=""> 

                  <span class="span-Author"> 
                <span >
                 <span class="name-Author" >{{$best->name_Teacher_en}}</span>
                <author>({{$best->job_en}})</author>
                </span>
              </span>
            </a>
           </div>
          </div>
        </div><!--  itm-->
       @endforeach  
        <!-- ------------------------------------>
      
    </div><!-- /.app-review-carousel owl-theme owl-carousel -->
</section><!-- /.app-review --> 
 </div><!-- /.statstk -->
</section><!-- /.section-all-fotar -->
</section><!-- /.wandiw text-center -->
</section><!-- /.background-perfect-student -->

<!--=======End latest-posts plog=========================-->

 

<!-- =====Start footer======================================== -->
<section class="footer-svg" style="background: #f4f4f4">
  
    <img class="img-wave-footer" src="https://raw.githubusercontent.com/m01127673780/otlop-project/master/All/img/wave.png">

   <!--  <svg  preserveAspectRatio="none" viewBox="0 0 100 100" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" id="curveUpColor">
        <path class="paths-setionpath-footre" sty d="M0 100 C 20 0 50 0 100 100 Z"></path>
    </svg> -->
 <footer class="footer-area footer--light">

  <div class="footer-big">

    <!-- start .container -->
    <div class="container">
      <div class="row">
              <div class="col-md-6 col-lg-3 col-sm-12">
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
            <div class="col-md-6 col-lg-3 col-sm-12">
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
                <div class="col-md-6 col-lg-3 col-sm-12 p-linhight-smol">
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
 </section>
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
