

<?php
    $c = mysqli_connect("localhost","root","","uczelnia");

    $naz = $_POST['naz'];
    $imie = $_POST['imie'];
    $pesel = $_POST['pesel'];
    $data = $_POST['data'];
    $czykob = $_POST['czukobiet']
    $idgrupy = $_POST['idgrupy']

    $q = "INSERT INTO studenci (Nazwisko, Imie, Pesel, DataUrodzenia, CzyKobieta, IdGrupy) VALUES ('$naz','$imie','$pesel','$data','$czykob',
    '$idgrupy')";

    $zap = mysqli_query($c, $q);
    if($zap){
        echo "D
        dodano studenta: $naz $imie";
    }


    mysqli_close($C);

?>