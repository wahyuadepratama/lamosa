<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="padding-left:100px;padding-right:100px;background-color:green">
  <a class="navbar-brand" href="#">
    <img src="{{ URL::asset('img/logo-lamosa2.png') }}" width="150" height="60" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">Home</a>
      </li>

      <li class="nav-item {{ Request::is('lokasi') ? 'active' : '' }}">
        <a class="nav-link" href="/lokasi">Lokasi</a>
      </li>

      <li class="nav-item {{ Request::is('bank-sampah') ? 'active' : '' }}">
        <a class="nav-link" href="/bank-sampah">Bank Sampah</a>
      </li>
      <li class="nav-item {{ Request::is('statistik') ? 'active' : '' }}">
        <a class="nav-link" href="/statistik">Statistik</a>
      </li>
      @if(Auth::guest())
      <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
          <a class="nav-link" href="/login">Login</a>
      </li>
      @endif
      @if(!Auth::guest())
      <li>
          <a class="nav-link" href="/profile">Profile</a>
      </li>
      <li>
          <a class="nav-link" href="/logout">Logout</a>
      </li>
      @endif
    </ul>

  </div>
</nav>
