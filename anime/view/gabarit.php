<?php
/**
 * Projet : gaming Site
 * Nom : gabarit.php
 * Auteur : Christnovie.KIALA-BI
 * Date : 08.10.2020
 */
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Game Over Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- bootstrap-css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
    <!--// css -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- font -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
          rel='stylesheet' type='text/css'>
    <!-- //font -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- light-box -->
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- //light-box -->
    <!-- <script src="js/SmoothScroll.min.js"></script> -->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>

</head>
<body>
<!-- banner -->
<div class="banner">
    <div class="banner-dot">
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <h1><a href="index.html">Game <span>Over</span></a></h1>
                </div>
                <div class="header-middle">
                    <ul>
                        <li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+123 456 7890</li>
                        <li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope"
                                                                    aria-hidden="true"></span>info@example.com</a></li>
                    </ul>
                </div>
                <div class="header-right">
                    <div class="search">
                        <form action="#" method="post">
                            <input type="search" name="Search" value="Search" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Search';}" required="">
                            <input type="submit" value=" ">
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //header-top -->
        <!--header-->
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--navbar-header-->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="#about" class="scroll">About</a></li>
                            <li><a href="#services" class="scroll">Services</a></li>
                            <li><a href="#gallery" class="scroll">Gallery</a></li>
                            <li><a href="#news" class="scroll">News</a></li>
                            <li><a href="#team" class="scroll">Team</a></li>
                            <li><a href="#contact" class="scroll">Contact Us</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </nav>
            </div>
        </div>
        <!--//header-->

        <!-- banner-info -->
        <div class="banner-info">
            <div class="container">
                <div class="w3layouts-text">
                    <h3>Game Over</h3>
                    <label></label>
                    <h2>Gaming Template</h2>
                </div>
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //banner-info -->
    </div>
</div>
<!-- //banner -->
<?= $content ?>
<!-- welcome -->
<div class="welcome" id="about">
    <div class="container">
        <div class="col-md-6 agileits_welcome_grid_left">
            <h3>About Us!</h3>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                consectetur, adipisci velit. Ut enim ad minima
                veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                nisi ut aliquid ex ea commodi consequatur? <i>Quis autem vel eum iure
                    reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                    consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla
                    pariatur?</i></p>
        </div>
        <div class="col-md-6 agileits_welcome_grid_right">
            <img src="images/1.jpg" alt=" " class="img-responsive"/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //welcome -->
<!-- services -->
<div class="services" id="services">
    <div class="container">
        <h3>Services</h3>
        <div class="agileinfo-services-grids">
            <div class="col-md-6 services-grid">
                <div class="services-grid1">
                    <div class="col-md-4 services-grid-right agile-services-grid-right">
                        <div class="services-grid-right-grid hvr-radial-out">
                            <span class="glyphicon glyphicon-grain" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-md-8 services-grid-left agile-services-grid-left">
                        <h4>repreh qui in ea voluptate</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente
                            delectus, ut aut reiciendis voluptatibus maiores alias consequatur
                            aut perferendis doloribus asperiores repellat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="services-grid1">
                    <div class="col-md-4 services-grid-right agile-services-grid-right">
                        <div class="services-grid-right-grid hvr-radial-out">
                            <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-md-8 services-grid-left agile-services-grid-left">
                        <h4>aut perferendis doloribus</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente
                            delectus, ut aut reiciendis voluptatibus maiores alias consequatur
                            aut perferendis doloribus asperiores repellat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="services-grid1">
                    <div class="col-md-4 services-grid-right agile-services-grid-right">
                        <div class="services-grid-right-grid hvr-radial-out">
                            <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-md-8 services-grid-left agile-services-grid-left">
                        <h4>maiores alias consequatur</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente
                            delectus, ut aut reiciendis voluptatibus maiores alias consequatur
                            aut perferendis doloribus asperiores repellat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 services-grid">
                <div class="services-grid1">
                    <div class="col-md-4 services-grid-right">
                        <div class="services-grid-right-grid hvr-radial-out">
                            <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-md-8 services-grid-left services-grid-left1">
                        <h4>voluptatibus maiores alias</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente
                            delectus, ut aut reiciendis voluptatibus maiores alias consequatur
                            aut perferendis doloribus asperiores repellat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="services-grid1">
                    <div class="col-md-4 services-grid-right">
                        <div class="services-grid-right-grid hvr-radial-out">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-md-8 services-grid-left services-grid-left1">
                        <h4>dut aut reiciendis maiores</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente
                            delectus, ut aut reiciendis voluptatibus maiores alias consequatur
                            aut perferendis doloribus asperiores repellat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="services-grid1">
                    <div class="col-md-4 services-grid-right">
                        <div class="services-grid-right-grid hvr-radial-out">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-md-8 services-grid-left services-grid-left1">
                        <h4>doloribus volupta maiores</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente
                            delectus, ut aut reiciendis voluptatibus maiores alias consequatur
                            aut perferendis doloribus asperiores repellat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //services -->
