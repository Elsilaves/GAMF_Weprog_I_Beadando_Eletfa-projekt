var modal = document.getElementById('regForm'); //elem azonosító alapján törtőnő meghívás

window.onclick = function(event) { // kattintás funkció, elem elrejtése és megjelenítéséhez szükséges
    if (event.target == modal) { 
        modal.style.display = "none";
    }
}