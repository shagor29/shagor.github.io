<?php 
include'header.php'; 

include'connect.php';
$passMsg='Confirm Password & Password Does Not Matched';

          if (isset($_POST['signup'])){
            $signupemail=$_POST['signupemail'];
            $signuppassword=$_POST['signuppassword'];
            $conpassword=$_POST['conpassword'];
            $password=md5($signuppassword);

            if ($signuppassword == $conpassword) {

         $sql="INSERT INTO tbl_signup (Email,Password) VALUES ('$signupemail','$signuppassword','$password')";
              
              if(mysqli_query($con,$sql)){
                echo "Login succesful <br>";
              }
              else{
                echo "Error <br>";
              }
              
            }else{

              echo $passMsg;
            }
      }
 ?>
<section>
<!--banner-->
<section class="banner">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    
      <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt="logo"></a>
      <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav main-nav text-right">
          <li class="nav-item active">
            <a class="nav-item nav-link text-white text-uppercase nev-contant ml-3" href="work.php">how it works</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link text-white text-uppercase nev-contant ml-3" href="pricing.php">pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link text-white text-uppercase nev-contant ml-3" href="help.php">help</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link text-white text-uppercase nev-contant ml-3" href="contact.php">contact</a>
          </li>
        </ul>
      </div>
      <a href="order.php" class="btn text-white text-uppercase rounded-0 post-bt animated shake">post your order</a>
    </nav>
    <div class="row justify-content-center text-center">
      <div class="col-md-12">
        <div class="animatedParent">
          <h1 class="banner-heading text-white font-weight-bold mt-5 animated bounceInRight slowest">ProLaundry & Dry Cleaning Services</h1>
          <p class="work-rate text-white animated bounceInLeft slowest">Form $30 Per Hour</p>
        </div>
      </div>
    </div>
<!--regestation area-->
<div class="container">
  <div class="row justify-content-center">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Sign in</button>
    <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Sign Up</button>

    <!--sign in modal-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" class="p-4">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Email:</label>
                <input type="email" class="form-control" name="signemail" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Password:</label>
                <input type="password" name="signpassword" class="form-control" id="message-text" placeholder="Password">
              </div>
              <div class="modal-footer">
               <button name="signup" class="btn btn-primary">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--sign up modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" class="p-4">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Email:</label>
                <input type="email" class="form-control" name="signupemail" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Password:</label>
                <input type="password" name="signuppassword" class="form-control" id="message-text" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="conpassword" class="col-form-label">Confirm Password:</label>
                <input type="password" name="conpassword" class="form-control" id="conpassword" placeholder="Confirm Password">
              </div>
              <div class="modal-footer">
               <button name="signup" class="btn btn-primary">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center text-center mt-5">
          <div class="col-md-6">
            <form method="POST" action="order.php">
              <div class="input-group select-ctiy">
                  <select name="select" class="custom-select h-100 rounded-0" id="inputGroupSelect04">
                    <option selected>Select Postal code/city</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <div class="input-group-append">
                      <button class="btn btn-outline-warning text-white font-weight-bold rounded-0 book-bt" type="button">Booking a Clening</button>
                  </div>
              </div>
            </form>
          </div>
    </div>
<div class="p-3"></div>
</section>
<!--banner end--> 
<!--about us-->
<section class="about-contant">
  <div class="container">
    <div class="row justify-content-center text-center font-weight-bold">
      <div class="col-md-8">
        <h2 class="font-style mt-5">WE ARE PASSIONATE ABOUT LAUNDRY</h2>
      </div>
      <p class="text-muted mt-4">We are professionals in the laundry and dry cleaning business, which means we always stay up to date on the latest technologies, cleaning methods, and solutions for dealing with stains or delicate fabrics. Plus, we maintain the highest standards of business integrity by following local and national regulations and environmental safety rules. We are passionate about changing the way you think about laundry!</p>
    </div>
  </div>
