document.getElementById("btn_iniciar-sesion").addEventListener("click", iniciar_sesion);
document.getElementById("btn_registarse").addEventListener("click", register);

window.addEventListener("resize", ancho_pagina);

// Declarando variables
var contenedor_login_register = document.querySelector(".contenedor_login-register");
var formulario_login = document.querySelector(".formulario_login");
var formulario_register = document.querySelector(".formulario_register");

var caja_trasera_login = document.querySelector(".caja_trasera-login");
var caja_trasera_register = document.querySelector(".caja_trasera-register");

function ancho_pagina() {
    if(window.innerWidth > 850){
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    }else{
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0";
    }
}
ancho_pagina();

function iniciar_sesion() {
    if(window.innerWidth > 850){
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    }else{
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

function register() {
    if(window.innerWidth > 850){
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";

    }
}

function validar (){
    var nombre, apellido, rut , correo ,usuario ,area , pass;
    nombre = document.getElementById("Nombre").value;
    apellido = document.getElementById("Apellido").value;
    rut = document.getElementById("Rut").value;
    correo = document.getElementById("Correo").value;
    usuario = document.getElementById("usuario").value;
    area = document.getElementById("Area").value;
    pass = document.getElementById("pass").value;
    rpass = document.getElementById("rpass").value;

    expresion = /\w+@\w+\.+[a-z]/;

    if(nombre === "" || apellido === "" || rut === "" || correo === "" || usuario === "" || area === "" || pass === ""){
        alert("Todos los campos son obligatorios")
        return false;
    }
    else if(nombre.length > 40 || nombre.length < 3){
        alert("el nombre debe contener entre 3 y 40 caracteres");
        return false;
    }
    else if(apellido.length > 40 || apellido.length < 3){
        alert("el apellido debe contener entre 3 y 40 caracteres");
        return false;
    }
    else if(correo.length > 50 || correo.length < 3){
        alert("el correo debe contener entre 3 y 40 caracteres");
        return false;
    }
    else if(!expresion.test(correo)){
        alert("El correo no es valido");
        return false
    }
    else if(usuario.length > 20 || usuario.length < 3){
        alert("el usuario debe contener entre 3 y 20 caracteres");
        return false;
    }
    else if(pass.length > 20 || pass.length < 8){
        alert("La contraseña debe contener al menos 8 caracteres y maximo 20");
        return false;
    }
    else if(pass != rpass){
        alert("Las contraseñas deben ser iguales en ambos campos");
        return false;
    }
   
}

/*formatRut:(rut)=>{
    //XX.XXX.XXX-X
    const newRut = rut.replace(/\./g,'').replace(/\-/g, '').trim().toLowerCase();
    const lastDigit = newRut.substr(-1, 1);
    const rutDigit = newRut.substr(0, newRut.length-1)
    let format = '';
    for (let i = rutDigit.length; i > 0; i--) {
      const e = rutDigit.charAt(i-1);
      format = e.concat(format);
      if (i % 3 === 0){
        format = '.'.concat(format);
      }
    }
    return format.concat('-').concat(lastDigit);
  }*/