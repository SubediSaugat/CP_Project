<link rel="stylesheet" href="css/bootstrap.css">
<?php include 'includes/header.php'; ?>
  <body class="body">
    <header class="mainHeader w-100">
      <div class="navheader" style="overflow: hidden;">
       <div class="company_logo">
        <a href="index-2.php"><img src="template/bulls_club/images/company_logo.png"></a>
      </div>
      <img src="template/bulls_club/images/menu-icon.png" class="menu-icon">
     <?php include 'includes/nav.php'; ?>
    </div>
  </header>

  <section>
    <div class="container">
      <div class="row">
      <div class="col-lg-4 contact-info-left"></div>
      <div class="col-lg-4 contact-right-wthree-info">
        <h5 class="text-center mb-4"></h5>
        <form action="user/userLogin-action.php" method="POST">
          <h1>User Login</h1>
          <div class="form-group mt-4">
            <label><i class="fas fa-home"></i> Email</label>
            <input type="email" class="form-control" name="email" placeholder="" required>
          </div>

          <div class="form-group mt-4">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="" required>
          </div>

          <button type="submit" class="btn btn-success submit mb-4" name="loginnSubmit">Submit </button>

        </form>
        <a href="adminLogin.php">Admin Login</a><br>
        <a href="userRegister.php">Register</a><br>
      </div>
      <div class="col-lg-4 contact-info-left"></div>
    </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
