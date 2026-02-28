let todos = [];
let count = 0;
const form = document.querySelector('#todoForm');
const field = document.querySelector('.field');
let output = document.querySelector('output');
let input = document.querySelector('#todo');
const submitBtn = document.querySelector('#submit');

function add(content) {
	let formattedTodo = {
		id: `${count++}`,
		content: content,
		complete: false,
	};

	todos.push(formattedTodo);
	update();
}

function remove(id) {
	//todos.splice(id, 1);
	//delete todos[id];
	todos = todos.filter(todo => todo.id !== id);
	update();
}

function update() {

	output.innerHTML = '';

	for (let i = 0; i < todos.length; i++) {
		output.innerHTML += `<div>${todos[i].content}</div>
		<div>
    	<input class='complete' id='complete${todos[i].id}' type='checkbox' name='complete' data-id='${todos[i].id}' ${todos[i].complete ? 'checked' : ''}>
    	<label for='complete${todos[i].id}''>Completed</label>
  		</div>
		<button class='edit' type='button' name='edit' data-id='${todos[i].id}'>Edit</button>
		<button class='remove-btn' type='button' data-id='${todos[i].id}'>Remove</button>`;
	}
}

function edit(id) { //caution i need to safeguard against null and empty

	let editedTodo = prompt('Edit your todo:');

	if (editedTodo.length === 0) {
		alert('Your todo cannot be empty!');
		edit();
	}

	if (editedTodo === null) {
		return;
	}

	todos = todos.map(todo => {
		if (todo.id === id) {
			todo.content = editedTodo;
		}
		return todo;
	});
	update();
}

function complete(id) {
	todos = todos.map(todo => {
		if (todo.id === id) {
			todo.complete = true;
		}
		return todo;
	});
	update();
}

function markUndone(id) {
	todos = todos.map(todo => {
		if (todo.id === id) {
			todo.complete = false;
		}
		return todo;
	});
	update();
}

submitBtn.addEventListener('click', function(event) {
	event.preventDefault();
	let content = input.value;

	if (content.length === 0) {
		alert('Input cannot be empty!');
		return;
	} else {
		add(content);
	}
});

output.addEventListener('click', function(event) {

   if (event.target.classList.contains('remove-btn')) {
      const idToRemove = event.target.getAttribute('data-id'); //event.taget.dataset.id;
      remove(idToRemove);
   }

   if (event.target.classList.contains('edit')) {
      const idToAlter = event.target.getAttribute('data-id');
      edit(idToAlter);
   }

   if (event.target.classList.contains('complete')) {
      const idState = event.target.getAttribute('data-id');

      if (event.target.checked) {
	      complete(idState);
	   } else {
	      markUndone(idState);
	   }
   }
});

