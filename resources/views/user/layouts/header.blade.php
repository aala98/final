<nav>
<header>
<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left">
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><i class="fas fa-phone rgtspace-5"></i> {{ Auth::user()->tel }}</li>
          <li><i class="far fa-envelope rgtspace-5"></i> {{ Auth::user()->email }}</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">
          <li><a href="{{route('logout') }}" onclick="event.preventDefault();document.
              getElementById('logout-form').submit();"" title="Login"><form action="{{route('logout')}}" id="logout-form" method="POST">@csrf</form>
              <i class="fas fa-sign-in-alt"></i></a></li>


          </li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
    </div>
  </div>

  <div class="bgded" style=" background-image:url('user/assets/images/demo/backgrounds/01.png') ">
    <div class="wrapper row1">
      <header id="header" class="hoc clear">
        <div id="logo" class="fl_left">
          <h1><a href="index.html">PL</a></h1>
          <!-- ################################################################################################ -->
        </div>
        <nav id="mainav" class="fl_right">
          <!-- ################################################################################################ -->
          <ul class="clear">
            <li class="active"><a href="index.html">Accueil</a></li>
            <li><a class="drop" href="#">Info</a>
              <ul>
                <li><a href="pages/gallery.html">Gallery</a></li>

              </ul>
            </li>

            <li><a href="#">Reservation</a></li>
            <li><a href="#">Message</a></li>
          </ul>
          <!-- ################################################################################################ -->
        </nav>
      </header>
