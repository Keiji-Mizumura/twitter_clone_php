const backdrop = document.getElementById("navigation-m-hidden");
const slidingNavigation = document.getElementById("navigation-sliding");

function showNavigation(){
    backdrop.style.transform = "scale(1)";
    slidingNavigation.style.animation = "slideRight 500ms ease-in-out";
    slidingNavigation.style.animationFillMode = "forwards";
}

function hideNavigation(){
    backdrop.style.transform = "scale(0)";
    slidingNavigation.style.animation = "slideLeft 500ms ease-in-out";
    slidingNavigation.style.animationFillMode = "forwards";
}