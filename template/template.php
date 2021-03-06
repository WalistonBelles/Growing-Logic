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
        <title> Hosting | Template</title>
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

        <main>
            <!-- Slider Area Start-->
            <div class="slider-area slider-bg ">
                <div class="slider-active">
                    <!-- Single Slider -->
                    <div class="single-slider d-flex align-items-center slider-height ">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-5 col-lg-5 col-md-9 ">
                                    <div class="hero__caption">
                                        <span data-animation="fadeInLeft" data-delay=".3s">Pensamento computacional de uma </span>
                                        <h1 data-animation="fadeInLeft" data-delay=".6s ">Forma Simples</h1>
                                        <p data-animation="fadeInLeft" data-delay=".8s">A Growing Logic é uma plataforma web para auxiliar no ensino do pensamento computacional.
                        Sua proposta é ser uma plataforma gratuita para Instituições Públicas.</p>
                                        <!-- Slider btn -->
                                        <div class="slider-btns">
                                            <!-- Hero-btn -->
                                            <a data-animation="fadeInLeft" data-delay="1s" href="industries.html" class="btn radius-btn">Saiba mais</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="hero__img d-none d-lg-block f-right">
                                        <img src="<?PHP echo $template_path; ?>assets/img/hero/hero_right.png" alt="" data-animation="fadeInRight" data-delay="1s">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                <!-- Slider Shape -->
                <div class="slider-shape d-none d-lg-block">
                    <img class="slider-shape1" src="<?PHP echo $template_path; ?>assets/img/hero/top-left-shape.png" alt="">
                </div>
            </div>
            <!-- Slider Area End -->

            <!--? Team -->
            <section class="team-area section-padding40 section-bg1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="section-tittle text-center mb-105">
                                <h2>Most amazing features</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6"">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="<?PHP echo $template_path; ?>assets/img/icon/services1.svg" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="#">Employee Owned</a></h5>
                                    <p>Supercharge your WordPress hosting with detailed website analytics, marketing tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="<?PHP echo $template_path; ?>assets/img/icon/services2.svg" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="#">Commitment to Security</a></h5>
                                    <p>Supercharge your WordPress hosting with detailed website analytics, marketing tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="<?PHP echo $template_path; ?>assets/img/icon/services3.svg" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="#">Passion for Privacy</a></h5>
                                    <p>Supercharge your WordPress hosting with detailed website analytics, marketing tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="<?PHP echo $template_path; ?>assets/img/icon/services4.svg" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="#">Employee Owned</a></h5>
                                    <p>Supercharge your WordPress hosting with detailed website analytics, marketing tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="<?PHP echo $template_path; ?>assets/img/icon/services5.svg" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="#">24/7 Support</a></h5>
                                    <p>Supercharge your WordPress hosting with detailed website analytics, marketing tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="<?PHP echo $template_path; ?>assets/img/icon/services6.svg" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="#">100% Uptime Guaranteed</a></h5>
                                    <p>Supercharge your WordPress hosting with detailed website analytics, marketing tools.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services End -->

            
    <!--? Pricing Card Start -->
    <section class="pricing-card-area fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-tittle text-center mb-90">
                        <h2>Choose plan which fit for you</h2>
                        <p>Supercharge your WordPress hosting with detailed website analytics, marketing tools. Our experts are just part of the reason Bluehost is the ideal home for your WordPress website. We're here to help you succeed!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <img src="<?PHP echo $template_path; ?>assets/img/icon/price1.svg" alt="">
                            <h4>Shared Hosting</h4>
                            <p>Starting at</p>
                        </div>
                        <div class="card-mid">
                            <h4>$4.67 <span>/ month</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>2 TB of space</li>
                                <li>unlimited bandwidth</li>
                                <li>full backup systems</li>
                                <li>free domain</li>
                                <li>unlimited database</li>
                            </ul>
                            <a href="#" class="borders-btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <img src="<?PHP echo $template_path; ?>assets/img/icon/price2.svg" alt="">
                            <h4>Dedicated Hosting</h4>
                            <p>Starting at</p>
                        </div>
                        <div class="card-mid">
                            <h4>$4.67 <span>/ month</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>2 TB of space</li>
                                <li>unlimited bandwidth</li>
                                <li>full backup systems</li>
                                <li>free domain</li>
                                <li>unlimited database</li>
                            </ul>
                            <a href="#" class="borders-btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <img src="<?PHP echo $template_path; ?>assets/img/icon/price3.svg" alt="">
                            <h4>Cloud Hosting</h4>
                            <p>Starting at</p>
                        </div>
                        <div class="card-mid">
                            <h4>$4.67 <span>/ month</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>2 TB of space</li>
                                <li>unlimited bandwidth</li>
                                <li>full backup systems</li>
                                <li>free domain</li>
                                <li>unlimited database</li>
                            </ul>
                            <a href="#" class="borders-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Card End -->


            <!--? About-1 Area Start -->
                <div class="about-area1 section-padding40">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10">
                                <!-- about-img -->
                                <div class="about-img ">
                                    <img src="<?PHP echo $template_path; ?>assets/img/gallery/about1.png" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-12">
                                <div class="about-caption ">
                                    <!-- Section Tittle -->
                                    <div class="section-tittle section-tittle2 mb-30">
                                        <h2>Global server location</h2>
                                    </div>
                                    <p class="mb-40">Supercharge your WordPress hosting with detailed website analytics, marketing tools. Our experts are just part of the reason Bluehost is the ideal home for your WordPress website. We're here to help you succeed!</p>
                                    <ul>
                                        <li>
                                            <img src="<?PHP echo $template_path; ?>assets/img/icon/right.svg" alt="">
                                            <p>WordPress hosting with detailed website</p>
                                        </li>
                                        <li>
                                            <img src="<?PHP echo $template_path; ?>assets/img/icon/right.svg" alt="">
                                            <p>Our experts are just part of the reason</p>
                                        </li>
                                        <li>
                                            <img src="<?PHP echo $template_path; ?>assets/img/icon/right.svg" alt="">
                                            <p> Detailed website analytics</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About-1 Area End -->
                <!--? About-2 Area Start -->
                <div class="about-area1 pb-bottom">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-7 col-lg-7 col-md-12">
                                <div class="about-caption about-caption3 mb-50">
                                    <!-- Section Tittle -->
                                    <div class="section-tittle section-tittle2 mb-30">
                                        <h2>Dedicated support</h2>
                                    </div>
                                    <p class="mb-40">Supercharge your WordPress hosting with detailed website analytics, marketing tools. Our experts are just part of the reason Bluehost is the ideal home for your WordPress website. We're here to help you succeed!</p>
                                    <ul class="mb-30">
                                        <li>
                                            <img src="<?PHP echo $template_path; ?>assets/img/icon/right.svg" alt="">
                                            <p>WordPress hosting with detailed website</p>
                                        </li>
                                        <li>
                                            <img src="<?PHP echo $template_path; ?>assets/img/icon/right.svg" alt="">
                                            <p>Our experts are just part of the reason</p>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn"><i class="fas fa-phone-alt"></i>(10) 892-293 2678</a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10">
                                <!-- about-img -->
                                <div class="about-img ">
                                    <img src="<?PHP echo $template_path; ?>assets/img/gallery/about2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About-2 Area End -->

            <!-- ask questions -->
            <section class="ask-questions section-bg1 section-padding30 fix">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-10 ">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-90">
                                <h2>Frequently ask questions</h2>
                                <p>Supercharge your WordPress hosting with detailed website analytics, marketing tools. Our experts are just part of the reason Bluehost is the ideal home for your WordPress website. We're here to help you succeed!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-question d-flex mb-50">
                                <span> Q.</span>
                                <div class="pera">
                                    <h2>Why can't people connect to the web server on my PC?</h2>
                                    <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-question d-flex mb-50">
                                <span> Q.</span>
                                <div class="pera">
                                    <h2>What domain name should I choose for my site?</h2>
                                    <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-question d-flex mb-50">
                                <span> Q.</span>
                                <div class="pera">
                                    <h2>How can I make my website work without www. in front?</h2>
                                    <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-question d-flex mb-50">
                                <span> Q.</span>
                                <div class="pera">
                                    <h2>Why does Internet Information Server want a password?</h2>
                                    <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="more-btn text-center mt-20">
                                <a href="#" class="btn">Go to Support</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End ask questions -->
            <!--? Testimonial Area Start -->
            <section class="testimonial-area section-bg1">    
                <div class="container" >   
                    <div class="testimonial-wrapper">
                        <div class="row align-items-center justify-content-center">
                            <div class=" col-lg-10 col-md-12 col-sm-11">
                                <!-- Testimonial Start -->
                                <div class="h1-testimonial-active">
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial text-center mt-55">
                                        <div class="testimonial-caption">
                                            <img src="<?PHP echo $template_path; ?>assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                            <p>Desde que aderimos a metologia da Growing Logic o desempenho de nossos alunos tiveram altas surpreendentes e o interesse deles pelo conhecimento elevou.</p>
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-img">
                                                <img src="<?PHP echo $template_path; ?>assets/img/icon/testimonial.png" alt="">
                                            </div>
                                            <div class="founder-text">
                                                <span>Rogerio Marin</span>
                                                <p>Diretor Geral do IFSul</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Testimonial -->
                                    <div class="single-testimonial text-center mt-55"">
                                        <div class="testimonial-caption">
                                            <img src="<?PHP echo $template_path; ?>assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                            <p>A plataforma propoem uma metologia de fácil entendimento tanto para os alunos quanto para nós profissionais, facilitando a aplicação dela em nossa escola.</p>
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                            <div class="founder-img">
                                                <img src="<?PHP echo $template_path; ?>assets/img/icon/testimonial.png" alt="">
                                            </div>
                                            <div class="founder-text">
                                                <span>Simone Paz</span>
                                                <p>Professora de Português</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial End -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--? Testimonial Area End -->
        </main>

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