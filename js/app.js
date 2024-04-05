//Menu header

const boton = document.querySelector('#icono');
const ul = document.querySelector('.ul_nav');
const back_menu = document.querySelector('#back_menu');

boton.addEventListener('click', () =>{
    ul.classList.toggle('show');
    back_menu.style.display = "block";
});

back_menu.addEventListener('click', () =>{
    back_menu.style.display = "none";
    ul.classList.toggle('show');
});


//Enviar email

const formulario = document.querySelector('#formulario');

formulario.addEventListener('submit', function(e){
    e.preventDefault();
    email();
    limpiarFormulario();
});

function email(){
    const datos = new FormData(formulario);
    fetch('email.php', {
        method: 'POST',
        body: datos
    })
    .then(res => res.json())
    .then(res => {

        if('exito'){
            Swal.fire({
                icon: 'success',
                title: 'Gracias por Contactarnos',
                text: 'Tambien puedes contactarnos por nuestras Redes!'
              })
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Hubo un Error',
                text: 'Error al enviar el correo, intenta contactarnos por nuestras Redes.!'
              })
        }
    })
}

function limpiarFormulario(){
    formulario.reset();
}

//boton up

window.onscroll = function(){
    if(document.documentElement.scrollTop > 100){
        document.querySelector('.go-top').classList.add('show');
    }else{
        document.querySelector('.go-top').classList.remove('show');
    }
}

document.querySelector('.go-top').addEventListener('click', () => {
    window.scrollTo({
        top:0,
        behavior: 'smooth'
    });
});