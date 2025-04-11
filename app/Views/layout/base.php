<?php
//const PAGINA = $_SERVER['REQUEST_URI'];
$pagina = $_SERVER['REQUEST_URI'];
$pagina = explode("/", $pagina);
$pagina = $pagina[2];
//var_dump($pagina);
//exit();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?= $this->e($title) ?></title>
    <meta name="Description" content="<?= $this->e($description) ?>" />
    <meta name="Keywords" content="" />
    <link rel="alternate" href="https://www..com.br/" hreflang="pt-br" />
    <link rel="canonical" href="https://www..com.br/" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.svg">
    <meta name="robots" content="follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="AMZ|MP - Agência de publicidade">
    <link href="https://amzmp.com.br/" rel="publisher" />
    <meta name="theme-color" content="#000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- Open Graph !-->
    <meta property="og:title" content="" />
    <meta property="og:url" content="https://www..com.br/" />
    <meta property="og:type" content="company" />
    <meta property="og:image" content="https://www..com.br/assets/og-icon.png" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <!-- Styles !-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= APP_URL ?>/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.0/dist/cookieconsent.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css" integrity="sha512-UiVP2uTd2EwFRqPM4IzVXuSFAzw+Vo84jxICHVbOA1VZFUyr4a6giD9O3uvGPFIuB2p3iTnfDVLnkdY7D/SJJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- GTM !-->
    <?php include('include/gtm-header.php'); ?>
    <!-- Scripts preload -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- LOADER
    <div class="loader-page-container">
        <div class="loader-container">
            <img src="<?= APP_URL ?>/assets/images/logo.svg" alt="" class="logoMenu">
            <div class="loader-wrap">
                <div class="loader loader-3">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    !-->
<!--
    <header class="menu box-shadow" id="menuResponsible bg-white">
        <div class="container">
          <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
            <h1 class="fs-3 mb-2 mb-md-0">🎉 17 Anos de AMZMP</h1>
             <nav>
               <ul class="nav">
                <li class="nav-item"><a class="nav-link text-white" href="#carouselAniversarios">Aniversários</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#carouselLembrancas">Lembranças</a></li>
               </ul>
            </nav>
          </div>
    </header>
-->

        </div>
        <div class="close-drop" style="display: none;"></div>
    </header>
    <div id="fakeHeader"></div>

    <?= $this->section('content') ?>

    <footer>
        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js" integrity="sha512-Y/GIYsd+LaQm6bGysIClyez2HGCIN1yrs94wUrHoRAD5RSURkqqVQEU6mM51O90hqS80ABFTGtiDpSXd2O05nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.0/dist/cookieconsent.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js" integrity="sha512-UU0D/t+4/SgJpOeBYkY+lG16MaNF8aqmermRIz8dlmQhOlBnw6iQrnt4Ijty513WB3w+q4JO75IX03lDj6qQNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

    <script src="<?= APP_URL ?>/assets/js/scripts.js"></script>

    <!-- <script src="<?= APP_URL ?>/assets/js/whatsapp-lead.js"></script> -->
    <script src="<?= APP_URL ?>/assets/js/cookies-popup.js"></script>


      <script>
       const video = document.getElementById('introVideo');
       const unmuteButton = document.getElementById('unmuteButton');
       const skipButton = document.getElementById('skipButton');
  
          unmuteButton.addEventListener('click', function() {
            if(video.muted) {
              video.muted = false;
              this.innerHTML = '<i class="fas fa-volume-up"></i> Som ativado';
            } else {
              video.muted = true;
              this.innerHTML = '<i class="fas fa-volume-mute"></i> Ativar som';
            }
          });
        
          skipButton.addEventListener('click', function() {
            fadeOutVideo();
          });
        
          video.addEventListener('ended', function() {
            fadeOutVideo();
          });
  
   
    function fadeOutVideo() {
      video.style.opacity = '0';
      document.querySelector('.video-overlay').style.opacity = '0';
      document.querySelector('.video-controls').style.opacity = '0';
      document.querySelector('.scroll-down').style.opacity = '0';
      
      setTimeout(function() {
        window.scrollTo({
          top: window.innerHeight,
          behavior: 'smooth'
        });
      }, 1000);
    }
  
  
    video.loop = false;
  </script>
  
      <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
      
      <script>
    AOS.init({
      once: false, 
      mirror: true, 
      duration: 800, 
      easing: 'ease-in-out' 
    });
  </script>
  
  <script>
    
    document.querySelectorAll('.thumbnail').forEach(thumb => {
      thumb.addEventListener('click', function() {
        this.closest('.thumbnails').querySelectorAll('.thumbnail').forEach(t => {
          t.classList.remove('active');
        });
        this.classList.add('active');
  
        const mainSlide = this.closest('.slider-container').querySelector('.main-slide');
        mainSlide.querySelector('img').src = this.dataset.target;
        mainSlide.querySelector('.slide-caption').textContent = this.dataset.caption;
      });
    });
  </script>
  </script>
  
  <script>
    const thumbnails = document.querySelectorAll('.thumb');
    const carousel = document.querySelector('#carouselExample');
  
    carousel.addEventListener('slid.bs.carousel', function (event) {
      thumbnails.forEach((thumb, index) => {
        if (index === event.to) {
          thumb.classList.add('border-primary');
        } else {
          thumb.classList.remove('border-primary');
        }
      });
    });
  </script>

</body>

</html>