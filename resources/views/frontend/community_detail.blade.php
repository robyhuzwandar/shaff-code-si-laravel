 @extends('frontend.index')
@section('content')

 <div style="width: 1000px; margin-left: 165px;" >
   <nav aria-label="breadcrumb" >
    <ol class="breadcrumb" >
      <li class="breadcrumb-item"><a href="Artikel.php">Artikel /&nbsp;</a><li>
      <li class="breadcrumb-item"><a href="#">News /&nbsp; </a><li>
      <li class="breadcrumb-item active" aria-current="page">Google Buat Doodle Belajar Ngoding Untuk Anak-anak</li>
    </ol>

    <div class="content-author">
      <div class="media">
            <div class="media-left">
              <div class="content-avatar">
                  <img class="rounded-circle" src="{{url('/img/logo_community/'.$community->logo)}}" alt="Generic placeholder image" width="110" height="110">
              </div>
            </div>
       
          <div class="media-body" style="margin-top: 20px; margin-left: 15px;">
            <div class="content-name"><span class="content-authorname official-author"><a href="#">{{$user->name}}</a></span></div>
              <div class="content-position">{{$user->about}}</div>
                <div style="font-size: 13px; color: dimgray;" class="content-date">Di buat pada {{$community->created_at}}</div>
          </div>
      </div><br/>
    <div>
         <h1 style="text-align:center; font-family: Trebuchet MS; "><b>{{$community->name}}</b><br/> <br>
         <img class="" src="{{url('/img/logo_community/'.$community->logo)}}" alt="Generic placeholder image" width="50%"></h1>
         <br/>
         <br/>
         {!! $community->deskription !!}
          <br>
         <div style=" font-family: Trebuchet MS;">
              <h4 class="title-segment" ><i class="fa fa-long-arrow-right"></i> Jenis Komunitas</h4>
              <p style="font-size: 19px; margin-left: 39px;">
                {{$community->type}}       
              </p>
            </div><br/>

            <div style=" font-family: Trebuchet MS;">
              <h4 class="title-segment" ><span class="fa fa-fw fa-map-marker"></span> Lokasi</h4>
              <p style="font-size: 19px; margin-left: 39px;">
                {{$community->location}}
              </p>
            </div><br/>

            <div style=" font-family: Trebuchet MS;">
              <h4 class="title-segment" ><span class="fa fa-fw fa-check-square"></span> Contact</h4>
              <p style="font-size: 19px; margin-left: 39px;">
                Kontak Komunitas : {{$community->contact}}
                <br>
                Kontak Pembuat : {{$user->phone}} ( {{$user->name}} )
              </p>
            </div><br/>
    </div>
    </div>

  </nav>
  </div>
  @endsection