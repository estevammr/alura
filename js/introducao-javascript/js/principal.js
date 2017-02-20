let titulo = document.querySelector(".titulo");
titulo.textContent = "Aparecida Nutricionista";

var pacientes = document.querySelectorAll(".paciente");

for(var i = 0; i < pacientes.length; i++) {
	
	var paciente = pacientes[i];
	var tdPeso = paciente.querySelector(".info-peso");
	var tdAltura = paciente.querySelector(".info-altura");

	var peso = tdPeso.textContent;
	var altura = tdAltura.textContent;

	var tdImc = paciente.querySelector(".info-imc");

	var pesoValido = true;
	var alturaValida = true;

	if(peso <= 0 || peso > 300) {
		tdImc.textContent = "Peso está inválido!";
		pesoValido = false;
		paciente.classList.add("paciente-invalido");
	}

	if(altura <=0 || altura > 3.00) {
		tdImc.textContent = "Altura está inválida!";
		alturaValida = false;
		paciente.classList.add("paciente-invalido");
	}

	if(pesoValido && alturaValida) {
		var imc = peso / (altura * altura);
		tdImc.textContent = imc.toFixed(2);
	}
}
