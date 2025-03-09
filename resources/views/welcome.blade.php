<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Catsol </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />
</head>

<body>

  <div class="hero_areas">

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
            <img src="{{asset('images/logo.png')}}" alt="" width="350px" >
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html" style="font-family: sans-serif">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html" style="color: rgb(46, 55, 169); font-family: sans-serif"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html" style="color: rgb(46, 55, 169); font-family: sans-serif">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="why.html" style="color: rgb(46, 55, 169); font-family: sans-serif">Why Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.html" style="color: rgb(46, 55, 169); font-family: sans-serif">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}" style="color: rgb(46, 55, 169); font-family: sans-serif"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
              </li>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit" style="color: rgb(46, 55, 169)">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
      <hr style="border: 1px dashed rgb(0, 142, 204);">
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="container pb-4" id="webdesign">
    
      <div class="row">
        <div class="col-md-5">
        <img src="images/webdesign.png" alt="" width="480">
        </div>
        <div class="col-md-7">
        <div  style="color: rgb(46, 55, 169); font-family: sans-Serif; font-size: 50px; font-weight: 900; text-align: left">
            Your Business  <br>
            Online Presence <br>
            Starts Here
          </div>
          <p style="color: rgb(0, 142, 204);font-weight: 100; font-family: sans-Serif; font-size: 20px; text-align:justify;">
            We build cutting-edge, user-friendly websites that showcase your business in the best light. Whether you're a small business owner, a startup, or an established school/organization, our custom web design and development services are tailored to enhance your brand’s online presence. Let us create a digital space that truly represents your vision and engages your audience.
          </p>
          <form action="{{route('business.register')}}" method="post">
          @csrf
          <div class="row">
            <div class="col-md-9">
              <input type="text" name="business" class="form-control" placeholder="Enter Your Business/Organization Name Here">
            </div>
            <div class="col-md-3">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>
          </div>
          </form>
          
        </div>
      </div>
    <br>
</section>

<section class="mt-4 p-4" style="background-color: rgb(244, 252, 255);  ">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h1 class="text text-primary text-right" style="color: darkblue; font-family: sans-Serif; font-size: 45px; font-weight: 900; text-align: left">
            Learn Digital Skills to Excel in Today’s Tech-driven World.
            </h1>
          </div>
          <div class="col-md-7">
          
            <div class="text-center mb-4">
              <img src="images/institute.png" alt="" class="shadow" style="border-radius: 10px; object-fit: cover;">
            </div>
            <p style="color: rgb(0, 142, 204); font-family: sans-Serif; font-size: 20px; text-align:justify;">
              Our comprehensive training programs are designed to equip individuals and organizations with the skills they need to excel in today’s tech-driven world. We offer specialized courses in web development, software programming, data analysis, and more. Our expert trainers ensure you stay ahead of the curve, mastering the tools and technologies essential for professional growth.
            </p>
            <button class="btn btn-primary">View Our Courses Here</button>
            
          </div>
        </div>
      </div>
</section>
<section class="mt-4">
<div class="container">
        <div class="row">
        <div class="col-md-12">
        <h1 class="text text-center text-secondary mb-4" style="color: rgb(46, 55, 169); font-family: sans-Serif; font-size: 40px; font-weight: 900; text-align: left">
            <em>Simplified Payments Solution for Schools and Parents</em>
            </h1>
            </div>
          <div class="col-md-4">
            <div class="text-center mb-4">
              <img src="images/payment.png" alt="" style="border-radius: 20px;">
            </div>
          </div>
          <div class="col-md-8">
          
            
            <p style="font-family: sans-Serif; font-size: 20px; text-align:justify;">
            We offer secure and easy-to-use digital payment solutions for primary and secondary schools, streamlining the fee payment process for both schools and parents. With our platform, schools can manage payments effortlessly, while parents enjoy the convenience of paying fees and dues online or via mobile services, ensuring seamless transactions every time.
            </p>
            <button class="btn btn-secondary">Register to Start Collecting Payment Now</button>
            
          </div>
        </div>
      </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-center">
        <a href="" class="btn btn-outline-primary w-100 py-4">
          <i class="fas fa-university fa-2x mb-2"></i>
          <h5>Institution</h5>
        </a>
      </div>
      <div class="col-md-3 text-center">
        <a href="" class="btn btn-outline-primary w-100 py-4">
          <i class="fas fa-laptop-code fa-2x mb-2"></i>
          <h5>5-Days Workshop</h5>
        </a>
      </div>
      <div class="col-md-3 text-center">
        <a href="#trips" class="btn btn-outline-primary w-100 py-4">
          <i class="fas fa-wifi fa-2x mb-2"></i>
          <h5>Internet Cafe</h5>
        </a>
      </div>
      <div class="col-md-3 text-center">
        <a href="#management" class="btn btn-outline-primary w-100 py-4">
          <i class="fas fa-search fa-2x mb-2"></i>
          <h5>Research</h5>
        </a>
      </div>
    </div>
  </div>
