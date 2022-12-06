<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>XCEED Electrical Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/stylesheet.css">
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    </head>
    <body>

        <header>
            <h1>XCEED ELECTRICAL</h1>
            <!-- this nav bar will contain the green accent, a sign in page as well as a staff support link (we'll see if this is good or not) -->
            <nav id="nav1">
                <ul>
                    <li> <a href="login.php">Sign In</a></li>
                    <li> <a href="">Call Staff ph(xxxx xxx xxx)</a></li>
                </ul>
            </nav>
            <!-- This nav bar will be a second nav bar with the first having a green accent, reflecting that of the official site-->
            <nav id="nav2">
                <ul>
                    <li> <a href="homePage.php">Home</a></li> <!-- we need to turn this 
                        section into a png of the xceed logo which will act as the home page-->
                    <li> <a href="listOfQuotes.php">List Of Quotes</a></li>
                    <li> <a href="createQuotes.php">Create Quotes</a></li>
                    <li> <a href="createStaff.php">Create Staff</a></li>
                </ul>
            </nav>

        </header>
                <h2>XCEED Electrical Quote Management system</h2>

            <section id="columb 1"> 
                <h3>Testimonials</h3>
                <p>Thank you Xceed Electrical for installing our new TV. Looking forward to getting our videos and resources playing for our community.<br id="test signiatures"> Western Sydney MRC</p>
                <p>We have been a customer of Xceed Electrical since 2013 and have always found them to be an excellent and efficient contractor. 
                They are very professional in their approach to any jobs they are asked to do and all jobs undertaken have been completed to an exceptionally high standard and they are always willing to visit site immediately if an emergency arises. I would have no hesitation in recommending Xceed Electrical for any electrical repairs or installations.<br> Mouna Diani</p>
                <p>Just want to give residents a heads up. Xceed Electrical has installed cameras, a doorbell, internet cables, downlights and power points for me. They are honest, reliable and really lovely guys. Don't hesitate to call if you want quality work. Jayson and his team are great. <br> Sallyanne Jean</p>
            </section>

            <!-- This will be a slideshow of the projects that xceed has done. permission will be asked before using their images. 
                This hence will show the projects that the comapny has done in a slide show that will alter images periodically-->
            <section id="columb 2">
                <h3>Some of our projects</h3>
                <div class="carousel", id="carousel">
                    <a id="prevbt"></a>
                    <a id="nextbt"></a>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="carousel_image1.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="carousel_image2.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="carousel_image3.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="carousel_image4.jpg" />
                            </a>
                        </li>
                    </ul>

                    <script>
                    var li_Width = 1024;
                    var banner_Li_Num = $('#banner li').length;
                    $('#banner ul').css({
                        'width': li_Width * banner_Li_Num,
                        'marginLeft': -li_Width
                    });

                    function prevbt() {
                        $('#prevbt').unbind('click');
                        $('#banner li:last').detach().insertBefore('#banner li:first').parents('ul').css('marginLeft', -li_Width * 2).stop(true).animate({
                            marginLeft: -li_Width
                        }, 800, 'easeInOutBack', function() {
                            $('#prevbt').bind('click', prevbt);
                        });
                    }

                    function nextbt() {
                        $('#nextbt').unbind();
                        $('#banner ul').stop(true).animate({
                            marginLeft: -li_Width * 2
                        }, 800, 'easeInOutBack', function() {
                            $('#banner ul').css('marginLeft', -li_Width).find('li:first').insertAfter('#banner li:last');
                            $('#nextbt').bind('click', nextbt);
                        })
                    }

                    $('#prevbt').click(function() {
                        prevbt();
                    })
                    $('#nextbt').click(function() {
                        nextbt();
                    })

                    banner_T = setInterval(banner_Auto, 5000)

                    function banner_Auto() {
                        nextbt();
                    }
                    $('#banner').hover(function() {
                        clearInterval(banner_T);
                    }, function() {
                        banner_T = setInterval(banner_Auto, 5000);
                    })
                    </script>
                    </div>

                    <div class="carousel_image">image 1</div>
                    <div class="carousel_image">image 2</div>
                    <div class="carousel_image">image 3</div>

                    <div class="carousel_nav">
                        <span class = "carousel_button"></span>
                        <span class = "carousel_button"></span>
                        <span class = "carousel_button"></span>
                    </div>
                </div>
                <p>DENHAM COURT – HOME THEATRE INSTALLATION</p>
            </section>

        
        <footer>
            <p>Copyright XCEED blah blah blah</p>  
        </footer>
    </body>
</html>
</html>
