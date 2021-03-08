/*
	Angel David Argumedo Guerra

	Calculadora sencilla.
*/

alert("Este programa es una calculadora sencilla.");

var seleccion= prompt("Seleccione la operacion que desea realizar. \n 1. Suma \n 2. Resta \n 3. Multiplicacion \n 4. Division");

switch (seleccion) {
	case "1":
		var n1 = new Number(prompt("Digite un numero"));
		var n2 = new Number(prompt("Digite otro numero"));
		var resultado;
		if (isNaN(n1)) {
			alert("El primer valor digitado no es numerico.");
		}else if (isNaN(n2)) { //Aqui digo si n2 no es numerico entonces lanza un alert diciendo que no es un numero
			alert("El segundo valor digitado no es numerico.");
		}else {
		// Aqui no mas es realizar la operacion de suma y mostrar el resultado
		resultado= n1 + n2;
		alert("El resultado de la suma es: "+resultado);
		}
		break;

	case "2":
		var n1 = new Number(prompt("Digite un numero"));
		var n2 = new Number(prompt("Digite otro numero"));
		var resultado;
		if (isNaN(n1)) {
			alert("El primer valor digitado no es numerico.");
		}else if (isNaN(n2)) { //Aqui digo si n2 no es numerico entonces lanza un alert diciendo que no es un numero
			alert("El segundo valor digitado no es numerico.");
		}else {
		// Aqui no mas es realizar la operacion de resta y mostrar el resultado
		resultado= n1 - n2;
		alert("El resultado de la resta es: "+resultado);
		}
		break;

	case "3":
		var n1 = new Number(prompt("Digite un numero"));
		var n2 = new Number(prompt("Digite otro numero"));
		var resultado;
		if (isNaN(n1)) {
			alert("El primer valor digitado no es numerico.");
		}else if (isNaN(n2)) { //Aqui digo si n2 no es numerico entonces lanza un alert diciendo que no es un numero
			alert("El segundo valor digitado no es numerico.");
		}else {
		// Aqui no mas es realizar la operacion de multiplicacion y mostrar el resultado
		resultado= n1 * n2;
		alert("El resultado de la multiplicacion es: "+resultado);
		}
		break;

	case "4":
		var n1 = new Number(prompt("Digite un numero"));
		var n2 = new Number(prompt("Digite otro numero"));
		var resultado;
		if (isNaN(n1)) {
			alert("El primer valor digitado no es numerico.");
		}else if (isNaN(n2)) { //Aqui digo si n2 no es numerico entonces lanza un alert diciendo que no es un numero
			alert("El segundo valor digitado no es numerico.");
		}else {
		// Aqui no mas es realizar la operacion de division y mostrar el resultado
		resultado= n1 / n2;
		alert("El resultado de la division es: "+resultado);
		}
		break;

	default:
		alert("Digite una opcion valida.");
		break;
}