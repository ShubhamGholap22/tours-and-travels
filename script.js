const menuBtn = document.querySelector(".menu_btn");
const navMenu = document.querySelector(".nav_links");

menuBtn.addEventListener('click',()=>{
    navMenu.classList.toggle("mobile_menu");
})