var myStuff = ["Guava drink", "Exercises book", "Beer bottle", "Stupid peanut butter jar", "Timer", "Ramen", "Cool pen for Danielle", "Old Coffee"];

var deskItems = [
	{
		name: "Water Bottle",
		type: "drink",
		quantity: 2,
	},
	{
		name: "History book",
		type: "book",
		quantity: 2,
	},
	{
		name: "Sweets",
		type: "food",
		quantity: 1,
	},
	{
		name: "Electrolyte satchets",
		type: "medicine",
		quantity: 1,
	},
	{
		name: "Bluetooth headphones",
		type: "headphones",
		quantity: 3,
	},
	{
		name: "Toilet paper",
		type: "utilities",
		quantity: 2,
	},
	{
		name: "Pens",
		type: "utilities",
		quantity: 2,
	},
	{
		name: "Wallet",
		type: "utilities",
		quantity: 4,
	},
	{
		name: "Deodorant",
		type: "sanitation",
		quantity: 1,
	},
	{
		name: "Calendar",
		type: "utilities",
		quantity: 1,
	},
	{
		name: "Monitor",
		type: "tech",
		quantity: 3,
	},
];

//deskItems.forEach( function(item, index) {
//	var number = index + 1;
//	console.log(item.name);
//	console.log("Type: ", item.type);
//	console.log("");
//});

//deskItems.forEach( function(item, index) {
//		console.log(item.name);
//	} else if (item.type != "trash") {
//		console.log(item.name);
//	}
//});

//var utilities = deskItems.filter ( function(item) {
//	return item.type == 'utilities';
//});

//console.log(" ");
//console.log(utilities);

function test(array, title) {
	var myHeading = document.createElement('h1');
	myHeading.textContent = title;
	document.body.appendChild(myHeading);

	var myUl = document.createElement('ul');
	myUl.classList = "list";
	document.body.appendChild(myUl);


	for(var i = 0; i < array.length; i++) {
		var myLi = document.createElement('li');
		myLi.textContent = array[i].name;
		myUl.appendChild(myLi);
	}
};

test(deskItems, "This is a list of items");