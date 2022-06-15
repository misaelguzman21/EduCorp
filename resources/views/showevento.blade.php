@extends('layouts.main')
@section("title", "Evento")

@section('content')


                        <h1  class="text-center p-4">
                            {{$evento->nombre}}
                        </h1>

                        <hr>
                        
                        
    
                        


                        <!doctype html>
                        <html lang="en">
                          <head>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <meta name="description" content="">
                            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
                            <meta name="generator" content="Hugo 0.84.0">
                            <title>Carousel Template · Bootstrap v5.0</title>
                        
                            <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
                        
                            
                        
                            <!-- Bootstrap core CSS -->
                        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
                        
                            <style>
                              .bd-placeholder-img {
                                font-size: 1.125rem;
                                text-anchor: middle;
                                -webkit-user-select: none;
                                -moz-user-select: none;
                                user-select: none;
                              }
                        
                              @media (min-width: 768px) {
                                .bd-placeholder-img-lg {
                                  font-size: 3.5rem;
                                }
                              }
                            </style>
                        
                            
                            <!-- Custom styles for this template -->
                            <link href="carousel.css" rel="stylesheet">
                          </head>
                          <body>
                            
                        
                        <main>
                        
                            <div id="carouselExampleControls"  class="carousel slide" data-bs-ride="carousel">
                                <div  class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="https://jamtechcorp.com/blog/wp-content/uploads/2019/02/eventos-corporativos1.jpg"class="img-fluid" style="border-radius: 1rem 0 0 1rem;" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="https://yaydoo.com/wp-content/uploads/2019/06/10-pasos-organizar-evento-corporativo.jpg"class="img-fluid" style="border-radius: 1rem 0 0 1rem;" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="https://mdcmagazine.com/image_large_2/cmo-evaluar-un-evento.jpg" class="img-fluid" style="border-radius: 1rem 0 0 1rem;"class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button  class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                          <!-- Marketing messaging and featurettes
                          ================================================== -->
                          <!-- Wrap the rest of the page in another container to center all the content. -->
                        
                          <div class="container marketing">
                        
                            <!-- Three columns of text below the carousel -->
                         
                        
                            <!-- START THE FEATURETTES -->
                        
                           
                            <hr class="featurette-divider">
                        
                            <div class="row featurette">
                              <div class="col-md-7 order-md-2">
                                <h2 class="featurette-heading">Descripcion: <span class="text-muted">{{$evento->descripcion}}</span></h2>
                              </div>
                              <div class="col-md-5 order-md-1">
                                
                                <img src="https://cdn.businessinsider.es/sites/navi.axelspringer.es/public/styles/bi_570/public/media/image/2021/08/buscar-trabajo-2449151.jpg?itok=5vcBN2an" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" width="500" height="500" class="d-block w-100" alt="..." >
                              </div>
                            </div>
                            <hr class="featurette-divider">
                            
                        
                            <div class="row featurette">
                              <div class="col-md-7">
                                <h2 class="featurette-heading">Capacidad: <span class="text-muted"><strong>{{$evento->capacidad}}</span></h2>
                                <p class="lead"> </strong></p>
                              </div>
                              <div class="col-md-5">
                                <img src="https://media.istockphoto.com/vectors/empty-fuel-meter-vector-id1178050005?k=20&m=1178050005&s=612x612&w=0&h=3WuKZdYpXyUfZU4NReh67igWFIXABgQbzxVrpt-uPCc=" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" width="500" height="500" class="d-block w-100" alt="..." >
                        
                              </div>
                            </div>
                        
                            <hr class="featurette-divider">
                        
                            <div class="row featurette">
                              <div class="col-md-7 order-md-2">
                                <h2 class="featurette-heading">Costo: <span class="text-muted">${{$evento->costo}}</span></h2>
                              </div>
                              <div class="col-md-5 order-md-1">
                                <img src="https://ps.w.org/cost-of-goods-for-woocommerce/assets/icon-256x256.png?rev=2583813" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" width="500" height="500" class="d-block w-100" alt="..." >
                        
                              </div>
                            </div>
                        
                            <hr class="featurette-divider">
                        
                            <div class="row featurette">
                              <div class="col-md-7">
                                <h2 class="featurette-heading">Duracion <span class="text-muted">{{$evento->duracion}}Hr</span></h2>
                              </div>
                              <div class="col-md-5">
                                <img src="https://img.freepik.com/vector-gratis/concepto-tiempo_24911-16705.jpg?w=2000" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" width="500" height="500" class="d-block w-100" alt="..." >
                        
                              </div>
                            </div>
                            <hr class="featurette-divider">
                        
                            <div class="row featurette">
                              <div class="col-md-7 order-md-2">
                                <h2 class="featurette-heading">Localizacion: <span class="text-muted">{{$evento->localizacion}}</span></h2>
                              </div>
                              <div class="col-md-5 order-md-1">
                                <img src="https://img.freepik.com/vector-gratis/gps-mapa-ciudad-navegacion-calles-pin-gps-mapa-ilustracion-direccion-ruta-cartografia-ciudad_41737-236.jpg?w=2000" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" width="500" height="500" class="d-block w-100" alt="..." >
                        
                              </div>
                            </div>
                        
                            <hr class="featurette-divider">
                        
                            <!-- /END THE FEATURETTES -->
                        
                          </div><!-- 
                            /.container -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="{{route('evento.destroy',$evento)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit">
                                        Borrar
                                    </button>
                                    
                                    </form>
    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="" method="POST">
                            
                                    
                                    <button class="btn btn-outline-warning" type="submit">
                                        Agregar Invitado
                                    </button>
                                    </form>
    
                                </div>
                            </div>
                        
                        
                          <!-- FOOTER -->
                          
                        </main>
                        
                        
                            <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
                        
                              
                          </body>
                        </html>
                        
<style>

    body {
        background: #152733;
        margin-top: 20px;
    }
    body {
  
  padding-bottom: 3rem;
  
  color: #ffdede;
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
  right: 0;
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



/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}

/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  
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
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
/* rtl:end:ignore */


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  /* rtl:remove */
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


}

    
    .btn-secondary {

        margin-bottom: 3%;
    
    }
    
    footer {
    background-color: #afbabc;
    padding: 30px;
    text-align: center;
    color: #F4F7FD
    }

.form-content textarea:hover,
.form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up {
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}

.invalid-feedback {
    color: #ff606e;
}

.valid-feedback {
    color: #2acc80;
}
</style>




@endsection