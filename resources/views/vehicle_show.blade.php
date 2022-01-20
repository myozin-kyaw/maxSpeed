<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{$vehicle->brand}} | {{$vehicle->model}}
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

        <div style="display:flex;justify-content:space-between;margin-top:5em;">
            <div style="width: 50%;">
                <img style="width:80%;height:auto;margin-top:1.5em" src="{{url('/images/vehicles/' . $vehicle->image)}}" alt="{{$vehicle->brand}} | {{$vehicle->model}}">
            </div>
            <div style="width: 50%;">
                <table id="example2" class="table table-bordered table-hover" style="width: 100%;">
                    <tbody>
                        <tr>
                            <th>Brand</th>
                            <td id="brand">{{$vehicle->brand}}</td>
                        </tr>
                        <tr>
                            <th>Model</th>
                            <td id="model">{{$vehicle->model}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td id="price">{{$vehicle->price}}</td>
                        </tr>
                        <tr>
                            <th>Production Year</th>
                            <td>{{$vehicle->production_year}}</td>
                        </tr><tr>
                            <th>Speed</th>
                            <td>{{$vehicle->speed}}</td>
                        </tr>
                        <tr>
                            <th>Transmission Type</th>
                            <td>{{$vehicle->transmission->transmission_name}}</td>
                        </tr>
                        <tr>
                            <th>Power Type</th>
                            <td>{{$vehicle->power->power_name}}</td>
                        </tr>
                        <tr>
                            <th>-</th>
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    <button class="btn">Order</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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

</body>
</html>