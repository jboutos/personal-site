const employeeList = ["John Boutos", "Derek Wood", "George Wilson", "Josh Waters"];
const inputAreaRemoval = document.querySelector('#removalField');
const removalForm = document.querySelector('#removal');
let employeeCount = 0;

inputAreaRemoval.addEventListener('click', function(event) {
   if (event.target.tagName.toLowerCase() === 'a') {
      event.preventDefault();
      renderIntroRemoval();
   }
});

function renderIntroRemoval() {
	inputAreaRemoval.innerHTML = "";

	for (let i = 0; i < employeeList.length; i++) {
		inputAreaRemoval.innerHTML += `<ul>
		<li>${employeeList[i]}</li>
	</ul>`;
	}

	inputAreaRemoval.innerHTML += `
	<label for='employeeSelection'>Please enter the employee's name you want to remove:</label>
	<input id='employeeSelection' type='text' required></input>
	<button type='submit' id='employeeSubmit'>Submit</button>`;
}

renderIntroRemoval();

removalForm.addEventListener('submit', function(event) {
	event.preventDefault();

	const input = document.querySelector('#employeeSelection');
	let userInput = input.value.trim();
	let removedEmployee;

	if (userInput === "" || !isNaN(userInput)) {
		inputAreaRemoval.innerHTML = 
		`<p>Input cannot be empty or a number!</p>
		 <a href='#'>Go Back</a>`;
		return;
	}

	for (let i = 0; i < employeeList.length; i++) {
		if (userInput.toLowerCase() === employeeList[i].toLowerCase()) {
			removedEmployee = employeeList[i];
			employeeCount++;
		} 
	}

	if (employeeCount > 0) {
		inputAreaRemoval.innerHTML = `<p>Employee ${removedEmployee} was removed from the list!</p>`;
		 let employeeListNew = employeeList.filter(
		   emp => emp.toLowerCase() !== userInput.toLowerCase()
		);

		for (let i = 0; i < employeeListNew.length; i++) {
			inputAreaRemoval.innerHTML += 
			`<ul>
				<li>${employeeListNew[i]}</li>
			</ul>`;
		}
		inputAreaRemoval.innerHTML += `<a href='#'>Go Back</a>`;
	} else {
		inputAreaRemoval.innerHTML = 
		`<p>Employee with name ${input.value} does not exist!</p>
		 <a href='#'>Go Back</a>`;
	}
});