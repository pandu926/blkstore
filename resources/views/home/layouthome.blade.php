<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Bootstrap CSS -->
    @yield('css')
    <link rel="stylesheet" href="http://localhost/blkstore/resources/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/blkstore/resources/css/home/home.css">
    <!-- swipper css -->
    
    
    <!-- install font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito+Sans&display=swap" rel="stylesheet">
    
    <title>Hello, world!</title>
  </head>
  <body>
    <nav>
      <div class="container">
        <div class="row">
          <div class="col-2"><a href="#">BLKSTORE</a></div>
          <div class="col-7">
            <input type="text" name="pencarian" id="pencarian">
          </div>
          <div class="col-2">
            <button><a href="#">login</a></button>
            
          </div>
        </div>
      </div>
    </nav>

    @yield('konten')

    <!-- Optional JavaScript -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    @yield('javascript')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>