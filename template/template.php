<?php

/**
 * Project: Growing Logic
 *     Web platform to aid the teaching of computational thinking for public and private institutions
 *
 * @package   Growing Logic
 * @author    Waliston <walistonbelles1@gmail.com>
 * @copyright 2021 Growing Logic
 */
$title = 'Growing Logic';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Growing Logic </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="<?PHP echo $template_path; ?>assets/img/favicon.ico">

        <!-- CSS here -->
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/slicknav.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/flaticon.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/progressbar_barfiller.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/gijgo.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/animate.min.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/animated-headline.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/slick.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/nice-select.css">
        <link rel="stylesheet" href="<?PHP echo $template_path; ?>assets/css/style.css">
    </head>
    
    <body>
        <!-- ? Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="<?PHP echo $template_path; ?>assets/img/logo/loder.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
        <?php echo $content;?>
        <!-- Preloader Start -->
        <header>
            <!-- Header Start -->
            <div class="header-area header-transparent">
                <div class="main-header ">
                    <div class="header-bottom  header-sticky">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-2 col-lg-2">
                                    <div class="logo">
                                        <a href="index.html"><img src="<?PHP echo $template_path; ?>assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10">
                                    <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                        <!-- Main-menu -->
                                        <div class="main-menu d-none d-lg-block">
                                            <nav>
                                                <ul id="navigation">                                                                                          
                                                    <li><a href="#">INICIO</a></li>
                                                    <li><a href="#">ESTRUTURA</a></li>
                                                    <li><a href="#">AJUDA</a></li>
                                                    <li><a href="#">Blog</a>
                                                        <ul class="submenu">
                                                            <li><a href="#">Blog</a></li>
                                                            <li><a href="#">Blog Details</a></li>
                                                            <li><a href="#">Element</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">CONTATO</a></li>
                                                    <!-- Button -->
                                                    <li class="button-header margin-left "><a href="#" class="btn">INSCREVA-SE</a></li>
                                                    <li class="button-header"><a href="#" class="btn3">ACESSAR</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div> 
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
        

        <footer>
            <div class="footer-wrappr " data-background="<?PHP echo $template_path; ?>assets/img/gallery/footer-bg.png">
                <div class="footer-area footer-padding ">
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <!-- logo -->
                                    <div class="footer-logo mb-25">
                                        <a href="index.html"><img src="<?PHP echo $template_path; ?>assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle mb-50">
                                        <p>Subscribe our newsletter to get updates about our services</p>
                                    </div>
                                    <!-- Form -->
                                    <div class="footer-form">
                                        <div id="mc_embed_signup">
                                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                                <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                                <div class="form-icon">
                                                    <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                        Subscribe
                                                    </button>
                                                </div>
                                                <div class="mt-10 info"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social mt-50">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1"></div>
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Company</h4>
                                        <ul>
                                            <li><a href="#">Why choose us</a></li>
                                            <li><a href="#"> Review</a></li>
                                            <li><a href="#">Customers</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Carrier</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Products</h4>
                                        <ul>
                                            <li><a href="#">Why choose us</a></li>
                                            <li><a href="#"> Review</a></li>
                                            <li><a href="#">Customers</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Carrier</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Support</h4>
                                        <ul>
                                            <li><a href="#">Technology</a></li>
                                            <li><a href="#">  Products</a></li>
                                            <li><a href="#">Customers</a></li>
                                            <li><a href="#">Quality</a></li>
                                            <li><a href="#">Sales geography</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-bottom area -->
                <div class="footer-bottom-area">
                    <div class="container">
                        <div class="footer-border">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="footer-copy-right text-center">
                                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Scroll Up -->
        <div id="back-top" >
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>

        
        <!-- JS here -->

        <script src="<?PHP echo $template_path; ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="<?PHP echo $template_path; ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/popper.min.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="<?PHP echo $template_path; ?>assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?PHP echo $template_path; ?>assets/js/owl.carousel.min.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/slick.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="<?PHP echo $template_path; ?>assets/js/wow.min.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/animated.headline.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/jquery.magnific-popup.js"></script>

        <!-- Date Picker -->
        <script src="<?PHP echo $template_path; ?>assets/js/gijgo.min.js"></script>

        <!-- Video bg -->
        <script src="<?PHP echo $template_path; ?>assets/js/jquery.vide.js"></script>

        <!-- Nice-select, sticky -->
        <script src="<?PHP echo $template_path; ?>assets/js/jquery.nice-select.min.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/jquery.sticky.js"></script>
        <!-- Progress -->
        <script src="<?PHP echo $template_path; ?>assets/js/jquery.barfiller.js"></script>

        <!-- counter , waypoint,Hover Direction -->
        <script src="<?PHP echo $template_path; ?>assets/js/jquery.counterup.min.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/waypoints.min.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/jquery.countdown.min.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/hover-direction-snake.min.js"></script>

        <!-- contact js -->
        <script src="<?PHP echo $template_path; ?>assets/js/contact.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/jquery.form.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/mail-script.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/jquery.ajaxchimp.min.js"></script>

        <!-- Jquery Plugins, main Jquery -->	
        <script src="<?PHP echo $template_path; ?>assets/js/plugins.js"></script>
        <script src="<?PHP echo $template_path; ?>assets/js/main.js"></script>
    </body>
</html>