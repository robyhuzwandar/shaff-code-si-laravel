<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="background-color: #FFFFFF  !important;" >
<!--  #008080
  #3b5998 -->

  <div class="container-fluid">
    


   <a class="navbar-brand" href="/" style="font-family: verdana; color: black; font-size: 27px;"> 
    <img src="{{url('/logo2.png')}}" 
    class="d-inline-block align-top" alt="Logo" width="115px" height="40"></a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item">
          <a class="nav-link" href="/" style="color: grey !important;">Beranda <span class="sr-only">(current)</span></a>
          
        </li>


        <li class="nav-item">
          <a class="nav-link" href="/artikelmain">Artikel</a>
        </li>

    <!--   <li class="nav-item">
         <a  class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Gallery</a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-left: 450px; ">
            <a href="#" class="dropdown-item" target="_blank">Seminar</a>
            <a href="#" class="dropdown-item">Workshop</a>
            <a href="gal_techtalk.php" class="dropdown-item">Tech Talk</a>
            <a href="gal_openhouse.php" class="dropdown-item">Open House</a>
          </div>
        </li> -->

      <!-- <li class="nav-item">
         <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Profil</a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-left: 524px;">
            <a href="#" class="dropdown-item" target="_blank">Visi & Misi</a>
            <a href="#" class="dropdown-item">Struktur Organisasi</a>
            <a href="#" class="dropdown-item">Mentor</a>
          </div>
        </li> -->


        <li class="nav-item">
          <a class="nav-link " href="/eventmain">Event</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/communitymain">Komunitas</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/tentang">Tentang</a>
        </li>

      </ul>

      <form class="form-inline my-2 my-lg-0">
        
        <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
        @if (Auth::check())
        <div class="pull-right">
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
          Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </div>
      @else
      <a href="/login"class="btn btn-outline-light btn-lg my-2 my-sm-0"  type="submit" style="font-size: 15px; color: grey; border-color: grey;"><b>LOGIN</b></a> 
      &nbsp;&nbsp;  
      <a href="Signup.php"class="btn btn-outline-light btn-lg my-2 my-sm-0" type="submit" style="font-size: 15px; background-color: #20B2AA; color: white;" ><b>REGISTER</b></a>
      @endif

    </form>

  </div>
</div>
</nav>