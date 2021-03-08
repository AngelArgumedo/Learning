/*
	Angel David Argumedo Guerra

	Suma de dos numeros.
*/

alert("Este programa suma dos numeros y muestra el resultado.")
// Si no especifico de que tipo son al pedir que el usuario las digite por prompt estas seran de tipo cadena, y a la hora de sumar en vez de sumar se concatenan
var num1= new Number(prompt("Digite un numero.")); //Aqui declaro la variable del primer numero y especifico que es de caracter numerico
var num2= new Number(prompt("Digite otro numero.")); 
var resultado; //Aqui declaro la variable del resultado no especifique el tipo porque no hace falta para este caso

if (isNaN(num1)) { //Aqui digo si num1 no es numerico entonces lanza un alert diciendo que no es un numero
	alert("El primer valor digitado no es numerico.");
}else if (isNaN(num2)) { //Aqui digo si num2 no es numerico entonces lanza un alert diciendo que no es un numero
	alert("El segundo valor digitado no es numerico.");
}else {
	// Aqui no mas es realizar la operacion de suma y mostrar el resultado
	resultado= num1 + num2;
	alert("El resultado de la suma es: "+resultado);
}

