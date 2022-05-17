
// hovered dashboard

var dashboard = document.getElementById('sidebar');
var navlinks = [...document.getElementsByTagName('span')]



 dashboard.addEventListener("mouseover", func, false);
 dashboard.addEventListener("mouseout", func1, false);

function func()
{  
dashboard.classList.remove('w-16');
dashboard.classList.add('w-64');
navlinks.forEach(span => {
    span.classList.remove('invisible')
});
}

function func1()
{  
    dashboard.classList.remove('w-64');
    dashboard.classList.add('w-16');


navlinks.forEach(span => {
    span.classList.add('invisible')
    
});
}

// mobile dashboard 

var hamburger = document.getElementById('hamburger');
var barsopen = document.getElementById('barsopen');
var barsclose = document.getElementById('barsclose');

barsopen.addEventListener("click", function(){ 
    
    hamburger.classList.remove('-left-full');
   


 });

barsclose.addEventListener("click", function(){ 
    
    hamburger.classList.add('-left-full');
  


 });