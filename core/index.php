<?php 
require_once 'app/config/connect.php'; 

$amount = mysqli_query($connect, "SELECT COUNT(*) as 'количество купонов' FROM `service`");
$amount = mysqli_fetch_assoc($amount);

$links = mysqli_query($connect, "SELECT * FROM `types`");
$links = mysqli_fetch_all($links);

$coupons = mysqli_query($connect, "SELECT * FROM `service`");
$coupons = mysqli_fetch_all($coupons, MYSQLI_ASSOC);
// print_r($links);
// var_dump($coupons);
?>
<?php require('app/include/header.php'); ?>

<main class="main container">
<?php foreach ($coupons as $coupon) { ?>
  <a class="card" href="product.php?id=<?= $coupon['id'] ?>">
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
  </a>
<?php } ?>
</main>

<?php require('app/include/footer.php'); ?>
<script>
  let home = document.querySelector('.menu__item:first-child');
  home.classList.add('menu__item_active');
</script>
</body>
</html>
