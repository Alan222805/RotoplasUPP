var btnAbrirPopUp = document.getElementById('btn-abrir-popup-especs'),
    overlay = document.getElementById('overlay_especs'),
    popup = document.getElementById('popup_especs'),
    btnCerrarPopUp = document.getElementById('btn-cerrar-popup-especs');

btnAbrirPopUp.addEventListener('click', function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});

btnCerrarPopUp.addEventListener('click', function(){
    overlay.classList.remove('active');
    popup.classList.remove('active');
});
