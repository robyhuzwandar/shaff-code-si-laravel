@extends('frontend.index')
@section('content')

<article class="card-post" >
  <div class="container">
    <br/>
    <div style="margin-left: 800px; ">
      <form class="form-inline my-2 my-lg-0" action="{{route('frontend.pencarian_community')}}">
        <input name="q" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" my-2 my-sm-0 type="submit">Search</button>
      </form>
    </div>
    <br/>


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
  </div>
</article>

<!-- pagination -->
<div class="container mb-5">
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      {{$community->links()}}
    </ul>
  </nav>
</div>

@endsection