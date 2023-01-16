let search = document.querySelector('.search');
let fermer = document.querySelector('.fermer');
let Afecher = document.querySelector('.catigorir');
let search2 = document.querySelector(".inputsearch");
let catigorirs = document.querySelector(".catigoris");

search.addEventListener("click", ()=>{
    search2.classList.toggle('activ');
    

});
fermer.addEventListener("click", ()=>{
    search2.classList.toggle('aplly');
    location.reload();
});

Afecher.addEventListener("click", ()=>{
    catigorirs.classList.toggle("voire")
})