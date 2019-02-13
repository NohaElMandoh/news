<!DOCTYPE html>
<html>
<head>
  <title>News19</title>
  {{-- Bootstrap --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-3/css/bootstrap.min.css') }}" />
  {{-- Main Css --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
</head>
<body>
  <header>
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/news') }}">News19</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/news') }}">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
          <ul class="dropdown-menu">
            @foreach($categories as $c)
              <li><a href="{{ url('news/category/'.$c->cat_id) }}">{{ $c->cat_title }}</a></li>
            @endforeach
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </header>

  @yield('content')

<footer class="container margin-top20">
  <p class="text-center">All Right Reserved. Copyright 2018</p>
</footer>

  {{-- Jquery Script --}}
  <script type="text/javascript" src="{{ asset('lib/jquery-3.3.1.min.js') }}"></script>
  {{-- Bootstrap 3 Script --}}
  <script type="text/javascript" src="{{ asset('lib/bootstrap-3/js/bootstrap.min.js') }}"></script>
</body>
</html>