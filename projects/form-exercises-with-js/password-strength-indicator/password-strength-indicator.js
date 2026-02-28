const passwordForm = document.querySelector('#passwordForm');
const inputAreaPassword = document.querySelector('#passwordArea');

inputAreaPassword.addEventListener('click', function(event) {
  
  if (event.target.tagName.toLowerCase() === 'a') {
    event.preventDefault();
    renderIntroPass();
  }
})

function renderIntroPass() {

  inputAreaPassword.innerHTML = `
  <label for='password'>Please enter a password</label>
  <input id='password' type='password' name='password' required></input>
  <div id="liveFeedback">
    <div id="feedbackText">
    </div>
    <div id='feedbackGraphic' style='display: none;''>
      <svg id="progressSVG" width="22" height="22" viewBox="0 0 120 120">
        <!-- Background ring -->
        <circle
          cx="60"
          cy="60"
          r="50"
          fill="none"
          stroke="#eee"
          stroke-width="14"
        />
        
        <!-- Progress ring -->
        <circle
          id="progressRing"
          cx="60"
          cy="60"
          r="50"
          fill="none"
          stroke="blue"
          stroke-width="14"
          stroke-linecap="round"
          transform="rotate(-90 60 60)"
        />
      </svg>
    </div>
  </div>
  <button type='submit'>Submit</button>`;

  let userInput = document.querySelector('#password');
  userInput.addEventListener('input', displayStrength);
}

renderIntroPass();

function displayStrength(input) {

  let currentValue = this.value
  let passwordStrength = passwordValidator(this.value);
  let feedback = document.querySelector('#feedbackText');
  let feedbackGraphic = document.querySelector('#feedbackGraphic');

  if (currentValue.length > 0) {
    feedbackGraphic.style.display = 'block';
    initProgressRing();

    let progressRing = document.querySelector('#progressRing')
  } else {
    feedbackGraphic.style.display = 'none';
  }

  let percent = 0;

  if (passwordStrength === 1) {
    feedback.textContent = "Very Weak";
    percent = 25;
    progressRing.style.stroke = 'red';
  } else if (passwordStrength === 2) {
    feedback.textContent = "Weak";
    percent = 50;
    progressRing.style.stroke = 'purple';
  } else if (passwordStrength === 3) {
    feedback.textContent = "Strong";
    percent = 75;
    progressRing.style.stroke = 'blue';
  } else if (passwordStrength === 4) {
    feedback.textContent = "Very Strong!";
    percent = 100;
    progressRing.style.stroke = 'green';
  } else if (passwordStrength === 5) {
    feedback.textContent = "Middle of the road";
    percent = 60;
    progressRing.style.stroke = 'lightblue';
  } else if (passwordStrength === 6) {
    feedback.textContent = "So so";
    percent = 55;
    progressRing.style.stroke = 'orange';
  } else {
    feedback.textContent = "";
    percent = 0;
  }

  const offset = circumference * (1 - percent / 100);
  progressCircle.style.strokeDashoffset = offset;
}

let progressCircle;
let progressSVG;
let radius;
let circumference;

function initProgressRing() {
  progressCircle = document.getElementById('progressRing');
  progressSVG = document.getElementById('progressSVG');

  radius = progressCircle.r.baseVal.value;
  circumference = 2 * Math.PI * radius;

  progressCircle.style.strokeDasharray = circumference;
  progressCircle.style.strokeDashoffset = circumference; // start empty
}

function passwordValidator(password) {

  let count = 0;

  if (/^[0-9]{1,7}$/.test(password)) {
    count = 1;
  } else if (/^[A-Za-z]{1,7}$/.test(password)) {
    count = 2;
  } else if (/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(password)) {
    count = 3;
  } else if (/^(?=.*[A-Za-z])(?=.*\d)(?=.*[^A-Za-z\d]).{8,}$/.test(password)) {
    count = 4; 
  } else if (/^([A-Za-z]+|\d+|[^A-Za-z0-9]+)$/.test(password)) {
    count = 5;
  } else if (/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{1,7}$/.test(password)) {
    count = 6;
  } else {
    count = 7;
  }

  return count; 
}


function calculateStrength(count, password) {
  switch(count) {
    case 1:
      inputAreaPassword.innerHTML = `<p>The password ${password} is very weak!</p>`;
      return inputAreaPassword.innerHTML;
    case 2:
      inputAreaPassword.innerHTML = `<p>The password ${password} is weak!</p>`;
      return inputAreaPassword.innerHTML;
    case 3:
      inputAreaPassword.innerHTML = `<p>The password ${password} is strong!</p>`;
      return inputAreaPassword.innerHTML;
    case 4:
      inputAreaPassword.innerHTML = `<p>The password ${password} is very strong!</p>`;
      return inputAreaPassword.innerHTML;
    case 5: 
      inputAreaPassword.innerHTML = `<p>The password ${password} is middle of the road</p>`;
      return inputAreaPassword.innerHTML;
    case 6: 
      inputAreaPassword.innerHTML = `<p>The password ${password} is so so</p>`;
      return inputAreaPassword.innerHTML;
    case 7: 
      inputAreaPassword.innerHTML = `<p>Input cannot be empty!</p>`;
      return inputAreaPassword.innerHTML;
    default:
      inputAreaPassword.innerHTML = `<p>Something went wrong, try again!</p>`;
      return inputAreaPassword.innerHTML;
  }
}

passwordForm.addEventListener('submit', function(event) {
  event.preventDefault();

  let userInput = document.querySelector('#password');

  if (userInput.value === "") {
    inputAreaPassword.innerHTML = `<p>Input cannot be empty!</p>
    <a href='#'>Go Back</a>`;

    return;
  } else {
    let passwordStrength = passwordValidator(userInput.value);
    calculateStrength(passwordStrength, userInput.value);

    inputAreaPassword.innerHTML += `<a href='#'>Go Back</a>`;
  }
});