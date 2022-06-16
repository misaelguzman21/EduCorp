@extends('layouts.main')
@section("title", "Detalle participante")

@section('content')

@if(session('message'))

@php
    $message = session('message');
    $msgClass = ($message["type"] === "success") ? "success" : "danger";
@endphp

<div class="alert alert-{{ $msgClass }}">
    {{ $message["text"] }}
</div>

@endif

<h2 class="mb-5"><?php echo($participant->nombre); ?></h2>

<div class="row mt-4">

<div class="col">

    <ul class="list-group list-group-flush details-list rounded-3 mt-4">
        <li class="list-group-item">
            <strong class="me-2">Empresa:</strong>
            <span>{{ $participant->empresa }}</span>
        </li>
        <li class="list-group-item">
            <strong class="me-2">Estado:<strong>
            <span>{{ $participant->estado }}</span>
        </li>
        <li class="list-group-item">
            <strong class="me-2">Correo electrónico:</strong>
            <span>{{ $$participant->email }}</span>
        </li>
        <li class="list-group-item">
            <strong class="me-2">Teléfono:</strong>
            <span>{{ $participant->telefono }}</span>
        </li>
    </ul>

    <div class="keywords mt-5">

        @foreach($book->categories as $category)

            <span class="badge rounded-pill px-3 py-2 me-2">
                {{ $category->name }}
            </span>

        @endforeach

    </div>

</div>

</div>

@endsection
                        
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