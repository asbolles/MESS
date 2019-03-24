//this is for the color changing. DO NOT MESS WITH THIS
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
}

function addClassListing(){
    
}


function CreateChartMWF(counter){
    document.write("<td class='days'>"+times[counter]+"</td>");
    listofSa.forEach(function(sa){
        x=0;
        while(x<3){//the times 3 is for MWF
        var greenAV=sa.green.split(",");
        var yellowAV= sa.yellow.split(",");
        if(greenAV.includes(MWFclasses[classesCounter])){
            document.write("<td class='box green'>Green</td>");
        }
        else if(yellowAV.includes(MWFclasses[classesCounter])){
            document.write("<td class='box yellow'>Yellow</td>");
        }
        else {
            document.write("<td class='box red'>Red</td>");
        }
        x++;
        classesCounter++;
    }//end of while 
    classesCounter=counter*3;
})
   
}//end of CreateChartMWF
    