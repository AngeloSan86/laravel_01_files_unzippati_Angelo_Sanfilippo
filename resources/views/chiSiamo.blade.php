<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">MioSito</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">Chi Siamo?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('services')}}">I nostri servizi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <div class="container-fluid">
        <div class="row h-75 align-items-center justify-content-center mt-5">

            <div class="col-12">

                <h1 class="text-center">Chi Siamo?</h1>

            </div>

        </div>
    </div>

    <div class="row justify-content-center align-items-center">
 

          @foreach ($members as $member)
          <div class="col-12 col-md-3 py-5">
            <div class="card mx-auto" style="width: 18rem;">
              <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine casuale">
              <div class="card-body">
                <h5 class="card-title">{{$member['role']}}</h5>
                <p class="card-text">{{$member['name']}}.</p>
                <a href="{{route('details', ['id'=>$member['id']])}}" class="btn btn-primary">More info</a>
              </div>
            </div>
          </div>
          @endforeach




    </div>

    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>