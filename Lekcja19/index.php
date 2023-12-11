<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $c = mysqli_connect('localhost','root','','uczelnia');

        $q = "SELECT wykladowcy.imie, wykladowcy.nazwisko FROM  wykladowcy ORDER BY  wykladowcy.DataUrodzenia LIMIT 10";
    
        $wynik = mysqli_query($c, $q);
    
        $ile_wierszy = mysqli_num_rows($wynik);
        echo "<ol>";
        for($i=0; $i<$ile_wierszy; $i++)
        {
            $wiersz  = mysqli_fetch_row($wynik);
            echo "<li>$wiersz[0] $wiersz[1]</li>";
        }
        echo "</ol>";
        mysqli_close($c);
    ?>
</body>
</html>