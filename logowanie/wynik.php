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
$servername = "localhost";
$username = "admin";
$password = "zaq1@WSX";
$database = "loginsystem";
$conn = new mysqli($servername, $username, $password, $database);
$ulogin = mysqli_real_escape_string($conn,$_POST['uLogin']);
$upassword = mysqli_real_escape_string($conn,$_POST['uPassword']); 

$sql = "SELECT ID,Imie FROM dane WHERE Login='$ulogin' AND password='$upassword'";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $uID = $row["ID"];
        $uIMIE = $row["Imie"];
    }

$conn->close();
?>
<div class="Menu">
<img style="border-radius: 50%; width: 50px; height: 50px;" src="profilowe/profilowe<?php echo($uID);?>.png">
<span> Witaj, <?php echo($uIMIE);?>!</span>
</div>


</body>
</html>