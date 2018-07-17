@extends('frontend.index')
@section('content')

<article class="card-post" >
  <div class="container">
    <br/>
    <div style="margin-left: 800px; ">
      <form class="form-inline my-2 my-lg-0" action="{{route('frontend.pencarian_artikel')}}">
        <input value="{{ old('q') }}" name="q" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" my-2 my-sm-0 type="submit">Search</button>
      </form>
    </div>
    <br/>

<!-- Artikel blok -->
    <div class="row mb-3">
      <div class="col-md-12">
        <div class="alert alert-danger" style="font-size: 15px; background-color: floralwhite; ">
            Hasil Pencarian Artikel..
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($artikel as $data)
        <div class="col-md-4 mb-4 d-flex">
      <a href="{{route('frontend.artikel_detail', $data->id)}}">
          <div class="card card-shadow">
            <img class="card-img-top lazyloaded" src="{{url('/img/cover_artikel/'.$data->cover)}}" data-src="" alt="How to Install Sublime Text 3" width="600" height="170" >
            <div class="card-body">
              <h5 class="card-title">
                <a class="text-dark" href="{{route('frontend.artikel_detail', $data->id)}}" style="font-size: 14px; font-family: Century Gothic; color: grey !important;">
                  @foreach($category as $c)
                    @if($data->category_id === $c->id)
                    {{$c->name}}
                    @endif
                  @endforeach
                </a><br>
                {{$data->title}}
                <br>
                <a class="text-dark" href="{{route('frontend.artikel_detail', $data->id)}}" style="font-size: 14px; font-family: Century Gothic; color: grey !important;">
                  By
                  @foreach($user as $u)
                    @if($data->user_id === $u->id)
                    {{$u->name}}
                    @endif
                  @endforeach
                </a><br>
                <a class="text-dark" href="{{route('frontend.artikel_detail', $data->id)}}" style="font-size: 14px; font-family: Century Gothic; color: grey !important;">
                  {{$data->created_at}}  
                </a>
                
              </h5>
            </div>
          </div>
      </a>
        </div>
      @endforeach
    </div>
<!-- Artikel blok end -->


<!-- Komunitas blok -->
<div class="row mb-3">
      <div class="col-md-12">
        <div class="alert alert-danger" style="font-size: 15px; background-color: floralwhite;">
            Hasil Pencarian Komunitas..
        </div>
      </div>
    </div>
<div class="row">
      @foreach($community as $data)
        <div class="col-md-4 mb-4 d-flex">
        <a href="{{route('frontend.community_detail', $data->id)}}" style="text-decoration: none;">
          <div class="card card-shadow " style="width: 18rem;">
            <img class="card-img-top lazyloaded" src="{{url('/img/logo_community/'.$data->logo)}}" data-src="" alt="{{$data->name}}" style="margin: 5px; width: 97%; background: burlywood;">
            <div class="card-body">
              <h5 class="card-title">
               <span style="color: black !important;">
                  {{$data->name}}<br>
               </span>
                <span class="text-dark" href="{{route('frontend.community_detail', $data->id)}}" style="font-size: 11px; font-family: Century Gothic; color: grey !important;"> {{$data->type}}</span>
              </h5>
            </div>
          </div>
      </a>
        </div>
      @endforeach
    </div>
<!-- komunitas blok end -->


<!-- Event blok -->
<div class="row mb-3">
      <div class="col-md-12">
        <div class="alert alert-danger" style="font-size: 15px; background-color: floralwhite;">
            Hasil Pencarian Event..
        </div>
      </div>
    </div>
<div class="row">
      @foreach($event as $data)
      <div class="col-md-4 mb-4 d-flex">
        <div class="card card-shadow">

          <a href="{{ route('frontend.event_detail', $data->id)}}">
            <img class="card-img-top lazyloaded" src="{{asset('/img/poster_event/'.$data->poster)}}" data-src="" alt="" width="600" height="400" >
          </a>

          <div class="card-body" style="width: 20rem; padding-bottom: 4px;">
            <h5 class="card-title">
              <a class="text-dark" href="#" style=" font-size: 11px; font-family: Century Gothic; color: grey !important;"> E V E N T</a><br/>

              <a class="text-dark" href="{{ route('frontend.event_detail', $data->id)}}">{{ $data->title }}</a>
              <br><br>

              <div class="row">
                <div class="col-md-10">
                    <div class="event-company" style="color: grey; font-size: 15px; color: darkturquoise;">
                    <span class="fa fa-calendar"></span>&nbsp;&nbsp;{{ $data->date }}</div>
                    <div class="event-location" style="color: grey; font-size: 15px; margin-left: 3px;">
                    <span class="fa fa-map-marker"></span>&nbsp;&nbsp;{{ $data->address }}</div>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('frontend.event_detail', $data->id)}}" class="btn btn-outline-primary btn-sm" data-action="event-item" data-position="home-event" data-id="#" style="float: right;">Lihat Detail</a>    
                </div>
              </div>
              
            </h5>
          </div>

        </div>
      </div>

      @endforeach
    </div>
<!-- event blok end -->
</div>

  </div>
</article>

<!-- pagination -->
<div class="container mb-5">
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      {{$artikel->links()}}
    </ul>
  </nav>
</div>

@endsection