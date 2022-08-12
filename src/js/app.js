document.addEventListener('DOMContentLoaded', function () {
    eventlistener();
    darckMode();
})

function eventlistener(){

    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', ( ) => {
        const navegacion = document.querySelector('.navegacion');

        if(navegacion.classList.contains('mostrar')){
            navegacion.classList.remove('mostrar');
        }else{
            navegacion.classList.add('mostrar');
        }
    });
} 

function darckMode(){
 
    const iconoOscuro = document.querySelector('#icono');

    const  prefiereDarkMode = window.matchMedia('prefers-color-scheme: dark');

    if(prefiereDarkMode.matches){
        document.body.classList.add('darck_mode');
    }else{
        document.body.classList.remove('darck_mode');
    }

    prefiereDarkMode.addEventListener('change', () => {
        
    if(prefiereDarkMode.matches){
        document.body.classList.add('darck_mode');
    }else{
        document.body.classList.remove('darck_mode');
    }
    })

    iconoOscuro.addEventListener('click', () => {
        document.body.classList.toggle('darck_mode');
    })

}