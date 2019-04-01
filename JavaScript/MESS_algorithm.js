//create candidate list for an hour
function returnedCandidateList(hour,listofSAs){
    //input: one hour
    //add green candidates for the hour
    //add yellow candidates for the hour
    //return: returnedCandidateList
    var returnedCandidateList =[]
    listofSAs.forEach(function(sa){
        if (sa.green.includes(hour)){
            returnedCandidateList.push(sa);
        }
        else if (sa.yellow.includes(hour)){
            returnedCandidateList.push(sa);
        }
    })
    return returnedCandidateList;
    
}


//sort hours by most needed to take care of

function sortPriority(array){//array is array of hours
    var sorted=[];
    for(var i=0;i<array.length;i++){//for each hour
        var current=array[i].priority;//priority
        for(var j=0;j<sorted.length;j++){//searching sorted
            if (current<= sorted[j]) {
                sorted.splice(j,0,array[i]);
                break;
            }       
            if(j+1==sorted.length){
                sorted.push(array[j]);
            }
         }
    }
    return sorted;
}

//sort SAs from one candidateList for an hour
function sortSAsbyPercent(candidateList,hour){
    //input: one candidateList
    //sort SAs by %
    //sort SAs by green/yellow
    //sort SAs by availability for entire class
    //sort SAs by veteran/rookie status
    var sorted=[];
    for(var i=0;i<candidateList.length;i++){//for each sa
        var current=candidateList[i].percent;//percent
        for(var j=0;j<sorted.length;j++){//searching sorted
            if (current>sorted[j].percent-10 &&current>sorted[j].percent+10){
                if (sortbyGreen(current,sorted[j],hour)==current){
                    sorted.splice(j,0,candidateList[i]);
                }
            }
            if (current< sorted[j]) {
                sorted.splice(j,0,candidateList[i]);
                break;
            }       
            if(j+1==sorted.length){
                sorted.push(candidateList[j]);
            }
         }
    }
    return sorted;
}


