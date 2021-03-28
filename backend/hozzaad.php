<?php
require 'connect.php';
$data = json_decode(file_get_contents("php://input"));
$nev = $data->nev;
$telefon = $data->telefon;
$lakhely = $data->lakhely;
 $email = $data->email;
 $munkahely = $data->munkahely;
  $Otthoni="Otthoni";
 $userData = mysqli_query($conn,"SELECT * FROM szemely WHERE szemelyNev='".$nev."'");
 if(mysqli_num_rows($userData) == 0){
    mysqli_query($conn,"INSERT INTO szemely(szemelyNev,szemelyCim,munkahely) VALUES('".$nev."','".$lakhely."','".$munkahely."')");
    $last_id = $conn->insert_id;    
   mysqli_query($conn,"INSERT INTO telefon(telefonSzam,telefonTipus, szemelyId) VALUES('".$telefon."','".$Otthoni."','".$last_id."')");
   mysqli_query($conn,"INSERT INTO email(emailCim,szemelyId) VALUES('".$email."','".$last_id."')");
    echo "Sikeres hozzáadás";
  }
  else{
    echo "Már létezik ez a személy.";
  }

  exit;
?>