</section>
<!--service box-->
<section class="service-box">
  <div class="container">
    <div class="row justify-content-center text-center font-weight-bold">
      <div class="col-md-5">
        <h2 class="font-style mt-5">Services We Offer</h2>
      </div>
    </div>
    <div class="service-contant text-center mt-5">
      <div class="owl-carousel owl-theme service-carosel">
          <div class="item">
            <div class="zoom">
              <img class="img/fluid position-relative w-100" src="images/dry-clean.jpg" alt="">
              <div class="img-shape">
                <h5 class="img-write font-weight-bold text-white">Dry Cleaning & Laundry</h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="zoom">
              <img class="img/fluid position-relative w-100" src="images/wash-fold.jpg" alt="">
              <div class="img-shape">
                <h5 class="img-write font-weight-bold text-white">Wash & Fold</h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="zoom">
              <img class="img/fluid position-relative w-100" src="images/shoe-shine.jpg" alt="">
              <div class="img-shape">
                <h5 class="img-write font-weight-bold text-white">Shoe Shining</h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="zoom">
              <img class="img/fluid position-relative w-100" src="images/wash-iron.jpg" alt="">
              <div class="img-shape">
                <h5 class="img-write font-weight-bold text-white">Wash & Iron</h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="zoom">
              <img class="img/fluid position-relative w-100" src="images/Repairs.jpg" alt="">
              <div class="img-shape">
                <h5 class="img-write font-weight-bold text-white">Alterations & Repairs</h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="zoom">
              <img class="img/fluid position-relative w-100" src="images/carpet-cleaning-services.jpg" alt="">
              <div class="img-shape">
                <h5 class="img-write font-weight-bold text-white">Carpet Cleaning</h5>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<!--how it works-->
<section  class="work-system mt-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-8">
        <h2 class="font-style mt-5">HOW IT WORKS: IN 4 EASY STEPS</h2>
      </div>
    </div>
      <div class="row mt-4 text-center">
        <div class="col-md-3">
            <div class="animatedParent">
              <div class="work-contant animated bounceInLeft slowest">
                <img class="img-fluid work-img" src="images/img_icon_01.png" alt="">
                <h5 class="mt-3">Step 1</h5>
                <span class="text-primary font-weight-bold bag-up">Bag up</span>
                <span class="bag-up">all your dirty clothes</span>
              </div>
              <img class="img-fluid step-arrow1 animated bounceInLeft slowest delay-250" src="images/step-arrow1.png" alt="">
            </div>
        </div>
        <div class="col-md-3">
          <div class="animatedParent">
            <div class="work-contant animated bounceInLeft slowest delay-250">
              <img class="img-fluid work-img" src="images/img_icon_02.png" alt="">
              <h5 class="mt-3">Step 2</h5>
              <span class="bag-up">We</span>
              <span class="text-primary font-weight-bold bag-up">Pick Up</span>
              <span class="bag-up">your clothes</span>
            </div>
            <img class="img-fluid animated bounceInLeft slowest delay-500 step-arrow1" src="images/step-arrow2.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="animatedParent">
            <div class="work-contant animated bounceInLeft slowest delay-500">
              <img class="img-fluid work-img" src="images/img_icon_03.png" alt="">
              <h5 class="mt-3">Step 3</h5>
              <span class="bag-up">We</span>
              <span class="text-primary font-weight-bold bag-up">Clean</span>
              <span class="bag-up">your clothes</span>
            </div>
            <img class="img-fluid animated bounceInLeft slowest delay-750 step-arrow1" src="images/step-arrow1.png" alt="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="animatedParent">
            <div class="work-contant animated bounceInLeft slowest delay-500">
              <img class="img-fluid work-img" src="images/img_icon_04.png" alt="">
              <h5 class="mt-3">Step 4</h5>
              <span class="bag-up">We</span>
              <span class="text-primary font-weight-bold bag-up">Deliver</span>
                <span class="bag-up">Clean, folded clothes</span>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!--COMMERCIAL LAUNDRY SERVICE-->
