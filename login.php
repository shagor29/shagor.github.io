
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Login Panel</title>
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/login.css">
</head>
<body class="bg-secondary text-center">

<div class="panda">
  <div class="ear"></div>
  <div class="face">
    <div class="eye-shade"></div>
    <div class="eye-white">
      <div class="eye-ball"></div>
    </div>
    <div class="eye-shade rgt"></div>
    <div class="eye-white rgt">
      <div class="eye-ball"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth"></div>
  </div>
  <div class="body"> </div>
  <div class="foot">
    <div class="finger"></div>
  </div>
  <div class="foot rgt">
    <div class="finger"></div>
  </div>
</div>
<form>
  <div class="hand"></div>
  <div class="hand rgt"></div>
  <h1>Login</h1>
  <div class="form-group">
    <input required="required" class="form-control"/>
    <label class="form-label">Username    </label>
  </div>
  <div class="form-group">
    <input id="password" type="password" required="required" class="form-control"/>
    <label class="form-label">Password</label>
    <p class="alert">Invalid Credentials..!!</p>
    <button class="btn">Login </button>
  </div>
  <a href="#" class="font-weight-bold">Forget Password</a>
</form>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script defer src="js/fonticon.js"></script>
	<script  src="js/login.js"></script>
</body>
</html>