<!-- gallery -->
<div id="gallery" class="gallery">
    <div class="container">
        <h3>Our Gallery</h3>
        <div id="jzBox" class="jzBox">
            <div id="jzBoxNextBig"></div>
            <div id="jzBoxPrevBig"></div>
            <img src="#" id="jzBoxTargetImg" alt="">
            <div id="jzBoxBottom">
                <div id="jzBoxTitle"></div>
                <div id="jzBoxCounter"></div>
                <span id="jzBoxMoreItems">
							<i class="glyphicon glyphicon-menu-left" id="jzBoxPrev"></i> &nbsp;
							<i class="glyphicon glyphicon-menu-right" id="jzBoxNext"></i> &nbsp;
						</span>
                <i class="glyphicon glyphicon-remove-circle" id="jzBoxClose"></i>
            </div>
        </div>
        <div class="w3ls-gallery-grids">
            <div class="col-sm-4 col-xs-6 gallery-grid">
                <div class="wpf-demo-4">
                    <a href="images/g1.jpg" class="jzBoxLink item-hover"
                       title="Maecenas sodales tortor ac ligula ultrices dictum et quis urna.">
                        <img src="images/g1.jpg" class="img-responsive" alt=" "/>
                        <div class="view-caption">
                            <p>Click Here</p>
                        </div>
                    </a>
                </div>
                <div class="wpf-demo-4">
                    <a href="images/g2.jpg" class="jzBoxLink item-hover"
                       title="Etiam pulvinar metus neque eget porttitor massa.">
                        <img src="images/g2.jpg" alt=" " class="img-responsive"/>
                        <div class="view-caption">
                            <p>Click Here</p>
                        </div>
                    </a>
                </div>
                <div class="wpf-demo-4">
                    <a href="images/g7.jpg" class="jzBoxLink item-hover"
                       title="Etiam pulvinar metus neque eget porttitor massa.">
                        <img src="images/g7.jpg" alt=" " class="img-responsive"/>
                        <div class="view-caption">
                            <p>Click Here</p>
                        </div>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-sm-4 col-xs-6 gallery-grid">
                <div class="wpf-demo-4">
                    <a href="images/g3.jpg" class="jzBoxLink item-hover"
                       title="Etiam pulvinar metus neque eget porttitor massa.">
                        <img src="images/g3.jpg" alt=" " class="img-responsive"/>
                        <div class="view-caption">
                            <p>Click Here</p>
                        </div>
                    </a>
                </div>
                <div class="wpf-demo-4">
                    <a href="images/g4.jpg" class="jzBoxLink item-hover"
                       title="Etiam pulvinar metus neque eget porttitor massa.">
                        <img src="images/g4.jpg" alt=" " class="img-responsive"/>
                        <div class="view-caption">
                            <p>Click Here</p>
                        </div>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-sm-4 col-xs-12 gallery-grid">
                <div class="wpf-demo-4">
                    <a href="images/g6.jpg" class="jzBoxLink item-hover"
                       title="Etiam pulvinar metus neque eget porttitor massa.">
                        <img src="images/g6.jpg" alt=" " class="img-responsive"/>
                        <div class="view-caption">
                            <p>Click Here</p>
                        </div>
                    </a>
                </div>
                <div class="wpf-demo-4">
                    <a href="images/g8.jpg" class="jzBoxLink item-hover"
                       title="Etiam pulvinar metus neque eget porttitor massa.">
                        <img src="images/g8.jpg" alt=" " class="img-responsive"/>
                        <div class="view-caption">
                            <p>Click Here</p>
                        </div>
                    </a>
                </div>
                <div class="wpf-demo-4">
                    <a href="images/g5.jpg" class="jzBoxLink item-hover"
                       title="Etiam pulvinar metus neque eget porttitor massa.">
                        <img src="images/g5.jpg" alt=" " class="img-responsive"/>
                        <div class="view-caption">
                            <p>Click Here</p>
                        </div>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <script src="js/jzBox.js"></script>
    </div>
