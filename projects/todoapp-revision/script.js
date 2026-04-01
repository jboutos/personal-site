class todo {
	constructor() {
		this.id = id;
		this.content = content;
		this.complete  = false;
	}

	toggle() {
		this.complete = !this.complete;
	}

	edit(newContent) {
		this.content = newContent; 
	}

	render() {
		const { id, complete, content } = this; // destructuring

		return   `<div class='todo-container'>
			     		<div class='status'>
	    					<input class='complete' id='complete${id}' type='checkbox' name='complete' data-id='${id}' ${complete ? 'checked' : ''}>
	    					<label for='complete${id}'>Completed</label>
	  					</div>
						<div class='task'>
							<p>To do: </p><span>${content}</span>
						</div>
						<button class='edit' type='button' name='edit' data-id='${id}'>Edit</button>
						<button class='remove-btn' type='button' data-id='${id}'>Remove</button>
					</div>`;
	}

}


class todoApp {
	constructor() {
		this.data = localStorage;
		this.todos = [];
		this.count = this.data.getItem('count') ? Number(this.data.getItem('count')) : 0;

		this.form = document.querySelector('#todoForm');
		this.input = document.querySelector('#todo');
		this.output = document.querySelector('output');
	}

	storeTodos(array) {
		this.data.setItem('todos', JSON.stringify(array));
	}

	restoreTodos() {
		let storedTodos = this.data.getItem('todos');

		if(storedTodos) {
			this.todos = JSON.parse(storedTodos);
			this.todos = this.todos.map(todo => {
				let newTodo = new Todo(todo.id, todo.content);
				newTodo.complete = todo.complete;
				return newTodo;
			});
		}

		this.render();

	}

	add(content) {
		let todo = new Todo(`${this.count++}`, content);
		this.data.setItem('count', this.count);
		this.todos = [todo, ...this.todos];

		this.storeTodos(this.todos);
		this.render();
	}

	remove(id) {
		this.todos = this.todos.filter(todo => todo.id !== id);

		this.storeTodos(this.todos);
		this.render();
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
			if(todo.id === id) {
				todo.edit(editedTodo);
			}
			return todo;
		});

		this.storeTodos(this.todos);
		this.render();
	}

	render() {
		const storedTodos = this.data.getItem('todos');

		if (storedTodos) {
			this.todos = JSON.parse(storedTodos);

			this.todos = this.todos.map(todo => { // need to turn the todos back into todo class instances for todo class methods to work after restoring 
				let newTodo = new Todo(todo.id, todo.content, todo.complete);
				return newTodo;
			});
		}
	}

	complete(id) {
		this.todos = this.todos.map(todo => {
			if(todo.id === id) {
				todo.toggle();
			}
			return todo;
		});

		this.storeTodos(this.todos);
		this.render();
	}

	initEvents() {
		this.form.addEventListener('submit', (event) => {
			event.preventDefault();
		});
	}

}