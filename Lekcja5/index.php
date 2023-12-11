<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>  
            <form action="" method="post">
            Imie: <input type="text" name="imie" id="">
            <input type="submit" value="wyslij">
        </form>
    <?php

        if(isset($_POST['imie']))
        {
            $i = $_POST['imie'];
            
            $c = mysqli_connect('localhost','root','','uczelnia');

            $zapytanie = "SELECT studenci.Imie,studenci.Nazwisko FROM studenci 
            WHERE studenci.Imie = 'Oliwia'";

            $q = mysqli_query($c, $zapytanie);
            $ile = mysqli_num_rows($q);

            echo "<table><tr><th>Imie</th>><thNazwisko</th>></tr>"; 
            for($imie; i<$ile; $i++)
            {
                $wi = mysqli_fetch_row($q);
                echo "<tr><td>$wi[0]</td><td>$wi[1]</td></tr>";
            }
            echo "</table>";

            mysqli_close($C);
        }
  
    ?>
</body>
</html>