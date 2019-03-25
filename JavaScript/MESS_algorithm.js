//create candidate list for an hour
function candidateList(hour){
    //input: one hour
    //add green candidates for the hour
    //add yellow candidates for the hour
    //return: candidateList
}

//sort hours by most needed to take care of
function sortHours(){
    //input: array of hours (class times)
    //for each hour, take cardinality of candidate list (hour)
    //for each hour, take cardinality - numrequired (hour)
    //sort (preferred sorting method?) most critical to least critical
    //return: sorted array of hours
}

//sort SAs from one candidateList for an hour
function sortSAs(){
    //input: one candidateList
    //sort SAs by %
    //sort SAs by green/yellow
    //sort SAs by availability for entire class
    //sort SAs by veteran/rookie status
}

//assign for one hour from candidate list
function assignSAs(){
    //for each next hour in sortHours(), run sortSAs() given the candidateList 
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