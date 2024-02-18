<?php $this->load->view("includes/header");?>
<div class="container">
  <h1>Seleccione</h1>
</div>
<div align="center">
    <form name="form1" action="<?=base_url()?>index/vistarut" method="post">
        
        <input type="submit" value="General" class="boton button4">
    </form>
    <br>
    <br>
    <a href="<?=site_url('user/addUser')?>" class="btn btn-primary">Agregar Usuarios</a>
    <a href="<?=site_url('user/listUser')?>" class="btn btn-primary">Listar Usuarios</a>
<br><br>
    <label for="rut">Enter a RUT (e.g., 12345678-9 or 12345678):</label><br>
    <input type="text" id="rut" name="rut"><br>
    <br>
    <button onclick="validateRUT()">Verify RUT</button>
    <p id="result"></p>
</div>

<script>
// Función que valida un RUT chileno usando módulo 11 y expresiones regulares
function checkRut (rut) {
  // Despejar Puntos
  var valor = rut.replace ('.','');
  // Despejar Guión
  valor = valor.replace ('-','');
  // Aislar Cuerpo y Dígito Verificador
  cuerpo = valor.slice (0,-1);
  dv = valor.slice (-1).toUpperCase ();
  // Formatear RUN
  rut = cuerpo + '-'+ dv
  // Si no cumple con el mínimo ej. (n.nnn.nnn)
  if (cuerpo.length < 7) { return "RUT Incompleto"; }
  // Calcular Dígito Verificador
  suma = 0;
  multiplo = 2;
  // Para cada dígito del Cuerpo
  for (i=1;i<=cuerpo.length;i++) {
    // Obtener su Producto con el Múltiplo Correspondiente
    index = multiplo * valor.charAt (cuerpo.length - i);
    // Sumar al Contador General
    suma = suma + index;
    // Consolidar Múltiplo dentro del rango [2,7]
    if (multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  }
  // Calcular Dígito Verificador en base al Módulo 11
  dvEsperado = 11 - (suma % 11);
  // Casos Especiales (0 y K)
  dv = (dv == 'K')?10:dv;
  dv = (dv == 0)?11:dv;
  // Validar que el Cuerpo coincide con su Dígito Verificador
  if (dvEsperado != dv) { return "RUT Inválido"; }
  // Si todo sale bien, eliminar errores (decretar que es válido)
  return "RUT Válido";
}

// Ejemplo de uso
function validateRUT() {
    var rut = document.getElementById("rut").value; // Obtener el valor del RUT ingresado
    var result = checkRut(rut); // Validar el RUT ingresado
    document.getElementById("result").innerHTML = result; // Mostrar el resultado
}

</script>

<?php $this->load->view("includes/footer");?>