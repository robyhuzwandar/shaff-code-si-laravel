
<section class="jumbotron jumbotron-fluid text-white bg-dark" style="padding: 1.9em; /*background-color: black !important;*/">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div>
            <p style="font-size: 20px;">Bagi pengetahuanmu untuk bersama membangun komunitas developer di Indonesia! Kita bisa jika semua terlibat dan saling memberi manfaat.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div style="margin-left: 48px;">
            <a href="/admin">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="pengumuman" >
                 <span class="fa fa-pencil-square margin-xs-right" style="padding: 5px; font-size: 20px;"> Tulis Artikel Sekarang </span></button>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>



<article class="card-post" >
  <div class="container">

<div>
     <h1>Kursus Ngoding</h1><br>
     <p style="font-size: 17px;">Belajar pemrograman lebih mudah, fitur ini memungkinkan kamu belajar coding<br> sambil praktek di satu tempat yang sama.</p>
</div>
       <div class="row">


       
      <div class="col-md-2 mb-2 d-flex" >
        <div class="card card-shadow">

        <a target="_blank" href="https://codesaya.com/php/selamat-datang-ke-php/">
        <img class="card-img-top lazyloaded" src="{{asset('img/kursus/php.png')}}" data-src="img/index.png" alt="How to Install Sublime Text 3" width="40" height="170" >
        </a>
        
        <div class="card-body" style="width: 30rem;">
          <h5 class="card-title">
          <a class="text-dark" href="" style="margin-left: 10px; font-size: 12px; font-family: Century Gothic; color: grey !important;">I N T E R A C T I V E </a>
          <br>
          <a class="text-dark" href="#" style="margin-left: 27px; font-size: 12px; font-family: Century Gothic; color: grey !important;"> C O D I N G</a>
          <br/>
          <h5 style="font-family: Arial; margin-left: 39px;"><b>PHP</b></h5>
          <p style="margin-left: 29px; font-size: 12px; font-family: Century Gothic; color: grey !important;">Min 200 Val</p>
          <a target="_blank" href="https://codesaya.com/php/selamat-datang-ke-php/">
            <button type="button" class="btn btn-outline-success" style="margin-left: 3px;">Mulai Belajar</button>  
          </a>
          

          </h5>
        </div>
      </div>
     </div>


     <div class="col-md-2 mb-2 d-flex">
        <div class="card card-shadow">

        <a href="https://codesaya.com/python/" target="_blank">
        <img class="card-img-top lazyloaded" src="{{asset('img/kursus/python.jpg')}}" data-src="img/pythonlogo.jpg" alt="How to Install Sublime Text 3" width="40" height="170" >
        </a>
        
        <div class="card-body" style="width: 30rem;">
          <h5 class="card-title">
          <a class="text-dark" href="#" style="margin-left: 10px; font-size: 12px; font-family: Century Gothic; color: grey !important;">I N T E R A C T I V E </a>
          <br>
          <a class="text-dark" href="#" style="margin-left: 27px; font-size: 12px; font-family: Century Gothic; color: grey !important;"> C O D I N G</a>
          <br/>
          <h5 style="font-family: Arial; margin-left: 23px;"><b>PHYTON</b></h5>
          <p style="margin-left: 29px; font-size: 12px; font-family: Century Gothic; color: grey !important;">Min 200 Val</p>
          <a href="https://codesaya.com/python/" target="_blank">
            <button type="button" class="btn btn-outline-success" style="margin-left: 3px;">Mulai Belajar</button>  
          </a>
          

          </h5>
        </div>
      </div>
     </div>


     <div class="col-md-2 mb-2 d-flex">
        <div class="card card-shadow">

        <a href="https://www.codecademy.com/learn/learn-java" target="_blank">
        <img class="card-img-top lazyloaded" src="{{asset('img/kursus/java.png')}}" data-src="img/java.png" alt="How to Install Sublime Text 3" width="40" height="170" >
        </a>
        
        <div class="card-body" style="width: 30rem;">
          <h5 class="card-title">
          <a class="text-dark" href="#" style="margin-left: 10px; font-size: 12px; font-family: Century Gothic; color: grey !important;">I N T E R A C T I V E </a>
          <br>
          <a class="text-dark" href="#" style="margin-left: 27px; font-size: 12px; font-family: Century Gothic; color: grey !important;"> C O D I N G</a>
          <br/>
          <h5 style="font-family: Arial; margin-left: 35px;"><b>JAVA</b></h5>
          <p style="margin-left: 29px; font-size: 12px; font-family: Century Gothic; color: grey !important;">Min 200 Val</p>
          <a href="https://www.codecademy.com/learn/learn-java" target="_blank">
            <button type="button" class="btn btn-outline-success" style="margin-left: 3px;">Mulai Belajar</button>  
          </a>
          

          </h5>
        </div>
      </div>
     </div>


     <!-- EVENT -->
    <div class="col-sm-5 offset-sm-1 ml-sm-auto blog-sidebar-right " style=" float: right; border-left:2px solid black; margin-top: -130px; padding-left: 2em;">

          <div class="sidebar-module sidebar-module-inset">
            <h4><i class="fa fa-calendar margin-xs-right"></i> UPCOMING TECH EVENT</h4>
            <br/>
          @foreach($footartikel as $data)
          <div>
              <div class="event-title">
              <a href="{{ route('frontend.event_detail', $data->id)}}" class="record-data" data-action="event-item" data-position="home-event" data-id="#" style="color: black; font-size: 19px;"><b>{{$data->title}}</b></a>
            </div>

            <div class="event-company" style="color: grey;"><span class="fa fa-calendar fa-fw"></span> {{$data->date}} , {{$data->time}}</div>
            <div class="event-location" style="color: grey;"><span class="fa fa-map-marker fa-fw"></span> {{$data->location}} &nbsp;&nbsp;&nbsp;<a href="{{ route('frontend.event_detail', $data->id)}}" class="btn btn-outline-primary btn-sm" data-action="event-item" data-position="home-event" data-id="#">Lihat Detail </a>
            </div>  
          </div>

      <br/> 
      @endforeach

          <!-- <div class="event-title">
            <a href="#" class="record-data" data-action="event-item" data-position="home-event" data-id="#" style="color: black; font-size: 19px;"><b>Tech Talk</b></a>
          </div>

          <div class="event-company" style="color: grey;"><span class="fa fa-calendar fa-fw"></span> Jan 18, 2018</div>
          <div class="event-location" style="color: grey;"><span class="fa fa-map-marker fa-fw"></span> Mataram &nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-outline-primary btn-sm" data-action="event-item" data-position="home-event" data-id="#">Lihat Detail</a>
          </div>

      <br/> 

          <div class="event-title">
            <a href="#" class="record-data" data-action="event-item" data-position="home-event" data-id="#" style="color: black; font-size: 19px;"><b>MAGE (Multimedia and Game Event) 2018</b></a>
          </div>

          <div class="event-company" style="color: grey;"><span class="fa fa-calendar fa-fw"></span> Jan 18, 2018</div>
          <div class="event-location" style="color: grey;"><span class="fa fa-map-marker fa-fw"></span> Surabaya &nbsp;
          <a href="#" class="btn btn-outline-primary btn-sm" data-action="event-item" data-position="home-event" data-id="#">Lihat Detail</a>
          </div>

      <br/>  -->

          <div class="margin-lg-top">
              <a href="/eventmain" class="btn btn-primary record-data" data-action="other-event" data-position="home-event"> Lihat Semua Event &nbsp;
              <i class="fa fa-long-arrow-right"></i></a>
          </div>

          </div>
    </div> 
