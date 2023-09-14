<?php 
require_once 'app/config/connect.php'; 

$amount = mysqli_query($connect, "SELECT COUNT(*) as 'количество купонов' FROM `service`");
$amount = mysqli_fetch_assoc($amount);

$links = mysqli_query($connect, "SELECT * FROM `types`");
$links = mysqli_fetch_all($links);

$coupons = mysqli_query($connect, "SELECT * FROM `service`");
$coupons = mysqli_fetch_all($coupons, MYSQLI_ASSOC);

$sales = mysqli_query($connect, "SELECT * FROM `sale`");
$sales = mysqli_fetch_all($sales, MYSQLI_ASSOC);

if ( isset($_POST['select-coupon__select']) ) {
  $coupon_id = $_POST['select-coupon__select'] ;
} else {
  $coupon_id = 3;
}

$current_coupon = mysqli_query($connect, "SELECT * FROM `service` WHERE `id` = '$coupon_id'");
$current_coupon = mysqli_fetch_assoc($current_coupon);
?>
<?php require('app/include/header.php'); ?>
  <main class="edit-coupons container">
    <section class="edit-coupons__header">
      <form class="select-coupon" method="POST" action="">
        <span class="select-coupon__hint">Купон:</span>
        <select name="select-coupon__select" class="select-coupon__select">
          <?php foreach ($coupons as $coupon) { ?>
            <option value="<?=$coupon['id']?>" class="select-coupon__item"><?=$coupon['short_name']?></option>
          <?php } ?>
        </select>
        <button class="edit-coupon__button" type="submit">выбрать</button>
      </form>
      <div class="edit-coupon">
        <span class="select-coupon__hint select-coupon__hint_edit">Действия:</span>
        <button class="edit-coupon__button" type="submit" form="coupon-form" name="button" value="update">обновить информацию</button>
        <button class="edit-coupon__button" type="submit" form="coupon-form" name="button" value="create">добавить</button>
        <a class="edit-coupon__button" href="/app/vendor/delete.php?id=<?=$coupon_id?>">удалить</a>
      </div>
    </section>
    <form class="coupon-info" action="/app/vendor/update.php" id="coupon-form" method="post">
      <label class="table__title-item">идентификатор (id)</label>
      <span class="coupon-info__small-text">*не используется при добавлении</span>
      <input type="text" name="id" value="<?= $current_coupon['id']?>" class="table__item" readonly>
      <label class="table__title-item">краткое название купона (short_name)</label>
      <input type="text" name="short_name" value="<?= $current_coupon['short_name']?>" class="table__item">
      <label class="table__title-item">идентификатор скидки (sale)</label>
      <input type="number" name="sale" value="<?= $current_coupon['sale']?>" class="table__item">
      <label class="table__title-item">полное название купона (full_name)</label>
      <input type="text" name="full_name" value="<?= $current_coupon['full_name']?>" class="table__item">
      <label class="table__title-item">название картинки (img_name)</label>
      <input type="text" name="img_name" value="<?= $current_coupon['img_name']?>" class="table__item">
      <label class="table__title-item">подробное описание купона (description)</label>
      <textarea name="description" class="table__item table__item_long"><?= $current_coupon['description']?></textarea>
      <label class="table__title-item">стоимость купона (price)</label>
      <input type="value" name="price" value="<?= $current_coupon['price']?>" class="table__item">
      <label class="table__title-item">локация, где можно применить купон (location)</label>
      <input type="text" name="location" value="<?= $current_coupon['location']?>" class="table__item">
      <label class="table__title-item">время работы заведения (working_hours)</label>
      <input type="text" name="working_hours" value="<?= $current_coupon['working_hours']?>" class="table__item">
      <label class="table__title-item">номера телефонов (phone_numbers)</label>
      <input type="text" name="phone_numbers" value="<?= $current_coupon['phone_numbers']?>" class="table__item">
      <label class="table__title-item">дата начала действия купона (start_date)</label>
      <input type="date" name="start_date" value="<?= $current_coupon['start_date']?>" class="table__item">
      <label class="table__title-item">дата завершения действия купона (finish_date)</label>
      <input type="date" name="finish_date" value="<?= $current_coupon['finish_date']?>" class="table__item">
      <label class="table__title-item">идентификатор категории купона (type)</label>
      <input type="number" name="type" value="<?= $current_coupon['type']?>" class="table__item">
    </form>
    <span class="help-button">?</span>
    <aside class="edit-help hidden">
      <table class="edit-help__table">
        <caption class="table__title-item">таблица скидок</caption>
        <tr class="edit-help__wrapper">
          <th class="table__title-item">id</th>
          <th class="table__title-item">value</th>
        </tr>
        <?php foreach ($sales as $sale) { ?>
          <tr class="edit-help__wrapper">
            <td class="table__item"><?=$sale['id']?></td>
            <td class="table__item"><?=$sale['value']?></td>
          </tr>
        <?php } ?>
      </table>
      <table class="edit-help__table">
        <caption class="table__title-item">таблица категорий</caption>
        <tr class="edit-help__wrapper">
          <th class="table__title-item">id</th>
          <th class="table__title-item">value</th>
        </tr>
        <?php foreach ($links as $link) { ?>
          <tr class="edit-help__wrapper">
            <td class="table__item"><?=$link[0]?></td>
            <td class="table__item"><?=$link[1]?></td>
          </tr>
        <?php } ?>
      </table>
    </aside>
    <div class="blackout hidden"></div>
  </main>
</table>
<?php require('app/include/footer.php'); ?>
<script>
  document.querySelector('.icons__account').classList.add('icons_active');
  const select = document.querySelector('.select-coupon__select').getElementsByTagName('option');
  for (let i = 0; i < select.length; i++) {
      if (select[i].value === '<?=$coupon_id?>') select[i].selected = true;
  }
</script>
<script src="/assets/js/script-edit.js"></script>
</body>
</html>