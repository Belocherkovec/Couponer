<?php 
require_once 'app/config/connect.php'; 

// $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// echo $_SERVER['QUERY_STRING'];

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
 
// echo $url;

$amount = mysqli_query($connect, "SELECT COUNT(*) as 'количество купонов' FROM `service`");
$amount = mysqli_fetch_assoc($amount);

$category_id = $_GET['id'];

$links = mysqli_query($connect, "SELECT * FROM `types`");
$links = mysqli_fetch_all($links);

$coupons = mysqli_query($connect, "SELECT * FROM `service` WHERE `type` = '$category_id'");
$coupons = mysqli_fetch_all($coupons, MYSQLI_ASSOC);

$category_name = mysqli_query($connect, "SELECT `type` FROM `types` WHERE `id` = '$category_id'");
$category_name = mysqli_fetch_assoc($category_name);
// print_r($links);
// var_dump($category_name);
?>
<?php require('app/include/header.php'); ?>

<main class="main container">
<?php foreach ($coupons as $coupon) { ?>
  <div class="card">
    <img src="/assets/img/<?= $coupon['img_name']?>" alt="Изображение карточки" class="card__img">
    <h2 class="card__title"><?= $coupon['short_name']?></h2>
    <div class="card__wrapper">
      <span class="card__sale">
        <?php 
        $sale_id = $coupon['sale'];
        $sale = mysqli_query($connect, "SELECT `value` FROM `sale` WHERE `id` = '$sale_id'");
        $sale = mysqli_fetch_assoc($sale);
        ?>
        <?= $sale['value']?>
        %
      </span>
      <span class="card__price"><?= $coupon['price']?> ₽</span>
    </div>
  </div>
<?php } ?>
</main>

<?php require('app/include/footer.php'); ?>
<script>
  let Categorylink = document.querySelector('.submenu-link');
  let subMenu = document.querySelector('.submenu');
  Categorylink.classList.add('menu__item_active');
  subMenu.children[<?= $category_id ?> - 1].classList.add('menu__item_active');
</script>
</body>
</html>