</div>
<!-- //gallery -->
<!-- testimonial -->
<div class="testimonial jarallax">
    <div class="w3-agileits-testimonial">
        <div class="container">
            <h3>Testimonial</h3>
            <div class="wthree-testimonial-grid">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <div class="testimonial-top">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <p>Donec feugiat tellus sem, laoreet iaculis orci lobortis vel. Sed sed luctus orci,
                                        at lacinia risus. Ut porttitor ante ac tincidunt elementum. Curabitur ex dolor,
                                        condimentum vitae nunc vel, pulvinar semper justo. Vestibulum et aliquet magna,
                                        maximus dapibus enim. Vestibulum ex lectus, posuere eu viverra at, mattis et
                                        enim. Nam efficitur sem et lectus fringilla, at pharetra nulla luctus. Nunc
                                        cursus, augue ac ultricies volutpat, neque erat congue justo, ac pretium tellus
                                        eros a neque. Integer ipsum sem, consectetur a mollis ac, cursus eu ipsum.</p>
                                    <h5>John Smith <span>- Founder</span></h5>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial-top">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    <p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non
                                        auctor diam. Mauris eget consectetur mauris. Aenean leo elit, accumsan vel elit
                                        vitae, mattis ultricies lacus. Cras consectetur justo lorem, sed dictum sapien
                                        eleifend at.Donec sed orci a dui aliquam tempor. Praesent in ipsum ut nunc
                                        porttitor lacinia.Donec eu sapien et arcu dictum rutrum.Ut laoreet vitae augue
                                        at accumsan. Nam pharetra sagittis purus et condimentum. Vestibulum cursus
                                        porttitor pretium.In egestas finibus rutrum. Nulla facilisi.</p>
                                    <h5>Divide Rule <span>- CEO</span></h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider3").responsiveSlides({
                                auto: true,
                                pager: false,
                                nav: true,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                    </script>
                    <!--banner Slider starts Here-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //testimonial -->
<!-- updates -->
<div class="updates" id="news">
    <div class="container">
        <h3>News & Events</h3>
        <div class="agileits_updates_grids">
            <div class="col-md-6 agileits_updates_grid_left">
                <h4>Latest News</h4>
                <div class="agileits_updates_grid_left_grid">
                    <div class="col-xs-4 agileits_updates_grid_left1">
                        <h4>15 <span>June <i>2016.</i></span></h4>
                    </div>
                    <div class="col-xs-8 agileits_updates_grid_left1">
                        <h5><a href="#" data-toggle="modal" data-target="#myModal">fugiat quo voluptas</a></h5>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="agileits_updates_grid_left_grid">
                    <div class="col-xs-4 agileits_updates_grid_left1">
                        <h4>18 <span>June <i>2016.</i></span></h4>
                    </div>
                    <div class="col-xs-8 agileits_updates_grid_left1">
                        <h5><a href="#" data-toggle="modal" data-target="#myModal">qui in ea voluptate</a></h5>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="agileits_updates_grid_left_grid">
                    <div class="col-xs-4 agileits_updates_grid_left1">
                        <h4>20 <span>June <i>2016.</i></span></h4>
                    </div>
                    <div class="col-xs-8 agileits_updates_grid_left1">
                        <h5><a href="#" data-toggle="modal" data-target="#myModal">autem vel eum iure</a></h5>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- modal -->
                <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Game Over</h4>
                            </div>
                            <div class="modal-body">
                                <div class="agileits-w3layouts-info">
                                    <img src="images/g2.jpg" alt=""/>
                                    <p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac
                                        rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu
                                        facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in
                                        dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id
                                        metus id tellus ultrices ullamcorper. Cras tempor massa luctus, varius lacus sit
                                        amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus
                                        sem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //modal -->
            </div>
            <div class="col-md-6 agileits_updates_grid_right">
                <h4>Featured Events</h4>
                <ul id="flexiselDemo1">
                    <li>
                        <img src="images/g3.jpg" alt=" " class="img-responsive"/>
                    </li>
                    <li>
                        <img src="images/g7.jpg" alt=" " class="img-responsive"/>
                    </li>
                    <li>
                        <img src="images/g9.jpg" alt=" " class="img-responsive"/>
                    </li>
                </ul>
                <script type="text/javascript">
                    $(window).load(function () {
                        $("#flexiselDemo1").flexisel({
                            visibleItems: 3,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint: 480,
                                    visibleItems: 1
                                },
                                landscape: {
                                    changePoint: 640,
                                    visibleItems: 2
                                },
                                tablet: {
                                    changePoint: 768,
                                    visibleItems: 3
                                }
                            }
                        });

                    });
                </script>
                <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h5 class="panel-title asd">
                                <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></i>assumenda est
                                    cliche reprehenderit
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="headingOne">
                            <div class="panel-body panel_text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h5 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse"
                                   data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                   aria-controls="collapseTwo">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></i>Itaque earum rerum
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingTwo">
                            <div class="panel-body panel_text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h5 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse"
                                   data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                   aria-controls="collapseThree">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></i>autem accusamus
                                    terry quibusdam
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingThree">
                            <div class="panel-body panel_text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h5 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse"
                                   data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                   aria-controls="collapseFour">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></i>excepturi sint
                                    cliche reprehenderit
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingFour">
                            <div class="panel-body panel_text">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //updates -->
