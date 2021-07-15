var btn = document.querySelector('.button');
var listMenu = document.querySelector('.list-menu')
btn.addEventListener('click', function(){
     listMenu.classList.toggle('show') 
     console.log("abc")
})
var menu = document.querySelectorAll('.menu-item a')
menu.forEach(a => {
     a.addEventListener('click',()=>{
         a.classList.toggle('active')
     })
})
     
