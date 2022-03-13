let button = document.querySelector(".arrow"),
links = document.querySelector(".nav-links");
button.addEventListener("click",()=>{
    links.classList.toggle("display");
})