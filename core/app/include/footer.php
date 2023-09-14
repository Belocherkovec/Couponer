<footer class="footer">
  <div class="container footer__container">
    <div class="footer__wrapper">
      <a class="logo footer__logo" href="/">
        <img src="/assets/icons/logo_big.svg" alt="логотип сайта" class="logo__img">
        <strong class="logo__title">купонер</strong><br>
        <span class="logo__subtitle">сайт с купонами</span>
      </a>
      <p class="footer__amount">Всего купонов на сайте: <?= $amount['количество купонов'] ?>
      </p>
      <p class="footer__about">© 2020-2022 Купонер, все права защищены</p>
    </div>
    <nav class="footer__menu footer-menu">
      <section class="footer-menu__section">
        <h4 class="footer__title">Услуги</h4>
        <ul class="footer-menu__list">
        <?php foreach ($links as $link) { ?>
          <li class="footer-menu__item item"><a href="category.php?id=<?= $link[0] ?>" class="item__link"><?= $link[1] ?></a></li>
        <?php } ?>
        </ul>
      </section>
      <section class="footer-menu__section">
        <h4 class="footer__title">аккаунт</h4>
        <ul class="footer-menu__list">
          <li class="footer-menu__item item"><a href="#" class="item__link">регистрация</a></li>
          <li class="footer-menu__item item"><a href="#" class="item__link">вход</a></li>
          <li class="footer-menu__item item"><a href="#" class="item__link">мои купоны</a></li>
        </ul>
      </section>
    </nav>
    <section class="footer__contacts">
    <h4 class="footer__title">контакты</h4>
    <a href="#" class="footer__link">+7 (964) 766-67-76</a>
    <p class="footer__call">Для звонка из москвы и регионов России</p>
    <a href="#" class="footer__link">г.Москва</a>
    </section>
  </div>
</footer>
<script src="/assets/js/script.js"></script>
