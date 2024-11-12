<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubuntu Server PHP Deployment - Princess Nina Puzon</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style>
		/* Custom styles */
		body {
			background-color: #f8f9fa;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		.card {
			width: 100%;
			max-width: 500px;
			margin-top: 20px;
			padding: 20px;
			border: none;
			box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
		}
		.btn-custom {
			background-color: #4caf50;
			color: white;
		}
		.btn-custom:hover {
			background-color: #45a049;
		}
	</style>
</head>

<body>
	<div class="card">
		<h2 class="text-center mb-4">Ubuntu Server PHP Deployment - Princess Nina Puzon</h2>
		
		<form method="POST" action="index.php">
			<div class="mb-3">
				<label for="firstname" class="form-label">First Name:</label>
				<input type="text" name="firstname" id="firstname" class="form-control" required>
			</div>

			<div class="mb-3">
				<label for="middlename" class="form-label">Middle Name:</label>
				<input type="text" name="middlename" id="middlename" class="form-control" required>
			</div>

			<div class="mb-3">
				<label for="lastname" class="form-label">Last Name:</label>
				<input type="text" name="lastname" id="lastname" class="form-control" required>
			</div>

			<div class="mb-3">
				<label for="age" class="form-label">Age:</label>
				<input type="number" name="age" id="age" class="form-control" required>
			</div>

			<div class="mb-3">
				<label for="address" class="form-label">Address:</label>
				<input type="text" name="address" id="address" class="form-control" required>
			</div>

			<div class="mb-3">
				<label for="course" class="form-label">Course & Section:</label>
				<input type="text" name="course" id="course" class="form-control" required>
			</div>

			<div class="d-grid">
				<button type="submit" class="btn btn-custom">Submit</button>
			</div>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
