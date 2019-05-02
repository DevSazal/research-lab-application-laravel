 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" href="{{ asset('assets/img/csc.png') }}" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


  <title>@yield('title')Cyber Securtiy Center, DIU | Developed by Appsolic Lab</title>

</head>

<body>
<div class="all-item">
  <header>
    <div class="top-menu">
      <div class="container">
        <nav class="navbar ">
          <div class="menu-left navbar-left">
            <ul class="nav navbar-nav">
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a class="disabled top-pad" id="slash">/</a></li>
              <li><a href="{{ url('/register') }}" class="top-pad">Register</a></li>
            </ul>
          </div>
          <div class="menu-right navbar-right">
            <div class="nav navbar-nav fb-icon" id="fbx">
              <a href=""><i class="fab fa-facebook-f" id="fby"></i></a>
            </div>
            <form class="navbar-form navbar-left">
              <div class="form-group font-13">
                <input type="text" class="" placeholder="Search">
              </div>
              <div class="search-box font-13">
                <i class="fas fa-search"></i>
              </div>
            </form>

          </div>
        </nav>
      </div>
    </div>
    <div class="container">
      <div class="primary-menu1">
        <nav id='cssmenu'>
          <div class="row">
            <div class="col-md-4">
              <div class="logo"><a href="index.html"> <img src="{{ asset('assets/img/logo.png') }}" alt=""> </a></div>
            </div>

            <div class="col-md-8 p-menu" id='cssmenu'>
              <div id="head-mobile"></div>
              <div class="button"></div>
              <ul class="navbar-right">
                <li class="active"><a href="{{ url('/') }}">HOME</a></li>
                <!-- <li><a href="service">SERVICES</a></li> -->
                <li><a href="{{ url('/research') }}">RESEARCH</a></li>
                 <li><a href="{{ url('/training') }}">TRAINING</a>
                      <ul>
                        <li><a href="{{ url('/training') }}">TECHNICAL</a></li>
                        <li><a href="{{ url('/training') }}">VENDOR</a></li>
                      </ul>
                  </li>
                  <li><a href="{{ url('/awareness') }}">AWARENESS</a>
                      <ul>
                        <li><a href="{{ url('/awareness') }}">WORKSHOP</a></li>
                        <li><a href="{{ url('/awareness') }}">SEMINAR</a></li>
                      </ul>
                  </li>
                <!-- <li><a href="#">SCHEDULES</a>
                  <ul>
                    <li><a href="{{ url('/training') }}">TRAINING</a>
                      <ul>
                        <li><a href="{{ url('/training') }}">TECHNICAL</a></li>
                        <li><a href="{{ url('/training') }}">VENDOR</a></li>
                      </ul>
                    </li>
                    <li><a href="{{ url('/awareness') }}">AWARENESS</a>
                      <ul>
                        <li><a href="{{ url('/awareness') }}">WORKSHOP</a></li>
                        <li><a href="{{ url('/awareness') }}">SEMINAR</a></li>
                      </ul>
                    </li>
                    <ul>
                      <li><a href="#">Sub Product</a></li>
                      <li><a href="#">Sub Product</a></li>
                    </ul>
                </li>
              </ul>
              </li> -->
         <!-- <li><a href="news.html">NEWS</a></li> -->
             <!--  <li><a href="innovation">INNOVATION</a></li> -->
              <li><a href="{{ url('/contact') }}">CONTACT</a></li>
              <!-- <li><a href="#">BIO</a>
                  <ul>
                    <li><a href='#'>Product 1</a>
                      <ul>
                        <li><a href='#'>Sub Product</a></li>
                        <li><a href='#'>Sub Product</a>
                          <ul>
                            <li><a href='#'>Sub Product</a></li>
                            <li><a href='#'>Sub Product</a>
                              <ul>
                                <li><a href='#'>Sub Product</a></li>
                                <li><a href='#'>Sub Product</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href='#'>Product 2</a>
                      <ul>
                        <li><a href='#'>Sub Product</a></li>
                        <li><a href='#'>Sub Product</a></li>
                      </ul>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
 <!--Header menu option End -->


 	@yield('content')




  	<footer>
		<div class="container-fluid footer-over pb-12"> 
			<h3 class="text-center">Cyber security centre managed by DIU CSC</h3>
		</div>
		<div class="footer-top pt-20 pb-15"> <!-- footer top start  -->
			<div class="container">
				<div class="col-sm-12 col-md-3"> 
					<h4>Events</h4>
					<ul class="list-style-none">
						<li><a href="#">Convocation </a></li>
						<li><a href="#">Foundation </a></li>
						<li><a href="http://artofliving.social/" target="_blank">Art of Living Parents' Day</a></li>
						<li><a href="http://laptop.daffodilvarsity.edu.bd/" target="_blank">One Student One Laptop</a></li>
						<li><a href="https://daffodilvarsity.edu.bd/page/show_page_detail/daffodil-guest-room-booking" target="_blank"> Daffodil Guest Room Booking</a></li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-3">  
					<h4>Publication</h4>
					<ul class="list-style-none">
						<li><a href="http://newsletter-archive.daffodilvarsity.edu.bd/" target="_blank">Media Coverage</a></li>
						<li><a href="http://newsletter.daffodilvarsity.edu.bd/" target="_blank"> Newsletter</a></li>
						<li><a href="http://dsa.daffodilvarsity.edu.bd/index.php/e-newsletter" target="_blank">e-Newsletter</a></li>
						<li><a href="https://daffodilvarsity.edu.bd/page/show_page_detail/newspaper">Newspaper</a></li>
						<li><a href="http://diupress.com" target="_blank"></i> DIU Press</a></li>               
					</ul>
				</div>
				<div class="col-sm-12 col-md-3">  
					<h4>Research</h4>
					<ul class="list-style-none">
						<li><a href="https://daffodilvarsity.edu.bd/sub/diujst/" target="_blank">DIUJST</a></li>
						<li><a href="https://daffodilvarsity.edu.bd/photos/pdf/bba_journal16.pdf" target="_blank">DIUJBE</a></li>
						<li><a href="https://daffodilvarsity.edu.bd/sub/diujhss/" target="_blank">DIUJHSS</a></li>
						<li><a href="https://daffodilvarsity.edu.bd/sub/diujahs" target="_blank">DIUJAHS</a></li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-3">  
					<h4>Useful Links</h4>
					<ul class="list-style-none">
						<li><a href="http://skill.jobs/" target="_blank"> Skill.jobs</a></li>
						<li><a href="http://campusradio.ac/" target="_blank"> Campus Radio</a></li>
						<li><a href="http://daffodil.com.bd/" target="_blank"> Daffodil Family</a></li>
						<li><a href="#"> Video Gallery</a></li>
						<li><a href="http://directory.daffodilvarsity.edu.bd/" target="_blank">Directory</a></li>
					</ul>
				</div>
			</div>
		</div><!-- footer top end  -->
		<section class="partner pt-20 pb-15"> <!-- Partner section  -->
			<div class="container">
				<div class="col-sm-3">
					<div class="panel">
					  <div class="panel-body">
						<h4><b>ABOUT CSC</b></h4>
						<p></p>
					  </div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="panel">
						<div class="panel-body">
						<h4><b>STAY CONNECTED</b></h4>
						<p>Follow us on social media</p>
						<a href="#"><i class="fab fa-facebook-square fa-2x"></i></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<img class="img-responsive center-block" src="{{ asset('assets/img/isaca-logo.png') }}" alt="" />
				</div>
				<div class="col-sm-3">
					<img class="img-responsive center-block" src="{{ asset('assets/img/diulogo.png') }}" alt="" />
				</div>
				
			</div>
		</section>
		<div class="copyright-zone pt-20"> <!-- footer copyright start -->
			<div class="container">
				<div class="col-sm-6 "> 
					<p class="pull-left">Copyright © 2018 Cyber Security Centre, DIU. All Rights Reserved</p>
				</div>
				<div class="col-sm-6 pull-right">
					<p class="pull-right">Developed By <a href="https://appsoliclab.com/" target="_blank" >Appsolic Lab</a> 
				</div>
			</div>
		</div><!-- footer copyright end -->
	</footer>
  <!-- footer section Start -->
</div>
  <script type="text/javascript" src="{{ asset('assets/js/js.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
