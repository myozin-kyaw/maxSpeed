<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maxSpeed</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3cf76f0fbf.js" crossorigin="anonymous"></script>
    <!-- index.css -->
    <link rel="stylesheet" href="{{ url('css/project.css') }}">
</head>
    <header class="px-5 mb-5" style="width:100%;">

        <nav class="navbar navbar-expand-lg px-5 py-3 navbar-dark bg-dark fixed-top navigation">
            <div class="container-fluid">
                <a class="logo me-2" href="/"><span>max</span>Speed</a>
                <a href="/" class="btn">Back</a>
            </div>
        </nav>

    </header>
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
                <a href="https://www.facebook.com/Tnelis10/" target="_blank"> <i class="fab fa-facebook-f"></i> Facebook </a>
                <a href="https://t.me/Noahs301/" target="_blank"> <i class="fab fa-telegram"></i> Telegram </a>
                <a href="https://www.instagram.com/myozin301/" target="_blank"> <i class="fab fa-instagram"></i> Instagram </a>
            </div>

        </div>

        <div class="credit text-center pt-5"> 	&copy; Created by Nano-Silent - 2022  </div>

    </footer>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ url('js/service.js') }}"></script>
</body>
</html>
