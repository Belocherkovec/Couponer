<?php

require_once '../config/connect.php';
$id = $_POST['id'];
$short_name = $_POST['short_name'];
$sale = $_POST['sale'];
$full_name = $_POST['full_name'];
$img_name = $_POST['img_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$location = $_POST['location'];
$working_hours = $_POST['working_hours'];
$phone_numbers = $_POST['phone_numbers'];
$start_date = $_POST['start_date'];
$finish_date = $_POST['finish_date'];
$type = $_POST['type'];
$button_method = $_POST['button'];

if ($button_method === 'update') {
mysqli_query($connect, "UPDATE `service` SET `short_name` = '$short_name', `sale` = '$sale', `full_name` = '$full_name', `img_name` = '$img_name', `description` = '$description', `price` = '$price', `location` = '$location', `working_hours` = '$working_hours', `phone_numbers` = '$phone_numbers', `start_date` = '$start_date', `finish_date` = '$finish_date', `type` = '$type' WHERE `service`.`id` = '$id'");
} else if ($button_method === 'create') {
mysqli_query($connect, "INSERT INTO `service` (`id`, `short_name`, `sale`, `full_name`, `img_name`, `description`, `price`, `location`, `working_hours`, `phone_numbers`, `start_date`, `finish_date`, `type`) VALUES (NULL, '$short_name', '$sale', '$full_name', '$img_name', '$description', '$price', '$location', '$working_hours', '$phone_numbers', '$start_date', '$finish_date', '$type')");
} else {
  die("Непредвиденная ошибка!");
}

header('location: /edit.php');
?>
