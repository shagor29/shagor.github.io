<?php include'header.php'; ?>
<link rel="stylesheet" href="css/jquery-steps.css">
<!-- Demo stylesheet -->
<link rel="stylesheet" href="css/steps.css">
<link rel="stylesheet" href="css/jquery-ui-date.css">
<link rel="stylesheet" href="css/normalize-date.min.css">
<!--banner-->
<section class="order-banner">
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
            <a class="nav-item nav-link text-white text-uppercase nev-contant ml-5" href="contact.php">contact</a>
          </li>
        </ul>
      </div>
      <a href="order.php" class="btn text-white text-uppercase rounded-0 post-bt animated shake">post your order</a>
    </nav>
    <div class="row justify-content-center text-center">
      <div class="col-md-12">
      <div class="animatedParent">
        <div class="animated bounceInUp">
          <h1 class="text-uppercase work-title text-white  font-weight-bold">order</h1>
        </div>
      </div>
      </div>
    </div>
    <div class="spaching p-5"></div>
</section>
<!--banner end-->
<div class="container">
<div class="spaching p-5"></div>
  <div class="row justify-content-center text-center">
    <div class="col-md-8">
      <div id="demo">
        <div class="step-app">
          <ul class="step-steps text-center">
            <li class="arrow"><a href="#tab1"><span class="number">1</span></a></li>
            <li class="ml-3 arrow"><a href="#tab2"><span class="number">2</span></a></li>
            <li class="ml-3 arrow"><a href="#tab3"><span class="number">3</span></a></li>
            <li class="ml-3 arrow"><a href="#tab4"><span class="number">4</span></a></li>
            <li class="ml-3"><a href="#tab5"><span class="number">5</span></a></li>
          </ul>
          <div class="step-content">
            <div class="step-tab-panel" id="tab1">
              <div class="row justify-content-center text-center mt-5">
                  <h3 class="text-muted font-weight-bold">Select Packages</h3>
                  <div class="col-md-12">
                    <div class="form-group d-flex">
                      <div class="col-md-6">
                        <div class="package">
                          <h4 class="font-weight-bold text-muted">Ordinary</h4>
                          <h5 class="font-weight-bold"><i class="fas fa-money-bill-alt" aria-hidden="true"></i>&nbsp;10&nbsp;USD</h5>
                          <h6 class="font-weight-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h6>
                          <div class="step-footer">
                            <button data-direction="next" class="select-button step-btn">SELECT</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="package">
                          <h4 class="font-weight-bold text-muted">Urgent</h4>
                          <h5 class="font-weight-bold text-danger"><i class="fas fa-money-bill-alt" aria-hidden="true"></i>&nbsp;20&nbsp;USD</h5>
                          <h6 class="font-weight-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h6>
                          <div class="step-footer">
                            <button data-direction="next" class="select-button step-btn">SELECT</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="step-tab-panel" id="tab2">
              <h3 class="mt-5">Pickup & Delivery</h3>
              <form class="mt-5" name="frmInfo" id="frmInfo">
                <div class="row justify-content-center">
                  <div class="col-md-4">
                    <label class="control-label">Pickup date</label>
                    <input id="datepicker" class="form-control">
                    <br><br> Delivery date<br>
                    <input type="date" name="delicerydate" required>
                  </div>
                  <div class="col-md-4">
                    <label class="control-label">Pickup date</label>
                    <select id="ptime" name="ptime" class="form-control" required>
                            <option value="6:00 AM">06:00 AM</option>
                            <option value="7:00 AM">07:00 AM</option>
                            <option value="8:00 AM">08:00 AM</option>
                            <option value="9:00 AM">09:00 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="1:00 PM">01:00 PM</option>
                            <option value="2:00 PM">02:00 PM</option>
                            <option value="3:00 PM">03:00 PM</option>
                            <option value="4:00 PM">04:00 PM</option>
                            <option value="5:00 PM">05:00 PM</option>
                            <option value="6:00 PM">06:00 PM</option>
                            <option value="7:00 PM">07:00 PM</option>
                            <option value="8:00 PM">08:00 PM</option>
                            <option value="9:00 PM">09:00 PM</option>
                            <option value="10:00 PM">10:00 PM</option>
                          </select>
                    <br><br>
                    <select id="dtime" name="dtime" class="form-control" required>
                      <option value="6:00 AM">06:00 AM</option>
                      <option value="7:00 AM">07:00 AM</option>
                      <option value="8:00 AM">08:00 AM</option>
                      <option value="9:00 AM">09:00 AM</option>
                      <option value="10:00 AM">10:00 AM</option>
                      <option value="11:00 AM">11:00 AM</option>
                      <option value="12:00 PM">12:00 PM</option>
                      <option value="1:00 PM">01:00 PM</option>
                      <option value="2:00 PM">02:00 PM</option>
                      <option value="3:00 PM">03:00 PM</option>
                      <option value="4:00 PM">04:00 PM</option>
                      <option value="5:00 PM">05:00 PM</option>
                      <option value="6:00 PM">06:00 PM</option>
                      <option value="7:00 PM">07:00 PM</option>
                      <option value="8:00 PM">08:00 PM</option>
                      <option value="9:00 PM">09:00 PM</option>
                      <option value="10:00 PM">10:00 PM</option>
                      <!--<option value="11:00 PM">11:00 PM</option>-->
                    </select>
                  </div>
                </div>
              </form>
            </div>
            <div class="step-tab-panel" id="tab3">
              <h3>Tab3</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dicta nulla veritatis totam vel blanditiis, cumque minima harum reiciendis officia, accusamus ipsum esse nam itaque consequuntur eum! Nesciunt maiores dignissimos repellendus cumque, ea nemo perspiciatis dolor accusantium, enim modi veniam deleniti omnis unde, ad temporibus quasi incidunt placeat magni qui totam porro nobis alias culpa. Sit nisi dolorum illum! Voluptatum magnam dolorem minima impedit perspiciatis obcaecati odit iusto maxime dolorum, ut consequuntur cum quia minus alias sunt libero corrupti quam quidem placeat enim, aperiam, facere! Quae sit incidunt blanditiis quisquam cum a illo, dolore ex expedita fugit aliquam, id temporibus illum excepturi omnis autem sequi. Aspernatur eos numquam in laboriosam debitis sapiente consequuntur facere, esse iste delectus, impedit aliquid error! At dignissimos molestias accusantium sequi perferendis quidem quas quia nobis expedita? Reiciendis minima quaerat adipisci architecto, dignissimos ut, dicta nesciunt, quae a maxime aliquam consequuntur aspernatur doloribus eveniet, quasi reprehenderit!</p>
            </div>
            <div class="step-tab-panel" id="tab4">
              <h3>Tab4</h3>
              <form name="frmLogin" id="frmLogin">
                Email address:<br>
                <input type="text" name="txtEmail" required>
                <br> Password:<br>
                <input type="text" name="txtPassword" required>
              </form>
            </div>
            <div class="step-tab-panel" id="tab5">
              <h3>Tab5</h3>
              <form name="frmMobile" id="frmMobile">
                Mobile No:<br>
                <input type="text" name="txtMobileNum" required>
              </form>
            </div>
          </div>
          <div class="step-footer">
            <button data-direction="prev" class="step-btn">Previous</button>
            <button data-direction="next" class="step-btn">Next</button>
            <button data-direction="finish" class="step-btn">Finish</button>
          </div>
        </div>
      </div>
    </div>
  </div>   
  <div class="spaching p-4"></div> 
</div>

  <script src="js/jquery-latest-step.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery-steps.js"></script>
  <script>
    var frmInfo = $('#frmInfo');
    var frmInfoValidator = frmInfo.validate();

    var frmLogin = $('#frmLogin');
    var frmLoginValidator = frmLogin.validate();

    var frmMobile = $('#frmMobile');
    var frmMobileValidator = frmMobile.validate();

    $('#demo').steps({
      onChange: function (currentIndex, newIndex, stepDirection) {
        console.log('onChange', currentIndex, newIndex, stepDirection);
        // tab1
        if (currentIndex === 3) {
          if (stepDirection === 'forward') {
            var valid = frmLogin.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmLoginValidator.resetForm();
          }
        }

        // tab2
        if (currentIndex === 1) {
          if (stepDirection === 'forward') {
            var valid = frmInfo.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmInfoValidator.resetForm();
          }
        }

        // tab3
        if (currentIndex === 4) {
          if (stepDirection === 'forward') {
            var valid = frmMobile.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmMobileValidator.resetForm();
          }
        }

        return true;

      },
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
  </script>
  <script src="js/jquery-date.min.js"></script>
  <script src="js/jquery-ui-date.min.js"></script>
  
<?php include'footer.php'; ?>
