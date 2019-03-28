<?php

    $conn = new mysqli('172.16.131.125','z_qwe','cvb','z_qwe');
    $autor = $_POST['autor'];
    $sql = "INSERT INTO bibl_autor VALUES (null, '$autor')";
    mysqli_query($conn,$sql);
    header('location:index.php'); 

?>