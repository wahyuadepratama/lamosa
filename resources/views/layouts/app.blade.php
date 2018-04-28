<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}"  type="image/x-icon">
    <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css') }}" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="{{URL::asset('css/style.css') }}" media="screen" title="no title" charset="utf-8">
    <script src="{{URL::asset('js/jquery-3.0.0.js') }}" charset="utf-8"></script>
    <script src="{{URL::asset('js/popper.min.js') }}" charset="utf-8"></script>
    <script src="{{URL::asset('bootstrap/js/bootstrap.min.js') }}" charset="utf-8"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Leaflet JS Sisip Script -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
    <!-- Sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Leaflet Routing -->

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

  </head>
  <body>

    @include('layouts.header')

    @yield('content')
<script src="{{URL::asset('js/navbar-change.js')}}" charset="utf-8"></script>
  </body>
</html>
