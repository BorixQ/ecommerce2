<!DOCTYPE html>
<html>

<head>

  @include('home.css')

</head>

<body>  
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')

  </div>

<!-- client section -->
<section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Comentarios de nuestros clientes
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Sideral Carreon
                  </h5>
                  <h6>
                    Comprador de la tienda
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Cuando un cliente está satisfecho, lo recomienda a sus amigos y familiares. Por eso, es importante que te esfuerces por ofrecer un buen servicio al cliente. Cuando un cliente está satisfecho, lo recomienda a sus amigos y familiares. Por eso, es importante que te esfuerces por ofrecer un buen servicio al cliente. Cuando un cliente está satisfecho, lo recomienda a sus amigos y familiares. Por eso, es importante que te esfuerces por ofrecer un buen servicio al cliente.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Raul Diaz
                  </h5>
                  <h6>
                    Comprador de la tienda
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                La entrega fue rapida incluso en estos tiempos de pandemia, el producto llego en perfectas condiciones y el precio fue muy bueno. La entrega fue rapida incluso en estos tiempos de pandemia, el producto llego en perfectas condiciones y el precio fue muy bueno. La entrega fue rapida incluso en estos tiempos de pandemia, el producto llego en perfectas condiciones y el precio fue muy bueno.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Brad Johns
                  </h5>
                  <h6>
                    Comprador de la tienda
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                La calidad del producto es excelente, el precio es muy bueno y la entrega fue rapida. La calidad del producto es excelente, el precio es muy bueno y la entrega fue rapida. La calidad del producto es excelente, el precio es muy bueno y la entrega fue rapida.
              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

    @include('home.contact')

<!-- end contact section -->


<!-- info section -->

@include('home.footer')

<!-- end info section -->
</body>

</html>