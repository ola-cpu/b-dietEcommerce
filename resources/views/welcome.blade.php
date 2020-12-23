<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>b-diet</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


          <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      <!-- pour le carou -->

/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  color: #5a5a5a;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}


    </style>


     </head>
  <body>
    <header>
  
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/img1.jpg" alt="M" class="card-img-top">
        <div class="container">
          <div class="carousel-caption text-left">
            
            <p><a href="{{ route('products.index') }}" class="btn btn-success">Visiter la boutique!</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
       <img src="img/img2.jpg" alt="M" class="card-img-top">
        <div class="container">
          <div class="carousel-caption">
            
            <p><a href="{{ route('products.index') }}" class="btn btn-success">Visiter la boutique!</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/imgb.jpg" alt="M" class="card-img-top">
        <div class="container">
          <div class="carousel-caption text-right">
            
            <p><a href="{{ route('products.index') }}" class="btn btn-success">Visiter la boutique!</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="img/_DSC5036.JPG"> <title>Placeholder</title>
        <h2>Graine de chia</h2>
        <p>Ces petites graines sont extrêmement riches en oméga-3 mais aussi en oméga-6. Leur bonne teneur en fibres permet de lutter efficacement contre la constipation. C'est également un vivier de protéines, de calcium, de potassium, d'acide folique et d'antioxydants..</p>
        <p><a href="{{ route('products.index') }}" class="btn btn-success">Visiter la boutique!</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="img/_DSC5082.JPG"> <title>Placeholder</title>
        <h2>Spiruline</h2>
        <p>Un superaliment La spiruline est effectivement un concentré de nutriments. Elle est ainsi extrêmement riche en bêta-carotène, en fer, en vitamine B12, en vitamine E , en protéines, en minéraux et oligo-éléments ( calcium, phosphore, magnésium, zinc, cuivre).</p>
        <p><a href="{{ route('products.index') }}" class="btn btn-success">Visiter la boutique!</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        
        <img src="img/_DSC5084.JPG"> <title>Placeholder</title>
        <h2>Maca</h2>
        <p>Le maca est un puissant aphrodisiaque aussi bien pour les hommes que pour les femmes et permet de redonner du désir sexuel et d'accroître la libido. En d'autres termes, le maca est parfait pour les femmes frigides et les hommes souffrant de problèmes d'érection.</p>
        <p><a href="{{ route('products.index') }}" class="btn btn-success">Visiter la boutique!</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading" >MACA : <span class="text-muted">COMPOSITION</span></h2>
        <p class="lead">Elle est composée de 10 à 15% de protéines, 16 minéraux (essentiellement du potassium, du calcium, du phosphore et du souffre, mais aussi un peu de fer, de la manganèse, du sélénium, du cuivre, du zinc, et du magnésium…), 7 vitamines (B1, B2, B12, C, D3, E, P), ainsi que 19 acides aminés.</p>
      </div>
      <div class="col-md-5">
        <img src="img/Macadetails.JPG" alt="M" class="card-img-top">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Spiruline : <span class="text-muted">COMPOSITION</span></h2>
        <p class="lead">Contient du zinc, du sélénium, du manganèse, du fer, du cuivre, et du chrome et tous les minéraux (calcium, magnésium, sodium, potassium, phosphore).
</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/Spirulinedetails.JPG" alt="Spirulinedetails" class="card-img-top">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Graine de chia :<span class="text-muted">COMPOSITION</span></h2>
        <p class="lead">Les graines de chia sont naturellement riches en fibres alimentaires et en « bons gras ». Elles renferment notamment de 15 % à 17 % d'oméga-3 sous la forme d'acide alpha-linolénique (AAL). Les graines contiennent également de 5 % à 8 % d'acide gamma-linoléique (AGL), un oméga-6, ce qui ajoute à leur intérêt.</p>
      </div>
      <div class="col-md-5">
        <img src="img/GraineChiadetails.JPG" alt="GraineChiadetails" class="card-img-top">
      </div>
    </div>


                <div class="links " >
                    <a href="{{ route('products.index') }}" class="btn btn-success">Visiter la boutique!</a>
                </div>
    <hr class="featurette-divider">



    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2019-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Ouroboros</a></p>
  </footer>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>