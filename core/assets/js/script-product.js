let startDate = document.querySelector('[data-start_date]');
let finishDate = document.querySelector('[data-finish_date]');

let startDateValue = new Date(startDate.getAttribute('data-start_date'));
let finishDateValue = new Date(finishDate.getAttribute('data-finish_date'));

let options = {
  year: 'numeric',
  month: 'long',
  day: 'numeric',
};

startDate.textContent = startDateValue.toLocaleString('ru', options);
finishDate.textContent = finishDateValue.toLocaleString('ru', options);
