<?php include('header.php'); ?>
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
          <h1 class="text-uppercase work-title text-white  font-weight-bold">help</h1>
        </div>
      </div>
      </div>
    </div>
    <div class="spaching p-5"></div>
</section>
<!--banner end-->
<div class="container">
  <div class="row">
    <div class="col-md-6">

    </div>
  </div>
</div>    

<div class="row justify-content-center text-center mt-5">
  <div class="col-md-6">
    <h3 class="text-muted font-weight-bold">Select Packages</h3>
    <div class="col-md-12">
      <div class="form-group d-flex">
        <div class="col-md-6">
          <div class="package">
            <h4 class="font-weight-bold text-muted">Ordinary</h4>
            <h5 class="font-weight-bold"><i class="fas fa-money-bill-alt" aria-hidden="true"></i>&nbsp;10&nbsp;USD</h5>
            <h6 class="font-weight-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h6>
            <button type="button" class="select-button nextBtn" id="packages" name="packages">Select</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="package">
            <h4 class="font-weight-bold text-muted">Urgent</h4>
            <h5 class="font-weight-bold text-danger"><i class="fas fa-money-bill-alt" aria-hidden="true"></i>&nbsp;20&nbsp;USD</h5>
            <h6 class="font-weight-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h6>
            <button type="button" class="select-button nextBtn" id="packages" name="packages">Select</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  
  

</script>

<?php include('footer.php'); ?>