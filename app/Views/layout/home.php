<?php $this->layout('base', ['title' => '17 anos de AMZMP', 'description' => 'Homenagem de aniversário']) ?>


<section class="fullscreen-video">
  <video autoplay muted loop id="introVideo">
    <source src="assets/video/memorias.mp4" type="video/mp4">
  </video>
  
  <div class="video-overlay"></div>

  <div class="video-controls">
    <button id="unmuteButton" class="control-button">
      <i class="fas fa-volume-mute"></i> Ativar som
    </button>
    <button id="skipButton" class="control-button">
      <i class="fas fa-forward"></i> Pular intro
    </button>
  </div>
  
  <div class="scroll-down">
    <div class="scroll-arrow">↓</div>
    <div class="scroll-text">Role para continuar</div>
  </div>
</section>

<section class="text-center py-5 bg-light">
  <div class="container">
    <img src="assets/images/lembrançasbruno.jpg" class="img-fluid rounded mb-4" style="max-width: 500px;" alt="Bruno na Disney">
    <h1 class="display-4">Tudo começou na mente desse jovem.</h1>
    <p class="lead fst-italic">O caminho era turvo e embaçado, mas no fim tudo deu certo.</p>
  </div>
</section>

<!-- Carrossel Aniversários -->
<section class="slider-section">
  <div class="container">
    <h2 class="slider-title">Nossos Aniversários 🎂</h2>
    <div class="slider-container">
      <div class="main-slide">
        <img src="assets/images/5anos-amz.jpg" alt="Aniversário de 5 anos da amz">
        <div class="slide-caption">Aniversário de 5 anos da amz</div>
      </div>
      
      <div class="thumbnails">
        <?php
        $aniversarios = [
          '5anos-amz.jpg' => 'Aniversário de 5 anos da amz',
          '6anos-amz.jpg' => 'Aniversário de 6 anos da amz',
          '8anos-amz.jpg' => 'Aniversário de 8 anos da amz',
          '9anos-amz.jpg' => 'Aniversário de 9 anos da amz',
          '10anos-amz.jpg' => 'Aniversário de 10 anos da amz',
          '11anos-amz.jpg' => 'Aniversário de 11 anos da amz',
          '12anos-amz.jpg' => 'Aniversário de 12 anos da amz',
          '15anos-amz.jpg' => 'Aniversário de 15 anos da amz',
          '16anos-amz.jpg' => 'Aniversário de 16 anos da amz'
        ];
        
        $first = true;
        foreach ($aniversarios as $file => $caption): ?>
          <div class="thumbnail <?= $first ? 'active' : '' ?>" 
               data-target="assets/images/<?= $file ?>"
               data-caption="<?= $caption ?>">
            <img src="assets/images/<?= $file ?>" alt="<?= $caption ?>">
            <div class="thumbnail-caption"><?= $caption ?></div>
          </div>
        <?php 
        $first = false;
        endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Carrossel Lembranças -->
<section class="slider-section">
  <div class="container">
    <h2 class="slider-title">Tantas lembranças que vêm e vão...</h2>
    <div class="slider-container">
      <div class="main-slide">
        <img src="assets/images/carnaval-2012.jpg" alt="Carnaval 2012">
        <div class="slide-caption">Carnaval 2012</div>
      </div>
      
      <div class="thumbnails">
        <?php
        $lembrancas = [
          'carnaval-2012.jpg' => 'Carnaval 2012',
          'natal-2013.jpg' => 'Natal 2013',
          'pascoa-2014.jpg' => 'Páscoa 2014',
          'halloween2015.jpg' => 'Halloween 2015',
          'revistaviva2016.jpg' => 'Revista Viva 2016',
          'redetv.jpg' => 'Visita à RedeTV',
          '19x7.jpg' => '19x7 – Amasso',
          'celsoportiolli.jpg' => 'Dança gatinho, dança (Sei que isso não é do Portiolli kkk)',
          'todahoraehora.jpg' => 'Toda hora é hora de um fifinha',
          'cinepolisehopihari.jpg' => 'Cinépolis e Hopi Hari',
          'diapublicitario.jpg' => 'Dia do Publicitário',
          'lembranças.jpg' => 'O estilo corre nas veias desse homem',
          'lembranças2.jpg' => 'Apenas uma vaca',
          'lembranças3.jpg' => 'Um monte de presente',
          'lembranças4.jpg' => 'Marcão segurando um minion',
          'lembranças5.jpg' => 'Um mosaico de memórias',
          'halloween2018.jpg' => 'Halloween 2018'
        ];
        
        $first = true;
        foreach ($lembrancas as $file => $caption): ?>
          <div class="thumbnail <?= $first ? 'active' : '' ?>" 
               data-target="assets/images/<?= $file ?>"
               data-caption="<?= $caption ?>">
            <img src="assets/images/<?= $file ?>" alt="<?= $caption ?>">
            <div class="thumbnail-caption"><?= $caption ?></div>
          </div>
        <?php 
        $first = false;
        endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-white">
  <div class="container">
    <div class="text-center mx-auto" style="max-width: 700px;">
      <p class="fs-5 mb-4">
        Ao longo desses anos todos, muita coisa mudou… mas algo ficou: as lembranças. Cada aniversário, cada momento registrado aqui foi marcante de um jeito único. Não é só sobre o tempo passando, é sobre tudo que foi construído com o tempo.
      </p>
      <p class="fs-5 mb-4">
        Deve ser doido olhar pra trás e perceber o quanto já rolou. Foram conquistas, risadas, histórias incríveis. Tanta história que a amz foi construindo ao longo do tempo, tantas lembranças que ela guardou com carinho em cada passo da jornada...
      </p>
      <p class="fs-5 mb-4">
        Eu espero estar com vocês nas próximas :)
      </p>
      <p class="fs-5 fst-italic text-muted">com carinho,<br><strong>Davi :)</strong></p>
    </div>
  </div>
</section>