<section class="commercial mt-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-8">
        <h2 class="font-style">commercial laundry service</h2>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-5">
        <div class="zoom">
          <img class="img-fluid" src="images/wash-fold.jpg" alt="service logo">
        </div>
      </div>
      <div class="col-md-7">
        <p class="text-muted commercial-contant">Large corporations have determined that there is a financial benefit to outsourcing back office work because it saves money. Allowing us to do your laundry is cost effective and will allow you and your employees to focus on your core business. We offer smart solutions to meet your commercial laundry needs. Our pick up and delivery laundry service is fast, convenient, and saves you time and money.</p>
        <p class="text-muted commercial-contant">Laundry isn’t your main business, but it is ours and we love it! For more information about our commercial laundry services and pricing and to schedule your first pick up, call us at 1 <span class="text-success font-weight-bold">(+880) 1725-517-325</span></p>
      </div>
    </div>
    <h4 class="text-uppercase text-muted font-weight-bold mt-5">our commercial laundry clients include:</h4>
    <div class="row">
      <div class="col-md-4">
        <ul class="list-unstyled">
          <li class="mt-3"><i class="fas fa-plane mr-2 all-icon"></i>Airports & Airlines</li>
          <li class="mt-3"><img class="img-fluid" src="images/Massage-Icon.png" alt="" width="25px"> Massage Therapists</li>
          <li class="mt-3"><i class="fas fa-utensils mr-2 all-icon"></i>Restaurants and Caterers</li>
          <li class="mt-3"><i class="fas fa-graduation-cap mr-2 all-icon"></i>Schools & Universities</li>
          <li class="mt-3"><i class="fas fa-snowflake mr-2 all-icon"></i>Religious Organizations</li>
          <li class="mt-3"><i class="fas fa-plus-square mr-2 all-icon"></i>Daycare centers</li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-unstyled">
          <li class="mt-3"><i class="fas fa-home mr-2 all-icon"></i>House Cleaning Companies</li>
          <li class="mt-3"><i class="fas fa-futbol mr-2 all-icon"></i>Sports Teams</li>
          <li class="mt-3"><i class="fas fa-bed mr-2 all-icon"></i>Hotels & Motels</li>
          <li class="mt-3"><i class="fas fa-user-md mr-2 all-icon"></i>Assisted Living / Nursing Homes</li>
          <li class="mt-3"><i class="fas fa-notes-medical mr-2 all-icon"></i>Medical Facilities</li>
          <li class="mt-3"><i class="fab fa-medrt mr-2 all-icon"></i></i></i>Athletic Facilities / Gyms</li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-unstyled">
          <li class="mt-3"><i class="fab fa-centercode mr-2 all-icon"></i>Entertainment Venues</li>
          <li class="mt-3"><i class="fab fa-accusoft mr-2 all-icon"></i>Local B&Bs</li>
          <li class="mt-3"><i class="fas fa-paw mr-2 all-icon"></i>Pet Groomers</li>
          <li class="mt-3"><i class="fas fa-arrows-alt mr-2 all-icon"></i>etc.</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--OUR APPROACH-->
<section class="approch p-3">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-5">
        <h2 class="text-uppercase font-style mt-5">our approach</h2>
        <p class="text-muted commercial-contant mt-5">We approach workforce accommodations with a property development mindset. Our “Develop. Own. Operate.” business model produces integrated solutions that enable clients to focus on their core business. Clients benefit from consistent service delivery with greater cost and quality control as well as more efficient use of their operational and financial resources.</p>
      </div>
      <div class="col-md-7 mt-5">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/z91MtZpcsKY?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<!--why choose us-->
<section class="choose p-3">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-5">
        <h2 class="text-uppercase font-style mt-5">why choose us</h2>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4">
        <div class="animatedParent">
          <div class="choose-contant animated bounceInLeft slowest p-3">
            <h4><i class="fas fa-lightbulb choose-icon"></i>Persionalized Experience</h4>
            <p>We take utmost care of your clothes, segregating based on the cloth type and giving you instant clothes to make a statement.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="choose-contant p-3">
            <h4><i class="fas fa-percent choose-icon"></i>Affordable Pricing</h4>
            <p>Prices that suits your pocket is one of our USP. An option of choosing between 2 types of pricing is available.</p>
          </div>
      </div>
      <div class="col-md-4">
        <div class="animatedParent">
          <div class="choose-contant animated bounceInRight slowest p-3">
            <h4><i class="fas fa-mobile-alt choose-icon"></i>Convenience</h4>
            <p>With just a tap of a button, your laundry gets done, giving your leisure time to spend with family and friends.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="animatedParent">
          <div class="choose-contant animated bounceInLeft slowest p-3">
            <h4><i class="fab fa-rebel choose-icon"></i>Quality</h4>
            <p>We use the best in class products, to assure that your favorite clothes are always there for you to wear.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="choose-contant p-3">
            <h4><i class="fas fa-truck choose-icon"></i>Express Delivery</h4>
            <p>Forgot to wash your clothes for interview/business meeting, never mind. With our super express delivery, we would get your laundry done in less than 8 hours.</p>
          </div>
      </div>
      <div class="col-md-4">
        <div class="animatedParent">
          <div class="choose-contant animated bounceInRight slowest p-3">
            <h4><i class="far fa-file-alt choose-icon"></i>Instant Order Update</h4>
            <p>Regular updates of your order, to help you keep a track of your laundry and plan accordingly.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Customar option-->
