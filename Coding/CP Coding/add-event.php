
<link rel="stylesheet" href="css/bootstrap.css">
<?php 
	include 'includes/header.php'; 
	if (isset($_GET['msg']) && $_GET['msg'] == 'eventAdded') {
		echo "<script>window.alert('Event Sucessfully Added!');</script>";		
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
					<form action="action/addEvent-action.php" method="POST" enctype="multipart/form-data">
						<h1>Add Event</h1>
						<div class="form-group mt-4">
							<label>Event Title</label>
							<input type="text" class="form-control" name="e_title" placeholder="Enter Event Title" required>
						</div>

						<div class="form-group mt-4">
							<label>Event Start Date</label>
							<input type="date" class="form-control" name="e_start_date" placeholder="Enter Event Start Date" required>
						</div>

						<div class="form-group mt-4">
							<label>Event Date</label>
							<input type="date" class="form-control" name="e_date" placeholder="Enter Event Date" required>
						</div>

						<div class="form-group mt-4">
							<label>Event Venue</label>
							<input type=text class="form-control" name="e_venue" placeholder="Enter Event Venue" required>
						</div>

						<div class="form-group mt-4">
							<label>Event Description</label>
							<textarea class="form-control" name="e_description" placeholder="Enter Event Description" required></textarea>
						</div>

						<div class="form-group mt-4">
							<label>Event Image</label>
							<input type="file" class="form-control" name="image" required>
						</div>
						
						<button type="submit" class="btn btn-success submit mb-4" name="eventSubmit">Submit </button>

					</form>

				</div>
				<div class="col-lg-4 contact-info-left"></div>
			</div>
		</div>
	</section>

	<?php
	include 'includes/footer.php';
	?>
