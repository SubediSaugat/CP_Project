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
        <form action="user/userRegistration-action.php" method="POST">
          <h1>User Registration</h1>
          <div class="form-group mt-4">
            <label><i class="fas fa-home"></i> Full Name</label>
            <input type="text" class="form-control" name="fname" placeholder="Full Name" required>
          </div>

          <div class="form-group mt-4">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>

          <div class="form-group mt-4">
            <label>Contact</label>
            <input type="text" class="form-control" name="contact" placeholder="Contact Number" required>
          </div>

          <div class="form-group mt-4">
            <label>Member Type</label>
            <select class="form-control choose-class" name="choose-member">
              <option value="">Select Member Type</option>
              <option value="Swimming">Swimming</option>
              <option value="Gym">Gym</option>
              <option value="Futsal">Futsal</option>
              <option value="Jumba">Jumba</option>
              <option value="Badminton">Badminton</option>
              <option value="Basketball">Basketball</option>
            </select>
          </div>

          <div class="form-group mt-4">
            <label>Short Bio</label>
            <textarea class="form-control" name="bio" placeholder="Write your short bio!"></textarea>
          </div>

          <div class="form-group mt-4">
            <label>Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address" required>
          </div>

          <div class="form-group mt-4">
            <label>Date of Birth</label>
            <input type="date" class="form-control" name="dob" required>
          </div>
          
          <div class="form-group mt-4">
            <label>Gender: </label>
            <label class="radio-inline">
                <input type="radio" name="gender" value="Male" checked=""> Male
            </label>
            <label class="radio-inline">
                <input type="radio" name="gender" value="Female" required=""> Female
            </label>
            <label class="radio-inline">
                <input type="radio" name="gender" value="Other" required=""> Other
            </label>
        </div>

          <div class="form-group mt-4">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>

          <div class="form-group mt-4">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
          </div>

          <button type="submit" class="btn btn-success submit mb-4" name="userRegister">Submit</button>

        </form>

      </div>
      <div class="col-lg-4 contact-info-left"></div>
    </div>
    </div>
  </section>

 <?php include 'includes/footer.php'; ?>