<section class="Customar p-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-6">
        <h2 class="text-uppercase text-white coustomar-say">What our customers say</h2>
      </div>
    </div>
    <div class="owl-carousel owl-theme coustomar-carosel">
        <div class="item w-100">
          <div class="row mt-5">
            <div class="col-md-1">
              <i class="fas fa-quote-left text-success fa-3x"></i>
            </div>
            <div class="col-md-2">
              <img class="rounded-circle" src="images/img1.jpg" alt="Customar img">
            </div>
            <div class="col-md-9">
              <h2 class="text-success">Mr. Shagor</h2>
              <p class="text-white Customar-comment">"The gals did a great job. It is so nice for me to come home to a clean house.Thank you Clean and Simple!"</p>
            </div>
          </div>
        </div>
        <div class="item w-100">
          <div class="row mt-5">
            <div class="col-md-1">
              <i class="fas fa-quote-left text-success fa-3x"></i>
            </div>
            <div class="col-md-2">
              <img class="rounded-circle" src="images/img2.jpg" alt="Customar img">
            </div>
            <div class="col-md-9">
              <h2 class="text-success">Joe</h2>
              <p class="text-white Customar-comment">"Crew did a great job.Looks lovely!"</p>
            </div>
          </div>
        </div>
        <div class="item w-100">
          <div class="row mt-5">
            <div class="col-md-1">
              <i class="fas fa-quote-left text-success fa-3x"></i>
            </div>
            <div class="col-md-2">
              <img class="rounded-circle" src="images/img3.jpg" alt="Customar img">
            </div>
            <div class="col-md-9">
              <h2 class="text-success">Shova</h2>
              <p class="text-white Customar-comment">"Clean and fresh!…would also like to thank whoever re-made my bed, that was a treat….keep up the good work"</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<!--our gallery-->
<section class="gallery p-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-5">
        <h2 class="text-uppercase font-style mt-5">our gallery</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mt-5">
        <a class="gallery-img" data-toggle="modal" data-target="#exampleModalLong">
          <img class="img-fluid position-relative w-100" src="images/gallery-1.jpg" alt="">
          <span class="img-overlay"></span>
          <h3 class="text-white font-weight-bold overlay-title">Click for Zoom</h3>
        </a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body zoom">
                <img class="w-100" src="images/gallery-1.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-5">
       <div class="moving-zone">
          <div class="popup">
            <div class="popup-content">
              <div class="popup-text">
                <img class="img-fluid" src="images/gallery-2.jpg" alt="" width="300" height="200">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-5">
        <a class="gallery-img" data-toggle="modal" data-target="#exampleModalLong1">
          <img class="img-fluid position-relative w-100" src="images/gallery-3.jpg" alt="">
          <span class="img-overlay"></span>
          <h3 class="text-white font-weight-bold overlay-title">Click for Zoom</h3>
        </a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body zoom">
                <img class="w-100" src="images/gallery-3.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-5">
        <a class="gallery-img" data-toggle="modal" data-target="#exampleModalLong3">
          <img class="img-fluid position-relative w-100" src="images/gallery-4.jpg" alt="">
          <span class="img-overlay"></span>
          <h3 class="text-white font-weight-bold overlay-title">Click for Zoom</h3>
        </a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body zoom">
                <img class="w-100" src="images/gallery-4.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-5">
        <a class="gallery-img" data-toggle="modal" data-target="#exampleModalLong4">
          <img class="img-fluid position-relative w-100" src="images/gallery-5.jpg" alt="">
          <span class="img-overlay"></span>
          <h3 class="text-white font-weight-bold overlay-title">Click for Zoom</h3>
        </a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body zoom">
                <img class="w-100" src="images/gallery-5.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-5">
        <a class="gallery-img" data-toggle="modal" data-target="#exampleModalLong5">
          <img class="img-fluid position-relative w-100" src="images/gallery-6.jpg" alt="">
          <span class="img-overlay"></span>
          <h3 class="text-white font-weight-bold overlay-title">Click for Zoom</h3>
        </a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body zoom">
                <img class="w-100" src="images/gallery-6.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--our gelary end-->
