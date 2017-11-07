<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Title</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    @include('inc.navbar')
    <div class="container">
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
          @include('inc.messages')
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>
    </div>
    <footer class="text-center">
      <p>Copyright 2017 &copy; Brd</p>
    </footer>
    @section('javascript')
      <script type="text/javascript" src="/js/app.js"></script>
      @show

  </body>
</html>
