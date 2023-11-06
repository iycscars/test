<?php

require_once("admin/conexao/banco.php");

$sql   = "select * from tb_aluno";
$sql   = mysqli_query($con, $sql) or die ("Erro na sql!") ;
$dados = mysqli_fetch_array($sql);

$sql2   = "select * from tb_skill";
$sql2   = mysqli_query($con, $sql2) or die ("Erro na sql2!") ;

$sql3   = "select * from tb_servicos";
$sql3   = mysqli_query($con, $sql3) or die ("Erro na sql!") ;

$sql4   = "select *, date_format(pro_data_cadastro,'%d/%m/%Y') as data from tb_projetos";
$sql4   = mysqli_query($con, $sql4) or die ("Erro na sql!") ;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Portfólio</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
          <li><a class="nav-link scrollto " href="#work">Portfolio</a></li>
          <li><a class="nav-link scrollto " href="#blog">Cursos</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">Andrey Olivatto Garcia</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Desenvolvedor FullStack"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/testimonial-5.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nome: </span> <span><?php echo $dados['alu_nome']; ?></span></p>
                        <p><span class="title-s">Área: </span> <span><?php echo $dados['alu_objetivo']; ?></span></p>
                        <p><span class="title-s">Email: </span> <span><?php echo $dados['alu_email']; ?></span></p>
                        <p><span class="title-s">Phone: </span> <span><?php echo $dados['alu_celular']; ?></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>

                    <?php while ($dados2 = mysqli_fetch_array($sql2)) { ?>

                    <span><?php echo $dados2['ski_descricao']; ?></span> <span class="pull-right"><?php echo $dados2['ski_porcentagem']; ?>%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?php echo $dados2['ski_porcentagem']; ?>%;" aria-valuenow="<?php echo $dados2['ski_porcentagem']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

        <?php } ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Sobre mim
                      </h5>
                    </div>
                    <p class="lead">
                      Sou um futuro Designer e Desenvolvedor FullStack em ascenção, pretendo dominar essas categorias o mais breve possível.
                    </p>
                    <p class="lead">
                      Sou fascinado por animais microscópicos e basicamente qualquer tópico sobre isso me chama a atenção.
                    </p>
                    <p class="lead">
                      E também gosto muito de ouvir música, qualquer situação é a situação ideal.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Serviços
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
        <?php while ($dados3 = mysqli_fetch_array($sql3)) { ?>

          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico"> 
                <span class="ico-circle"><i class="bi <?php echo $dados3['ser_icone']; ?>"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?php echo $dados3['ser_titulo']; ?></h2>
                <p class="s-description text-center">
                <?php echo $dados3['ser_descricao']; ?>
                  <br>
                </p>
              </div>
            </div>
          </div>

          <?php } ?>
          
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                Veja aqui todos os meus trabalhos:
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        
        <div class="row">
        <?php 
        while ($dados4 = mysqli_fetch_array($sql4)) { 
          if ($dados4['pro_status'] == 'A') { ?>
          <div class="col-md-4">
            <div class="work-box">
              <a href="admin/projetos/<?php echo $dados4['pro_foto']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="admin/projetos/<?php echo $dados4['pro_foto']; ?>" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><?php echo $dados4['pro_descricao']; ?></h2>
                    <div class="w-more">
                      <span class="w-ctegory">Desenvolvimento Web / Design </span> / <span class="w-date"><a href="http://mathmagic.infinityfreeapp.com/index.html">Link</a> / <?php echo $dados4['data']; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }} ?>
        </div>
      </div>
      
      
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">Sócrates</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        "A humanidade é feita de dois tipos de pessoas: pessoas sábias que sabem que são tolas e tolas que pensam que são sábias."
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="assets/img/testimonial-4.png" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">SØren Kierkegaard</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        "A vida só pode ser compreendia, olhando-se para trás; mas só pode ser vivida, olhando-se para frente"
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Cursos
              </h3>
              <p class="subtitle-a">
                Alguns cursos interessantes que podem te ajudar em algumas áreas!
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="https://skills.github.com/"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Programação</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="https://skills.github.com/">Github</a></h3>
                <p class="card-description">
                  Um curso muito bom, do próprio Github, que pode te ajudar a compartilhar o projeto com seus colegas ou até mesmo não perder os progressos. 
                  <br><a href="https://skills.github.com/">https://skills.github.com/</a>
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> ~tempo
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="https://b7web.com.br/"><img src="assets/img/post-2.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Programação</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="https://b7web.com.br/">B7Web</a></h3>
                <p class="card-description">
                  Um curso pago, mas que vale totalmente o preço gasto. Irá te ensinar desde a ser um programador front-end, ou até mesmo um fullstack preparado.
                  <br><a href="https://b7web.com.br/">https://b7web.com.br/ </a>
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> ~tempo
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="https://www.practical-ui.com/"><img src="assets/img/post-3.png" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="https://www.practical-ui.com/">Interface de Usuário na prática</a></h3>
                <p class="card-description">
                  Curso muito bom, totalmente focado na interface do usuário e como melhora-lá em casos mais complexos e casos mais simples. <br>
                  É um curso pago, mas acredito que valha o valor e o tempo gasto. 
                  <br> <a href="https://www.practical-ui.com/">https://www.practical-ui.com/ </a>
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> ~tempo
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Me envie uma mensagem!
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Carregando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Sua mensagem foi enviada e será respondida em breve, obrigado.</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Enviar mensagem</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Entre em contato
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Vou fazer o possível para responder o mais rápido possível.
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span> Rua Recife 264, Jd. São Jorge – Nova Odessa</li>
                        <li><span class="bi bi-phone"></span> (19) 99407-3204</li>
                        <li><span class="bi bi-envelope"></span> andreyolivattogarcia@garcia.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://instagram.com/imtheandrey"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Andrey O. Garcia</strong> Todos os Direitos Reservados</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>