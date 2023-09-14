const helpButton = document.querySelector('.help-button');
const helpTables = document.querySelector('.edit-help');
const helpBG = document.querySelector('.blackout');
const body = document.querySelector('body');

helpButton.addEventListener('click', getHelp);

function getHelp() {
  body.classList.toggle('lock');
  helpTables.classList.toggle('hidden');
  helpBG.classList.toggle('hidden');
}
