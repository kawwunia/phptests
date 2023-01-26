<?php
session_start();
$servername = "localhost";
$username = "admin";
$password = "zaq1@WSX";
$database = "loginsystem";
$conn = new mysqli($servername, $username, $password, $database);
$ulogin = mysqli_real_escape_string($conn,$_POST['uLogin']);
$upassword = mysqli_real_escape_string($conn,$_POST['uPassword']); 
$sql = "SELECT ID,Imie FROM dane WHERE Login='$ulogin' AND password='$upassword'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $row["Imie"];;
		$_SESSION['id'] = $row["ID"];
        header('Location: wynik.php');
    }
    
}
else {
    header("Location: index.php?entry=1");
    exit();
}
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php?entry=3');
	exit;
}
?>