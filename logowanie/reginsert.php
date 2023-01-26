<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPRegister</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "admin";
$password = "zaq1@WSX";
$database = "loginsystem";

$conn = new mysqli($servername, $username, $password, $database);

$ulogin = mysqli_real_escape_string($conn,$_POST['uLogin']);
$upassword = mysqli_real_escape_string($conn,$_POST['uPassword']); 
$uimie = mysqli_real_escape_string($conn,$_POST['uImie']);

//Check
$sql = "SELECT Login FROM dane WHERE Login='$ulogin'";
$result = $conn->query($sql);
if ($result->num_rows != 0) {
    header("Location: register.php?error=1");
    exit();
}
else if($result->num_rows == 0) {
    $sqlin = "INSERT INTO dane (`Login`, `Password`, `Imie`) VALUES ('$ulogin', '$upassword', '$uimie')";
    $resultin = $conn->query($sqlin);
    header("Location: index.php?entry=2");
    exit();
}

?>
</body>
</html>