<!-- team -->
<div class="team" id="team">
    <div class="container">
        <h3>Our Team</h3>
        <div class="agileinfo-team-grids">
            <div class="col-md-3 wthree-team-grid">
                <img src="images/t1.jpg" alt=""/>
                <h4>Mary Jane</h4>
                <p>Vestibulum</p>
                <div class="team-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 wthree-team-grid">
                <img src="images/t2.jpg" alt=""/>
                <h4>Peter Parker</h4>
                <p>Vestibulum</p>
                <div class="team-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 wthree-team-grid">
                <img src="images/t3.jpg" alt=""/>
                <h4>John Watson</h4>
                <p>Vestibulum</p>
                <div class="team-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 wthree-team-grid">
                <img src="images/t4.jpg" alt=""/>
                <h4>Steven Wilson</h4>
                <p>Vestibulum</p>
                <div class="team-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //team -->
<!-- subscribe -->
<div class="jarallax  wthree-subscribe">
    <div class="w3-agileits-testimonial subscribe-bg">
        <div class="container">
            <h3>Subscribe with Us</h3>
            <div class="w3-agileits-subscribe-form">
                <form action="#" method="post">
                    <input type="text" placeholder="Email" name="Email" required="">
                    <button class="btn1">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //subscribe -->
<!-- contact -->
<div class="contact" id="contact">
    <div class="container">
        <h3>Contact Us</h3>
        <div class="contact-grids">
            <div class="col-md-6 w3ls-address">
                <h4>Get in touch with us</h4>
                <p class="cnt-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum
                    passages sed do, At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                <p class="address">Broome Street 21BV <br> NY 10002, Canada<br> USA </p>
                <p>Telephone : +00 111 222 3333</p>
                <p>FAX : +1 888 888 4444</p>
                <p>Email : <a href="mailto:example@mail.com">mail@example.com</a></p>
            </div>
            <div class="col-md-6 w3l-contact-form">
                <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                    <input type="text" name="w3lName" placeholder="Name" required="">
                    <input type="email" name="w3lSender" placeholder="Email" required="">
                    <textarea placeholder="Message" name="w3lMessage" required=""></textarea>
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- map -->
        <div class="w3-agile-map">
            <h3>Route Map</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"></iframe>
        </div>
        <!-- //map -->
    </div>
</div>
<!-- //contact -->
<!-- footer -->
<div class="agileits-w3layouts-footer">
    <div class="container">
        <div class="agile-copyright">
            <p>© 2020 Game Over. All rights reserved | Design by <a href="http://w3layouts.com">W3Layouts</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
<script src="js/jarallax.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<script src="js/responsiveslides.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>
