<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
    <script src="{{asset('js\funciones.js')}}"></script>
    @yield('adicion')

    <title>Characters & Dragons - @yield('titulo')</title>
  </head>
  <body>
     @section('header')
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" href="{{url('partidas')}}"><img width="40px" heigth="50px" src="{{asset('images\poligonal.png')}}"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('partidas')}}"><h1 class="text-danger">Characters & Dragons</h1></a>
              </li>
            </ul>
     @show

     @yield('navbar')

     @yield('dados')
   
    <div class="container">
        @yield('content')
    </div>
     @section('footer')
      <div class="card-footer text-muted text-center">
        Esta es una página web creada sin ánimo de lucro con el simple motivo de estudio sobre páginas web.
      </div>  
      @show

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>