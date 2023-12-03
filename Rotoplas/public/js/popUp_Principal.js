/*var btnAbrirPopUp = document.getElementById('btn-abrir-popup-especs'),
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
});*/

var btnsAbrirPopUp = document.querySelectorAll('.btn-abrir-popup-especs'),
    overlays = document.querySelectorAll('.overlay_especs'),
    popups = document.querySelectorAll('.popup_especs'),
    btnsCerrarPopUp = document.querySelectorAll('.btn-cerrar-popup-especs');

btnsAbrirPopUp.forEach(function(btn, index) {
    btn.addEventListener('click', function(){
        overlays[index].classList.add('active');
        popups[index].classList.add('active');
    });
});

btnsCerrarPopUp.forEach(function(btn, index) {
    btn.addEventListener('click', function(){
        overlays[index].classList.remove('active');
        popups[index].classList.remove('active');
    });
});
