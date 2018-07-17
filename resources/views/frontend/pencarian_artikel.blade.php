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