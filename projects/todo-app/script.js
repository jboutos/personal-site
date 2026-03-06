// const todoApp = {

// 	count : 0,
// 	form : document.querySelector('#todoForm'),
// 	field : document.querySelector('.field'),
// 	output : document.querySelector('output'),
// 	input : document.querySelector('#todo'),
// 	submitBtn : document.querySelector('#submit'),
// 	todos : [],
// 	add: function(content) {
// 		let formattedTodo = {
// 			id: `${this.count++}`,
// 			content: content,
// 			complete: false,
// 		};

// 		this.todos = [formattedTodo, ...this.todos];
// 		// this.todos.unshift(formattedTodo);
// 		this.update();
// 	},
// 	update: function() {

// 		let html = '';

// 		html += "<div class='container'>";
// 		for (let i = 0; i < this.todos.length; i++) {
// 			html += `<div class='todo-container'>
// 			<div class='status'>
// 	    	<input class='complete' id='complete${this.todos[i].id}' type='checkbox' name='complete' data-id='${this.todos[i].id}' ${this.todos[i].complete ? 'checked' : ''}>
// 	    	<label for='complete${this.todos[i].id}'>Completed</label>
// 	  		</div>
// 			<div class='task'><p>To do: </p><span>${this.todos[i].content}</span></div>
// 			<button class='edit' type='button' name='edit' data-id='${this.todos[i].id}'>Edit</button>
// 			<button class='remove-btn' type='button' data-id='${this.todos[i].id}'>Remove</button>
// 			</div>`;
// 		}
// 		html += "</div>";

// 		this.output.innerHTML = html;
// 	},
// 	remove: function(id) {
// 		// todos.splice(id, 1);
// 		// delete todos[id];
// 		this.todos = this.todos.filter(todo => todo.id !== id);
// 		this.update();
// 	},
// 	edit: function(id) { // caution i need to safeguard against null and empty

// 		let editedTodo = prompt('Edit your todo:');

// 		if (editedTodo.length === 0) {
// 			alert('Your todo cannot be empty!');
// 			this.edit();
// 		}

// 		if (editedTodo === null) {
// 			return;
// 		}

// 		this.todos = this.todos.map(todo => {
// 			if (todo.id === id) {
// 				todo.content = editedTodo;
// 			}
// 			return todo;
// 		});
// 		this.update();
// 	},
// 	complete: function(id) {
// 		this.todos = this.todos.map(todo => {
// 			if (todo.id === id) {
// 				todo.complete = true;
// 			}
// 			return todo;
// 		});
// 		this.update();
// 	},
// 	markUndone: function(id) {
// 		this.todos = this.todos.map(todo => {
// 			if (todo.id === id) {
// 				todo.complete = false;
// 			}
// 			return todo;
// 		});
// 		this.update();
// 	},
// 	initEvents: function() {
//       this.submitBtn.addEventListener('click', (event) => {
//          event.preventDefault();
//          let content = this.input.value.trim();
//          if (content.length === 0) {
//             alert('Input cannot be empty!');
//             return;
//          } else {
//          	this.add(content);
//          	this.input.value = ''; // clear the input field
//          }
//       });

//       this.output.addEventListener('click', (event) => {
//          if (event.target.classList.contains('remove-btn')) {
// 		      const idToRemove = event.target.getAttribute('data-id'); // event.taget.dataset.id;
// 		      this.remove(idToRemove);
// 		   }

// 		   if (event.target.classList.contains('edit')) {
// 		      const idToAlter = event.target.getAttribute('data-id');
// 		      this.edit(idToAlter);
// 		   }

// 		   if (event.target.classList.contains('complete')) {
// 		      const idState = event.target.getAttribute('data-id');

// 		      if (event.target.checked) {
// 			      this.complete(idState);
// 			   } else {
// 			      this.markUndone(idState);
// 			   }
// 		   }
//       });
//    }
// };

// todoApp.initEvents();

