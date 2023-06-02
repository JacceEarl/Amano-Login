<!DOCTYPE html>
<html>
<head>
	<form action="inner1.html">
	<title>Registration Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		form {
			background-color: white;
			border: 1px solid #ccc;
			padding: 20px;
			max-width: 500px;
			margin: 50px auto;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
		}
		h1 {
			text-align: center;
			margin-top: 0;
		}
		label {
			display: block;
			margin-bottom: 8px;
			font-weight: bold;
		}
		input[type="text"],
		input[type="password"],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			width: 100%;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<form>
		<h1>Registration Form</h1>
		<label for="name">Name</label>
		<input type="text" id="name" name="name" required>

		<label for="username">Username</label>
		<input type="text" id="username" name="username" required>

		<label for="password">Password</label>
		<input type="password" id="password" name="password" required>

		<label for="confirm_password">Confirm Password</label>
		<input type="password" id="confirm_password" name="confirm_password" required>

		<label for="age">Age</label>
		<input type="text" id="age" name="age">

		<label for="gender">Gender</label>
		<select id="gender" name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select>

		<input type="submit" value="Register">
		<p>Already have an account? <a href="logincode1.html">Log in here</a>.</p>
	</form>
</body>
</html>