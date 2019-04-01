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

//begin MESS_courses buttons
function addClassListing(){
    var div = document.getElementById('courseListingTable');
    div.innerHTML = "<table><tr><td><select id = 'course'><option value = 'MATH 108'>MATH 108</option><option value = 'MATH 111'>MATH 111</option><option value = 'MATH 112'>MATH 112</option><option value = 'Other'>Other</option></select></td><td><p><input type = 'number' min='1' max='30' value='1' step='1' onkeydown='return false' id = 'section' value = 'Section' /></p></td><td><p><input type = 'text' id = 'instructor' value = 'Instructor' /></p></td><td><select id = 'days'><option value = 'MWF'>MWF</option><option value = 'TR'>TR</option><option value = 'MW'>MW</option></select></td>  <td><select id = 'start'><option value = '8'>8:00</option><option value = '9'>9:00</option><option value = '10'>10:00</option><option value = '11'>11:00</option><option value = '12'>12:00</option><option value = '13'>1:00</option><option value = '14'>2:00</option><option value = '15'>3:00</option><option value = '16'>4:00</option><option value = '17'>5:00</option></select></td><td><p><input type = 'number' min='1' max='5' value='3' step='1' onkeydown='return false' id = 'numsa' value = '#SAs' /></p></td></tr></table>";
}
function deleteClassListing(){

}
function saveClassListing(){

}
//end MESS_courses buttons

function createFull(){
    var div = document.getElementById('tableLocation');
        div.innerHTML = FullMWF()+"<p></p>"+FullTR();
}

function createMon(weekday){
    var div = document.getElementById('tableLocation');
    div.innerHTML = mon(weekday);
}
function createTues(weekday){
    var div = document.getElementById('tableLocation');
    div.innerHTML = tues(weekday);
}

function tues(weekday){
    var div = "";
    div += "<table class='table'><td class='head'>Assistant Shift Schedule for Tuesday</td>";
    var titles =[];
    listofSa.forEach(function(sa){
        titles.push(sa.name);
    })
    var times=["8:00am - 8:50am","9:00am - 9:50am","10:00am - 10:50am","11:00am - 11:50am","12:00pm - 12:50pm","1:00pm - 1:50pm","2:00pm - 2:50pm","3:00pm - 3:50pm","4:00pm - 4:50pm","5:00pm - 6:15pm"]
    div += "<tr>";
    div += "<td class='test'>Assistants</td>";
    titles.forEach(function(title){
        div +="<td class='test'>"+title+"</td>";
    })
    div +="</tr>";
    var counter=0;
    var tuesdays=[];
    TRclasses.forEach(function(day){
        if(day.charAt(0)==weekday){
            tuesdays.push(day);
        }
    })    
    for(i=0;i<tuesdays.length;i++){
        div +="<tr>";
        
        div +="<td class='days'>"+times[counter]+"</td>";
        div +=createChartTues(counter,tuesdays);
        counter++;
     
        div +="</tr>"; 
    }
div +="</table>"
return div;

}
function createChartTues(classesCounter,tuesdays){
    var div ="";
    listofSa.forEach(function(sa){
        var greenAV=sa.green.split(",");
        var yellowAV= sa.yellow.split(",");
        if(greenAV.includes(tuesdays[classesCounter])){
            div +="<td class='box green'>Green</td>";
        }
        else if(yellowAV.includes(tuesdays[classesCounter])){
            div +="<td class='box yellow'>Yellow</td>";
        }
        else {
            div +="<td class='box red'>Red</td>";
        }
        classesCounter++;
    })
    return div;
}
function mon(weekday){
    var div = "";
    div += "<table class='table'><td class='head'>Assistant Shift Schedule for MWF</td>";
    var titles =[];
    listofSa.forEach(function(sa){
        titles.push(sa.name);
    })
    var times=["8:00am - 8:50am","9:00am - 9:50am","10:00am - 10:50am","11:00am - 11:50am","12:00pm - 12:50pm","1:00pm - 1:50pm","2:00pm - 2:50pm","3:00pm - 3:50pm","4:00pm - 4:50pm","5:00pm - 6:15pm"]
    div += "<tr>";
    div += "<td class='test'>Assistants</td>";
    titles.forEach(function(title){
        div +="<td class='test'>"+title+"</td>";
    })
    div +="</tr>";
    var counter=0;
    var mondays=[];
    MWFclasses.forEach(function(day){
        if(day.charAt(0)==weekday){
            mondays.push(day);
        }
    })    
    for(i=0;i<mondays.length;i++){
        div +="<tr>";
        div +="<td class='days'>"+times[counter]+"</td>";
        div +=createChartMon(counter,mondays);
        counter++;
     
        div +="</tr>"; 
    }
div +="</table>"
return div;

}//end of mon

