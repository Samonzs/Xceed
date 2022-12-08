<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>XCEED Electrical Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

   
    <body>
          <header>     
              <nav class="navbar navbar-light bg-light navbar-expand-lg">
              <a class="navbar-brand" href="<?php echo url('welcome')?>"><img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" width="85" height="25" alt="XCEED ELectrical Logo"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Quoting
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="<?php echo url('createquotes')?>">Create a Quote</a>
                          <a class="dropdown-item" href="<?php echo url('listofquotes')?>">List of Quotes</a>
                        </div>
                      </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('createstaff')?>"><span class="glyphicon glyphicon-user"></span> Create Staff</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('login')?>"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
          </header>
            <!-- The hero section/ or customer testimonials in this case -->
            <section class="bg-light"> 
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 order-2 order-lg-1">

                            <h3>Testimonials</h3>
                            <p>Thank you Xceed Electrical for installing our new TV. Looking forward to getting our videos and resources playing for our community.<br > <b>-Western Sydney MRC</b></p>
                            <p>We have been a customer of Xceed Electrical since 2013 and have always found them to be an excellent and efficient contractor. 
                                They are very professional in their approach to any jobs they are asked to do and all jobs undertaken have been completed to an exceptionally high standard and they are always willing to visit site immediately if an emergency arises. I would have no hesitation in recommending Xceed Electrical for any electrical repairs or installations.<br> <b>-Mouna Diani</b></p>
                            <p>Just want to give residents a heads up. Xceed Electrical has installed cameras, a doorbell, internet cables, downlights and power points for me. They are honest, reliable and really lovely guys. Don't hesitate to call if you want quality work. Jayson and his team are great. <br> <b>-Sallyanne Jean</b></p>

                        </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <!-- This will be a slideshow (carousel) of the projects that xceed has done. permission will be asked before using their images. 
                This hence will show the projects that the comapny has done in a slide show that will alter images periodically-->

            <div id="carouselSlides" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://xceedelectrical.com.au/wp-content/uploads/2020/10/Screenshot_20200920-213100_Instagram-400x481.jpg" width="500" height="400" alt="slide 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>NAB Riverwood</h5>
                            <p>An old project done by the team</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://xceedelectrical.com.au/wp-content/uploads/2020/10/A217660ID175621-400x323.jpg" width="500" height="400" alt="slide 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Parramatta Lights Upgrade</h5>
                            <p>The new upgraded lights in parammata</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://xceedelectrical.com.au/wp-content/uploads/2020/10/Club-progress-4.jpg" width="500" height="400" alt="slide 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Portugal Medeira Club Marrickville</h5>
                            <p>The Medeira club's refurbishment</p>
                        </div>
                    </div>
                </div>
            </div>

                            </div>
                    </div>
                </div>

            </section>

            
          <footer class="text-center text-lg-start bg-white text-muted">
            <section class="">
              <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      <i class="fas fa-gem me-3 text-secondary"></i>XCEED Electrical
                    </h6>
                    <p>
                      Very useful disclaimer/ or warning rerouting users to an agreement here...
                    </p>
                  </div>
                  

                  <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Useful Products
                    </h6>
                    <p>
                      <a href="#!" class="text-reset">Useful Product</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Useful Product</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Useful Product</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Useful Product</a>
                    </p>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Useful links
                    </h6>
                    <p>
                      <a href="#!" class="text-reset">Useful Link</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Useful Link</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Useful Link</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Useful Link</a>
                    </p>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3 text-secondary"></i> Sydney, Australia</p>
                    <p>
                      <i class="fas fa-envelope me-3 text-secondary"></i>
                      example@site.com
                    </p>
                    <p><i class="fas fa-phone me-3 text-secondary"></i> + 61 xxxx xxx xxx</p>
                    <p><i class="fas fa-print me-3 text-secondary"></i> + 61 xxxx xxx xxx</p>
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
              </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
              © 2022 Copyright:
              <a class="text-reset fw-bold" href="#">homeSite.com</a>
            </div>
        </footer>
    </body>
    
</html>