
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
      <div class="col-lg-4 contact-right-wthree-info login">
        <h5 class="text-center mb-4"></h5>
        <form action="admin/adminLogin-action.php" method="POST">
          <h1>Admin Login</h1>
          <div class="form-group mt-4">
            <label>Username</label>
            <input type="text" class="form-control" name="email" placeholder="Enter Username" required>
          </div>

          <div class="form-group mt-4">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
          </div>

          <button type="submit" class="btn btn-success submit mb-4" name="loginSubmit">Submit </button>

        </form>

      </div>
      <div class="col-lg-4 contact-info-left"></div>
    </div>
    </div>
  </section>

<?php
  include 'includes/footer.php';
?>
