const CLASS_NAME_LIGHT = "light";
const STORAGE_LIGHT_ITEM = "isLight";
const lightswitch = document.querySelector('.lightswitch');
const LIGHT_ICON = lightswitch.getAttribute('light-icon');
const DARK_ICON = lightswitch.getAttribute('dark-icon');

lightswitch.addEventListener("click", function (e) {
    const isLight = document.body.classList.contains(CLASS_NAME_LIGHT);
    const lightswitch = e.target;
    if (isLight) {
        document.body.classList.remove(CLASS_NAME_LIGHT);
        lightswitch.innerHTML = DARK_ICON;
        localStorage.setItem(STORAGE_LIGHT_ITEM, "false");
    } else {
        document.body.classList.add(CLASS_NAME_LIGHT);
        lightswitch.innerHTML = LIGHT_ICON;
        localStorage.setItem(STORAGE_LIGHT_ITEM, "true");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const isLight = localStorage.getItem(STORAGE_LIGHT_ITEM);
    if (isLight == "true") {
        document.body.classList.add(CLASS_NAME_LIGHT);
        lightswitch.innerHTML = LIGHT_ICON;
    }
});