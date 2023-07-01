<?php
require 'vendor/autoload.php';

\EasyRdf\RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
\EasyRdf\RdfNamespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
\EasyRdf\RdfNamespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
\EasyRdf\RdfNamespace::set('owl', 'http://www.w3.org/2002/07/owl#');
\EasyRdf\RdfNamespace::set('dbp', 'http://dbpedia.org/property/');
\EasyRdf\RdfNamespace::set('dbo', 'http://dbpedia.org/ontology/');
\EasyRdf\RdfNamespace::set('dbr', 'http://dbpedia.org/resource/');
\EasyRdf\RdfNamespace::set('geo', 'http://www.w3.org/2003/01/geo/wgs84_pos#');
\EasyRdf\RdfNamespace::set('dc', 'http://purl.org/dc/terms/');
\EasyRdf\RdfNamespace::set('vahicle', 'https://example.org/schema/vahicle');
\EasyRdf\RdfNamespace::setDefault('og');
$p = $_GET['p'];
$sparql_jena = new \EasyRdf\Sparql\Client('http://localhost:3030/data_mobil/sparql');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/wheel-500.jpg">
  <title>CAR GALERY</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>


  <!-- favicons
    ================================================== -->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->

  <?php include 'header.php' ?>

  <?php
  $sparql_query = '
    SELECT ?m ?maps ?manufacturer ?lat ?long ?thumbnail ?designer ?class ?abstract ?bodyStyle ?assembly ?title ?link ?no WHERE {
    ?m rdf:type vahicle:car;
    vahicle:manufacturer ?manufacturer;
    vahicle:designer ?designer;
    vahicle:abstract ?abstract;
    vahicle:bodyStyle ?bodyStyle;
    vahicle:assembly ?assembly;
    vahicle:class ?class;
    vahicle:thumbnail ?thumbnail;
    foaf:name ?title;
    vahicle:maps ?maps;
    foaf:homepage ?link;
    vahicle:number ?no.
    FILTER(?no = "' . $p . '").
    }
    LIMIT 100';
  $result = $sparql_jena->query($sparql_query);
  $detail = [];

  foreach ($result as $row) {
    $vahicle = \EasyRdf\Graph::newAndLoad($row->link);

    $detail = [
      'no' => $row->no,
      'judul' => $row->title,
      'class' => $row->class,
      'manufacturer' => $row->manufacturer,
      'abstract' => $row->abstract,
      'designer' => $row->designer,
      'bodyStyle' => $row->bodyStyle,
      'assembly' => $row->assembly,
      'thumbnail' => $row->thumbnail,
      'maps' => $row->maps,
    ];
    break;
  }

  ?>

  <div style="background-image:url(assets/images/CARS/wal-hasilcari.jpg);" class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <!-- <h6>Check Out Our listings</h6> -->
            <h2 style="color: white;">Detail Car</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="listing-page">
    <div class="container">
      <div class="row">
        <div class="col">
          <img style="margin-top: 22px; width: 1000px;" src="<?= $detail['thumbnail'] ?>">
        </div>
        <div class="col">
          <h1 style="line-height:1.5em"><?= $detail['judul'] ?></h1>
          <a href="author.php?p=<?= $detail['designer'] ?>">
            <h4 class="text-secondary">by: <?= $detail['designer'] ?></h4>
          </a>
          <br>
          <dt>Name :</dt>
          <dd><?= $detail['judul'] ?></dd>
          <dt>Manufacturer : </dt>
          <dd><?= $detail['manufacturer'] ?></dd>
          <dt>Assembly : </dt>
          <dd><?= $detail['assembly'] ?></dt>
          <dt>Body Style :</dt>
          <dd><?= $detail['bodyStyle'] ?></dd>
          <dt>Class : </dt>
          <dd><?= $detail['class'] ?></dd>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col"><br>
          <h3><b>Abstract</b></h3><br>
          <p><?= $detail['abstract'] ?></p>
        </div>
        <br>

        <!-- Map -->
        <iframe src="<?= $detail['maps'] ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ?>

  <!-- Scripts -->
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