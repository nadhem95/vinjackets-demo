<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VINJACKETS</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div class="container">
        <form method="POST" action="connection.php">
            <h1>Welcome to VINJACKETS
				LOGIN !
			</h1>
            <input type="text" name="email" placeholder="Votre Email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>"><br><br>
            <input type="password" name="password" placeholder="Votre Mot de passe" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>"><br><br>
            <input type="checkbox" name="check" id="check">
            <label for="check">Se souvenir de moi</label><br><br>
            <input type="submit" value="Se Connecter">
        </form>
    </div>
</body>
</html>
