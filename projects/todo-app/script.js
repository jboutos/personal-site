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
// 		      const idToRemove = event.target.getAttribute('data-id'); // event.target.dataset.id;
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

// function TodoAppConstructor() {
// 	this.form = document.querySelector('#todoForm');
// 	this.field = document.querySelector('.field');
// 	this.output = document.querySelector('output');
// 	this.input = document.querySelector('#todo');
// 	this.submitBtn = document.querySelector('#submit');
// 	this.todos = [];
// 	this.data = localStorage;
// 	this.count = Number(this.data.getItem('count' ?? 0));

// 	// this.count = Number(this.data.getItem('count') ?? 0); 
// 	// this.data.setItem('count', this.count); 
// 	// this.add = function(content) { 
// 	// 	let formattedTodo = { 
// 	//			id: ${this.count++}, 
// 	//			content: content, 
// 	//			complete: false, 
// 	// };

// 	this.add = function(content) {
// 		let formattedTodo = {
// 			id: `${this.count++}`, // this is updating the variable in memory, it will not update the localStorage if it's set as a variable there
// 			content: content,
// 			complete: false,
// 		};

// 		this.data.setItem('count', this.count);
// 		this.todos = [formattedTodo, ...this.todos];
// 		this.storeTodos(this.todos);
// 		this.update();
// 	}

// 	this.storeTodos = function(array) {
// 		this.data.setItem('todos', JSON.stringify(array));
// 	}

// 	this.restoreTodos = function() {
// 		const storedTodos = this.data.getItem('todos');

// 		if (storedTodos) {
// 			this.todos = JSON.parse(storedTodos);
// 			this.update();
// 		}
// 	}

// 	this.update = function() {
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
// 	}

// 	this.remove = function(id) {

// 		this.todos = this.todos.filter(todo => todo.id !== id);
// 		this.storeTodos(this.todos);
// 		this.update();
// 	}

// 	this.edit = function(id) { 

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

// 		this.storeTodos(this.todos);
// 		this.update();
// 	}

// 	this.complete = function(id) {
// 		this.todos = this.todos.map(todo => {
// 			if (todo.id === id) {
// 				todo.complete = true;
// 			}
// 			return todo;
// 		});

// 		this.storeTodos(this.todos);
// 		this.update();
// 	}

// 	this.initEvents = function() {
//       this.submitBtn.addEventListener('click', (event) => {
//          event.preventDefault();
//          let content = this.input.value.trim();
//          if (content.length === 0) {
//             alert('Input cannot be empty!');
//             return;
//          } else {
//          	this.add(content);
//          	this.input.value = '';
//          }
//       });

//       this.output.addEventListener('click', (event) => {
//          if (event.target.classList.contains('remove-btn')) {
// 		      const idToRemove = event.target.getAttribute('data-id'); 
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
// }

// const app = new TodoAppConstructor();

// TodoAppConstructor.prototype.markUndone = function(id) {
// 	this.todos = this.todos.map(todo => {
// 		if (todo.id === id) {
// 			todo.complete = false;
// 		}
// 		return todo;
// 	});

// 	this.storeTodos(this.todos);
// 	this.update();
// }

// app.restoreTodos();
// app.initEvents();

class Todo {

	constructor(id, content, complete = false) {
		this.id = id;
		this.content = content;
		this.complete = complete;
		this.dateCreated = new Date();
		this.color = this.randomizeColor();
		this.color2 = this.randomizeColor();
		this.container = document.querySelectorAll('.todo-container');
	}

	toggle() {
	   this.complete = !this.complete;

	   // if(this.complete) {
   	// 	this.container.forEach(item => {
		// 			item.classList.add('done');
		// 	});
	   // };
	}

	edit(newContent) { 
		this.content = newContent; 
	}

	render() {
		const { id, complete, content, dateCreated, color, color2 } = this; // destructuring

		// ${this.complete ? "var(--complete)" : color}
		return   `<div class='todo-container ${complete ? 'done' : ''}' style='background-color:${color}'>
			     		<div class='status' style='background-color:${color2}'>
	    					<input class='complete' id='complete${id}' type='checkbox' name='complete' data-id='${id}' ${complete ? 'checked' : ''}>
	    					<label for='complete${id}'>Completed</label>
	  					</div>
						<div class='date'>
							<small>${dateCreated.toLocaleDateString()}</small>
						</div>
						<div class='task'>
							<p>To do: </p><span>${content}</span>
						</div>
						<button class='edit' type='button' name='edit' data-id='${id}'>Edit</button>
						<button class='remove-btn' type='button' data-id='${id}'>Remove</button>
					</div>`;
	}

   randomizeColor() {
		const colors = ['var(--todo-red)','var(--todo-yellow)','var(--todo-green)','var(--todo-blue)','var(--todo-pink)','var(--todo-orange)'];

		return colors[Math.floor(Math.random() * colors.length)];
	}
}

class TodoApp {

	constructor() { // runs automatically when calling the class
		this.todos = [];
		this.data = localStorage;
		this.count = this.data.getItem('count') ? Number(this.data.getItem('count')) : 0;

		this.form = document.querySelector('#todoForm');
		this.input = document.querySelector('#todo');
		this.output = document.querySelector('output');

		this.restoreTodos();
		this.initEvents();
	}

	add(content) {

		// let formattedTodo = {
		// 	id: `${this.count++}`, // this is updating the variable in memory, it will not update the localStorage if it's set as a variable there
		// 	content: content,
		// 	complete: false,
		// };

		let todo = new Todo(`${this.count++}`, content);

		this.data.setItem('count', this.count);
		this.todos = [todo, ...this.todos];
		this.storeTodos(this.todos);
		this.update();
	}

	storeTodos(array) {
		this.data.setItem('todos', JSON.stringify(array));
	}

	restoreTodos() {
		const storedTodos = this.data.getItem('todos');

		if (storedTodos) {
			this.todos = JSON.parse(storedTodos);

			this.todos = this.todos.map(todo => { // need to turn the todos back into todo class instances for todo class methods to work after restoring 
				let newTodo = new Todo(todo.id, todo.content, todo.complete);
				return newTodo;
			});

			this.update();
		}
	}

	update() {

		const { todos, output } = this; // destructuring
		let html = '';

		html += "<div class='container'>";
		for (let i = 0; i < todos.length; i++) {
			html += todos[i].render();
		}
		html += "</div>";

		output.innerHTML = html;
	}

	remove(id) {

		this.todos = this.todos.filter(todo => todo.id !== id);
		this.storeTodos(this.todos);
		this.update();
	}

	edit(id) { 

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
				todo.edit(editedTodo);
			}
			return todo;
		});

		this.storeTodos(this.todos);
		this.update();
	}

	complete(id) {
		this.todos = this.todos.map(todo => {
			if (todo.id === id) {
				todo.toggle();
			}
			return todo;
		});

		this.storeTodos(this.todos);
		this.update();
	}

	initEvents() {
      this.form.addEventListener('submit', (event) => {
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

		      this.complete(idState);
		   }
      });
   }
}

let todo = new TodoApp;

// todo.restoreTodos(); // moved these in the constructor
// todo.initEvents();














