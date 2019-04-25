

//MWF8, MWF 10, MWF 11, MWF 12, MWF 1, MWF 2, MWF 3, MWF 4, MWF 5
//TR 8, TR 9:30, TR 11, TR 12:30, TR 2, TR 3:30,

class SA{
    constructor(name, GreenAvail, YellowAvail, minHr, maxHr, workingHours){
        this.green=GreenAvail;
        this.yellow=YellowAvail;
        this.name=name;
        this.minHr=minHr;
        this.maxHr=maxHr;
        this.percent=0;
        this.workingHours=workingHours;
    }
}
class hour{
    constructor(name,candidatelist,numRequired,priority){
        this.name = name;
        this.candidatelist=candidatelist;
        this.numRequired=numRequired;
        this.priority=priority;
        this.workingHours=[];
        this.sublist=[];
    }
}


//var MWFclasses = ["M0800","W0800","F0800","M0900","W0900","F0900","M1000","W1000","F1000","M1100","W1100","F1100","M1200","W1200","F1200","M0100","W0100","F0100", "M0200","W0200","F0200","M0300","W0300","F0300","M0400","W0400","F0400","M0500","W0500","F0500"];

//var TRclasses= ["T0800","R0800","T0930","R0930","T1100","R1100","T1230","R1230","T0200","R0200","T0330","R0330"]


var listofSa=[];

var times=["8:00am - 8:50am","9:00am - 9:50am","10:00am - 10:50am","11:00am - 11:50am","12:00pm - 12:50pm","1:00pm - 1:50pm","2:00pm - 2:50pm","3:00pm - 3:50pm","4:00pm - 4:50pm","5:00pm - 6:15pm"];
var timesStartMWF =["08:00","09:00","10:00","11:00","12:00","01:00","02:00","03:00","04:00","05:00"];
var timesEndMWF=["08:50","09:50","10:50","11:50","12:50","01:50","02:50","03:50","04:50","06:15"];
var timesStartTR =["08:00","09:30","11:00","12:00","02:00","03:30","05:00"];
var timesEndTR =["09:15","10:45","12:15","01:45","03:15","04:45","06:15"];
var MWFnumber= timesStartMWF.length;
var TRnumber = timesStartTR.length;
var courseTimesMWF = ["M0800","W0800","F0800","M0900","W0900","F0900","M1100","W1100","F1100","M0200","W0200","F0200","M0300","W0300","F0300"];
var courseTimesTR =["T0800","R0800","T1100","R1100","T1230","T1230"];

listOfHours = [];
//M0800, M0900, M1000, M1100, M1200, M0100, M0200, M0300, M0400, M0500, W0800, W0900, W1000, W1100, W1200, W0100, W0200, W0300, W0400, W0500, F0800, F0900, F1000, F1100, F1200, F0100, F0200, F0300, F0400, F0500, T0800, T0930, T1100, T1230, T0200, T0330, R0800, R0930, R1100, R1230, R0200, R0330