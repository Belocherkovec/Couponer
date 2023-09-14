<?php

require_once 'config/connect.php';

$amount = mysqli_query($connect, "SELECT COUNT(*) as 'количество купонов' FROM `service`");
$amount = mysqli_fetch_assoc($amount);

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `service` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);

$categories = mysqli_query($connect, "SELECT * FROM `types`"); 
$sales = mysqli_query($connect, "SELECT * FROM `sale`"); 

$categories = mysqli_fetch_all($categories);
$sales = mysqli_fetch_all($sales);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Купонер - сайт с купонами!</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet" />
</head>
<body>
</table>
  <table style="float: left;">
    <tr></tr>
      <th>ID</th>
      <th>Категория</th>
    </tr>

    <?php foreach ($categories as $category) {?>
    <tr>
      <td><?= $category[0] ?></td>
      <td><?= $category[1] ?></td>
    </tr>
    <?php
    }
    ?>

  </table>

  <table style="float: left;">
    <tr></tr>
      <th>ID</th>
      <th>Размер скидки</th>
    </tr>

    <?php foreach ($sales as $sale) {?>
    <tr>
      <td><?= $sale[0] ?></td>
      <td><?= $sale[1] ?></td>
    </tr>
    <?php
    }
    ?>

  </table>
<div class="form-container">
  <form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?=$product['id']?>">
    <h3>Добавить новый продукт</h3>
    <label>Название</label>
    <input type="text" name="name" value="<?= $product['name'] ?>">
    <label>Описание</label>
    <textarea name="description" ><?= $product['description'] ?></textarea>
    <label>Дата регистрации купона</label>
    <input type="date" name="date" value = "<?= $product['date_registration'] ?>">
    <label>Размер скидки</label>
    <input type="text" name="sale" value="<?= $product['sale'] ?>">
    <label>Локация</label>
    <textarea name="location" ><?= $product['location'] ?></textarea>
    <label>Тип</label>
    <input type="number" name="type" value="<?= $product['type'] ?>">
    <label>Ссылка на изображение</label>
    <textarea name="img_src"><?= $product['img_src'] ?></textarea>
    <button type="submit">Добавить</button>
  </form>
  </div>
</body>
</html>