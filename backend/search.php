<?php
require "connect.php";

$postdata = file_get_contents('php://input');


if(isset($postdata)&&!empty($postdata)){
$request = json_decode($postdata);

$sql='SELECT * FROM szemely WHERE szemelyNev LIKE ?';
$stmt= $conn->prepare($sql);
$name='%'.$request->name.'%';
$stmt->bind_param('s',$name);
$stmt->execute();

$result = $stmt_get_result();
if ($result->num_rows>0) {
    $values=$result->fetch_all(MYSQLI_ASSOC);
   
    echo json_encode($values);
}
else{
echo json_encode(null);
}
}

?>