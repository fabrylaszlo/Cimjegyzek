<?php

require 'connect.php';

$sql='SELECT szemely.szemelyNev,telefon.telefonSzam FROM telefon INNER JOIN szemely ON telefon.szemelyId = szemely.szemelyId';
$result=$conn->query($sql);

if ($result->num_rows>0) {
    $values=$result->fetch_all(MYSQLI_ASSOC);
   
    echo json_encode($values);
}
else{
echo json_encode(null);
}
?>