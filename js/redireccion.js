
// función encargada de la redirección
function redireccion() {
    window.location = ("../../index.php?action=expired");    
}
var temp = setTimeout(redireccion, 900000);
document.addEventListener("click", function () {
    clearTimeout(temp);
    temp = setTimeout(redireccion, 900000);
})