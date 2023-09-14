<?php
require_once 'app/config/connect.php'; 

$coupon_id = $_GET['id'];

$amount = mysqli_query($connect, "SELECT COUNT(*) as 'количество купонов' FROM `service`");
$amount = mysqli_fetch_assoc($amount);

$links = mysqli_query($connect, "SELECT * FROM `types`");
$links = mysqli_fetch_all($links);

$coupon = mysqli_query($connect, "SELECT * FROM `service` WHERE `id` = '$coupon_id'");
$coupon = mysqli_fetch_assoc($coupon);
// print_r($coupon);

?>
<?php require('app/include/header.php'); ?>

  <main class="coupon container">
    <div class="container__col">
      <h1 class="coupon__title"><?= $coupon['short_name']?></h1>
      <img src="/assets/img/<?= $coupon['img_name']?>" alt="изображение купона" class="coupon__img">
      <div class="coupon-date">
        <span class="coupon-date__title">Начало действия</span>
        <span class="coupon-date__date" data-start_date="<?= $coupon['start_date']?>"><?= $coupon['start_date']?></span>
      </div>
      <div class="coupon-date">
        <span class="coupon-date__title">Начало действия</span>
        <span class="coupon-date__date" data-finish_date="<?= $coupon['finish_date']?>"><?= $coupon['finish_date']?></span>
      </div>
    </div>
    <div class="container__col">
      <div class="coupon__wrapper">
        <p class="coupon__price"><?= $coupon['price']?> ₽</p>
        <span class="coupon__sale">
        <?php 
        $sale_id = $coupon['sale'];
        $sale = mysqli_query($connect, "SELECT `value` FROM `sale` WHERE `id` = '$sale_id'");
        $sale = mysqli_fetch_assoc($sale);
        ?>
        скидка <?= $sale['value']?>
        %
      </span>
        <a class="coupon__buy-button" href="#">купить купон</a>
      </div>
      <p class="coupon__description"><?= $coupon['description']?></p>
      <a href="#" class="coupon__location"><?= $coupon['location']?></a>
      <p class="coupon__working-hours"><?= $coupon['working_hours']?></p>
      <p class="coupon__tels"><?= $coupon['phone_numbers']?></p>
    </div>
  </main>

<?php require('app/include/footer.php'); ?>
<script src="/assets/js/script-product.js">
</script>
</body>
</html>
