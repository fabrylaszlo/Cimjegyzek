<?php

require 'connect.php';

$sql='SELECT szemely.szemelyId, szemely.szemelyNev, telefon.telefonSzam, szemely.szemelyCim,email.emailCim, szemely.munkahely FROM szemely INNER JOIN telefon ON telefon.szemelyId = szemely.szemelyId INNER JOIN email ON email.szemelyId = szemely.szemelyId';
$result=$conn->query($sql);

if ($result->num_rows>0) {
    $values=$result->fetch_all(MYSQLI_ASSOC);   
    echo json_encode($values);
}
else{
echo json_encode(null);
}
?>