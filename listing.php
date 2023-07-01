<?php
require 'vendor/autoload.php';

\EasyRdf\RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
\EasyRdf\RdfNamespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
\EasyRdf\RdfNamespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
\EasyRdf\RdfNamespace::set('owl', 'http://www.w3.org/2002/07/owl#');
\EasyRdf\RdfNamespace::set('dc', 'http://purl.org/dc/terms/');
\EasyRdf\RdfNamespace::set('vahicle', 'https://example.org/schema/vahicle');
\EasyRdf\RdfNamespace::setDefault('og');

$sparql_jena = new \EasyRdf\Sparql\Client('http://localhost:3030/data_mobil/sparql');

$sparql_query = '
SELECT ?m ?title ?class ?designer ?abstract ?thumbnail ?manufacturer ?homepage ?link ?no WHERE {
  ?m rdf:type vahicle:car;
    foaf:name ?title;
    vahicle:abstract ?abstract;
    vahicle:class ?class;
    vahicle:designer ?designer;
    vahicle:thumbnail ?thumbnail;
    vahicle:manufacturer ?manufacturer;
    foaf:homepage ?link;
    vahicle:number ?no.
} 
ORDER BY ?title
LIMIT 100';
$result = $sparql_jena->query($sparql_query);
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <!--- basic page needs
    ================================================== -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>listing SpeedCars</title>

  <script>
    document.documentElement.classList.remove('no-js');
    document.documentElement.classList.add('js');
  </script>

  <!-- CSS
    ================================================== -->
  <link rel="stylesheet" href="assets/css/vendor.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">


  <!-- favicons
    ================================================== -->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
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
  <div id="page" class="s-pagewrap">
    <?php include 'header.php' ?>
    <!-- # site-content
        ================================================== -->
    <section id="content" class="s-content">
      <!-- pageheader -->
      <div class="s-pageheader">
        <div class="row">
          <div class="column large-12">
            <h1 class="page-title">
              <span class="page-title__small-type"></span>
              List Cars
            </h1>
          </div>
        </div>
      </div> <!-- end s-pageheader-->

      <!--  masonry -->
      <div id="bricks" class="bricks">
        <div class="masonry">
          <div class="bricks-wrapper" data-animate-block>
            <div class="grid-sizer">
              <?php
              foreach ($result as $row) {
                $text = substr($row->abstract, 0, 200);
                $detail = [
                  'no' => $row->no,
                  'thumbnail' => $row->thumbnail,
                  'judul' => $row->title,
                  'designer' => $row->designer,
                  'abstract' => $text,
                ];
              ?>
                <article class="brick entry" data-animate-el>
                  <div class="entry__thumb">
                    <a href="details.php?p=<?= $detail['no'] ?>" class="thumb-link">
                      <img style="width: 400px;" src="<?= $detail['thumbnail'] ?>" alt="">
                    </a>
                  </div> <!-- end entry__thumb -->

                  <div class="entry__text">
                    <div class="entry__header">
                      <a href="details.php?p=<?= $detail['no'] ?>">
                        <h1 class="entry__title">
                          <?= $detail['judul'] ?>
                        </h1>
                      </a>

                    </div>
                    <div class="entry__excerpt">
                      <p>
                        <?= $detail['abstract'] ?>....
                      </p>
                    </div>
                    <a class="entry__more-link" href="details.php?p=<?= $detail['no'] ?>">Read More</a>
                  </div> <!-- end entry__text -->
                </article> <!-- end article -->
              <?php
              }
              ?>
            </div>
          </div> <!-- end bricks-wrapper -->
        </div> <!-- end masonry-->

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