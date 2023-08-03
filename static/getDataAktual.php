<?php
    $servername = "localhost";
    $database = "ultrasonic";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM aktual";
    $result = mysqli_query($conn, $sql);
    $data1 = array();

    while($row = mysqli_fetch_assoc($result)) {
        $data1[] = $row;
    }

    echo json_encode($data1);

    mysqli_close($conn);
?>