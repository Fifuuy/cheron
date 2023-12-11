<!DOCTYPE html>
<html lang="pl-Pl">
<head>
    <meta charset="UTF-8" />
    <title>Sekretariat</title />
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="lewy">
        <h1>Akta Pracownicze</h1>
        <?php
            $c = mysqli_connect("localhost","root","","firma");

            $zapytanie = "SELECT imie, nazwisko, miasto, czyRODO, czyBadania FROM pracownicy WHERE id = 2";

            $q = mysqli_query($c, $zapytanie);
            $f = mysqli_fetch_row($q);
            echo "<h3>dane</h3>";
            echo "<p>$f[0] $f[1]</p>";
            echo "<hr />";
            echo "<h3>adres</h3>";
            echo "<p>$f[2]</p>";
            echo "<p>$f[3]</p>";
            echo "<hr />";
            if($f[4]==1){
                echo "<p>RODO: podpisano</p>";

            }else{
                echo "<p>RODO: niepodpisano</p>";
            }
            if($f[5]==1){
                echo "<p>badania: aktualne</p>";

            }else{
                echo "<p>badania: nieaktualne<</p>";
            }
            mysqli_close($c);
        ?>
        <hr/>
        <h3>Dokumenty pracownika</h3>
        <a href="cv.txt">Pobierz</a>
        <h1>Liczba zatrudnionych pracowników</h1>
        <p>
            <?php
                $c = mysqli_connect("localhost","root","","firma");

                $z1 = "SELECT COUNT(id) FROM pracownicy;";
                $q1 = mysqli_query($c $z1);
                $f1 = mysqli_fetch_row($q1);
                echo "$fi[0]";

                mysqli_close($c);
            ?>
        </p>

    </div>
    <div id="prawy">
            <?PHP
                $c = mysqli_connect("localhost","root","","firma");

                $z2 = "SELECT id, imie, nazwisko,  FROM pracownicy
                WHERE id = 2;";
                $q2 = mysqli_query($c $z2);
                $f2 = mysqli_fetch_row($q2);

                echo "<img src = '$f[0].jpg' alt='pracwonik'>";
                echo "<h2>$f2[1] $f2[2]</h2>";

                $z3= "SELECT pracownicy.id, stanowsika.nazwa, stnowiska.opis FROM pracownicy INNER JOIN stanowiska on stanowiska.id = pracownicy.stanowsika_id WHERE pracownicy.id = 2";;

                $q3 = mysqli_query($c, $z3);
                $f3 = musqli_fetch_row($q3);

                echo "<h3>$f3[1]</h3>";
                echo "<h3>$f3[2]</h3>";

                mysqli_close($c);
            ?>

    </div>
    <div id="stopka">
        Autorem aplikacji jest: 11111111111
        <ul>
            <li>skontaktuj sie</li>
            <li>poznaj ansza firme</li>
        </ul>
    </div>
</body>
</html>