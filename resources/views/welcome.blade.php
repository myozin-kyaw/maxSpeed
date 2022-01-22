<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maxSpeed</title>
    <!-- Swiper-bundle.min.css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3cf76f0fbf.js" crossorigin="anonymous"></script>
    <!-- index.css -->
    <link rel="stylesheet" href="{{url('css/project.css')}}">
    <style type="text/css">
        header li form button.logout {
            border: none;
            color: #000;
            background-color: #fff;
        }
        header li form button.logout:hover {
            background-color: #eee;
            border: none;
        }
        .dFlexLR {
            display: flex;
            gap: 10em;
        }
    </style>
</head>
<body onload="slider()">
    <!-- header -->
    <header class="header" id="header">

        <div class="slider">
            <img src="{{ url('projectImage/mainImg1.jpg') }}" id="slider_img" alt="header_img">
        </div>

        <div class="overlay">

            <nav class="navbar navbar-expand-lg px-5 py-3 navbar-dark bg-dark fixed-top navigation">

                <div class="container-fluid">

                    <a class="logo me-2" href="{{ route('index') }}"><span>max</span>Speed</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vehicles
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item scroll-popular-vehicle" href="#"><span><i class="fab fa-product-hunt"></i></span> Popular Vehicles </a></li>
                                    <li><a class="dropdown-item scroll-feature" href="#"><span><i class="fas fa-car"></i></span> Featured </a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link scroll-Services" href="#">Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link scroll-reviews" href="#">Review</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link scroll-Contact" href="#">Contact</a>
                            </li>

                            @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" id="my_interested" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><span><i class="fas fa-cart-arrow-down"></i></span><span>{{ count($carts) }}</span></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/vehicle') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                                </a>
                                @if (Auth::user()->is_admin === 1) 
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('vehicle.index') }}"><span><i class="fas fa-user"></i></span> Admin Panel </a></li>
                                    <li class="dropdown-item">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="logout" type="submit"><span><i class="fas fa-sign-out-alt"></i></span> Logout</button>
                                        </form>
                                    </li>
                                </ul>
                                @else
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li class="dropdown-item">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button class="logout" type="submit"><span><i class="fas fa-sign-out-alt"></i></span> Logout</button>
                                        </form>
                                    </li>
                                </ul>
                                @endif
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @endif
                        </ul>

                        <form class="d-flex" action="{{ url('search') }}" method="GET">
                            <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>

                    </div>

                </div>

            </nav>
            <!-- Interested Item -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

                <div class="offcanvas-header">

                    <div class="dFlexLR">
                        <h4 id="offcanvasRightLabel"><i class="fas fa-cart-arrow-down"></i> Cart Item</h4>
                        <form action="">
                            <button class="btn"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>

                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                </div>
                <div class="offcanvas-body" id="cartItemGroup">

                    @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show mx-3" role="alert">
                        <strong>Success!</strong> {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="offcanvas-body" id="cartContainer">

                        @if(!$carts->isEmpty())
                            @foreach($carts as $cart)
                            <div id="cartItemGroup" class="card mb-3">
                                <div id="cartItem" class="row g-0">
                                    <div id="cartImg" class="col-md-4">
                                        <img id="cartSrc" src="{{ url('/images/vehicles/' . $cart->image) }}" class="img-fluid rounded-start my-5" alt="{{ $cart->brand }} | {{ $cart->model }}">
                                    </div>
                                    <div id="cartTextGroup" class="col-md-8 my-3">
                                        <div id="cartText" class="card-body">
                                            <h5 class="card-title">{{ $cart->brand }} | {{ $cart->model }}</h5>
                                            <p class="card-text">{{ $cart->price }}</p>
                                            <div style="display:flex;gap:10px;">
                                                <a href="{{ url('vehicle_show', $cart->vehicle_id) }}" class="btn">More</a>
                                                <form action="{{ route('cart.destroy', [$cart->id]) }}" method="GET">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn" type="submit">Remove</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <h5>No item yet !</h5>
                        @endif

                    </div>

                </div>

            </div>
            <!-- Header Title -->
            <div class="position-absolute top-50 start-50 translate-middle main-title">

                <h1 class="text-center">FIND YOUR CAR</h1>
                <div class="text-center view-btn">
                    <a class="btn" id="view_more">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        View more
                    </a>
                </div>

            </div>

        </div>

    </header>

    <section class="vehicles px-5 mt-5" id="vehicles">

        <h2 class="heading text-center mb-5"> Popular <span>Vehicles</span> </h2>
    
        <div class="swiper vehicles-slider">
    
            <div class="swiper-wrapper">
    
                @foreach($vehicles as $vehicle)
                <div class="swiper-slide box">
                    <img src="{{ url('/images/vehicles/' . $vehicle->image) }}" alt="{{ $vehicle->brand }} | {{ $vehicle->model }}">
                    <div class="content">
                        <h3 id="">{{ $vehicle->brand }} - {{ $vehicle->model }}</h3>
                        <div class="price"> <span>Price : </span>  {{ $vehicle->price }}</div>
                        <div style="display:flex;justify-content:center;">
                            <a href="{{ url('vehicle_show', $vehicle->id) }}" class="btn">Check out</a>
                            <div class="mx-2"></div>
                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                                <input type="hidden" name="vehicle_brand" value="{{ $vehicle->brand }}">
                                <input type="hidden" name="vehicle_model" value="{{ $vehicle->model }}">
                                <input type="hidden" name="vehicle_price" value="{{ $vehicle->price }}">
                                <input type="hidden" name="vehicle_image" value="{{ $vehicle->image }}">
                                <button class="btn" type="submit">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
    
            </div>
    
            <div class="swiper-pagination"></div>
    
        </div>
    
    </section>

    <!-- Featured Car -->
    <section class="featured px-5" id="featured">
        
        <h2 class="heading text-center mb-5"><span>Featured</span> cars </h2>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper mb-5">

                @foreach($features_one as $feature)
                <div class="swiper-slide box">
                    <div class="card" style="width: 24em;height: 26em;overflow: hidden;">
                        <img src="{{ url('/images/vehicles/' . $feature->image) }}" style="width:auto;height:15em;padding-top:1em" alt="{{ $feature->brand }} | {{ $feature->model }}">
                        <div class="card-body" style="display:flex;justify-content:flex-end;flex-direction:column;">
                          <h5 class="card-title cartBM">{{ $feature->brand }} - {{ $feature->model }}</h5>
                          <p class="card-text cart-price">Price - {{$feature->price}}</p>
                          <div style="display:flex;gap:10px;">
                            <a href="{{ url('vehicle_show', $feature->id) }}" class="btn">More</a>
                            
                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                <input type="hidden" name="vehicle_id" value="{{ $feature->id }}">
                                <input type="hidden" name="vehicle_brand" value="{{ $feature->brand }}">
                                <input type="hidden" name="vehicle_model" value="{{ $feature->model }}">
                                <input type="hidden" name="vehicle_price" value="{{ $feature->price }}">
                                <input type="hidden" name="vehicle_image" value="{{ $feature->image }}">
                                <button class="btn" type="submit">Add to cart</button>
                            </form>

                          </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
     
            <div class="swiper-pagination"></div>
     
        </div>

         <div class="swiper featured-slider">

            <div class="swiper-wrapper mb-5">

                @foreach($features_two as $feature)
                <div class="swiper-slide box">
                <div class="card" style="width: 24em;height: 26em;overflow: hidden;">
                        <img src="{{ url('/images/vehicles/' . $feature->image) }}" style="width:auto;height:15em;padding-top:1em" alt="{{ $feature->brand }} | {{ $feature->model }}">
                        <div class="card-body" style="display:flex;justify-content:flex-end;flex-direction:column;">
                          <h5 class="card-title cartBM">{{ $feature->brand }} - {{ $feature->model }}</h5>
                          <p class="card-text cart-price">Price - {{ $feature->price }}</p>
                          <div style="display:flex;gap:10px;">
                            <a href="{{ url('vehicle_show', $feature->id) }}" class="btn" style="">More</a>
                            
                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                <input type="hidden" name="vehicle_id" value="{{ $feature->id }}">
                                <input type="hidden" name="vehicle_brand" value="{{ $feature->brand }}">
                                <input type="hidden" name="vehicle_model" value="{{ $feature->model }}">
                                <input type="hidden" name="vehicle_price" value="{{ $feature->price }}">
                                <input type="hidden" name="vehicle_image" value="{{ $feature->image }}">
                                <button class="btn" type="submit">Add to cart</button>
                            </form>

                          </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
     
            <div class="swiper-pagination"></div>
     
         </div>
        
    </section>

    <!-- Section: Service -->
    <section class="container-fluid px-5 py-5 text-warning services" id="services">

        <h2 class="heading text-center mb-5"> Our <span>Services</span> </h2>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-key"></i>
                <h3>Car Selling</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn" id="service_carSelling"> Read more</a>
            </div>

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>Car Rental</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn" id="service_carRental"> Read more</a>
            </div>

            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>Part Repairs</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn" id="service_partRepair"> Read more</a>
            </div>

            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>Car Insurance</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn" id="service_carInsurance"> Read more</a>
            </div>

            <div class="box">
                <i class="fas fa-car-battery"></i>
                <h3>Battery Replacement</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn" id="service_battery"> Read more</a>
            </div>

            <div class="box">
                <i class="fas fa-gas-pump"></i>
                <h3>Oil Change</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn" id="service_oilChange"> Read more</a>
            </div>

            <div class="box">
                <i class="fas fa-cogs"></i>
                <h3>Car Accessories</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn" id="service_accessory"> Read more</a>
            </div>

            <div class="box">
                <i class="fas fa-user-lock"></i>
                <h3>Membership Services</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn" id="service_member"> Read more</a>
            </div>

            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>24/7 Support</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
                <a href="#" class="btn" id="service_support"> Read more</a>
            </div>

        </div>
            
    </section>

    <section class="contact px-5" id="contact">

        <h2 class="heading text-center"><span>Contact</span> us</h2>
    
        <div class="row px-4">
    
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.7613160528203!2d96.12903241418924!3d16.838192988409883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1950c3df8866d%3A0x2968075ed5dda0ef!2sCar%20Showroom!5e0!3m2!1sen!2ssg!4v1640575467618!5m2!1sen!2ssg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
            <form action="" method="POST">
                <h3>Get In Touch</h3>
                <input type="text" placeholder="Your name" class="box" name="your_name">
                <input type="email" placeholder="Your email" class="box" name="your_email">
                <input type="tel" placeholder="Subject" class="box" name="subject">
                <textarea placeholder="Your message" name="your_message" class="box" cols="30" rows="4"></textarea>
                <button type="submit" name="submit" class="btn">Send message</button>
            </form>
    
        </div>
    
    </section>

    <section class="reviews px-5 pt-5" id="reviews">

        <h2 class="heading text-center mb-5"> Client's <span>review</span> </h2>
    
        <div class="swiper review-slider">
    
            <div class="swiper-wrapper">
    
                @foreach($reviews as $review)
                <div class="swiper-slide box">
                    <img src="{{url('/images/customerImage/' . $review->customer_image)}}" alt="{{ $review->customer_name }}">
                    <div class="content">
                        <h3>{{ $review->customer_name }}</h3>
                        <p>{{ substr($review->customer_description,0, 70) }} ...</p>
                        <a href="{{ url('review_show', $review->id) }}" class="btn">Read more</a>
                    </div>
                </div>
                @endforeach
    
            </div>
    
            <div class="swiper-pagination"></div>
    
        </div>
    
    </section>

    <section class="subscribe py-5">
    
        <h2>Subscribe For Latest Updates</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, suscipit.</p>
    
       <form action="#" method="POST">
            <input type="email" name="subscribe_email" placeholder="Enter your email">
            <input type="submit" name="subscribe_submit" value="subscribe">
       </form>
    
    </section>

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