</section>
    
   

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h3 style="font-family: sans-serif">
            Our <span>Services</span>
          </h3>
          <p>At Caliphate Tech Solutions Limited, we specialize in helping businesses, individuals, and educational institutions thrive in the digital world. We offer a wide range of professional services designed to meet the unique needs of our clients, and we are committed to delivering excellence across all our solutions.</p>
        </div>

        <div class="row">
          <div class="col-md-3 ">
            <div class="box ">
              <div class="img-box">
                <i class="fas fa-code"></i>
              </div>
              <div class="detail-box">
                <h5>
                  Web Development
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Computer Skills Training
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Payment Solution
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Research
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          About <span>Us</span>
        </h2>
        
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              We Are Technological Solution Provider Based in Sokoto
            </h3>
            <p>
            At Caliphate Tech Solutions Limited, we specialize in helping businesses, individuals, and educational institutions thrive in the digital world. We offer a wide range of professional services designed to meet the unique needs of our clients, and we are committed to delivering excellence across all our solutions.
            </p>
            <p>
              Molestiae odio earum non qui cumque provident voluptates, repellendus exercitationem, possimus at iste corrupti officiis unde alias eius ducimus reiciendis soluta eveniet. Nobis ullam ab omnis quasi expedita.
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose <span>Us</span>
        </h2>
      </div>
      <div class="why_container">
        <div class="box">
          <div class="img-box">
            <img src="images/w1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Expert Management
            </h5>
            <p>
              Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
              Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Secure Investment
            </h5>
            <p>
              Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
              Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Instant Trading
            </h5>
            <p>
              Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
              Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w4.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Happy Customers
            </h5>
            <p>
              Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
              Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
            </p>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- end why section -->

  <!-- team section -->
  <section class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2 class="">
        Board of <span> Directors</span>
        </h2>
      </div>

      <div class="team_container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/team-1.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Dr Ahmad Idris Tambuwal
                </h5>
                <p>
                  Chairman
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/team-2.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Isah Labbo
                </h5>
                <p>
                  Managing Director
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/team-3.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Samaila Shuaibu Baraya
                </h5>
                <p>
                  Director
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box ">
              <div class="img-box">
                <img src="images/team-4.jpg" class="img1" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Shitu Abdullahi
                </h5>
                <p>
                  Marketing Head
                </p>
              </div>
              <div class="social_box">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end team section -->


  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What says our <span>Customers</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.html">
                Home
              </a>
              <a class="" href="about.html">
                About
              </a>
              <a class="" href="service.html">
                Services
              </a>
              <a class="" href="why.html">
                Why Us
              </a>
              <a class="" href="team.html">
                Team
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="#">Caliphate Tech Solutions LTD</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script>
  // Text to be typed
  var text = "Welcome to Caliphate Tech. Solutions LTD, Your Partner in Digital Transformation";

  // Speed of typing (in milliseconds)
  var speed = 50;

  // Initialize index
  var i = 0;

  // Function to type text
  function typeWriter() {
    if (i < text.length) {
      document.getElementById("welcome").innerHTML += text.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
  }

  // Call the function
  typeWriter();
</script>
</body>

</html>