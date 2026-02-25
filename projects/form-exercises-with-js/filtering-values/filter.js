const filterForm = document.querySelector('#filterForm');
const inputAreaFilter = document.querySelector('#filterField');

inputAreaFilter.addEventListener('click', function(event) {
  
  if (event.target.tagName.toLowerCase() === 'a') {
    event.preventDefault();
    renderIntroFilter();
  }
})

function renderIntroFilter() {
	inputAreaFilter.innerHTML = `
	<div class='input-area field'>
	<label for='filterEven'>Enter a list of numbers, separated by spaces:</label>
  <input id='filterEven' type='text' name='filterEven' ></input>
  </div>
	<p id="errorMessage"></p>
  <button type='submit'>Submit</button>`;

  const input = document.querySelector('#filterEven');
}

renderIntroFilter();

//input.addEventListener('input', function(event) {
//	
//	const input = document.querySelector('#filterEven');
//  const error = document.querySelector('#errorMessage');
//	let userInput = this.value.trim();
//
//	let newInput = userInput.split(' ');
//
//	let hasInvalid = newInput.some(value => {
//		return value !== '' && isNaN(Number(value));
//	});
//
//	if (hasInvalid) {
//		error.textContent = 
//		  'Only numbers separated by spaces are allowed.';
//	} else {
//		error.textContent += '';
//	}
//});

filterForm.addEventListener('submit', function(event) {
	event.preventDefault();

	const input = document.querySelector('#filterEven');
	let userInput = input.value;

	if(userInput === "") {
		inputAreaFilter.innerHTML = `<p>The array cannot be empty!</p>
		<a href='#'>Go Back</a>`;
		return;
	}

	userInput = userInput.split(" ").map(item => {
      item = item.trim();
      if (!isNaN(Number(item)) && item != "" && item != " ") {
        return Number(item);
      }
  });

	function filterEvenNumbers(input) {
		let newArray = [];

		for (let i = 0; i < input.length; i++) {
			if (input[i] % 2 === 0) {
				newArray.push(input[i]);
			}
		}
		const text = newArray.join(" ");

		return text;
	}

	let text = filterEvenNumbers(userInput);

	if (text.length === 0) {
		inputAreaFilter.innerHTML = `<p>There were no even numbers in your input</p>
		<a href='#'>Go Back</a>`;
	} else {
			inputAreaFilter.innerHTML = `<p>The even numbers are: ${text}</p>
			<a href='#'>Go Back</a>`;
	}

});