<!-- 


     <div class="col-md-2 mb-2 d-flex" style="margin-top: 15px;">
        <div class="card card-shadow">

        <a href="#">
        <img class="card-img-top lazyloaded" src="img/php.png" data-src="img/php.png" alt="How to Install Sublime Text 3" width="40" height="170" >
        </a>
        
        <div class="card-body" style="width: 30rem;">
          <h5 class="card-title">
          <a class="text-dark" href="#" style="margin-left: 10px; font-size: 12px; font-family: Century Gothic; color: grey !important;">I N T E R A C T I V E </a>
          <br>
          <a class="text-dark" href="#" style="margin-left: 27px; font-size: 12px; font-family: Century Gothic; color: grey !important;"> C O D I N G</a>
          <br/>
          <h5 style="font-family: Arial; margin-left: 40px;"><b>PHP</b></h5>
          <p style="margin-left: 29px; font-size: 12px; font-family: Century Gothic; color: grey !important;">Min 200 Val</p>
          <button type="button" class="btn btn-outline-success" style="margin-left: 3px;">Mulai Belajar</button>

          </h5>
        </div>
      </div>
     </div>


     <div class="col-md-2 mb-2 d-flex" style="margin-top: 15px;">
        <div class="card card-shadow">

        <a href="#">
        <img class="card-img-top lazyloaded" src="img/html.png" data-src="img/html.png" alt="How to Install Sublime Text 3" width="100" height="170" >
        </a>

        
        <div class="card-body" style="width: 30rem;">
          <h5 class="card-title">
          <a class="text-dark" href="#" style="margin-left: 10px; font-size: 12px; font-family: Century Gothic; color: grey !important;">I N T E R A C T I V E </a>
          <br>
          <a class="text-dark" href="#" style="margin-left: 27px; font-size: 12px; font-family: Century Gothic; color: grey !important;"> C O D I N G</a>
          <br/>
          <h5 style="font-family: Arial; margin-left: 35px;"><b>HTML</b></h5>
          <p style="margin-left: 29px; font-size: 12px; font-family: Century Gothic; color: grey !important;">Min 200 Val</p>
          <button type="button" class="btn btn-outline-success" style="margin-left: 3px;">Mulai Belajar</button>

          </h5>
        </div>
      </div>
     </div>

 -->

    </div>
   </div>
 </article>






  <br/>
