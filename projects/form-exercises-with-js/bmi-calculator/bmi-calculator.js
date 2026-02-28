let formBMI = document.querySelector('#bmi');
let inputAreaBMI = document.querySelector('#bmiField');
let units;

inputAreaBMI.addEventListener('click', function(event) {
  
  if (event.target.tagName.toLowerCase() === 'a') {
    event.preventDefault();
    showUnitSelection();
  }
})

function showUnitSelection() {
	inputAreaBMI.innerHTML = 
	`<legend>Select between metric and imperial units:</legend>
	<div class='container'>
	   <div class="radio">
	     <input type="radio" id="metric" name="units" value="metric">
	     <label for="metric">Metric</label>
	   </div>
	   <div class="radio">
	     <input type="radio" id="imperial" name="units" value="imperial">
	     <label for="imperial">Imperial</label>
	   </div>
	</div>`;
}

showUnitSelection();

formBMI.addEventListener('input', function(input) {

	if (input.target.value === 'metric') {
		inputAreaBMI.innerHTML = "<label for='metric-height'>Height</label>";
		inputAreaBMI.innerHTML += "<input type='range' id='metric-height' name='metric-height' step='0.01' value='1.70' min='1.00' max='2.50'>";
		inputAreaBMI.innerHTML += "<span id='height-metric-value'></span>";

		inputAreaBMI.innerHTML += "<label for='metric-weight'>Weight</label>";
		inputAreaBMI.innerHTML += "<input type='range' id='metric-weight' name='metric-weight' step='0.01' value='70' min='1' max='250'>";
		inputAreaBMI.innerHTML += "<span id='weight-metric-value'></span>";

		inputAreaBMI.innerHTML += "<button id='metric-submit' type='submit' name='metric-submit'>Submit</button>"

		let heightSlider = document.querySelector('#metric-height');
		let weightSlider = document.querySelector('#metric-weight');
		let heightValue = document.querySelector('#height-metric-value');
		let weightValue = document.querySelector('#weight-metric-value');
		let button1 = document.querySelector('#metric-submit');

		heightSlider.addEventListener('input', function() {
			heightValue.textContent = this.value + " meters";
		});

		weightSlider.addEventListener('input', function() {
			weightValue.textContent = this.value + " kg";
		});
	}

	if (input.target.value ==='imperial') {
		inputAreaBMI.innerHTML = "<label for='imperial-height-feet'>Height (Feet)</label>";
		inputAreaBMI.innerHTML += "<input type='range' id='imperial-height-feet' name='imperial-height-feet' step='1' value='4' min='2' max='7'>";
		inputAreaBMI.innerHTML += "<span id='height-imperial-feet-value'></span>";

		inputAreaBMI.innerHTML += "<label for='imperial-height-inches'>Height (Inches)</label>";
		inputAreaBMI.innerHTML += "<input type='range' id='imperial-height-inches' name='imperial-height-inches' step='1' value='0' min='0' max='11'>";
		inputAreaBMI.innerHTML += "<span id='height-imperial-inches-value'></span>";

		inputAreaBMI.innerHTML += "<label for='imperial-weight'>Weight</label>";
		inputAreaBMI.innerHTML += "<input type='range' id='imperial-weight' name='imperial-weight' step='1' value='70' min='20' max='400'>";
		inputAreaBMI.innerHTML += "<span id='imperial-weight-value'></span>";

		inputAreaBMI.innerHTML += "<button id='imperial-submit' type='submit' name='imperial-submit'>Submit</button>";

		let heightSliderFeet = document.querySelector('#imperial-height-feet');
		let heightSliderInches = document.querySelector('#imperial-height-inches');
		let weightSlider = document.querySelector('#imperial-weight');
		let heightValueFeet = document.querySelector('#height-imperial-feet-value');
		let heightValueInches = document.querySelector('#height-imperial-inches-value');
		let weightValue = document.querySelector('#imperial-weight-value');
		let button1 = document.querySelector('#imperial-submit');

		heightSliderFeet.addEventListener('input', function() {
			heightValueFeet.textContent = this.value + " feet";
		});

		heightSliderInches.addEventListener('input', function() {
			heightValueInches.textContent = this.value + " inches";
		});

		weightSlider.addEventListener('input', function() {
			weightValue.textContent = this.value + " lbs";
		});
	}
});

formBMI.addEventListener('submit', function(submit) {
	submit.preventDefault();
	let metricHeight = document.querySelector('#metric-height').value;
	let metricWeight = document.querySelector('#metric-weight').value;
	let bmi = (metricWeight / (metricHeight ** 2)).toFixed(2);
	
	getBmiResult(bmi);
});

formBMI.addEventListener('submit', function(submit) {
	submit.preventDefault();
	let imperialHeight = ( document.querySelector('#imperial-height-feet').value * 12 ) + document.querySelector('#imperial-height-inches').value;
	let imperialWeight = document.querySelector('#imperial-weight').value;
	let bmi = (( imperialWeight / ( imperialHeight * imperialHeight ) ) * 703).toFixed(2);

	getBmiResult(bmi);
});

function getBmiResult (bmi) {
	if (bmi < 18.5) {
		inputAreaBMI.innerHTML = `<p class='skeleton'>Your Bmi is ${bmi}, you are underweight. You should see your doctor.</p>`;
		inputAreaBMI.innerHTML += "<a href='#' id='go-back-link'>Go Back</a>";
	} else if (bmi >= 18.5 && bmi <= 25) {
		inputAreaBMI.innerHTML = `<p class='normal'>Your Bmi is ${bmi}, you are within the ideal weight range.</p>`;
		inputAreaBMI.innerHTML += "<a href='#' id='go-back-link'>Go Back</a>";
	} else {
		inputAreaBMI.innerHTML = `<p class='orca'>Your Bmi is ${bmi}, you are overweight. You should see your doctor.</p>`;
		inputAreaBMI.innerHTML += "<a href='#' id='go-back-link'>Go Back</a>";
	}

	let link = document.querySelector('a');

	link.addEventListener('click', function(click) {
		click.preventDefault();
		showUnitSelection();
	})
}