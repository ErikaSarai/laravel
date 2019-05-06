<html>

  <head>
  
      <title>Laravel5.6 - @yield('title')</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head> 
  
     <body>

<nav class="navbar navbar-dark bg-primary">  
<a href="{{url('trainers/create')}}" class="navbar-brand"> Pruebas con Laravel 5.6</a>

</nav>

     <div class="container">

        @yield('content')

     </div>
     
     </body>

</html>