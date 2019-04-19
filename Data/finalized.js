function mainFinal(semester){
    var php= semester[1];
    var strings = php.split("|");
    var listOfSA= []; 
    var listofHour =[];
    strings.forEach(function(string){
        var temp = string.split(":");
        listOfSA.push(temp[0]);
        listofHour.push(temp[1]);
    })
    var course= semester[2].split(",");
    var instructor = semester[3].split(",");
    var times = semester[4].split(",");
    var classlist =[];
    var monhours=returnMonClasses(times);
    var tuehours=returnTueClasses(times);
    var monNum =monhours.length;
        monhours.forEach(function(hour){
            var clasmon= hour;
            classlist.push(clasmon);
        });
        tuehours.forEach(function(hour){
            var clastue= hour;
            classlist.push(clastue);
        });
        var div=GraphTable(listOfSA,instructor,course,monNum,classlist,listofHour);
        return div;
}
function GraphTable(listOfSA,instructor,course,monNum,classlist,listofHour){
    var div="<table><tr><th>Course info</th><th>instructor</th><th>Days</th><th>times</th>";
    
    listOfSA.forEach(function(sa){
        div+="<th>"+sa+"</th>";
    })
    div+="</tr>";
    for(i=0;i<instructor.length;i++){
       div+="<tr>";
       div+="<td>"+course[i]+"</td>";
       div+="<td>"+instructor[i]+"</td>";
        if(monNum<=0){
           div+="<td>TR</td>";
        }
        if(monNum>0){
           div+="<td>MWF</td>";
        }
        monNum--;
       div+="<td>"+classlist[i].charAt(1)+ classlist[i].charAt(2)+":"+ classlist[i].charAt(3)+ classlist[i].charAt(4)+"</td>";
        listofHour.forEach(function(sahour){
            var hour=sahour.split(",");
            if (hour.includes(classlist[i])){
                div+="<td class='green'>green</td>";
            }
            else{
                div+="<td class='red'>red</td>";
            }
        });
        div+="</tr>";  
    }//end of for
    div+="</table>"
    return div;
} 
    
function returnMonClasses(string){
    returned=[];
    string.forEach(function(hour){
        if(hour.charAt(0)=="M"){
            returned.push(hour);
        }
    });
    return returned;
}//end of mon class
function returnTueClasses(string){
    returned=[];
    string.forEach(function(hour){
        if(hour.charAt(0)=="T"){
            returned.push(hour);
        }
    });
    return returned;
}//end of tuesclass

function CreateTable(semester){
    var div = document.getElementById('tableLocation');
    div.innerHTML =mainFinal(semester);
}
