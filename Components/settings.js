var settings = document.getElementById("settings_bg");
var title = document.getElementById("titleGeneral");
var description = document.getElementById("descriptionGeneral")
function openSettings(){
    settings.style.display = "block";
}
function closeSettings(){
    settings.style.display = "none";
}

function general(){
    title.style.display = "block";
    description.style.display = "block";
}