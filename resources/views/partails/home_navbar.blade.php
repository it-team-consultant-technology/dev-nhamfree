
<!-- <nav class="" style="background-color: #563d7c;"> -->
  <nav class="navbar" style="background-color: #563d7c;     padding: 0px;">
  <div class="container">
    <a class="navbar-brand" href="#"></a>
  <ul class="nav nav-pills">
    <li class="nav-item">

      <a class="nav-link" href="#fat">@fat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#mdo">@mdo</a>

     
    </li>
   
    <li class=" dropdown ">
      <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-lg-right">
          <!-- <div class="dropdown-menu"> -->
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>    
            @if(!Auth::check()))
            <div class="col">

              <a class=" pull-left" href="#" >Register</a>
              <a class=" pull-right" href="#" >Login</a>

              <a class=" pull-left" href="{{route('register')}}" >Register</a>
              <a class=" pull-right" href="{{route('login')}}" >Login</a>
            </div>
            @else
              <a class="dropdown-item" href="#">View Profile</a>
            @endif
  <!-- </div> -->
        </div>
      </div>
    </li>
  </ul>
  </div>
</nav>


<div style="width:100%;height: 76px;position: relative;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light " style="border-bottom: 1px solid #e8e8e8;">
    <a class="navbar-brand" href="/"><img src="https://www.gstatic.com/android/market_images/web/play_prism_hlock_2x.png" width="183px" height="39px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <form class="form-inline justify-content-center col-8">
        

        <div class="input-group col-10">
          
          <input class="form-control " type="search" id="inputGroupSelect04" aria-label="Example select with button addon">
          <div class="input-group-append">
            <button class="btn btn-success" type="submit">Search</button>
          </div>
        </div>
      </form>
    </div>
  </nav>
</div>