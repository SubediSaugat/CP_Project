
<link rel="stylesheet" href="css/bootstrap.css">
<?php 
	include 'includes/header.php'; 
	if (isset($_GET['msg']) && $_GET['msg'] == 'sportsAdded') {
		echo "<script>window.alert('Sports Sucessfully Added!');</script>";		
	}
?>
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
					<form action="action/sportFacility-action.php" method="POST" enctype="multipart/form-data">
						<h1>Add Sports</h1>
						<div class="form-group mt-4">
							<select class="form-control" name="choose-sports">
								<option value="">Select Sports</option>
								<option value="Futsal">Futsal</option>
								<option value="Swimming">Swimming</option>
								<option value="Gym">Gym</option>
								<option value="Basketball">Basketball</option>
								<option value="Badminton">Badminton</option>
								<option value="Zumba">Zumba</option>
							</select>
						</div>
						<div class="form-group mt-4">
							<label>Sports Description</label>
							<textarea class="form-control" name="sf_description" placeholder="Enter Sports Description" required></textarea>
						</div>

						<div class="form-group mt-4">
							<label>Sports Image</label>
							<input type="file" class="form-control" name="image" required>
						</div>
						
						<button type="submit" class="btn btn-success submit mb-4" name="sportsSubmit">Submit </button>

					</form>

				</div>
				<div class="col-lg-4 contact-info-left"></div>
			</div>
		</div>
	</section>

	<?php
	include 'includes/footer.php';
	?>