function sortbyGreen(current,comparison,hour){
    var returned=null;
    if ((current.green.includes(hour) && comparison.green.includes(hour)) || (current.yellow.includes(hour) && comparison.yellow.includes(hour))){
        returned=sortbyDays(current,comparison,hour);
    }
    else if (current.green.includes(hour)&& !(comparison.green.includes(hour))){
        returned= current;
    }
    else if (!(current.green.includes(hour))&& (comparison.green.includes(hour))){
        returned= comparison;
    }
    return returned;
}
function sortbyDays(current,comparison,hour){
    var mainday=hour.charAt(0);
    var rest= hour.charAt(1)+hour.charAt(2)+hour.charAt(3)+hour.charAt(4);
    var returned =null;
    if(mainday=="M"||mainday=="W"||mainday=="F"){
        var monday = "M"+rest;
        var weds = "W"+rest;
        var fri = "F"+rest;
        if ((current.green.includes(monday)&&current.green.includes(weds)&&current.green.includes(fri))&&(comparison.green.includes(monday)&&comparison.green.includes(weds)&&comparison.green.includes(fri))){
            returned =sortbyVetstatus(current,comparison);
        }
        else if (current.green.includes(monday)&&current.green.includes(weds)&&current.green.includes(fri)){
            returned= current;
        }
        else if (comparison.green.includes(monday)&&comparison.green.includes(weds)&&comparison.green.includes(fri)){
            returned = comparison;
        }
        else if (!(current.green.includes(monday)&&current.green.includes(weds)&&current.green.includes(fri))&& !(comparison.green.includes(monday)&&comparison.green.includes(weds)&&comparison.green.includes(fri))){
            if ((current.yellow.includes(monday)&&current.yellow.includes(weds)&&current.yellow.includes(fri))&&(comparison.yellow.includes(monday)&&comparison.yellow.includes(weds)&&comparison.yellow.includes(fri))){
                returned =sortbyVetstatus(current,comparison);
            }
            else if (current.yellow.includes(monday)&&current.yellow.includes(weds)&&current.yellow.includes(fri)){
                returned= current;
            }
            else if (comparison.yellow.includes(monday)&&comparison.yellow.includes(weds)&&comparison.yellow.includes(fri)){
                returned = comparison;
            }
            else if (!(current.yellow.includes(monday)&&current.yellow.includes(weds)&&current.yellow.includes(fri))&& !(comparison.yellow.includes(monday)&&comparison.yellow.includes(weds)&&comparison.yellow.includes(fri))){
                returned = sortbyVetstatus(current,comparison);
            }
        }
         
    }//end of MWF
    if(mainday=="T"||mainday=="R"){
        var tues = "T"+rest;
        var thurs = "R"+rest;
        if ((current.green.includes(tues)&&current.green.includes(thurs))&&(comparison.green.includes(tues)&&comparison.green.includes(thurs))){
            returned =sortbyVetstatus(current,comparison);
        }
        else if (current.green.includes(tues)&&current.green.includes(thurs)){
            returned= current;
        }
        else if (comparison.green.includes(tues)&&comparison.green.includes(thurs)){
            returned = comparison;
        }
        else if (!(current.green.includes(tues)&&current.green.includes(thurs))&& !(comparison.green.includes(tues)&&comparison.green.includes(thurs))){
            if ((current.yellow.includes(tues)&&current.yellow.includes(thurs))&&(comparison.yellow.includes(tues)&&comparison.yellow.includes(thurs))){
                returned =sortbyVetstatus(current,comparison);
            }
            else if (current.yellow.includes(tues)&&current.yellow.includes(thurs)){
                returned= current;
            }
            else if (comparison.yellow.includes(tues)&&comparison.yellow.includes(thurs)){
                returned = comparison;
            }
            else if (!(current.yellow.includes(tues)&&current.yellow.includes(thurs))&& !(comparison.yellow.includes(tues)&&comparison.yellow.includes(thurs))){
                returned = sortbyVetstatus(current,comparison);
            }
        }
         
    }//end of TR
    return returned;
}
function sortbyVetstatus(current,comparison){
   var returned =null;
    if (comparison.vetStatus==true && current.vetStatus==true){
        return current;
    }
    else if (current.vetStatus==true){
        returned = current;
    }
    else if (comparison.vetStatus==true){
        returned = comparison;
    }
    else if (comparison.vetStatus==false && current.vetStatus==false){
        return comparison;
    }
    return returned;
    
}


//
function updatepercent(listofSAs){
    listofSAs.array.forEach(function(sa){
        sa.percent=workingHours.length/median(sa);       
    });
}

function median (SA){
    var bottom= Math.floor((SA.maxHr+SA.maxHr)/2);
    return bottom;
}

//main function***********************************************************************************************************
function algorithm(listofSAs, listofHours){
    var sortedhourList=sortHours(listofHours);
    //  hourlist
    //      sortPriority
    assignSAs(sortedhourList,listofSAs);
    //  sortSAsbyPercent
    //      
}

function sortHours(arrayofHours){
    //input: array of hours (class times)
    //for each hour, take cardinality of candidate list (hour)
    //for each hour, take cardinality - numrequired (hour)
    //sort (preferred sortPriority method?) most critical to least critical
    //return: sorted array of hours
    var hourList=[];
    arrayofHours.forEach(function(hour){
        var cardinality = hour.candidatelist.length;
        var priority = cardinality-hour.numRequired;
        hour.priority=priority;
        hourList.push(hour);
    })
    var sorted =sortPriority(hourList);
    return sorted;
}

function assignSAs(sortedHours,listofSAs){
    sortedHours.forEach(function(hour){
        var candidateList =returnedCandidateList(hour,listofSAs); //returns unsorted candidate list 
        var sortedhour =sortSAsbyPercent(candidateList, hour.name);//takes in unsorted, sorts it.
        for(var i=0;i<hour.numRequired;i++){
            hour.workingHours.push(sortedhour[0]); 
            sortedhour[0].workingHours.push(hour);
            sortedhour.shift();
        }
        sortedhour.forEach(function(sa){
            hour.sublist.push(sa);
        })
        updatepercent(listofSAs);
    })

}

// sort by %
//     if % is within a grace area: 
//     sort by color
//         if colors are equal
//             sort by if they can work all the sme days
//                 if both can: sort by vet/rookie
//                     if both are the same: assign first person to it