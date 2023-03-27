
var menu=document.querySelectorAll('.nav');
var add=document.querySelector('#add');
var form=document.querySelector('.formCont');
var wrapp=document.querySelector('.wrapper');
var icon=document.querySelector('.icone-x');

switch(window.location.href){
    case 'http://localhost/code/page_read/etudiant.php':menu[0].classList.add('slct');
    break;
    case 'http://localhost/code/page_read/professeur.php':menu[1].classList.add('slct');
    break;
    case 'http://localhost/code/page_read/soutenance.php':menu[2].classList.add('slct');
    break;
    case 'http://localhost/code/page_read/organisme.php':menu[3].classList.add('slct');
    break;
}

add.addEventListener("click",function(){
   form.style.visibility="visible";
   wrapp.classList.add("flou");
})
icon.addEventListener("click",function(){
    form.style.visibility="hidden";
    wrapp.classList.remove("flou");
 })