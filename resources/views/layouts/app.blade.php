<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/app.js"></script>
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/b29d21305e.js" crossorigin="anonymous"></script>
</head>
<body>
      @include('inc.header')
      
      @if(Request::is('/'))
      @include('inc.hero')
      @endif
      <div class="container mt-5"></div>
      @include('inc.messages')
     <div class="container">
         <div class="row">
             <div class='col-6'>
                 @yield('content')
             </div>
                 <div class='col-5'>
                    @yield('aside-content')
                 
             </div>
         </div>

      </div>
      <div class="container mt-5"></div>
      @include('inc.footer')

</body>
</html>