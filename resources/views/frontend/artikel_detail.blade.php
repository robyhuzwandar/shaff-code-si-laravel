 @extends('frontend.index')
 @section('content')

 <div style="width: 1000px; margin-left: 165px;" >
   <nav aria-label="breadcrumb" >
    <ol class="breadcrumb" >
      <li class="breadcrumb-item"><a href="{{route('frontend.artikel_main')}}">Artikel /&nbsp;</a><li>
        <li class="breadcrumb-item active" aria-current="page">{{$artikel->title}}</li>
      </ol>

      <div class="content-author">
        <div class="media">
          <div class="media-left">
            <div class="content-avatar">
              @if($artikel->user_id === $user->id)
              <img class="rounded-circle" src="{{url('/img/photo_member/'.$user->photo)}}" alt="Generic placeholder image" width="110" height="110">
              @endif
            </div>
          </div>
          
          <div class="media-body" style="margin-top: 20px; margin-left: 15px;">
            <div class="content-name"><span class="content-authorname official-author"><a href="#">
              {{ $user->name}}
            </a></span></div>
            <div class="content-position">
              {{ $user->about}}
            </div>
            <div class="content-date">{{$artikel->created_at}}</div>
          </div>
        </div><br/>
        <div>
         <h2>{{$artikel->title}}</h2><br/>
         <img class="" src="{{url('/img/cover_artikel/'.$artikel->cover)}}" alt="Generic placeholder image" width=720 height="350">
         <br/>
         <br/>
         {!! $artikel->body !!}
       </div>
     </div>

   </nav>
 </div>
 @endsection