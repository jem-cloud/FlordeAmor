const scrolltop = document.querySelector(".scrolltop");

window.addEventListener("scroll", ( ) => {
    if(window.pageYOffset > 100){
        scrolltop.classList.add("active");

    }else{
        scrolltop.classList.remove("active");
    }
})



