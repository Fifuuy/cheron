<?php
    if(isset($_POST['sprawdz'])){
        $i = $_POST['imie'];
        $w = $_POST['wiek'];
        $p = $_POST['pieczywo'];
        $z = $_POST['zgoda'];
        $g = $_POST["gofer"];
        echo $i, "<br/>", $w,"<br/>", $p,"<br/>",$z,"<br/>",$g ;
    }else
    {
        echo "brak zgody"
    }
?>