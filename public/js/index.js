let slider = document.querySelectorAll(".slider")[0];
let togglebtn = document.querySelectorAll(".checkbox")[0];	
let body = document.querySelectorAll(".mainbody")[0];
let search = document.querySelectorAll(".fa-magnifying-glass")[0];

let anchor = document.getElementsByTagName("a")[0];
togglebtn.addEventListener("click" , ()=>{
    body.classList.toggle("dark");
    slider.classList.toggle("middark");
    slider.classList.toggle("color");
    search.classList.toggle("searchcolor");
    anchor.classList.toggle("linkcolor");
});
let bars = document.querySelectorAll(".fa-bars")[0];
bars.addEventListener("click" , ()=>{
    slider.classList.toggle("active");
});


