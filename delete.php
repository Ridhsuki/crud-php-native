<?php

    include 'connect.php';

    $id = $_GET['id'];

    $query = "DELETE FROM data_siswa WHERE id=$id";

    if($connect->query($query) === true){
        header('Location: index.php');
    }else{
        echo "Gagal";
    }

?>