<?php
    $servername = "localhost";
    $username = "root";
    $password = null;
    $dbname = "quanlydeancongty";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error );
    }

    #Insert MySQL
    $sql = "INSERT INTO phongban(TenPHG, MaPHG, TrPHG, Ng_NhanChuc)
    VALUES ('Sản xuất', 6, '009', '1990-09-09')";
    
    if($conn->query($sql) === TRUE){
        echo "New record created sucessfully";
    } else {
        echo "Error: " . $sql . "<br />" . $conn->error;
    }

    #Select MySQL
    $phongban = "SELECT TenPHG, MaPHG, TrPHG, Ng_NhanChuc FROM phongban";
    $result = $conn->query($phongban);
    if ($result->num_rows > 0){
        $rows = [];
        While($row = $result->fetch_assoc()){
            $rows [] = $row;
        }
        foreach($rows as $key => $value){
            echo "--___--<br />";
            foreach($value as $key => $value){
                echo $key.": <br />". $value. "<br />";
            }
        }
    } else {
        echo "0 results";
    }

    $conn->close();

?>