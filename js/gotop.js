const CLASS_NAME_SHOW = "show";
const goTop = document.querySelector(".go-top");

window.addEventListener("scroll", function () {
    const scrollHeight = window.scrollY;
    console.log(scrollHeight);
    if (scrollHeight > 30) {
        goTop.classList.add(CLASS_NAME_SHOW);
    } else {
        goTop.classList.remove(CLASS_NAME_SHOW);
    }
});