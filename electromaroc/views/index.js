let filter = document.querySelector('.felrage').children;
let li = document.querySelector('.tumplats').children;

for(let i of li){
    const name = i.querySelector('strong');
    const x = name.textContent;
    i.setAttribute('product', x);
}
for(let i=0; i<filter.length; i++)
{
    filter[i].onclick = function (){
       for (let x=0; x<filter.length; x++){
          filter[x].classList.remove('active');
       }
       this.classList.add('active');
       const displayItems = this.getAttribute('data-filter');
       for(let z=0; z<li.length; z++)
       {
          li[z].style.transform = 'scale(0)';
          setTimeout(()=>{
            li[z].style.display = 'none';
          }, 500);
          if((li[z].getAttribute('product') == displayItems) || displayItems == 'all'){
            li[z].style.transform = 'scale(1)';
            setTimeout(()=>{
              li[z].style.display = 'block';
            }, 500);                  
          }
       }
    }
}