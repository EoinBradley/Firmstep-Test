<!DOCTYPE html>
<html>
<head>
	<title>Queue App</title>
	<link rel="stylesheet" type="text/css" href="style/main.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
	<div id="main">
		<h1 id="title">Queue App</h1>
		<div id="new-customer">
			<h2 class="heading">New Customer</h2>
			<div class="content">
				<h3>Services</h3>
				<input type="radio" name="service" value="Housing" checked="checked"> Housing<br />
				<input type="radio" name="service" value="Benifits"> Benifits<br />
				<input type="radio" name="service" value="Council Tax"> Council Tax<br />
				<input type="radio" name="service" value="Fly-tipping"> Fly-tipping<br />
				<input type="radio" name="service" value="Mised Bin"> Missed Bin<br /><br/>

				<input type="radio" name="customer-type" value="Citizen" id="Citizen" checked="checked"> Citizen<br />
				<input type="radio" name="customer-type" value="Organisation" id="Organisation"> Organisation<br />
				<input type="radio" name="customer-type" value="Anonymous" id="Anonymous"> Anonymous<br /><br />
				<div id="requiredData">
					Title<br />
					<select class="input" id="customer-title">
						<option value="Mr.">Mr.</option>
						<option value="Mrs.">Mrs.</option>
						<option value="Ms.">Ms.</option>
						<option value="Dr.">Dr.</option>
					</select>
					First Name<br />
					<input type="text" name="first-name" id="first-name" placeholder="First Name" class="input">
					Last Name<br />
					<input type="text" name="last-name" id="last-name" placeholder="Last Name" class="input">
				</div>
				<button id="submit-btn">Submit</button>
			</div>
		</div>
		<div id="queue">
			<h2 class="heading">Queue</h2>
			<div class="content">
				List of the customers being queued
			</div>
			<div id="QueueData">
				
			</div>
		</div>
	</div>
</body>
</html>