<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>WebShop</title>
	</head>
	<body>
		<header>
				<div>
				<img src="../Bilder/Webshop.jpg" alt="Firmenlogo" /> 
				<h1> Der Marlon und Thorben Webshop!</h1>
				</div>
		</header>
		<h2>Persönliche Daten:</h2>
		<form name="Registration" action="insert.php" method="POST" enctype="multipart/form-data">
			<table id="reg">
			<tr><td><label>Vorname: </label></td><td><input type="text" name="firstName" size="20pt" maxlength="45" value=""</td>
			<tr><td><label>Nachname: </label></td><td><input type="text" name="lastName" size="20pt" maxlength="45" value=""</td>
			<tr><td><label>Land: </label></td><td><input type="text" name="country" size="20pt" maxlength="45" value=""</td>
			<tr><td><label>Stadt: </label></td><td><input type="text" name="city" size="20pt" maxlength="45" value=""</td>
			<tr><td><label>Straße, Nr.: </label></td><td><input type="text" name="street" size="20pt" maxlength="45" value=""</td>
			<tr><td><label>E-Mail: </label></td><td><input type="email" name="email" size="20pt" maxlength="45" value=""</td>
			<tr><td><label>Telefon: </label></td><td><input type="tel" name="phone" size="20pt" maxlength="45" value=""</td>
			<tr><td><label>Geburtstag: </label></td><td><input type="date" name="dateOfBirth" size="20pt" maxlength="45" value=""</td>
			<tr>
			<tr><td><label>Benutzername: </label></td><td><input type="text" name="newUserName" size="20pt" maxlength="45" value=""</td>
			<tr><td><label>Passwort: </label></td><td><input type="password" name="newPW" size="20pt" maxlength="45" value=""</td>
			<tr><td><label>Passwort widerholen: </label></td><td><input type="password" name="newPW2" size="20pt" maxlength="45" value=""</td>
			</table>
			<input type="submit" value="Abschicken">
		</form>
		
			
		<br>
		<br>
		<a href="../index.html">Zurück </a>zur Startseite
		<br>
		<br>
		<br>
		<footer>
				<ul>
				<li><a href="wegbeschreibung/wegbeschreibung.html" target="_blank">Wegbeschreibung</a></li>
				<li><a href="mailto:Thorben.Soeren@web.de">Kontakt</a></li>
				</ul>
			</footer>
	</body>
</html>