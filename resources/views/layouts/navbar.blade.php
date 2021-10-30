<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous" type="text/javascript"></script>
    <title>Laravel</title>
    <link href="../css/ui.css" rel="stylesheet" type="text/css" />
    <link href="../css/responsive.css" rel="stylesheet" />
</head>

<body class="antialiased" data-spy="scroll" data-offset="300">
    <header class="section-header">
        <nav class="navbar navbar-main navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{asset('images/OA yellow logo.svg')}}" class="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav3" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav3">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link px-4" href="#"> Home </a></li>
                        <li class="nav-item"><a class="nav-link px-4" href="{{route('about-us')}}"> About OA Inverters </a></li>
                        <li class="nav-item ">
                            <a class="nav-link px-4" href="{{route('services')}}" > Services We Offer</a>

                        </li>
                        <li class="nav-item px-4"><a class="nav-link" href="{{route('faqs')}}"> FAQs </a></li>
                    </ul>
                    <button type="button" class="ml-md-3 navbar-button"><b>TALK TO US.</b></button>

                </div> <!-- navbar-collapse.// -->
            </div> <!-- container.// -->
        </nav>
    </header>
    
    @yield("contents")
    <!-- section-header.// -->
    <!--<section class="section-content">
    
    <img src="{{asset('images/OA hero section photo 1.png')}}" class="w-100 section-1">
    <img src="{{asset('images/OA hero sectoin 2.png')}}" class="w-100 section-2">
             container .// 
    </section>-->
	
    <footer class="section-footer">
	<div class="container">
		<section class="footer-top  padding-y">
			<div class="row">
				<aside class="col-md-4 col-12">
					<article class="mr-md-4">
						<h5 class="title">Contact us</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. </p>
						<ul class="list-icon">
							<li> <i class="icon fa fa-map-marker"> </i>542 Fake Street, Cityname 10021 Netheerlends </li>
							<li> <i class="icon fa fa-envelope"> </i> info@example.com</li>
							<li> <i class="icon fa fa-phone"> </i> (800) 060-0730, (800) 060-0730</li>
							<li> <i class="icon fa fa-clock"> </i>Mon-Sat 10:00pm - 7:00pm</li>
						</ul>
					</article>
				</aside>
				<aside class="col-md col-6">
					<h5 class="title">Navigation</h5>
					<ul class="list-unstyled">
						<li> <a href="#">About us</a></li>
						<li> <a href="#">Services We Offer</a></li>
					
						<li> <a href="#">FAQS</a></li>
						<li> <a href="#">Sitemap</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h5 class="title">My Account</h5>
					<ul class="list-unstyled">
						<li> <a href="#">Contact us</a></li>
						<li> <a href="#">Admin Login</a></li>
						<li> <a href="#">Admin Register</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h5 class="title">Social</h5>
					<ul class="list-unstyled">
						<li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
						<li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
						<li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
					</ul>
				
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-bottom test row">
			<div class="col-md-6">
				<p class="mb-0">
					<a href="">Terms and Conditions</a> | 
					<a href="">Privacy</a> | 
					<a href="">Cookies</a>
				</p>
			</div>
			<div class="col-md-6 text-md-right">
				<i class="fab fa-lg fa-cc-visa"></i>
				<i class="fab fa-lg fa-cc-paypal"></i>
				<i class="fab fa-lg fa-cc-mastercard"></i>
			</div>
		</section>
	</div><!-- //container -->
</footer>
<div class = "loader-wrapper">
<div class="loader"></div>
</div>

<script src = "{{asset('js/main.js')}}" type="text/javascript" ></script>
	<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.15.3/js/v4-shims.js"></script>
 
</body>

</html>