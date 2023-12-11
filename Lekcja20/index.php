<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table, td, th{
            border: solid black 1px;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
        <table>
        <tr>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Srednia</th>
        </tr>

       
    <?php
        $c = mysqli_connect('localhost','root','','uczelnia');


        $q = "SELECT studenci.Imie,studenci.Nazwisko,  ROUND(AVG(oceny.Ocena),2) as srednia  FROM studenci
        INNER JOIN oceny on oceny.IdStudenta = studenci.IdStudenta
        GROUP BY studenci.Nazwisko
        ORDER BY srednia DESC LIMIT 10
        ";

        $wynik = mysqli_query($c, $q);

        $ile_wierszy = mysqli_num_rows($wynik);
            for($i=0; $i<$ile_wierszy; $i++)
            {
                $wiersz = mysqli_fetch_row($wynik);
                echo " <tr><td>$wiersz[0]</td> <td>$wiersz[1]</td> <td>$wiersz[2]</td> ";
            }
        mysqli_close($c);
        
    ?>
     </table>
</body>
</html>