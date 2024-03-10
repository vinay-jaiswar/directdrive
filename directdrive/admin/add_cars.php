<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add a New Car</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../css/responsive.css" type="text/css"/>
  </head>
  <body>
		<?php
			include 'menu.php';
		?>
    <main>
			<div class="form-container add-cars">
				<h2>Add New Car</h2>
				
				<form method="post" class="form">
					<div class="left">
						<label>Car Make</label><span class="required">*</span>
						<input type="text" name="car_make" required />
					</div>
					<div class="right">
						<label>Car Model</label><span class="required">*</span>
						<input type="text" name="car_model" required />
						</div>
					<div class="left">
						<label>Car Hire Price</label><span class="required">*</span>
						<input type="text" name="rate" required />
					</div>
					<div class="right">
						<label>Car Model Year</label><span class="required">*</span>
						<input type="text" name="year" required />
						</div>
					<div class="left">
						<label>Transmission</label><span class="required">*</span>
						<input type="text" name="transmission" required />
					</div>
					<div class="right">
						<label>Fuel Type</label><span class="required">*</span>
						<input type="text" name="fuel_type" required />
						</div>
					<div class="left">
						<label>Mileage</label><span class="required">*</span>
						<input type="text" name="mileage" required />
					</div>
					<div class="right">
						<label>License Plate</label><span class="required">*</span>
						<input type="text" name="license_plate" required />
						</div>
					<div class="left">
						<label>Car Location</label><span class="required">*</span>
						<input type="text" name="car_location" required />
					</div>

					<div class="right">
					<label>Car Image 1(URL)</label><span class="required">*</span>
					<input type="text" name="image1" required />
					</div>
					<div class="left">
						<label>Car Image 2(URL)</label><span class="required">*</span>
						<input type="text" name="image2" required />
					</div>
					<div class="right">
					<label>Car Image 3(URL)</label><span class="required">*</span>
					<input type="text" name="image3" required />
					</div>
					<div class="left">
						<label>Car Image 4(URL)</label><span class="required">*</span>
						<input type="text" name="image4" required />
					</div>
					<div class="right">
						<label>Car Image 5(URL)</label><span class="required">*</span>
						<input type="text" name="image5" required />
					</div>
					
					<div class="left">
						<label>Car Capacity</label><span class="required">*</span>
						<input type="text" name="capacity" required />
					</div>
					<button  type="submit" name="send" class="submit-btn">Submit</button>
				</form>
				<?php
					include '../includes/config.php';
					if(isset($_POST['send'])){
						$sql = "INSERT INTO cars (image1, image2, image3, image4, image5, car_make, car_model, rate, capacity, year, transmission, fuel_type, mileage, license_plate, car_location, availability) 
							VALUES (
							'$_POST[image1]',
							'$_POST[image2]',
							'$_POST[image3]',
							'$_POST[image4]',
							'$_POST[image5]',
							'$_POST[car_make]',
							'$_POST[car_model]',
							'$_POST[rate]',
							'$_POST[capacity]',
							'$_POST[year]',
							'$_POST[transmission]',
							'$_POST[fuel_type]',
							'$_POST[mileage]',
							'$_POST[license_plate]',
							'$_POST[car_location]',
							1)";

						$result = $conn->query($sql);

						if($result === TRUE){
							echo "<script type = \"text/javascript\">
								alert(\"Vehicle Succesfully Added\");
								window.location = (\"cars_list.php\")
								</script>";
						}
					} else 'Failed';
				?>
			</div>
		</main>
  </body>
</html>