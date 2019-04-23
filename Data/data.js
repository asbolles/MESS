

//MWF8, MWF 10, MWF 11, MWF 12, MWF 1, MWF 2, MWF 3, MWF 4, MWF 5
//TR 8, TR 9:30, TR 11, TR 12:30, TR 2, TR 3:30,

class SA{
    constructor(name, GreenAvail, YellowAvail,minHr,maxHr,workingHours){
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


var MWFclasses = ["M0800","W0800","F0800","M0900","W0900","F0900","M1000","W1000","F1000","M1100","W1100","F1100","M1200","W1200","F1200","M0100","W0100","F0100", "M0200","W0200","F0200","M0300","W0300","F0300","M0400","W0400","F0400","M0500","W0500","F0500"];

var TRclasses= ["T0800","R0800","T0930","R0930","T1100","R1100","T1230","R1230","T0200","R0200","T0330","R0330"]


var listofSa=[];
listofSa[0]=new SA("Anna","M0800,F0800,M1000,W1000,F1000,M1100,W1100,F1100,M1200,W1200,F1200","M0100,W0100,F0100,M0200,W0200,F0200,T0800,R0800,T0930,R0930,T1100",3,4,[]);
listofSa[1]=new SA("Sam","M0800,F0800,M1000,W1000,F1100,M1200,W1200,F1200,T0800,R0800,T0930,R0930,T1100","M0100,W0100,F0100,M0200,W0200,F0200",9,15,[]);
listofSa[2]=new SA("Austin","M0800,W0800,F0800,M1000,W1000,F1000,M1100,W1100,F1100","M0100,W0100,F0100,M0200,W0200,F0200,T0800,R0800,T0930,R0930,T1100",9,12,[]);
listofSa[3]=new SA("Evan","M1000,W1000,F1000,M1100,W1100,F1100,M1200,W1200,F1200","M0100,W0100,F0100,M0200,W0200,F0200,T0800,R0800,T0930,R0930,T1100",11,17,[]);
listofSa[4]=new SA("Anna","M0800,F0800,M1000,W1000,F1000,M1100,W1100,F1100,M1200,W1200,F1200","M0100,W0100,F0100,M0200,W0200,F0200,T0800,R0800,T0930,R0930,T1100",3,4,[]);






var times=["8:00am - 8:50am","9:00am - 9:50am","10:00am - 10:50am","11:00am - 11:50am","12:00pm - 12:50pm","1:00pm - 1:50pm","2:00pm - 2:50pm","3:00pm - 3:50pm","4:00pm - 4:50pm","5:00pm - 6:15pm"];
var timesStartMWF =["08:00","09:00","10:00","11:00","12:00","01:00","02:00","03:00","04:00","05:00"];
var timesEndMWF=["08:50","09:50","10:50","11:50","12:50","01:50","02:50","03:50","04:50","06:15"];
var timesStartTR =["08:00","09:30","11:00","12:00","02:00","03:30","05:00"];
var timesEndTR =["09:15","10:45","12:15","01:45","03:15","04:45","06:15"];
var MWFnumber= timesStartMWF.length;
var TRnumber = timesStartTR.length;
var courseTimesMWF = ["M0800","W0800","F0800","M0900","W0900","F0900","M1100","W1100","F1100","M0200","W0200","F0200","M0300","W0300","F0300"];
var courseTimesTR =["T0800","R0800","T1100","R1100","T1230","T1230"];
var M0800 = new hour("M0800",[],2,0);
var M0900 = new hour("M0900",[],1,0);
var M1000 = new hour("M1000",[],2,0);
var M1100 = new hour("M1100",[],1,0);
var M1200 = new hour("M1200",[],2,0);
var M0100 = new hour("M0100",[],2,0);
var M0200 = new hour("M0200",[],2,0);
var M0300 = new hour("M0300",[],1,0);
var M0400 = new hour("M0400",[],2,0);
var M0500 = new hour("M0500",[],2,0);
var W0800 = new hour("W0800",[],2,0);
var W0900 = new hour("W0900",[],2,0);
var W1000 = new hour("W1000",[],2,0);
var W1100 = new hour("W1100",[],2,0);
var W1200 = new hour("W1200",[],2,0);
var W0100 = new hour("W0100",[],2,0);
var W0200 = new hour("W0200",[],2,0);
var W0300 = new hour("W0300",[],2,0);
var W0400 = new hour("W0400",[],2,0);
var W0500 = new hour("W0500",[],2,0);
var F0800 = new hour("F0800",[],2,0);
var F0900 = new hour("F0900",[],2,0);
var F1000 = new hour("F1000",[],2,0);
var F1100 = new hour("F1100",[],2,0);
var F1200 = new hour("F1200",[],2,0);
var F0100 = new hour("F0100",[],2,0);
var F0200 = new hour("F0200",[],2,0);
var F0300 = new hour("F0300",[],2,0);
var F0400 = new hour("F0400",[],2,0);
var F0500 = new hour("F0500",[],2,0);
var T0800 = new hour("T0800",[],2,0);
var T0930 = new hour("T0930",[],2,0);
var T1100 = new hour("T1100",[],2,0);
var T1230 = new hour("T1230",[],2,0);
var T0200 = new hour("T0200",[],2,0);
var T0330 = new hour("T0330",[],2,0);
var R0800 = new hour("R0800",[],2,0);
var R0930 = new hour("R0930",[],2,0);
var R1100 = new hour("R1100",[],2,0);
var R1230 = new hour("R1230",[],2,0);
var R0200 = new hour("R0200",[],2,0);
var R0330 = new hour("R0330",[],2,0);

listOfHours = [M0800, M0900, M1000, M1100, M1200, M0100, M0200, M0300, M0400, M0500, W0800, W0900, W1000, W1100, W1200, W0100, W0200, W0300, W0400, W0500, F0800, F0900, F1000, F1100, F1200, F0100, F0200, F0300, F0400, F0500, T0800, T0930, T1100, T1230, T0200, T0330, R0800, R0930, R1100, R1230, R0200, R0330];