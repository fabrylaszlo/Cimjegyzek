<?php

require 'connect.php';

$postdata = file_get_contents('php://input');

if (isset($postdata) && !empty($postdata)){

    $request = json_decode($postdata);

    $sql='SELECT * FROM szemely WHERE szemelyNev LIKE ?';

    $stmt = $conn->prepare($sql);

    $name='%'.$request->szemelyNev.'%';

    $stmt->bind_param('s',$name);
    // s -> string
    // i -> integer
    // d -> decimal
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $values = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($values);
    } else{
        echo json_encode(null);
    }
}

?>