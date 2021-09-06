function confirmacion(e) {
    if (confirm("¿Estas seguro que quieres borrar?")){
        return true;

    } else {
        e.preventDefault();
    }
}
let linkdelete = document.querySelectorAll(".link");

for (var i = 0; i < linkdelete.length; ++i){
    linkdelete[i].addEventListener('click',confirmacion);
}