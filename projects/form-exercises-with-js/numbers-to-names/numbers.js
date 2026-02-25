let monthForm = document.querySelector('#monthForm');
let inputAreaMonth = document.querySelector('#monthField');

inputAreaMonth.addEventListener('click', function(event) {
  
  if (event.target.tagName.toLowerCase() === 'a') {
    event.preventDefault();
    renderIntroMonth();
  }
})

function renderIntroMonth() {
	inputAreaMonth.innerHTML = `
		<div class='field'>
		<label for='month'>Please enter the number of the month</label>
		<input id='month' type='number' name='month' step='1' min='1' max='12' value="" required>
	</div>

	<button type='submit' name='month-submit'>Submit</button>`;
}

renderIntroMonth();

let map = new Map();

map.set(1, "January");
map.set(2, "February");
map.set(3, "March");
map.set(4, "April");
map.set(5, "May");
map.set(6, "June");
map.set(7, "July");
map.set(8, "August");
map.set(9, "September");
map.set(10, "October");
map.set(11, "November");
map.set(12, "December");

monthForm.addEventListener('submit', function(event) {
	event.preventDefault();
	let input = document.querySelector('#month').value;
	if (input === "" || isNaN(input)) {
		inputAreaMonth.innerHTML = `<p>The input you provided is not valid.</p>
	<a href='#' id='go-back-link'>Go Back</a>`;
	}

	input = Number(input);

	if (map.has(input)) {
		inputAreaMonth.innerHTML = `<p>The name of the month is ${map.get(input)}.</p>
	<a href='#' id='go-back-link'>Go Back</a>`;
	} else {
		inputAreaMonth.innerHTML = `<p>The number you provided does not correspond to a month!</p>
	<a href='#' id='go-back-link'>Go Back</a>`;
	}
});
