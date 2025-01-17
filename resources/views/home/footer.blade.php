<section class="info_section  layout_padding2-top">
  <div class="social_container">
    <div class="social_box">
      <a href="">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-youtube" aria-hidden="true"></i>
      </a>
    </div>
  </div>
  <div class="info_container ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <h6>
            Acerca de nosotros
          </h6>
          <p>
            Somos una tienda online de diversos productos, desde ropa, accesorios, tecnología, entre otros.
          </p>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_form ">
            <h5>
              Correo Electronico
            </h5>
            <form action="#">
              <input type="email" placeholder="Enter your email">
              <button>
                Suscribete
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <h6>
            Necesitas Ayuda
          </h6>
          <p>
            Contactanos a través de nuestro correo electronico o número de teléfono.
          </p>
        </div>
        <div class="col-md-6 col-lg-3">
          <h6>
            Contactanos
          </h6>
          <div class="info_link-box">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span> Calle Monterrey 208 </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>+51 966655874</span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span> pepestore@gmail.com</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer section -->
  <footer class=" footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Web Tech Knowledge</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

</section>


<script>
  function confirmation(ev) {
    ev.preventDefault();

    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);

    swal({
        title: "Are you sure you want to delete this?",
        text: "This change will be permanent",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })

      .then((willCancel) => {
        if (willCancel) {
          window.location.href = urlToRedirect;
        }
      });

  }
</script>

<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<script src="{{ asset('js/custom.js') }}"></script>