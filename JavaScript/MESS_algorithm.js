//create candidate list for an hour
function CreateCandidateList(hour,listofSAs){
    //input: one hour
    //add green candidates for the hour
    //add yellow candidates for the hour
    //return: CreateCandidateList
    var CreateCandidateList =[]
    listofSAs.forEach(function(sa){
        if (sa.green.includes(hour)){
            CreateCandidateList.push(sa);
        }
        else if (sa.yellow.includes(hour)){
            CreateCandidateList.push(sa);
        }
    })
    return CreateCandidateList;
    
}

function median (SA){
    var bottom= Math.floor((SA.maxHr+SA.maxHr)/2);
    return bottom;
}

//sort hours by most needed to take care of
function sortHours(arrayofHours){
    //input: array of hours (class times)
    //for each hour, take cardinality of candidate list (hour)
    //for each hour, take cardinality - numrequired (hour)
    //sort (preferred sorting method?) most critical to least critical
    //return: sorted array of hours
    var hourList=[];
    arrayofHours.forEach(function(hour){
        var cardinality = hour.candidatelist.length;
        var priority = cardinality-hour.numRequired;
        hour.priority=priority;
        hourList.push(hour);
    })
    var sorted =sorting(hourList);
    return sorted;
}
function sorting(array){//array is array of hours
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
function sortSAs(candidateList){
    //input: one candidateList
    //sort SAs by %
    //sort SAs by green/yellow
    //sort SAs by availability for entire class
    //sort SAs by veteran/rookie status
    
}

//assign for one hour from candidate list
function assignSAs(){
    //for each next hour in sortHours(), run sortSAs() given the CreateCandidateList 
    //assign hour to SA's workingList array
    //update % for SA
}

//
function updatepercent(listofSAs){
    var percentList =[];
    listofSAs.array.forEach(function(sa){
        percentList.push(sa);        
    });

}

//main function
function algorithm(listofSAs, listofClasses){
    sortHours();
    assignSAs();
}