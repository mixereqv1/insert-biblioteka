<?php

    $conn = new mysqli('172.16.131.125','z_qwe','cvb','z_qwe');
    $id = $_POST['id_wyp'];
    $sql = "DELETE FROM bibl_wyp WHERE id_wyp=$id";
    mysqli_query($conn,$sql);
    header('location:index.php');

?>