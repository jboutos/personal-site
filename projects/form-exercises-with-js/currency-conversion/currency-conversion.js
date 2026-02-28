let outputAreaCurrency = document.querySelector('#currencyField');
let currencyForm = document.querySelector('#currency');

outputAreaCurrency.addEventListener('click', function(event) {
  
  if (event.target.tagName.toLowerCase() === 'a') {
    event.preventDefault();
    renderIntroCurrency();
  }
})

function renderIntroCurrency() {
   outputAreaCurrency.innerHTML = `
      <div class='field'>
      <label for='euros'>Amount eur</label>
      <input id='euros' type='number' name='euros' step='0.01' min='0.01' value="" required>
   </div>
   <div class='field'>
      <label for='rate'>Exchange rate</label>
      <input id='rate' type='number' name='euro-rate' step='0.0001' min='0' value = "" required>
   </div>
   <button type='submit' name='currency-submit'>Submit</button>
   `;
}

renderIntroCurrency();

function convertCurrency() {
	let euros = document.querySelector('#euros').value;
	let rate = document.querySelector('#rate').value;

	if (euros === '' || rate === '') {
      outputAreaCurrency.innerHTML = `<p>Please fill in both fields.</p>
      <a href='#''>Go Back</a>`;
      return;
   }

   if (isNaN(euros) || isNaN(rate)) {
      outputAreaCurrency.innerHTML = `<p>Inputs must be numbers.</p>
      <a href='#''>Go Back</a>`;
      return;
   }

	euros = Number(euros);
   rate = Number(rate);

   if (euros <= 0 || rate <= 0) {
      outputAreaCurrency.innerHTML = `<p>Values must be greater than 0.</p>
      <a href='#''>Go Back</a>`;
      return;
   }

   let dollars = euros * rate;
   dollars = Math.ceil(dollars * 100) / 100;
   outputAreaCurrency.innerHTML = `<p>${euros} euros is ${dollars.toFixed(2)} dollars.</p>
      <a href='#''>Go Back</a>`;
}

currencyForm.addEventListener('submit', function(mySubmit) {
	mySubmit.preventDefault();

	convertCurrency();
});

