<?php
$connect = mysqli_connect('localhost','root', '', 'myshop');

if (!$connect) {
  die('Ошибка подключения к БД');
}
?>