
    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="index.html"><h2>R <em>t</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('acueil') }}">Accueil
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="products.html">reservation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('chatify') }}">Message</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                    href="{{route('logout') }}" onclick="event.preventDefault();document.
                    getElementById('logout-form').submit();">Logout</a>
                    <form action="{{route('logout')}}" id="logout-form" method="POST">@csrf</form>
		                  </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
