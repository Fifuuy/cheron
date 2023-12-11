<?php
    $c= mysqli_connect();
        $usunid = $_POST['usunid'];

        $q = "DELETE  FROM studenci WHERE studenci.IdStudenta = $usunid";
        $zap = mysqli_query($c, $q);
        if($zap){
            echo "Student o id $usunid zostal usuniety z bazy";
        }
        else{
            echo  "Cos poszlo nie tak sproboj ponownie";
        }

    mysql_close($c)
?>