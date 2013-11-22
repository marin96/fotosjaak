<!DOCTYPE html>
<html>
	<head>
		<title>
			Mijn eerste site
		</title>
	</head>
	<body>
		<h3>Registratie pagina</h3>
		<form action="register.php" method="post">
			<table border='1'>
			<tr>
				<td>voornaam:</td>
				</tr>	
				<tr>
				<td><input type="text" name="firstname" /></td>
				</tr>
				<tr>
				<td>tussenvoegsels:</td>
				</tr>	
				<tr>
				<td><input type="text" name="infix" /></td>
				</tr>
				<tr>
				<td>achternaam:</td>
				</tr>	
				<tr>
				<td><input type="text" name="surname" /></td>
				</tr>
				<tr>
				<td>woonplaats: 
				</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="city"
					</td>
				</tr>
				<td>
				<tr>
				<td>postcode:</td>
				</tr>	
				<tr>
				<td><input type="text" name="zipcode" /></td>
				</tr>
				<tr>
				<td>geboortedatum:</td>
				</tr>	
				<tr>
				<td><input type="date"  name="dateofbirth" /></td>
				</tr>
				<td>
				geslacht:
				<form>
				<input type="radio" name="sex" value="male">Male<br>
				<input type="radio" name="sex" value="female">Female
				</form>
				</td>
				<tr>
				
				</tr>
				<tr>
				<td>getrouwd: 
				</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="married"
					</td>
				</tr>
				<td>email: 
				</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="email"
					</td>
				</tr>
				<td>wachtwoord: 
				</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="password"
					</td>
				</tr>
				<td>favoriete game genre: 
				</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="favorite game genre"
					</td>
				</tr>
				<td>
				<td>
				<input type="submit" name="submit" value="verstuur" />
				</td>
				
				</table>
		</form> 
	</body>
</html>

