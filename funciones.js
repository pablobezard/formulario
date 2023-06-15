

function calcular() {
  var valor1 = parseInt(document.getElementById("num1").value);
  var valor2 = parseInt(document.getElementById("num2").value);
  var operacion = document.getElementById("operacion").value;
  var resultado;

  if (operacion === "suma") {
    resultado = valor1 + valor2;
  } else if (operacion === "resta") {
    resultado = valor1 - valor2;
  } else if (operacion === "multiplicacion") {
    resultado = valor1 * valor2;
  } else if (operacion === "division") {
    resultado = valor1 / valor2;
  }

  // Animación de desvanecimiento
  var resultadoElement = document.getElementById("resultado");
  resultadoElement.style.opacity = 0;

  setTimeout(function() {
    resultadoElement.textContent = resultado;

    // Animación de aparición gradual
    var opacity = 0;
    var timer = setInterval(function() {
      if (opacity >= 1) {
        clearInterval(timer);
      }
      resultadoElement.style.opacity = opacity;
      opacity += 0.1;
    }, 100);
  }, 500);

  return false;
}

function validarFormulario() {
  var nombre = document.getElementById("nombre").value;
  var email = document.getElementById("email").value;
  var telefono = document.getElementById("telefono").value;

  // Validar que todos los campos estén completos
  if (nombre === "" || email === "" || telefono === "") {
    alert("Por favor, completa todos los campos del formulario.");
    return false;
  }

  // Validar formato de email
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert("Por favor, ingresa un email válido.");
    return false;
  }

  // Validar formato de teléfono
  var telefonoRegex = /^\d{10}$/;
  if (!telefonoRegex.test(telefono)) {
    alert("Por favor, ingresa un número de teléfono válido (10 dígitos).");
    return false;
  }

  // Animación de giro
  var formularioElement = document.getElementById("miFormularioDatosPersonales");
  formularioElement.style.transform = "rotateY(360deg)";
  setTimeout(function() {
    formularioElement.style.transform = "none";
  }, 1000);

  return true;
}
function saludar() {
  var nombre = prompt("Ingresa tu nombre");
  if (nombre) {
  alert("¡Hola, " + nombre + "!");
  }
}