function createChartMon(classesCounter, mondays){
    var div ="";
    listofSa.forEach(function(sa){
        var greenAV=sa.green.split(",");
        var yellowAV= sa.yellow.split(",");
        if(greenAV.includes(mondays[classesCounter])){
            div +="<td class='box green'>Green</td>";
        }
        else if(yellowAV.includes(mondays[classesCounter])){
            div +="<td class='box yellow'>Yellow</td>";
        }
        else {
            div +="<td class='box red'>Red</td>";
        }
        classesCounter++;
    })
    return div;
}

function FullMWF(){
    var div = "";
    div += "<table class='table'><td class='head'>Assistant Shift Schedule for MWF</td>";
        var titles =[];
        listofSa.forEach(function(sa){
            titles.push(sa.name);
        })
        
        var times=["8:00am - 8:50am","9:00am - 9:50am","10:00am - 10:50am","11:00am - 11:50am","12:00pm - 12:50pm","1:00pm - 1:50pm","2:00pm - 2:50pm","3:00pm - 3:50pm","4:00pm - 4:50pm","5:00pm - 6:15pm"]
        var daysMWF=["M","W","F",];
        div += "<tr>";
        div += "<td class='test'>Assistants</td>";
        titles.forEach(function(title){
            div +="<td colspan='3' class='test'>"+title+"</td>";
        })
        div +="<tr>";
            div +="<tr class='test'><td>Day of the Week</<td>";
                titles.forEach(function(title){
                    daysMWF.forEach(function(day){
                    div +="<td>"+day+"</td>";
                })    
            }) 
    
        div +="</tr>";
            var counter=0;
            var classesCounter=0;
            for(i=0;i<MWFnumber;i++){
                div +="<tr>";
                div +="<td class='days'>"+times[counter]+"</td>";
                div +=CreateChartMWF(counter,classesCounter);
                counter++;
                classesCounter=counter*3;
                div +="</tr>"; 
            }
    div +="</table>"
    return div;
}



function CreateChartMWF(counter,classesCounter){
    var div ="";
    listofSa.forEach(function(sa){
    x=0;
    while(x<3){//the times 3 is for MWF
        var greenAV=sa.green.split(",");
        var yellowAV= sa.yellow.split(",");
        if(greenAV.includes(MWFclasses[classesCounter])){
            div +="<td class='box green'>Green</td>";
        }
        else if(yellowAV.includes(MWFclasses[classesCounter])){
            div +="<td class='box yellow'>Yellow</td>";
        }
        else {
            div +="<td class='box red'>Red</td>";
        }
        x++;
        classesCounter++;
    }//end of while 
    classesCounter=counter*3;
    })
    return div;
}//end of CreateChartMWF



function FullTR(){
    var div = "";
    div +="<table class='table'> <td class='head'> Assistant Shift Schedule for TR </td>"
    var titles =[];
    listofSa.forEach(function(sa){
        titles.push(sa.name);
    })
    
    var times=["8:00am - 8:50am","9:00am - 9:50am","10:00am - 10:50am","11:00am - 11:50am","12:00pm - 12:50pm","1:00pm - 1:50pm","2:00pm - 2:50pm","3:00pm - 3:50pm","4:00pm - 4:50pm","5:00pm - 6:15pm"]
    var daysTR=["T","R"]
    div +="<tr><td class='test'>Assistants</td>";
    titles.forEach(function(title){
        div +="<td colspan='2' class='test'>"+title+"</td>";
    })
    div +="<tr>";
        div +="<tr class='test'><td>Day of the Week</<td>";
            titles.forEach(function(title){
                daysTR.forEach(function(day){
                div +="<td>"+day+"</td>";
            })    
        }) 

    div +="</tr>";
        var counter=0;
        var classesCounter=0;
        for(i=0;i<TRnumber;i++){
            div +="<tr>";
            div +="<td class='days'>"+times[counter]+"</td>";
            div += CreateChartTR(counter,classesCounter);
            counter++;
            classesCounter=counter*2;
            div +="</tr>"; 
        }
        div +="</table>";
        return div;
}//end of FullTR



function CreateChartTR(counter,classesCounter){
    div ="";
    listofSa.forEach(function(sa){
        x=0;
        while(x<2){//the times 2 is for TR
        var greenAV=sa.green.split(",");
        var yellowAV= sa.yellow.split(",");
        if(greenAV.includes(TRclasses[classesCounter])){
            div +="<td class='box green'>Green</td>";
        }
        else if(yellowAV.includes(TRclasses[classesCounter])){
            div +="<td class='box yellow'>Yellow</td>";
        }
        else {
            div +="<td class='box red'>Red</td>";
        }
        x++;
        classesCounter++;
    }//end of while 
    classesCounter=counter*2;
})
   return div;
}//end of CreateChartTR





