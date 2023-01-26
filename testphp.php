<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
    <script>
   
    function losowaliczba(min, max) {
        return Math.round(Math.random() * (max - min) + min);;
    }
    function los() {
        var plec = losowaliczba(0,1);
        if (plec == 0) { //mezczyzna
        var imie = ["Szymon","Radosław","Damian","Bartek","Adam","Alan","Oskar","Cezary","Maciej","Aleks","Mateusz"];
        var nazwisko = ["Jurczyński", "Zając", "Włodarczyk", "Borkowski","Szymański","Marciniak","Walczak","Wysocki","Sokołowski","Ulanowski","Gawlik"];
        }
        else if(plec == 1) { //kobieta
        var imie = ["Natasza","Izabela","Anna","Zofia","Dominika","Marta","Martyna","Justyna","Lena","Natalia"];
        var nazwisko = ["Zawadzka","Kowalczyk","Stępień","Krawczyk","Duda","Szczepańska","Nowak","Dudek","Michalak","Wójcik"];
        }
        var miasto = ["Jelcz-Laskowice","Wrocław","Warszawa","Gdańsk","Szczecin","Poznań","Łódź","Kraków","Miłoszyce","Rzeszów"];
        document.getElementById('Imie').value = imie[losowaliczba(0, imie.length-1)];
        document.getElementById('Nazwisko').value = nazwisko[losowaliczba(0, nazwisko.length-1)];
        document.getElementById('Miasto').value = miasto[losowaliczba(0, miasto.length-1)];
        document.getElementById('DataUrodzenia').value = losowaliczba(1990,2023) + "-" + formatowanie(losowaliczba(1,12))+"-"+formatowanie(losowaliczba(1,29));
        document.getElementById('PESEL').value = Math.round(Math.random()*100000000000);
    }
    function formatowanie(liczba) {
    return (liczba < 10) ? '0' + liczba.toString() : liczba.toString();
}
    </script>
    <style>
    body {
        text-align: center;
        vertical-align: middle;
        background-color: #5E5757;
    }
    #box {
        background-color: #806969;
        width: 25%;
        height: auto;
        margin-left: auto;
        margin-right: auto;
    }
    #form {
        padding: 2px;
        height: 50%;
    }
    #form > input {
        float: right;
    }
    #form > span {
        float: left
    }
    </style>
</head>
<body>
<h1> Test PHP</h1>
<div id="box">
    <h2>Wprowadzenie danych</h2>
        <form action="main.php" method="post" id="form">
        <span>Imie:</span> <input id="Imie" type="text" name="Imie"><br>
        <span>Nazwisko:</span> <input id="Nazwisko" type="text" name="Nazwisko"><br>
        <span>Data Urodzenia:</span> <input id="DataUrodzenia" style="height: 15px; width: 169px; padding: 1px 2px 1px 2px;" type="date" name="DataUrodzenia"><br>
        <span>Miasto:</span> <input id="Miasto" type="text" name="Miasto"><br>
        <span>PESEL:</span> <input id="PESEL" type="text" name="PESEL"><br><br>
        <input type="submit" style="float: none">
        </form>
</div>
<button onclick="los()">Losowe dane</button>

</body>
</html>