<!--packages-->
<section class="packages p-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-5">
        <h2 class="text-uppercase text-white font-style mt-5">Our Package Offer</h2>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <div class="animatedParent">
          <div class="packages-contant animated bounceInUp slowest mt-5 p-5 bg-white">
            <h2 class="font-weight-bold text-muted mt-5">$350</h2>
            <hr class="line1">
            <h3 class="text-muted font-weight-bold">50</h3>
            <p class="font-weight-bold" style="font-size: 24px">Coloths Per Months:</p>
            <hr class="line1">
            <ul class="list-unstyled">
              <li>4 t-shirts</li>
              <li>1 pairs of jeans</li>
              <li>3 button-down shirts</li>
              <li>1 pair of shorts</li>
              <li>7 pairs of underwear</li>
              <li>6 pairs of socks</li>
              <li>1 towel</li>
              <li>1 set of sheets</li>
              <li>1 set of sheets (every other week)</li>
            </ul>
            <a class="btn btn-secondary text-uppercase w-100 font-weight-bold" href="#" role="button">choose plan</a>

            <h2 class="font-weight-bold text-uppercase text-white shape-rate">Standard</h2>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="animatedParent">
          <div class="packages-contant animated bounceInUp mt-5 active p-5 bg-white">
            <h2 class="font-weight-bold text-primary mt-5">$399</h2>
            <hr class="line1">
            <h3 class="text-primary font-weight-bold">60</h3>
            <p class="font-weight-bold" style="font-size: 24px">Coloths Per Months:</p>
            <hr class="line1">
            <ul class="list-unstyled">
              <li>4 t-shirts</li>
              <li>1 pairs of jeans</li>
              <li>3 button-down shirts</li>
              <li>1 pair of shorts</li>
              <li>7 pairs of underwear</li>
              <li>6 pairs of socks</li>
              <li>1 towel</li>
              <li>1 set of sheets</li>
              <li>1 set of sheets</li>
            </ul>
            <a class="btn btn-primary text-uppercase w-100 font-weight-bold" href="#" role="button">choose plan</a>
          <h2 class="font-weight-bold text-uppercase bg-primary text-white shape-rate">Еnterprise</h2>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="animatedParent">
          <div class="packages-contant animated bounceInUp slowest mt-5 p-5 bg-white">
            <del class="font-weight-bold text-muted old-price">$499</del>
            <h2 class="font-weight-bold text-success mt-5">%400</h2>
            <hr class="line1">
            <h3 class="text-success font-weight-bold">80</h3>
            <p class="font-weight-bold" style="font-size: 24px">Coloths Per Months:</p>
            <hr class="line1">
            <ul class="list-unstyled">
              <li>4 t-shirts</li>
              <li>1 pairs of jeans</li>
              <li>3 button-down shirts</li>
              <li>1 pair of shorts</li>
              <li>7 pairs of underwear</li>
              <li>6 pairs of socks</li>
              <li>1 towel</li>
              <li>1 set of sheets</li>
              <li>1 set of sheets (every other week)</li>
            </ul>
            <a class="btn btn-success text-uppercase w-100 font-weight-bold" href="#" role="button">choose plan</a>
          <h2 class="font-weight-bold text-uppercase bg-success text-white shape-rate">Premium</h2>
          <img class="img-fluid discount-tag" src="images/sale-label.png" alt="">
          <h5 class="text-white font-weight-bold discount">-10%</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-md-3">
        <a href="#" class="btn btn-outline-primary btn-lg font-weight-bold mt-5" role="button" aria-pressed="true">View Package Details</a>
      </div>
    </div>
  </div>
</section>
<!--location map-->
<section class="map">
  <iframe class="d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6350.933419191027!2d91.85954787942195!3d24.88359869322073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751aacf1e88faff%3A0x236b26b78903a732!2sSylhet+Polytechnic+Institute!5e0!3m2!1sen!2sbd!4v1523990408603" width="100%" height="400" frameborder="0" allowfullscreen></iframe>
  <!--location map end-->
</section>
<?php include('footer.php'); ?>
