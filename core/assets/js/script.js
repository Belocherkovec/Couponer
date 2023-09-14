let searchButton = document.querySelector('.icons__search');
let searchInput = document.querySelector('.search-form__input');
let searchSubmitButton = document.querySelector('.search-form__button');

searchButton.addEventListener('click', showSearc);

function showSearc() {
  searchInput.classList.toggle('search-form__input-active');
  searchButton.classList.toggle('icons_active');
  searchSubmitButton.classList.toggle('search-form__button_active');
}

// const menuTrigger = document.querySelector('.submenu-link');
// const submenu = document.querySelector('.submenu');
// let subMenuCondition = false;

// submenu.style.display = 'none';

// menuTrigger.addEventListener('mouseenter', showSubMenu);
// submenu.addEventListener('mouseenter', subMenu);
// menuTrigger.addEventListener('mouseleave', hideSubMenu);
// submenu.addEventListener('mouseleave', outSubMenu);

// function showSubMenu(event) {
//   submenu.classList.remove('submenu_hidden');
//   submenu.style = '';
// }

// function subMenu(event) {
//   subMenuCondition = true;
// }

// function outSubMenu(event) {
//   subMenuCondition = false;
//   submenu.classList.add('submenu_hidden');
//   setTimeout(function () {
//     submenu.style.display = 'none';
//   }, 200);
// }

// function hideSubMenu(event) {
//   setTimeout(function () {
//     if (subMenuCondition) {
//       return;
//     } else {
//       submenu.classList.add('submenu_hidden');
//       setTimeout(function () {
//         submenu.style.display = 'none';
//       }, 200);
//     }
//   }, 0);
// }
