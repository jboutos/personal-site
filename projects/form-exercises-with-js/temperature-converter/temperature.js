let tempForm = document.querySelector('#temp');
let inputAreaTemp = document.querySelector('#tempArea');

inputAreaTemp.addEventListener('click', function(event) {
  
  if (event.target.tagName.toLowerCase() === 'a') {
    event.preventDefault();
    showTempSelection();
  }
})

function showTempSelection() {
	inputAreaTemp.innerHTML = 
	`<legend>Select C to convert from Fahrenheit to Celsius of F convert from Celsius to Fahrenheit:</legend>
	<div class='container'>
	   <div class="radio">
	     <input type="radio" id="celsius" name="units" value="celsius">
	     <label for="celsius">Celsius</label>
	   </div>
	   <div class="radio">
	     <input type="radio" id="fahrenheit" name="units" value="fahrenheit">
	     <label for="fahrenheit">Fahrenheit</label>
	   </div>
	</div>`;
}

showTempSelection();

tempForm.addEventListener('input', function(input) {

	if (input.target.value === 'celsius') {
		renderTemperatureInput('fahrenheit');
	}

	if (input.target.value === 'fahrenheit') {
		renderTemperatureInput('celsius');
	}
});

tempForm.addEventListener('submit', function (submit) {
	submit.preventDefault();

	let fahrenheitSlider = document.querySelector('#fahrenheit-degrees');
	let celsiusSlider = document.querySelector('#celsius-degrees');

	if (fahrenheitSlider) {
		let tempFahr = fahrenheitSlider.value;
		let tempCelsius = convertToCelsius(tempFahr);

		inputAreaTemp.innerHTML = `<p class=''>${tempFahr} degrees fahrenheit is ${tempCelsius} degrees celsius</p>`;
		inputAreaTemp.innerHTML += "<a href='#' id='go-back-link'>Go Back</a>";
	}

	if (celsiusSlider) {
		let tempCelsius = celsiusSlider.value;
		let tempFahr = convertToFahrenheit(tempCelsius);

		inputAreaTemp.innerHTML = `<p class=''>${tempCelsius} degrees celsius is ${tempFahr} degrees fahrenheit</p>`;
		inputAreaTemp.innerHTML += "<a href='#' id='go-back-link'>Go Back</a>";
	}
});

function convertToFahrenheit(celsius) {
	let fahr = (celsius * ( 9/5 ) + 32).toFixed(0);
	return fahr;
}

function convertToCelsius(fahrenheit) {
	let celsius = (( fahrenheit - 32 ) * ( 5/9 )).toFixed(0);
	return celsius;
}

function renderTemperatureInput(temp) {
	inputAreaTemp.innerHTML = `<p>Please enter the temperature in ${temp}:</p>`;
	inputAreaTemp.innerHTML += `<label for='${temp}-degrees'>Degrees ${temp}</label>`;
	inputAreaTemp.innerHTML += `<input type='range' id='${temp}-degrees' name='${temp}-degrees' min='-200' max='200'>`;
	inputAreaTemp.innerHTML += `<span id='${temp}-degrees-value'></span>`;

	inputAreaTemp.innerHTML += `<button id='${temp}-submit' type='submit' name='${temp}-submit'>Submit</button>`;

	let slider = document.querySelector(`#${temp}-degrees`);
	let sliderValue = document.querySelector(`#${temp}-degrees-value`);
	let button = document.querySelector(`#${temp}-submit`);

	slider.addEventListener('input', function() {
		sliderValue.textContent = this.value + ` degrees ${temp}`;
	});
}

