<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="dodawanie.php" method="post">
        Nazwisko: <input type="text" name="naz" id="">
        imie:   <input type="text" name=" imie" id="">
        Pesel: <input type="number" name="pesel" id="">
        data-urodzenia: <input type="date" name="data" id="">
        czykobieta: <input type="text" name="czykobiet" id="">
        idgrupy: <input type="text" name="idgrupy" id="">
            <input type="submit" value="dodaj">
    </form>
    <form action="usun.php">
        podaj id uzytkownika do usueniecia: <input type="number" name="usunid" id="">
        <input type="submit" value="wyslij">
    </form>
    <form action="poprawa.php" method="post">
        Podaj id studenta do poprawy: <input type="number" name="poprawaid" id="">
        <input type="submit" value="wyslij">
    </form>
</body>
</html>