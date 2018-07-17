 @extends('frontend.index')
 @section('content')


 <div class="container">
   <div style="width: 1000px; " >
     <nav aria-label="breadcrumb" >
      <ol class="breadcrumb" >
        <li class="breadcrumb-item"><a href="#">Event /&nbsp;</a><li>
          <li class="breadcrumb-item active" aria-current="page"> {{$event->title}}</li>
        </ol>
      </nav>
    </div>

    <br>
    <div style=" font-family: verdana;">
      <b><h3>{{$event->event_type}} {{$event->title}}</h3></b>
    </div>
    <br/>
    <a href="#">
    <img style=""  src="{{asset('/img/poster_event/'.$event->poster)}}" data-src="img/hh.jpg" alt="" width="800" height="400">
    </a>
    <br/>
    <br/>
    
    <b><h3>{{$event->event_type}} {{$event->title}}</h3></b>
    <h5>{{$event->sub_title}}</h5>
    <h6 style="color:dimgrey; font-size: 12px;"> Presented by : {{$event->organizer}}</h6>

    <div style="font-size: 25px; font-family: Trebuchet MS;">
      <i class="fa fa-long-arrow-right"></i>&nbsp;<b >DETAIL EVENT</b>
    </div>
    <div style="margin-left: 39px;">
      {!! $event->body !!}
    </div>  
      <br>

          <div style="  font-size: 25px; font-family: Trebuchet MS;">
            <i class="fa fa-long-arrow-right"></i>&nbsp;<b >WAKTU, TEMPAT DAN JENIS KEGIATAN</b>
          </div><br/>

          <div style=" font-family: Trebuchet MS;">
            <h4 class="title-segment" ><span class="fa fa-fw fa-info-circle"></span> Penanngu Jawab Event</h4>
          </div>
            <div style="margin-left: 39px;">
              <table>
                <thead>
                  <tr>
                    <th>Presented By</th>
                    <th>: {{$community->name}}</th>
                  </tr>

                  <tr>
                    <th>Post By</th>
                    <th>: {{$user->name}}</th>
                  </tr>
                  <tr>
                    <th>Phone</th>
                    <th>: {{$user->phone}}</th>
                  </tr>
                  
                  <tr>
                    <th>Email</th>
                  <th>: {{$user->email}}</th>
                  </tr>
                </thead>
              </table> 
             </div>
          <br/>

          <div style=" font-family: Trebuchet MS;">
            <h4 class="title-segment" ><span class="fa fa-fw fa-info-circle"></span> Biaya</h4>
            <p style="font-size: 19px; margin-left: 39px;">{{$event->fee}}</p>
          </div><br/>

          <div style=" font-family: Trebuchet MS;">
            <h4 class="title-segment" ><span class="fa fa-fw fa-calendar"></span> Waktu Pelaksanaan</h4>
            <p style="font-size: 19px; margin-left: 39px;">
              Tanggal : {{$event->date}}<br>
              Waktu : {{$event->time}}</p>
            </div><br/>

             <div style=" font-family: Trebuchet MS;">
              <h4 class="title-segment" ><span class="fa fa-fw fa-map-marker"></span> Lokasi</h4>
              <p style="font-size: 19px; margin-left: 39px;">{{$event->location}}</p>
            </div><br/>

            <div style=" font-family: Trebuchet MS;">
              <h4 class="title-segment" ><span class="fa fa-fw fa-map-marker"></span> Alamat</h4>
              <p style="font-size: 19px; margin-left: 39px;">{{$event->address}}</p>
            </div><br/>

<!-- 
            <div style=" font-family: Trebuchet MS;">
              <h4 class="title-segment" ><span class="fa fa-fw fa-check-square"></span> Contact</h4>
              <p style="font-size: 19px; margin-left: 39px;">
                083-119-581-865 (Laki-Laki a/n Medi)<br/>
                081-907-001-397 (Perempuan a/n Rizka)
              </p>
            </div><br/> -->


            <!-- <div style=" font-family: Trebuchet MS;">
              <h4 class="title-segment" ><span class="fa fa-fw fa-file-photo-o"></span>Poster</h4>
              <img  src="{{asset('/img/poster_event/'.$event->poster)}}" data-src="img/hh.jpg" alt="poster" width="60%">
            </div><br/> -->
          </div>
          @endsection