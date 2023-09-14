<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="/assets/icons/logo.svg" rel="icon" type="image/svg+xml" />
  <!-- Core theme CSS -->
  <link href="/assets/css/style.css" rel="stylesheet" />
  <link href="/assets/css/reset.css" rel="stylesheet" />
    <!-- Core theme FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
  <title>Купонер - сайт с купонами!</title>
</head>
<body>
  <header class="header header_fixed container">
    <a class="logo" href="/">
      <img src="/assets/icons/logo.svg" alt="логотип сайта" class="logo__img">
      <strong class="logo__title">купонер</strong><br>
      <span class="logo__subtitle">сайт с купонами</span>
    </a>
    <nav class="menu">
      <a href="/" class="menu__item">главная</a>
      <div class="submenu-link menu__item"><span class="submenu-link__text">услуги</span>
      <section class="submenu container">
    <?php foreach ($links as $link) { ?>
      <a href="category.php?id=<?= $link[0] ?>" class="menu__item"><?= $link[1] ?></a>
    <?php } ?>
  </section>
    </div>
      <a href="#" class="menu__item">+7 (964) 766-67-76</a>
    </nav>
    <div class="icons">
      <form action="" class="search-form" method="post">
        <input type="text" class="search-form__input" placeholder="Введите ваш запрос..." name="search">
        <button type="submit" class="search-form__button" name="submit">
          <svg class="icons__go-search" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.7335 23.0333C17.4668 22.7667 17.3388 22.4444 17.3495 22.0666C17.3611 21.6889 17.5002 21.3667 17.7668 21.1L21.5335 17.3333H6.66683C6.28905 17.3333 5.97216 17.2053 5.71616 16.9493C5.46105 16.6942 5.3335 16.3778 5.3335 16C5.3335 15.6222 5.46105 15.3053 5.71616 15.0493C5.97216 14.7942 6.28905 14.6667 6.66683 14.6667H21.5335L17.7335 10.8666C17.4668 10.6 17.3335 10.2831 17.3335 9.91598C17.3335 9.54976 17.4668 9.23332 17.7335 8.96665C18.0002 8.69998 18.3171 8.56665 18.6842 8.56665C19.0504 8.56665 19.3668 8.69998 19.6335 8.96665L25.7335 15.0667C25.8668 15.2 25.9615 15.3444 26.0175 15.5C26.0726 15.6555 26.1002 15.8222 26.1002 16C26.1002 16.1778 26.0726 16.3444 26.0175 16.5C25.9615 16.6555 25.8668 16.8 25.7335 16.9333L19.6002 23.0666C19.3557 23.3111 19.0504 23.4333 18.6842 23.4333C18.3171 23.4333 18.0002 23.3 17.7335 23.0333V23.0333Z"/>
          </svg>
        </button>
      </form>
      <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="icons__search">
        <path d="M10.8336 2.70837C12.348 2.70831 13.8324 3.13154 15.1191 3.93029C16.4058 4.72904 17.4437 5.87152 18.1156 7.2288C18.7874 8.58608 19.0666 10.1041 18.9215 11.6117C18.7765 13.1192 18.2129 14.5561 17.2946 15.7604L22.4328 20.9008C22.6271 21.0957 22.7399 21.3573 22.7483 21.6325C22.7567 21.9076 22.6601 22.1756 22.478 22.382C22.296 22.5885 22.0422 22.7179 21.7682 22.744C21.4942 22.7701 21.2205 22.6909 21.0028 22.5225L20.901 22.4326L15.7606 17.2944C14.7346 18.0766 13.5372 18.6034 12.2673 18.831C10.9974 19.0585 9.69154 18.9805 8.45781 18.6031C7.22408 18.2258 6.09793 17.5602 5.17255 16.6612C4.24717 15.7623 3.54916 14.6559 3.13629 13.4336C2.72341 12.2113 2.60754 10.9083 2.79825 9.63229C2.98897 8.35633 3.48079 7.14413 4.23302 6.09599C4.98525 5.04785 5.97626 4.1939 7.12405 3.60482C8.27185 3.01573 9.54342 2.70844 10.8336 2.70837V2.70837ZM10.8336 4.87504C9.25331 4.87504 7.73778 5.50279 6.62038 6.6202C5.50297 7.7376 4.87522 9.25313 4.87522 10.8334C4.87522 12.4136 5.50297 13.9291 6.62038 15.0466C7.73778 16.164 9.25331 16.7917 10.8336 16.7917C12.4138 16.7917 13.9293 16.164 15.0467 15.0466C16.1641 13.9291 16.7919 12.4136 16.7919 10.8334C16.7919 9.25313 16.1641 7.7376 15.0467 6.6202C13.9293 5.50279 12.4138 4.87504 10.8336 4.87504Z"/>
      </svg>
      <a href="/edit.php" class="icons__account-link"><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="icons__account">
        <path d="M16.9724 15.9996C18.2793 15.1701 19.2955 13.9509 19.8754 12.5117C20.4822 11.0058 20.5778 9.34229 20.1475 7.77677C19.7172 6.21126 18.7848 4.83032 17.4936 3.8461C16.2023 2.86189 14.6236 2.32883 13.0001 2.32883C11.3765 2.32883 9.79783 2.86189 8.50658 3.8461C7.21534 4.83032 6.28295 6.21126 5.85265 7.77677C5.42235 9.34229 5.51794 11.0058 6.12474 12.5117C6.70464 13.9509 7.7208 15.1701 9.02778 15.9996C6.22258 16.965 3.85567 18.9084 2.36314 21.4777C2.29294 21.5805 2.24451 21.6966 2.22084 21.8189C2.19692 21.9424 2.19881 22.0696 2.22638 22.1923C2.25396 22.3151 2.30664 22.4308 2.3811 22.5323C2.45555 22.6337 2.55019 22.7187 2.65905 22.7818C2.76792 22.8449 2.88866 22.8848 3.01369 22.899C3.13872 22.9132 3.26533 22.9014 3.38558 22.8643C3.50583 22.8272 3.6171 22.7657 3.71242 22.6836C3.80673 22.6023 3.8834 22.5026 3.93772 22.3906C4.85753 20.8025 6.17852 19.484 7.76838 18.5671C9.35932 17.6497 11.1636 17.1667 13.0001 17.1667C14.8366 17.1667 16.6408 17.6497 18.2318 18.5671C19.8216 19.484 21.1426 20.8025 22.0624 22.3906C22.1167 22.5026 22.1934 22.6023 22.2877 22.6836C22.383 22.7657 22.4943 22.8272 22.6146 22.8643C22.7348 22.9014 22.8614 22.9132 22.9865 22.899C23.1115 22.8848 23.2322 22.8449 23.3411 22.7818C23.45 22.7187 23.5446 22.6337 23.619 22.5323C23.6935 22.4308 23.7462 22.3151 23.7738 22.1923C23.8013 22.0696 23.8032 21.9424 23.7793 21.8189C23.7556 21.6966 23.7072 21.5805 23.637 21.4777C22.1445 18.9084 19.7776 16.965 16.9724 15.9996ZM7.41257 9.74997C7.41257 8.64487 7.74027 7.56458 8.35423 6.64572C8.9682 5.72686 9.84085 5.0107 10.8618 4.58779C11.8828 4.16489 13.0063 4.05424 14.0901 4.26983C15.174 4.48543 16.1696 5.01759 16.951 5.79901C17.7325 6.58044 18.2646 7.57604 18.4802 8.6599C18.6958 9.74377 18.5852 10.8672 18.1622 11.8882C17.7393 12.9092 17.0232 13.7818 16.1043 14.3958C15.1855 15.0098 14.1052 15.3375 13.0001 15.3375C11.5182 15.3375 10.097 14.7488 9.04911 13.7009C8.00125 12.6531 7.41257 11.2319 7.41257 9.74997Z" stroke-width="0.2"/>
      </svg></a>
    </div>
  </header>