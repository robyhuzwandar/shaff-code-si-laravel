@extends('frontend.index')
@section('content')
      
      <div class="jumbotron jumbotron-fluid text-black" style="background-color: lightblue;">
      <div class="container">
        <div class="row">
          <div class="col">
              <h1 class="display-4"><b>Shaff Code</b></h1>
              <p class="lead">Sebuah Wadah Untuk menampung barisan antek antek seputar pemrograman</p>
          </div>
        </div>
      </div>
  </div>

<article class="card-post" >
  <div class="container">
    <!-- <div class="row mb-3">
      <div class="col-md-12">
        <div class="alert alert-danger" style="font-size: 15px;">
            <a href="" target="blank" ><b>@shaffcode</b> </a> Akan Mengadakan <i>Event & Pendaftaran Anggota Baru (Soon)</i> sampai waktu yang tidak ditentukan
            &nbsp;
            <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="pengumuman">
            Detail</button>
        </div>
      </div>
    </div> -->


<div style="margin-left: 800px; ">
    <form class="form-inline my-2 my-lg-0" action="{{route('frontend.pencarian_all')}}">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary" my-2 my-sm-0 type="submit">Search</button>
    </form>
</div>
  <br/>


<!-- artikel -->
  <div class="row">
  @foreach($artikel as $data)
         <div class="col-md-4 mb-4 d-flex">
        <div class="card card-shadow">

        <a href="{{route('frontend.artikel_detail', $data->id)}}">
        <img class="card-img-top lazyloaded" src="{{url('/img/cover_artikel/'.$data->cover)}}" data-src="img/hh.jpg" alt="How to Install Sublime Text 3" width="600" height="170" >
        </a>

        <div class="card-body">
          <h5 class="card-title">{{$data->title}}</h5>
        </div>
      </div>
    </div>
@endforeach


  </div>
</div>
</article>
<br/>


<!-- pagination -->
<div class="container mb-5">
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center">
        {{$artikel->links()}}
      </ul>
    </nav>
</div>

@endsection

