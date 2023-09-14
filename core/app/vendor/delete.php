<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `service` WHERE `service`.`id` = '$id'");

header('Location: /edit.php');