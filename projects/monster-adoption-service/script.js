var html = document.querySelector('html');
var colorPicker = document.querySelector('.color');
var borderPicker = document.querySelector('.round');
var fontPicker = document.querySelector('.font');

function updateHue(input) {
	html.style.setProperty('--hue', this.value);
	// 'this' refers to the input in this case
}

function updateEdges(input) {
	html.style.setProperty('--radius', this.value  + 'em');
	html.style.setProperty('--radius-2', this.value  + 'em');
	html.style.setProperty('--radius-3', this.value  + 'em');
	// 'this' refers to the input in this case
}

function updateFontH1Size(input) {
	html.style.setProperty('--font', this.value  + 'em');
	html.style.setProperty('--attention', this.value - 0.5  + 'em');
	html.style.setProperty('--subtle', this.value - 1  + 'em');
	html.style.setProperty('--calm', this.value - 2  + 'em');
	// 'this' refers to the input in this case
}

colorPicker.addEventListener('input', updateHue);

borderPicker.addEventListener('input', updateEdges);

fontPicker.addEventListener('input', updateFontH1Size);