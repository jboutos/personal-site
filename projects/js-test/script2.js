const apes = ['Orangutans', 'Gorilla', 'Chimpanzees', 'Humans'];

apes.forEach( function(ape) {
	return console.log('1', ape);
});

function printApe(ape) {
	return console.log('2', ape);
}

apes.forEach( printApe );

apes.forEach( (ape) => console.log('3', ape));

apes.forEach(ape => printApe(ape));

apes.forEach( () => console.log('4'));

apes.forEach( (ape) => {
	return console.log('5', ape);
});

apes.forEach( function(ape) {
	return console.log('6', ape);
});