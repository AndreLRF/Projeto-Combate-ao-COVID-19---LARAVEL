<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COVID ARARAS</title>
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> -->
  
  <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    @yield('main')
  </div>
  <!-- <script src="{{ asset('js/app.js') }}" type="text/js"></script>S -->
  <script src="{{ asset('site/jquery.js') }}"></script>
  <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>