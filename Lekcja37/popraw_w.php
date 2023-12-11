<?php
    $c = mysqli_connect($C);
    $imie = $_POST['im'];
    $naz = $_POST['naz']''
    $id = $_POST['idstudenta'];
    
    $q = "UPDATE studenci SET imie = $imie";

    echo "$imie $naz";
    mysqli_close($c);

?>