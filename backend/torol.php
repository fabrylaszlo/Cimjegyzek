<?php

require 'connect.php';
$data = json_decode(file_get_contents("php://input"));
$szemelyId = $data->szemelyId;

  mysqli_query($conn,"DELETE FROM szemelyek WHERE szemelyId=".$szemelyId);
  mysqli_query($conn,"DELETE FROM munkahely WHERE szemelyId=".$szemelyId);
  mysqli_query($conn,"DELETE FROM telefon WHERE szemelyId=".$szemelyId);


  echo "Sikeres törlés";
  exit;

?>