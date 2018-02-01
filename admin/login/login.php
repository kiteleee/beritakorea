<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
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
<form method="post" action="proses_login.php" class="login-form">
  <div class="hand"></div>
  <div class="hand rgt"></div>
  <h1>Admin Login</h1>
  <div class="form-group">
    <input name="username"  required="required" class="form-control"/>
    <label class="form-label"> Username    </label>
  </div>
  <div class="form-group">
    <input name="password" id="password" type="password" required="required" class="form-control"/>
    <label class="form-label">Password</label>
    <p class="alert">Invalid Credentials..!!</p>
    <button class="btn">Login </button>
  </div>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
