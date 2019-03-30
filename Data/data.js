

//MWF8, MWF 10, MWF 11, MWF 12, MWF 1, MWF 2, MWF 3, MWF 4, MWF 5
//TR 8, TR 9:30, TR 11, TR 12:30, TR 2, TR 3:30,

class SA{
    constructor(name, GreenAvail, YellowAvail,minHr,maxHr,vetStatus,workingHours){
        this.green=GreenAvail;
        this.yellow=YellowAvail;
        this.name=name;
        this.minHr=minHr;
        this.maxHr=maxHr;
        this.vetStatus=vetStatus;
        this.percent=0;
        this.workingHours=workingHours;
    }
}
class hour{
    constructor(candidatelist,numRequired,priority){
        this.candidatelist=candidatelist;
        this.numRequired=numRequired;
        this.priority=priority;
    }
}
listofHours(hours);



var MWFclasses = ["M0800","W0800","F0800","M1000","W1000","F1000","M1100","W1100","F1100","M1200","W1200","F1200","M0100","W0100","F0100", "M0200","W0200","F0200","M0300","W0300","F0300","M0400","W0400","F0400","M0500","W0500","F0500"];

var TRclasses= ["T0800","R0800","T0930","R0930","T1100","R1100","T1230","R1230","T0200","R0200","T0330","R0330"]

var Anna = new SA("Anna","M0800,F0800,M1000,W1000,F1000,M1100,W1100,F1100,M1200,W1200,F1200","M0100,W0100,F0100,M0200,W0200,F0200,T0800,R0800,T0930,R0930,T1100",3,4,"V","");
var sam = new SA("Sam","M0800,F0800,M1000,W1000,F1100,M1200,W1200,F1200,T0800,R0800,T0930,R0930,T1100","M0100,W0100,F0100,M0200,W0200,F0200",9,15,"V","");
var Austin = new SA("Austin","M0800,W0800,F0800,M1000,W1000,F1000,M1100,W1100,F1100","M0100,W0100,F0100,M0200,W0200,F0200,T0800,R0800,T0930,R0930,T1100",9,12,"V","");
var evan = new SA("Evan","M1000,W1000,F1000,M1100,W1100,F1100,M1200,W1200,F1200","M0100,W0100,F0100,M0200,W0200,F0200,T0800,R0800,T0930,R0930,T1100",11,17,"N","");
var MWFnumber= MWFclasses.length;
var TRnumber = TRclasses.length;
var listofSa=[Anna,sam,Austin,evan];
"T0800,R0800,T0930,R0930,T1100"
