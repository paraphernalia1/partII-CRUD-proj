<?php

    include_once("../dbConnection/mysqlconfig_connection.php");

    $id = $_GET['id'];

    mysqli_query($link, "DELETE FROM tblsubjects WHERE Subject_ID='$id'");

    header("Location:../index.php")

?>