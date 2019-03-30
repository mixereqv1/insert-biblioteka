<?php

    $conn = new mysqli('127.0.0.1','root','','biblioteka');
    $autor = $_POST['autor'];
    $sql = "INSERT INTO bibl_autor VALUES(null,'$autor')";
    mysqli_query($conn,$sql);
    header('location:index.php');

?>