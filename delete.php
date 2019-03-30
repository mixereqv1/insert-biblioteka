<?php

    $conn = new mysqli('127.0.0.1','root','','biblioteka');
    $id_wyp = $_POST['id_wyp'];
    $sql = "DELETE FROM bibl_wyp WHERE id_wyp=$id_wyp";
    mysqli_query($conn,$sql);
    header('location:index.php');

?>