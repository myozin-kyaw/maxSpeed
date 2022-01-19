<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        maxSpeed
    </title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3cf76f0fbf.js" crossorigin="anonymous"></script>
    <!-- index.css -->
    <link rel="stylesheet" href="{{url('css/project.css')}}">
</head>

    <header class="px-5 py-5" style="width:100%;">

        <nav class="navbar navbar-expand-lg px-5 py-3 navbar-dark bg-dark fixed-top navigation">
            <div class="container-fluid">
                <a class="logo me-2" href="/"><span>max</span>Speed</a>
                <a href="/" class="btn">Back</a>
            </div>
        </nav>

        <h2 class="text-center py-5">Your Search Item ...</h2>

        <div class="row row-cols-1 row-cols-md-2 g-4">

            @forelse($items as $item)

                <div class="col">
                    <div class="card" style="height: 28em;width: auto;">
                        <img style="height:18em;width: auto" src="{{url('/images/vehicles/' . $item->image)}}" class="card-img-top m-3" alt="{{$item->brand | $item->model}}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->brand }} | {{ $item->model }}</h5>
                            <p class="card-text">{{$item->speed}}</p>
                            <a href="" class="btn">More</a>
                        </div>
                    </div>
                </div>
                
            @empty

                <h3 class="my-5 text-center text-danger">Not found ... </h3>
                
            @endforelse

        </div>

    </header>

<footer class="container-fluid footer px-5 py-5">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 pb-5">
        
        <div class="col our-branches">
            <h3>Our Branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> JAPAN </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> China </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> MYANMAR </a>
        </div>

        <div class="col contact-info">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone-alt"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone-alt"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> example@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Yangon, Myanmar - 11011 </a>
        </div>

        <div class="col social-info">
            <h3>Social Info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
        </div>

    </div>

    <div class="credit text-center pt-5"> 	&copy; Created by Nano-Silent - 2022  </div>

</footer>

<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{url('js/project.js')}}"></script>

</body>
</html>