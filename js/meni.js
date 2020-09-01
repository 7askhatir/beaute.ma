
    function id(x){
      
     return document.getElementById(x);  
    }
    

function menu(btn){
    var btn1=id("btn1").value;
    var btn2=id("btn2").value;
    if(btn==btn1){
        id("btn1").style.display="none";
        id("btn2").style.display="block";
        id("ul").style.display="block";
        id("ul1").style.display="flex";
    }
    else if(btn==btn2){
        id("btn2").style.display="none";
        id("btn1").style.display="block";
        id("ul").style.display="none";
        id("ul1").style.display="none";
    }

}
var increment = 0;
function order(n) {
  show(increment += n);
}
function show(x){
       for(i=0;i<4;i++){
            document.getElementById("a"+i).style.order=String((i+x)%4);
        }
    }
    


