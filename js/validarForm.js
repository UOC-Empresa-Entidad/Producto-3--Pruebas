function validarForm() {
    var pass = document.fvalida.password.value;
    var pass2 = document.fvalida.password2.value;

    if (pass!=pass2) {
        alert("Las contraseñas no coinciden. "+" pass = "+pass+" pass2= "+pass2);
        document.fvalida.password.focus;
        return false;
    } else {
        alert("Datos listos para registrar. "+" pass = "+pass+" pass2= "+pass2);
        return true;
    }
}