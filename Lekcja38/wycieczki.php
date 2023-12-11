<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Wycieczki po Europie</title>
</head>
<body>
    <div id="baner">
        <h1>BIURO TURYSTYCZNE</h1>
    </div>
    <div id="dane">
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
            <?php
                $c = mysqli_connect("localhost","root","","biuro");

                $q = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE 
                wycieczki.dostepna = 1";

                $wynik = mysqli_query($c, $q);

                for($i=0;$i<mysqli_num_rows($wynik);$i++){
                    $row = mysqli_Fetch_row($wynik);

                    echo "<li> $row[0] dnia: $row[1] jedziemy do $row[2] cena $row[3]  </li>";
                }
                mysqli_close($c);
            ?>
        </ul>
    </div>
    <div id="lewy">
        <h2>Bestselery</h2>
        <table>
            <tr>
                <td>wenecja</td>
                <td>kwieien</td>
            </tr>
            <tr>
                <td>londyn</td>
                <td>lipiec</td>
            </tr>
            <tr>
                <td>rzym</td>
                <td>wrzesien</td>
            </tr>
        </table>
    </div>
    <div id="srodkowy">
        <h2>Nasze zdjęcia</h2>
            <?php
                $c = mysqli_connect("localhost","root","","biuro");

                    $q = "SELECT zdjecia.nazwaPliku, zdjecia.podpis from zdjecia
                    ORDER BY zdjecia.podpis ";

                    $wynik = mysqli_query($c, $q);

                    $row = mysqli_Fetch_row($wynik);

                    
                mysqli_close($c);
            ?>
    </div>
    <div id="prawy">
        <h2>Skontaktuj się”</h2>
        <a href="mailto:turysta@wycieczki.pl ">napisz do nas</a>
        <p>telefon: 111222333</p>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: 11111111111</p>
    </div>
</body>
</html>