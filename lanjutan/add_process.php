<?php

include "database_conn.php";

if(count($_POST) > 0){
    $id_admin = $_POST["id_admin"];
    $nama_admin = $_POST["nama_admin"];
    $password_admin = $_POST["password_admin"];

    $query = "INSERT INTO tampilan (id_admin, nama_admin, password_admin) VALUES ('$id_admin', '$nama_admin', '$password_admin')";

    if(mysqli_query($db_connect, $query)){
        $message = 1;
    } else {
        $message = 4;
    }
}

header("Location:data_admin.php?message=" . $message . "");
?>