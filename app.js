var modal = document.getElementById("ventanaModal");
var modalConfirmacion = document.getElementById("modalConfirmacion");
var boton = document.getElementById("abrirModal");
var respuesta = document.getElementById("respuesta");
var btnRed = document.getElementsByClassName("btnRed")[0];
var accept = document.getElementsByClassName("accept")[0];
var btnAccept = document.getElementsByClassName("btnAccept")[0];
var span = document.getElementsByClassName("cerrar")[0];
var cerrar = document.getElementsByClassName("cerrar2")[0];

var radicador = document.getElementById("idRadicador").value;

boton.addEventListener("click",function() {
  modal.style.display = "block";
});
span.addEventListener("click",function() {
  modal.style.display = "none";
});
cerrar.addEventListener("click",function() {
  modalConfirmacion.style.display = "none";
});
btnRed.addEventListener("click",function() {
  modal.style.display = "none";
});
accept.addEventListener("click",function() {
  modal.style.display = "none";
  
  console.log(radicador);
  

  modalConfirmacion.style.display = "block";
});
btnAccept.addEventListener("click",function() {
  modalConfirmacion.style.display = "none";
});
function limpiarFormulario() {
  document.getElementById("#formulario").reset();
}




window.addEventListener("click",function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});




