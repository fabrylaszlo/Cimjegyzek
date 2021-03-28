<?php

require 'connect.php';
$data = json_decode(file_get_contents("php://input"));
$szemelyId=$data->szemelyId;
    $nev = $data->nev;
    $telefon = $data->telefon;
    $lakhely=$data->lakhely;
    $email = $data->email;
    $munkahely= $data->munkahely;
   
  
    mysqli_query($conn,"UPDATE szemely SET szemelyNev='".$nev."',munkahely='".$munkahely."',szemelyCim='".$lakhely."' WHERE szemelyId=".$szemelyId);
    mysqli_query($conn,"UPDATE telefon SET szemelyNev='".$telefon."' WHERE szemelyId=".$szemelyId);
    mysqli_query($conn,"UPDATE email SET emailCim='".$email."' WHERE szemelyId=".$szemelyId);
   
    echo "Sikeres módosítás";
    exit;
 

?>