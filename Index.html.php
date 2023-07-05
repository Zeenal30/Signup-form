<!DOCTYPE html>
<html>
<head>
	<title>Social Media SignUp Page</title>
</head>
<body align="center">
<script type="text/javascript" src = "signup.js"></script>
	<h1>SOCIAL MEDIA SIGNUP FORM</h1>
	<form name="Sign Up Page" style="display: inline-block;">
		<table border="1">
			<tr>
				<td>Full name</td>
				<td><input type="text" name="Fname" id="Fname" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="Uname" id="Uname" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="Pass" id="Pass" required></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="Cpass" id="Cpass" required></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="Gender" id="Gender" value="Male" required> Male
					<input type="radio" name="Gender" id="Gender" value="Female" required> Female
					<input type="radio" name="Gender" id="Gender" value="Other" required> Other
				</td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td><input type="tel" name="pnum" id="pnum" required></td>
			</tr>
			<tr>
				<td>Email Id</td>
				<td><input type="email" name="Eid" id="Eid" required></td>
			</tr>
			<tr>
				<td>State</td>
				<td>
					<select name="State" required id="State">
						<option>Select your State</option>
						<option>Gujarat</option>
						<option>Maharastra</option>
						<option>Madhya Pradesh</option>
						<option>Telangana</option>
						<option>Kerela</option>
						<option>Tamilnadu</option>
						<option>Goa</option>
						<option>Uttar Pradesh</option>
						<option>West Bengal</option>
						<option>Tripura</option>
						<option>Sikkim</option>
						<option>Punjab</option>
						<option>Odisha</option>
						<option>Nagaland</option>
						<option>Mizoram</option>
						<option>Meghalaya</option>
						<option>Manipur</option>
						<option>Karnataka</option>
						<option>Jharkhand</option>
						<option>Himachal Pradesh</option>
						<option>Haryana</option>
						<option>Chattisgarh</option>
						<option>Bihar</option>
						<option>Assam</option>
						<option>Arunachal Pradesh</option>
						<option>Andhra Pradesh</option>
						<option>Rajasthan</option>
						<option>Utarakhand</option>
					</select>
				</td>
			</tr>
			<tr>

				<td colspan="2">
					Please check and agree before you proceed</br>
					<input type="checkbox" name="Agree" id="Agree" value="Agree" required> I Agree
					<input type="checkbox" name="Don't Agree" value="Don't Agree" required> Don't Agree
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="Register" value="Register">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>