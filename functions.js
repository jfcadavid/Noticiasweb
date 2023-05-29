function mostrarContraseña(){
    var contraseñaInput = document.getElementById("contraseña");
    if(contraseñaInput.type==="password"){
        contraseñaInput.type = "text";
    }else{
        contraseñaInput.type = "password";
    }
}

