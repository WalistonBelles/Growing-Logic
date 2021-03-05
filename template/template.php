<?php

/**
 * Project: MyAAC
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link href="<?PHP echo $template_path; ?>https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?php echo $title; ?></title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?PHP echo $template_path; ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo $template_path; ?>css/font-awesome.css">
    <link rel="stylesheet" href="<?PHP echo $template_path; ?>css/templatemo-lava.css">
    <link rel="stylesheet" href="<?PHP echo $template_path; ?>css/owl-carousel.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?PHP echo $template_path; ?>index.html" class="logo">
                            Growing Logic
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="<?PHP echo $template_path; ?>#welcome" class="menu-item">Inicio</a></li>
                            <li class="scroll-to-section"><a href="<?PHP echo $template_path; ?>#about" class="menu-item">Sobre</a></li>
                            <li class="scroll-to-section"><a href="<?PHP echo $template_path; ?>#testimonials" class="menu-item">Depoimentos</a>
                            </li>
                            <li class="submenu">
                                <a href="<?PHP echo $template_path; ?>javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="<?PHP echo $template_path; ?>" class="menu-item">About Us</a></li>
                                    <li><a href="<?PHP echo $template_path; ?>" class="menu-item">Features</a></li>
                                    <li><a href="<?PHP echo $template_path; ?>" class="menu-item">FAQ's</a></li>
                                    <li><a href="<?PHP echo $template_path; ?>" class="menu-item">Blog</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="<?PHP echo $template_path; ?>#contact-us" class="menu-item">Contate-nos</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menuasdasddddddddddddddddddd</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Pensamento Computacional de uma forma <em>SIMPLES</em></h1>
                        <p>A Growing Logic é uma plataforma web para auxiliar no ensino do pensamento computacional.
                        Sua proposta é ser uma plataforma gratuita para Instituições Públicas.</p> 
                        <a href="<?PHP echo $template_path; ?>#about" class="main-button-slider">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="<?PHP echo $template_path; ?>images/features-icon-1.png" alt="">
                            <h4>Metodologia</h4>
                            <p>Utilizamos atividades cientificamente comprovadas para estimular o pensamento computacional.</p>
                            <a href="<?PHP echo $template_path; ?>#testimonials" class="main-button">
                                Ver Mais
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="<?PHP echo $template_path; ?>images/features-icon-2.png" alt="">
                            <h4>Atividades</h4>
                            <p>Propomos atividades que atingem diversas áreas de atuação melhorando o aprendizado do aluno.</p>
                            <a href="<?PHP echo $template_path; ?>#testimonials" class="main-button">
                                Ver Mais
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="<?PHP echo $template_path; ?>images/features-icon-3.png" alt="">
                            <h4>Relatórios</h4>
                            <p>Nossa plataforma gera relatórios com gráficos para a instituição baseados no desenvolvimento do aluno</p>
                            <a href="<?PHP echo $template_path; ?>#testimonials" class="main-button">
                                Saiba mais
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="<?PHP echo $template_path; ?>images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="<?PHP echo $template_path; ?>images/about-icon-01.png" alt="">
                            <div class="text">
                                <h4>Eventos</h4>
                                <p>Crie eventos virtuais em sua instuição utilizando nossa plataforma como auxílio.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="<?PHP echo $template_path; ?>images/about-icon-02.png" alt="">
                            <div class="text">
                                <h4>Controle</h4>
                                <p>Crie suas próprias atividades, com suas histórias e tenha nossa ajuda para garantir a eficácia dela.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="<?PHP echo $template_path; ?>images/about-icon-03.png" alt="">
                            <div class="text">
                                <h4>Patrocinadores</h4>
                                <p>Possua patrocinadores para melhorar sua infraestrutura e otimizar seus eventos.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Quem usa <em>APROVA</em></h2>
                        <p>100% das instituições que utilizam nossa plataforma aprovam e recomendam nossos serviços.</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="<?PHP echo $template_path; ?>images/testimonial-author-1.png" alt="Author One"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>IFSul</h4>
                                <p>“Desde que aderimos a metologia da Growing Logic o desempenho de nossos alunos tiveram altas surpreendentes e o interesse deles pelo conhecimento elevou.”</p>
                                <span>Rogerio - Diretor Geral do IFSul</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="<?PHP echo $template_path; ?>images/testimonial-author-1.png" alt="Second Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>E.E.E.M.Barão de Aceguá</h4>
                                <p>“A plataforma propoem uma metologia de fácil entendimento tanto para os alunos quanto para nós profissionais, facilitando a aplicação dela em nossa escola.”</p>
                                <span>Simone - Professora de Português</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="<?PHP echo $template_path; ?>images/testimonial-author-1.png" alt="Author Third"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>E.M Nossa Senhora das Graças</h4>
                                <p>“Nossos alunos tiveram altas consideraveis em suas notas após implementarmos a metologia da Growing Logic!”</p>
                                <span>Marta - Pedagoga</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="Instituição" required=""
                                                style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" placeholder="E-Mail para contato"
                                                required="" style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" id="message" placeholder="Sua mensagem"
                                                required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Enviar mensagem</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>Um pouco sobre a <em>Growing Logic</em></h2>
                        <p>Atuando desde março de 2021 na área de Ensino, a Growing logic propoem uma metologia simples porém comprovada cientificamente com o intuito de estimular o Ensino do Pensamento Computacional em Instituições.
                            <br><br>Se você tem interesse em implementar nossa metodologia em sua Instituição, entre em contato conosco ficaremos felizes em atender você!</p>
                        <ul class="social">
                            <li><a href="<?PHP echo $template_path; ?>https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?PHP echo $template_path; ?>#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?PHP echo $template_path; ?>#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="<?PHP echo $template_path; ?>#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="<?PHP echo $template_path; ?>#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2021 Growing Logic

                        | Designed by <a rel="nofollow" href="https://github.com/WalistonBelles">Waliston</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <!-- jQuery -->
    <script src="<?PHP echo $template_path; ?>js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?PHP echo $template_path; ?>js/popper.js"></script>
    <script src="<?PHP echo $template_path; ?>js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?PHP echo $template_path; ?>js/owl-carousel.js"></script>
    <script src="<?PHP echo $template_path; ?>js/scrollreveal.min.js"></script>
    <script src="<?PHP echo $template_path; ?>js/waypoints.min.js"></script>
    <script src="<?PHP echo $template_path; ?>js/jquery.counterup.min.js"></script>
    <script src="<?PHP echo $template_path; ?>js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="<?PHP echo $template_path; ?>js/custom.js"></script>
</body>
</html>