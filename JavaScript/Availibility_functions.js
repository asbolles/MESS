function changePage(){
    var boxlist=document.getElementsByClassName("box");
    for(i=0;i<boxlist.length;i++){
        boxlist[i].onclick=function(e){
            if(e.target.classList.contains("red")){               
                e.target.classList.replace("red","green");
               e.target.style.color= "green";
               e.target.style.backgroundColor = "green";           
            }
            else if(e.target.classList.contains("yellow")){
                e.target.classList.replace("yellow","red");
                e.target.style.color= "red";
                e.target.style.backgroundColor = "red";           
            }
            else if(e.target.classList.contains("green")){
                e.target.classList.replace("green","yellow");
                e.target.style.color = "yellow";
                e.target.style.backgroundColor = "yellow";           
            }
        }
    }
    }//end of changepage
function submitAvail(min){
   min=parseInt(min,10);
    var green=[];
    var yellow=[];
    var boxlist=document.getElementsByClassName("box");
   for(var i=0; i<boxlist.length; i++){
        if(boxlist[i].classList.contains("green")){
            green.push(boxlist[i].id);
        }
        else if(boxlist[i].classList.contains("yellow")){
            yellow.push(boxlist[i].id);
        }
    }
    if (min>green.length+yellow.length){
        green.length=0;
        yellow.length=0;
        alert("You have requested more hours than are available. Please select more hours.");
    }
    else{
        var returned =[green, yellow];
        return returned;
    }
    //austin the greenAvail=green and yellowAvail=yellow;
}
function compileInfo(min){
    var availInfo= submitAvail(min);
    greenAvail="";
    yellowAvail="";
    availInfo[0].forEach(function(avail){
        greenAvail +=avail;
    });
    availInfo[1].forEach(function(avail){
        yellowAvail +=avail;
    });
    //(min, max, vet, availInfo[0],availInfo[1])
    finalCompile(greenAvail,yellowAvail);
}
function finalCompile(green, yellow){
        var varg= document.getElementById("JSgreen");
        var vary= document.getElementById("JSyellow");
        varg.value =green;
        vary.value=yellow;
}
function testing(){
    compileInfo();
}