<!--footer-->
<section class="footer p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h5 class="font-weight-bold">Quic Link</h5>
        <ul class="list-unstyled mt-4">
          <li><a href="index.php">Home</a></li>
          <hr class="line" />
          <li><a href="work.php">How it Works</a></li>
          <hr class="line" />
          <li><a href="pricing.php">Pricing</a></li>
          <hr class="line" />
          <li><a href="help.php">Help</a></li>
          <hr class="line" />
          <li><a href="order.php">Post Your Order</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="font-weight-bold">Service</h5>
        <ul class="list-unstyled mt-4">
          <li><a href="index.html">Laundry</a></li>
          <hr class="line" />
          <li><a href="#">Painting</a></li>
          <hr class="line" />
          <li><a href="#">Mechanic</a></li>
          <hr class="line" />
          <li><a href="#">Wash</a></li>
          <hr class="line" />
          <li><a href="#">Electricians</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="font-weight-bold">Our Branches</h5>
        <ul class="list-unstyled mt-4">
          <li><a href="index.html">Mymensingh</a></li>
          <hr class="line" />
          <li><a href="index.html">Dhaka</a></li>
          <hr class="line" />
          <li><a href="#">Sylhet</a></li>
          <hr class="line" />
          <li><a href="#">Rajshahi</a></li>
          <hr class="line" />
          <li><a href="#">Chattagram</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="font-weight-bold">Find Us Online</h5>
        <a href="#"><i class="fab fa-facebook-square text-white mt-3 fa-3x"></i></a>
        <a href="#"><i class="fab fa-google-plus text-white mt-3 ml-3 fa-3x"></i></a>
        <a href="#"><i class="fab fa-twitter-square text-white mt-3 ml-3 fa-3x"></i></a>
        <h5 class="font-weight-bold mt-5">Payment Methods:</h5>
        <img class="img-fluid mt-3" src="images/payment.png" alt="payment img">
        <h6 class="mt-5"><abbr title="Click Read More"><a class="text-white" href="#">Terms and Conditions Privacy Policy</a></abbr></h6>
      </div>
    </div>
    <hr class="line1 bg-dark" >
<!--copyright-->
  <div class="row justify-content-center text-center">
    <div class="col-md-6">
      <h6 class="text-white"><i class="far fa-copyright mr-2"></i>2018 Pro Laundry & Dry Cleaning.. All Rights Reserved.</h6>
    </div>
  </div>
<!--copyright end-->
  </div>
</section>
<!--footer end-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script defer src="js/fonticon.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/css3-animate-it.js"></script>
    <script src="js/backtop.js"></script>
    <script>
      /*owl carosul*/
      $('.service-carosel').owlCarousel({
          loop:true,
          margin:10,
          nav:false,
          autoplay:true,
          slideBy:5,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:3
              }
          }
      });
      $(function () {
            $('[data-toggle="tooltip"]').tooltip()
          });

          $(window).scroll(function() {    
              var scroll = $(window).scrollTop();

              if (scroll >= 150) {
                  $(".header").addClass("fixed-header");
              } else {
                  $(".header").removeClass("fixed-header");
              }
          });
          /*2nd owlcarosel*/
          $('.coustomar-carosel').owlCarousel({
              loop:true,
              margin:10,
              nav:false,
              autoplay:true,
              responsive:{
                  0:{
                      items:1
                  },
                  600:{
                      items:3
                  },
                  1000:{
                      items:1
                  }
              }
          });
    </script>

      <!--moveing img-->
       <script>
       var moveForce = 30; // max popup movement in pixels
       var rotateForce = 20; // max popup rotation in deg

       $(document).mousemove(function(e) {
           var docX = $(document).width();
           var docY = $(document).height();
           
           var moveX = (e.pageX - docX/2) / (docX/2) * -moveForce;
           var moveY = (e.pageY - docY/2) / (docY/2) * -moveForce;
           
           var rotateY = (e.pageX / docX * rotateForce*2) - rotateForce;
           var rotateX = -((e.pageY / docY * rotateForce*2) - rotateForce);
           
           $('.popup')
               .css('left', moveX+'px')
               .css('top', moveY+'px')
               .css('transform', 'rotateX('+rotateX+'deg) rotateY('+rotateY+'deg)');
       });

       </script>

  </body>
</html>