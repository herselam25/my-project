const body = document.querySelector("body");
const openMenu = document.querySelector("#open-menu");
const closeMenu = document.querySelector("#close-menu");

openMenu.addEventListener('click', function() {
    body.classList.add('menu-is-open');
});
closeMenu.addEventListener('click', function() {
    body.classList.remove('menu-is-open');
});
