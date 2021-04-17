var nav_open = false;
var mobile_nav = false;

function openNav() {
    var nav = document.querySelector("nav");
    if (nav_open) {
        nav.style.display = "none";
        nav_open = false;
        this.changeColor();
    } else {
        nav.style.display = "block";
        nav_open = true;
        this.changeColor();
    }
}

function changeColor () {
    var changeVar = 520;
    if (nav_open && window.innerWidth < 800) {
        changeVar = 120;
    } else if (nav_open && window.innerWidth < 960) {
        changeVar = 440;
    } else {
        changeVar = 520;
    }

    var header = document.querySelector("header");
    var nav = document.querySelector("nav");
    if (document.body.scrollTop >= changeVar || document.documentElement.scrollTop >= changeVar) {
        header.classList.add("nav-black");
        header.classList.remove("nav-translucent");
    } else {
        header.classList.add("nav-translucent");
        header.classList.remove("nav-black");
        
        if (window.innerWidth < 960) {
            nav.classList.add("nav-translucent");
            nav.classList.remove("nav-transparent");
            nav.classList.remove("nav-black");
        } else {
            nav.classList.remove("nav-translucent");
            nav.classList.add("nav-transparent");
            nav.classList.remove("nav-black");
        }
    }
}

window.onscroll = function () { 
    this.changeColor();
};

window.onresize = function () {
    this.changeColor();

    var nav = document.querySelector("nav");

    if (window.innerWidth > 799) {
        nav.style.display = "block";
        nav_open = true;
    } else if (mobile_nav && window.innerWidth < 800) {
        nav.style.display = "block";
        nav_open = true;
    } else if (!mobile_nav && window.innerWidth < 800) {
        nav.style.display = "none";
        nav_open = false;
    }
};