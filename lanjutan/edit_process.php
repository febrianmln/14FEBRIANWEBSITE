<?php
include "database_conn.php";

if(count($_POST) > 0) {
    $id_admin = $_POST["id_admin"];
    $nama_admin = $_POST["nama_admin"];
    $password_admin = $_POST["password_admin"];

    $query =
    "UPDATE tampilan set id_admin='" . $id_admin . "', nama_admin='" . $nama_admin . "', password_admin='" . $password_admin . "' WHERE id_admin='" . $id_admin . "'";

    if (mysqli_query($db_connect, $query)) {
        $message = 2;
    } else {
        $message = 4;
    }
}
header("Location:data_admin.php?message=" . $message . "");
?>