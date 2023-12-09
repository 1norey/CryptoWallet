
    var btn = document.getElementsByClassName("btn");
    var btn = document.getElementsByClassName("slide");

    btn[0].onclick = function(){ 
        slide.style.transform = translateX("0px");
    }
    btn[1].onclick = function(){ 
        slide.style.transform = translateX("-800px");

    }   
    btn[2].onclick = function(){ 
        slide.style.transform = translateX("-1600px");
        
    } 
    btn[3].onclick = function(){ 
        slide.style.transform = translateX("-240px");
        
    }
               

