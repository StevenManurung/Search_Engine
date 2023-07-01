<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

  <!--- basic page needs
    ================================================== -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SpeedCars</title>

  <script>
    document.documentElement.classList.remove('no-js');
    document.documentElement.classList.add('js');
  </script>

  <!-- CSS
    ================================================== -->
  <link rel="stylesheet" href="assets/css/vendor.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/owl.css">

  <!-- favicons
    ================================================== -->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="assets/images/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="assets/images/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">


  <!-- preloader
    ================================================== -->
  <div id="preloader">
    <div id="loader" class="dots-fade">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>


  <!-- page wrap
    ================================================== -->
  <div id="page" class="s-pagewrap ss-home">

    <?php include 'header.php' ?>

    <!-- # site-content
        ================================================== -->
    <section id="content" class="s-content">
      <!-- hero -->
      <div class="hero">
        <div class="hero__slider swiper-container">
          <div class="swiper-wrapper">
            <article class="hero__slide swiper-slide">
              <div class="hero__entry-image" style="background-image: url('assets/images/CARS/car1.jpg');"></div>
              <div class="hero__entry-text">
                <div class="hero__entry-text-inner">
                  <div class="hero__entry-meta">
                    <span class="cat-links">
                      <a href="listing.php">Inspiration</a>
                    </span>
                  </div>
                  <h2 class="hero__entry-title">
                    <a href="#">
                      Towards infinity and beyond
                    </a>
                  </h2>
                  <p class="hero__entry-desc">
                    Mobil adalah kendaraan darat yang digerakkan oleh tenaga mesin, beroda empat atau lebih, biasanya menggunakan
                    bahan bakar minyak ( bensin /solar ) untuk menghidupkan mesinnya.
                  </p>
                  <a class="hero__more-link" href="about.php">Read More</a>
                </div>
              </div>
            </article>
          </div> <!-- swiper-wrapper -->
          <div class="swiper-pagination"></div>
        </div> <!-- end hero slider -->

        <a href="#bricks" class="hero__scroll-down smoothscroll">
          <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></path>
          </svg>
          <span>Scroll</span>
        </a>
      </div> <!-- end hero -->


      <!--  masonry -->
      <div id="bricks" class="bricks">
        <div class="masonry">
          <div class="bricks-wrapper" data-animate-block>
            <div class="grid-sizer"></div>

            <article class="brick entry" data-animate-el>
              <div class="entry__thumb">
                <a href="#">
                  <img src="assets/images/thumbs/masonry/suv-fortuner.jpg" alt="">
                </a>
              </div> <!-- end entry__thumb -->

              <div class="entry__text">
                <div class="entry__header">
                  <h1 class="entry__title"><a href="listing.php">SUV Car</a></h1>
                </div>
                <div class="entry__excerpt">
                  <p>
                    Mobil SUV atau Sport Utility Vehicle adalah mobil yang termasuk dalam jenis sport. Terlihat dari desain eksterior
                    yang mengusung kombinasi tipe penumpang dan off-road.
                  </p>
                </div>
              </div> <!-- end entry__text -->
            </article> <!-- end article -->

            <article class="brick entry" data-animate-el>
              <div class="entry__thumb">
                <a href="#">
                  <img src="assets/images/thumbs/masonry/sport-lamorghini.jpg" alt="">
                </a>
              </div> <!-- end entry__thumb -->

              <div class="entry__text">
                <div class="entry__header">
                  <h1 class="entry__title"><a href="listing.php">Sports Car</a></h1>
                </div>
                <div class="entry__excerpt">
                  <a href="listing.php"></a>
                  <p>
                    Mobil sport adalah mobil yang mengutamakan pengendalian dan performanya. Pada umumnya mobil sport berwujud coupe 2 pintu,
                    namun aci pula yang merupakan versi kemampuan tinggi dari sedan atau hatchback.
                  </p>
                </div>
              </div> <!-- end entry__text -->
            </article> <!-- end article -->

            <article class="brick entry" data-animate-el>
              <div class="entry__thumb">
                <a href="#">
                  <img src="assets/images/thumbs/masonry/electic-tesla.jpg" alt="">
                </a>
              </div> <!-- end entry__thumb -->

              <div class="entry__text">
                <div class="entry__header">

                  <h1 class="entry__title"><a href="#">Elecric Car</a></h1>
                </div>
                <div class="entry__excerpt">
                  <p>
                    Mobil listrik adalah mobil yang digerakkan dengan motor listrik, menggunakan energi listrik yang disimpan dalam baterai
                    atau tempat penyimpan energi lainnya.
                  </p>
                </div>
              </div> <!-- end entry__text -->
            </article> <!-- end article -->

            <article class="brick entry" data-animate-el>
              <div class="entry__thumb">
                <a href="#">
                  <img src="assets/images/thumbs/masonry/crossover-hrv.jpg" alt="">
                </a>
              </div> <!-- end entry__thumb -->

              <div class="entry__text">
                <div class="entry__header">
                  <h1 class="entry__title"><a href="#">Crossover Car</a></h1>
                </div>
                <div class="entry__excerpt">
                  <p>
                    Mobil crossover adalah gabungan desain hatchback dengan SUV yang menjadi trend dalam masyarakat saat ini. Dengan adanya desain
                    SUV yang bermunculan dan digemari dalam pasar karena kegagahannya, hatchback dengan desainnya yang trendy
                  </p>
                </div>
              </div> <!-- end entry__text -->
            </article> <!-- end entry -->

            <article class="brick entry" data-animate-el>
              <div class="entry__thumb">
                <a href="#">
                  <img src="assets/images/thumbs/masonry/convertible-Ferrari_488_Pista_Spider.jpg" alt="">
                </a>
              </div> <!-- end entry__thumb -->

              <div class="entry__text">
                <div class="entry__header">
                  <h1 class="entry__title"><a href="#">Convertible Car</a></h1>
                </div>
                <div class="entry__excerpt">
                  <p>
                    Mobil atap terbuka, mobil konvertibel, atau kabriolet adalah mobil penumpang yang dapat dikendarai dengan atau tanpa atap pada tempatnya.
                    Metode mencabut dan menyimpan atap bervariasi antar model.
                  </p>
                </div>
              </div> <!-- end entry__text -->
            </article> <!-- end article -->

            <article class="brick entry" data-animate-el>
              <div class="entry__thumb">
                <a href="#">
                  <img src="assets/images/thumbs/masonry/sedan-bmw_series3.jpg" alt="">
                </a>
              </div> <!-- end entry__thumb -->

              <div class="entry__text">
                <div class="entry__header">
                  <h1 class="entry__title"><a href="#">Sedan Car</a></h1>
                </div>
                <div class="entry__excerpt">
                  <p>
                    Mobil Sedan adalah sebuah jenis mobil penumpang dengan 3 macam konfigurasi dengan Pilar A, B, dan C. Bagian untuk penumpang terdiri dari 2 baris tempat duduk dengan
                    kapasitas sampai dengan 5 orang.
                  </p>
                </div>
              </div> <!-- end entry__text -->
            </article> <!-- end article -->

            <article class="brick entry" data-animate-el>
              <div class="entry__thumb">
                <a href="#">
                  <img src="assets/images/thumbs/masonry//mpv-alphard.jpg" alt="">
                </a>
              </div> <!-- end entry__thumb -->

              <div class="entry__text">
                <div class="entry__header">
                  <h1 class="entry__title"><a href="#">MPV Car</a></h1>
                </div>
                <div class="entry__excerpt">
                  <p>
                    Mobil MPV (Multi Purpose Vehicle) adalah mobil yang ditujukan sebagai mobil untuk keluarga. Oleh karena itulah, mobil MPV pada umumnya memiliki kabin yang
                    luas serta dapat mengangkut banyak penumpang mulai dari 7 sampai 9 orang penumpang.
                  </p>
                </div>
              </div> <!-- end entry__text -->
            </article> <!-- end article -->

            <article class="brick entry" data-animate-el>
              <div class="entry__thumb">
                <a href="#">
                  <img src="assets/images/thumbs/masonry/offroad-Jeep_Wrangler.jpg" alt="">
                </a>
              </div> <!-- end entry__thumb -->

              <div class="entry__text">
                <div class="entry__header">
                  <h1 class="entry__title"><a href="#">Off Road Car</a></h1>
                </div>
                <div class="entry__excerpt">
                  <p>
                    Kendaraan off-road kadang-kadang disebut sebagai kendaraan darat atau petualangan dianggap semua jenis kendaraan yang mampu mengemudi di dalam dan di luar
                    permukaan beraspal atau kerikil.
                  </p>
                </div>
              </div> <!-- end entry__text -->
            </article> <!-- end article -->

          </div> <!-- end bricks-wrapper -->
        </div> <!-- end masonry-->
      </div> <!-- end bricks -->
    </section> <!-- end s-content -->

    <?php include 'footer.php' ?>

    <!-- Java Script
    ================================================== -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>