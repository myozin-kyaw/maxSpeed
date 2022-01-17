<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{$featured->brand}} | {{$featured->model}}
    </title>
    <!-- Swiper-bundle.min.css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3cf76f0fbf.js" crossorigin="anonymous"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
                <img style="width:80%;height:auto;margin-top:1.5em" src="{{url('/images/vehicles/' . $featured->image)}}" alt="{{$featured->brand}} | {{$featured->model}}">
            </div>
            <div style="width: 50%;">
                <table id="example2" class="table table-bordered table-hover" style="width: 100%;">
                    <tbody>
                        <tr>
                            <th>Brand</th>
                            <td>{{$featured->brand}}</td>
                        </tr>
                        <tr>
                            <th>Model</th>
                            <td>{{$featured->model}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{$featured->price}}</td>
                        </tr>
                        <tr>
                            <th>Production Year</th>
                            <td>{{$featured->production_year}}</td>
                        </tr><tr>
                            <th>Speed</th>
                            <td>{{$featured->speed}}</td>
                        </tr>
                        <tr>
                            <th>Transmission Type</th>
                            <td>{{$featured->transmission->transmission_name}}</td>
                        </tr>
                        <tr>
                            <th>Power Type</th>
                            <td>{{$featured->power->power_name}}</td>
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



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{url('js/project.js')}}"></script>

</body>
</html>