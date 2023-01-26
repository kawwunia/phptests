<html>
<head>
    <style>
    .Menu {
        background-color: #aaa;
        height: 60px;
        width: 100%;
        color: white; /* kolor tekstu */
        text-decoration: none; /* bez podkreślenia */
        font-size: 17px; /* rozmiar */
        display: flex;
        align-items: center; /* wyśrodkuj poziomo */
        padding: 2px;
    }
    </style>
</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "admin";
$password = "zaq1@WSX";
$database = "loginsystem";
$conn = new mysqli($servername, $username, $password, $database);
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php?entry=3');
	exit;
}



$conn->close();
?>
<div class="Menu">
<img style="border-radius: 50%; width: 50px; height: 50px;" src="profilowe/profilowe<?php echo($_SESSION['id']);?>.png">
<span> Witaj, <?php echo($_SESSION['name']);?>!</br></span>
<a href="logout.php">Wyloguj się</span>
</div>


</body>
</html>