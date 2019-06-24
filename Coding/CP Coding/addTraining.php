
<link rel="stylesheet" href="css/bootstrap.css">
<?php 
	include 'includes/header.php'; 
	if (isset($_GET['msg']) && $_GET['msg'] == 'trainingAdded') {
		echo "<script>window.alert('Training Sucessfully Added!');</script>";		
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
					<form action="action/addTraining-action.php" method="POST" enctype="multipart/form-data">
						<h1>Add Training</h1>
						<div class="form-group mt-4">
							<label>Training Name</label>
							<input type="text" class="form-control" name="t_name" placeholder="Enter Training Name" required>
						</div>

						<div class="form-group mt-4">
							<label>Training Date</label>
							<input type="date" class="form-control" name="t_date" placeholder="Enter Training Date" required>
						</div>

						<div class="form-group mt-4">
							<label>Training Venue</label>
							<input type="text" class="form-control" name="t_venue" placeholder="Enter Training Venue" required>
						</div>

						<div class="form-group mt-4">
							<label>Training Description</label>
							<textarea class="form-control" name="t_description" placeholder="Enter Training Description" required></textarea>
						</div>

						<div class="form-group mt-4">
							<label>Training Image</label>
							<input type="file" class="form-control" name="image" required>
						</div>
						
						<button type="submit" class="btn btn-success submit mb-4" name="trainingSubmit">Submit </button>

					</form>

				</div>
				<div class="col-lg-4 contact-info-left"></div>
			</div>
		</div>
	</section>

	<?php
	include 'includes/footer.php';
	?>
