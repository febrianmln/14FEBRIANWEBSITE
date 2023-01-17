<?php
include "database_conn.php";
$id_admin = $_GET["id_admin"];

$query = "DELETE FROM tampilan WHERE id_admin='" . $id_admin . "'";

if(mysqli_query($db_connect, $query)){
    $message = 3;
} else {
    $message = 4;
}

header("Location:data_admin.php?message=" . $message . "");
?>