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
}//end of changepage

function createFull(){
TestFunction();
}


function TestFunction(){
    var div = document.getElementById("tableLocation");
    div.innerHTML += "test";
    //div.innerHTML += "<table class='table'><td class='head'>Assistant Shift Schedule for MWF</td>";
}

function FullMWF(){
    var div = document.getElementById("tableLocation");
    div.innerHTML += "<table class='table'><td class='head'>Assistant Shift Schedule for MWF</td>";
        var titles =[];
        listofSa.forEach(function(sa){
            titles.push(sa.name);
        })
        
        var times=["8:00am - 8:50am","9:00am - 9:50am","10:00am - 10:50am","11:00am - 11:50am","12:00pm - 12:50pm","1:00pm - 1:50pm","2:00pm - 2:50pm","3:00pm - 3:50pm","4:00pm - 4:50pm","5:00pm - 6:15pm"]
        var daysMWF=["M","W","F",]
        div.innerHTML += "<tr>";
        div.innerHTML += "<td class='test'>Assistants</td>")
        titles.forEach(function(title){
            div.innerHTML +="<td colspan='3' class='test'>"+title+"</td>";
        })
        div.innerHTML +="<tr>";
            div.innerHTML +="<tr class='test'><td>Day of the Week</<td>";
                titles.forEach(function(title){
                    daysMWF.forEach(function(day){
                    div.innerHTML +="<td>"+day+"</td>";
                })    
            }) 
    
        div.innerHTML +="</tr>";
            var counter=0;
            var classesCounter=0;
            for(i=0;i<MWFnumber;i++){
                div.innerHTML +=("<tr>");
                div.innerHTML +="<td class='days'>"+times[counter]+"</td>";
                CreateChartMWF(counter,classesCounter);//breaks
                counter++;
                classesCounter=counter*3;
                div.innerHTML +="</tr>"; 
            }
    div.innerHTML +="</table>"
}


function CreateChartMWF(counter,classesCounter){
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



function FullTR(){
    document.write("<table class='table'> <td class='head'> Assistant Shift Schedule for TR </td>")
    var titles =[];
    listofSa.forEach(function(sa){
        titles.push(sa.name);
    })
    
    var times=["8:00am - 8:50am","9:00am - 9:50am","10:00am - 10:50am","11:00am - 11:50am","12:00pm - 12:50pm","1:00pm - 1:50pm","2:00pm - 2:50pm","3:00pm - 3:50pm","4:00pm - 4:50pm","5:00pm - 6:15pm"]
    var daysTR=["T","R"]
    document.write("<tr>");
    document.write("<td class='test'>Assistants</td>")
    titles.forEach(function(title){
        document.write("<td colspan='2' class='test'>"+title+"</td>");
    })
    document.write("<tr>");
        document.write("<tr class='test'><td>Day of the Week</<td>");
            titles.forEach(function(title){
                daysTR.forEach(function(day){
                document.write("<td>"+day+"</td>");
            })    
        }) 

    document.write("</tr>");
        var counter=0;
        var classesCounter=0;
        for(i=0;i<TRnumber;i++){
            document.write("<tr>")
            document.write("<td class='days'>"+times[counter]+"</td>");
            CreateChartTR(counter,classesCounter);
            counter++;
            classesCounter=counter*2;
            document.write("</tr>"); 
        }
        document.write("</table>")
}



function CreateChartTR(counter,classesCounter){
    listofSa.forEach(function(sa){
        x=0;
        while(x<2){//the times 2 is for TR
        var greenAV=sa.green.split(",");
        var yellowAV= sa.yellow.split(",");
        if(greenAV.includes(TRclasses[classesCounter])){
            document.write("<td class='box green'>Green</td>");
        }
        else if(yellowAV.includes(TRclasses[classesCounter])){
            document.write("<td class='box yellow'>Yellow</td>");
        }
        else {
            document.write("<td class='box red'>Red</td>");
        }
        x++;
        classesCounter++;
    }//end of while 
    classesCounter=counter*2;
})
   
}//end of CreateChartTR





