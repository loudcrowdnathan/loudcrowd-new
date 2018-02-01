<!DOCTYPE html>
  <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Loud Crowd Fullpage Website</title>

      <!-- LESS -->
      <link href="/Resources/LESS" rel="stylesheet">

      <!-- Fontawesome -->
      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    </head>
      <body translate="no" >
        <header>
        <div class="header-top clearfix">
          <h1 class="l-left"><a href="#firstSection"><img src="/img/logo-white-emblem.png" /></a></h1>
          <span class="l-right menu" onclick="openNav()">&#9776; MENU</span>
        </div>
        @include('partials._menu')
      </header>
      <div id="fullpage">
        <section class="vertical-scrolling section-one">
          <h2 class="highlight">We are a digital marketing & creative agency offering a<br /> range of web & SEO solutions for companies of all sizes.</h2>
          <h3>This is the first section</h3>
          <div class="scroll-icon">
            <p>Get in touch</p>
            <a href="#fifthSection/1" class="icon-up-open-big"></a>
          </div>
        </section>
        <section class="vertical-scrolling section-two">
          <div class="video-section">
            <video autoplay loop muted class="banner_video" poster="/img/logo-white-emblem.png">
              <source src="/videos/rain.mp4" type="video/mp4">
            </video>
          </div>
          <h2>fullPage.js</h2>
          <h3>This is the second section</h3>
        </section>
        <section class="vertical-scrolling section-three">
          <h2>fullPage.js</h2>
          <h3>This is the third section</h3>
        </section>
        <section class="vertical-scrolling section-four">
          <h2>fullPage.js</h2>
          <h3>This is the fourth section</h3>
        </section>
        <section class="vertical-scrolling section-five">
          <div class="horizontal-scrolling">
            <h2>fullPage.js</h2>
            <h3>This is the fifth section and it contains the first slide (actually section == first slide)</h3>
          </div>
          <div class="horizontal-scrolling section-six">
            <h2>fullPage.js</h2>
            <h3>This is the second slide</h3>
            <p class="end">Thank you!</p>
          </div>
        </section>
      </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js'></script>
    <script src='/js/vertical-scroll.js'></script>
    <script src='/js/overlay-menu.js'></script>
  </body>
</html>
