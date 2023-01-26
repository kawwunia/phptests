<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
    <script>
        function register(){
            window.location.pathname = "/logowanie/register.php";
        }
    </script>
</head>
<body>
    
<h1>Test logowanie</h1>
<h2>Wprowadź login i hasło</h2>

<form action="login.php" method="post">
Login: <input type="text" name="uLogin"><br>
Hasło: <input type="password" name="uPassword"><br>

<input type="submit">
</form>
<button onclick="register()">Rejestracja</button>
<?php

if(empty($_GET['entry'])) {
}
else if ($_GET['entry']==1){
echo('</br><span style="color:red">Błędne dane!</span>');
}
else if ($_GET['entry']==2){
    echo('</br><span style="color:green">Konto utworzone!</span>');
    }
else if ($_GET['entry']==3) {
    echo('</br><span style="color:orange">Sesja wygasła</span>');
}
?>

</body>
</html>