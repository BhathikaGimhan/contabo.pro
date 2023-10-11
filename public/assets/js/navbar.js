$(document).ready(() => {
    const hamburgerMenu = document.querySelector(".hamburger__menu");
    const bodyTag = document.querySelector("body");
    mobileNav = document.querySelector(".bottom__header");
    closeNav = document.querySelector(".close__navbar");
    bgOverlay = document.querySelector(".bg__overlay");

    hamburgerMenu.addEventListener("click", () => {
        mobileNav.classList.add("active__mobileHeader");
        bodyTag.style.overflowY = "hidden";
        bgOverlay.style.display = "inherit";
    });

    closeNav.addEventListener("click", () => {
        mobileNav.classList.remove("active__mobileHeader");
        bodyTag.style.overflowY = "visible";
        bgOverlay.style.display = "none";
    });
});