function TodoAppConstructor() {
	this.form = document.querySelector('#todoForm');
	this.field = document.querySelector('.field');
	this.output = document.querySelector('output');
	this.input = document.querySelector('#todo');
	this.submitBtn = document.querySelector('#submit');
	this.todos = [];
	this.data = localStorage;

	// this.count = Number(this.data.getItem('count') ?? 0); 
	// this.data.setItem('count', this.count); 
	// this.add = function(content) { 
	// 	let formattedTodo = { 
	//			id: ${this.count++}, 
	//			content: content, 
	//			complete: false, 
	// };

	this.count = Number(this.data.getItem('count') ?? 0);
	
	this.updateCount = function(count) { 
		this.data.setItem('count', count);
	}

	this.add = function(content) {
		let formattedTodo = {
			id: `${this.count++}`, // this is updating the variable in memory, it will not update the localStorage if it's set as a variable there
			content: content,
			complete: false,
		};

		this.updateCount(this.count);
		this.todos = [formattedTodo, ...this.todos];
		this.storeTodos(this.todos);
		this.update();
	}

	this.storeTodos = function(array) {
		this.data.setItem('todos', JSON.stringify(array));
	}

	this.restoreTodos = function() {
		const storedTodos = this.data.getItem('todos');

		if (storedTodos) {
			this.todos = JSON.parse(storedTodos);
			this.update();
		}
	}

	this.update = function() {
		let html = '';

		html += "<div class='container'>";
		for (let i = 0; i < this.todos.length; i++) {
			html += `<div class='todo-container'>
			<div class='status'>
	    	<input class='complete' id='complete${this.todos[i].id}' type='checkbox' name='complete' data-id='${this.todos[i].id}' ${this.todos[i].complete ? 'checked' : ''}>
	    	<label for='complete${this.todos[i].id}'>Completed</label>
	  		</div>
			<div class='task'><p>To do: </p><span>${this.todos[i].content}</span></div>
			<button class='edit' type='button' name='edit' data-id='${this.todos[i].id}'>Edit</button>
			<button class='remove-btn' type='button' data-id='${this.todos[i].id}'>Remove</button>
			</div>`;
		}
		html += "</div>";

		this.output.innerHTML = html;
	}

	this.remove = function(id) {

		this.todos = this.todos.filter(todo => todo.id !== id);
		this.storeTodos(this.todos);
		this.update();
	}

	this.edit = function(id) { 

		let editedTodo = prompt('Edit your todo:');

		if (editedTodo.length === 0) {
			alert('Your todo cannot be empty!');
			this.edit();
		}

		if (editedTodo === null) {
			return;
		}

		this.todos = this.todos.map(todo => {
			if (todo.id === id) {
				todo.content = editedTodo;
			}
			return todo;
		});

		this.storeTodos(this.todos);
		this.update();
	}

	this.complete = function(id) {
		this.todos = this.todos.map(todo => {
			if (todo.id === id) {
				todo.complete = true;
			}
			return todo;
		});

		this.storeTodos(this.todos);
		this.update();
	}

	this.markUndone = function(id) {
		this.todos = this.todos.map(todo => {
			if (todo.id === id) {
				todo.complete = false;
			}
			return todo;
		});

		this.storeTodos(this.todos);
		this.update();
	}

	this.initEvents = function() {
      this.submitBtn.addEventListener('click', (event) => {
         event.preventDefault();
         let content = this.input.value.trim();
         if (content.length === 0) {
            alert('Input cannot be empty!');
            return;
         } else {
         	this.add(content);
         	this.input.value = '';
         }
      });

      this.output.addEventListener('click', (event) => {
         if (event.target.classList.contains('remove-btn')) {
		      const idToRemove = event.target.getAttribute('data-id'); 
		      this.remove(idToRemove);
		   }

		   if (event.target.classList.contains('edit')) {
		      const idToAlter = event.target.getAttribute('data-id');
		      this.edit(idToAlter);
		   }

		   if (event.target.classList.contains('complete')) {
		      const idState = event.target.getAttribute('data-id');

		      if (event.target.checked) {
			      this.complete(idState);
			   } else {
			      this.markUndone(idState);
			   }
		   }
      });
   }
}

const app = new TodoAppConstructor();

TodoAppConstructor.prototype.markUndone = function(id) {
	this.todos = this.todos.map(todo => {
		if (todo.id === id) {
			todo.complete = false;
		}
		return todo;
	});
	this.update();
}

app.restoreTodos();
app.initEvents();