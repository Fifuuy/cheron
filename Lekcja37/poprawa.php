<?php
    $c = mysqli_connect();

    idzmiana = $_POST['poprawaid'];
    $q = "SELECT imie. nazwisko FROM studenci WHERE IdStudenta = $idzmiana";

   $zap = mysqlI_query($c,$q);

    $wiesz = mysqli_fetch_row($q);
    echo "$wiersz[0] $wiersz[1]";
    echo "<form action='popraw_w.php' method='post'>
        imie: <input type='text' name="im" value='$wiersz[0]'>
        Naz <input type='text' name="naz" value='$wiersz[0]'>
        id  <input type='number' name="idstudenta" value='$idzmiana' hidden>
        <input type='submit' value='zmien'>
    </form>";
    mysqli_close($C);
?>
