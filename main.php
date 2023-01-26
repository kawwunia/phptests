<html>
  <head>
    <title>Wynik PHP</title>
    <style>
      table, th ,td ,tr {

        border: 1px solid;
        border-collapse: collapse;
      }
    </style>
  </head>
<body>

<?php
$servername = "localhost";
$username = "admin";
$password = "zaq1@WSX";
$database = "testowa";



$conn = new mysqli($servername, $username, $password, $database);

$uImie = mysqli_real_escape_string($conn,$_POST['Imie']);
$uNazwisko = mysqli_real_escape_string($conn,$_POST['Nazwisko']);
$uDataUrodzenia = mysqli_real_escape_string($conn,$_POST['DataUrodzenia']);
$uMiasto = mysqli_real_escape_string($conn,$_POST['Miasto']);
$uPESEL = mysqli_real_escape_string($conn,$_POST['PESEL']);



//!!!!!!!!
$sql = "INSERT INTO klienci (`Imie`, `Nazwisko`, `Data Urodzenia`, `Miasto`, `PESEL`)
VALUES ('{$uImie}', '{$uNazwisko}', '{$uDataUrodzenia}', '{$uMiasto}', '{$uPESEL}')";
    if ($conn->query($sql) === TRUE) {
      echo "Polecenie wykonane";
    } else {
      echo "Error: " . $conn->error;
    }
$sql = "SELECT * FROM klienci";
$result = $conn->query($sql);
echo "<table><tr><th>ID</th><th>Imie</th><th>Nazwisko</th><th>Data Urodzenia</th><th>Miasto</th><th>PESEL</th></tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" .$row["ID"]. "</td><td>" . $row["Imie"]. "</td><td>" . $row["Nazwisko"] . "</td><td>" . $row["Data Urodzenia"] . "</td><td>" . $row["Miasto"] . "</td><td>" . $row["PESEL"] . "</td></tr>";
    }
  } else {
    echo "Brak wynikow";
  }
echo "</table>";
$conn->close();
?>

</br>
<a href ="testphp.php">Powrot do formularza</a>

</body>
</html>