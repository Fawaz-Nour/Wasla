let sideNav = document.querySelector(".fw-offcanvas-nav");
let hasChld = document.querySelectorAll(".fw-offcanvas-nav .menu-item-has-children");

hasChld.forEach(m => {
    let newSpan = document.createElement("span");
    newSpan.classList.add("ox-btn");
    newSpan.innerHTML = '<i class="bi bi-caret-down float-end"></i>';
    let subMenu = m.querySelector("ul.sub-menu");
    if(subMenu){
        subMenu.classList.add("d-none");
    }
    m.prepend(newSpan);
});
let arrwSub = document.querySelectorAll(".fw-offcanvas-nav .ox-btn");
arrwSub.forEach(a => {
    a.addEventListener("click", () => {
        let subMenu = a.parentElement.querySelector("ul.sub-menu");
        if(subMenu){
            subMenu.classList.toggle("d-none");
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    AOS.init({
        duration: 1000,
        once: false,
        offset: 100,
    });
});