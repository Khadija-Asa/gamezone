document.addEventListener('DOMContentLoaded', function() { //On check quand le HTML sera complètement chargé

  let lessThan2 = 0;
  let between2and8 = 0;
  let moreThan8 = 0;
  let adults = 0;
  let lessThan2Price = 0;
  let between2and8Price = 12.50;
  let moreThan8Price = 13.50;
  let adultsPrice = 15;

  document.querySelector('#lessThan2').addEventListener('change', () => {
    lessThan2 = document.querySelector('#lessThan2').value;
    showPrice()
  });
  document.querySelector('#between2and8').addEventListener('change', () => {
    between2and8 = document.querySelector('#between2and8').value;
    showPrice()
  });
  document.querySelector('#moreThan8').addEventListener('change', () => {
    moreThan8 = document.querySelector('#moreThan8').value;
    showPrice()
  });
  document.querySelector('#adults').addEventListener('change', () => {
    adults = document.querySelector('#adults').value;
    showPrice()
  });

  function showPrice() {
    document.querySelector('#totalPrice').innerHTML = lessThan2 * lessThan2Price + between2and8 * between2and8Price + moreThan8 * moreThan8Price + adults * adultsPrice +'€';
  }
});