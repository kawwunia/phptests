<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
    <script>
        function register(){
            window.location.pathname = /register.php/;
        }
    </script>
</head>
<body>
    
<h1>Test rejestracja</h1>
<h2>Wprowadź dane</h2>

<form action="reginsert.php" method="post">
Imie: <input type="text" name="uImie"><br>
Login: <input type="text" name="uLogin"><br>
Hasło: <input type="password" name="uPassword"><br>

<button type="submit" class="registerbtn">Register</button>
<p>Masz już konto? <a href="index.php">Zaloguj się</a>.</p>
</form>
<?php

if(empty($_GET['error'])) {
}
else {
echo('</br><span style="color:red">Takie konto już istnieje!</span>');
}
?>

</body>
</html>