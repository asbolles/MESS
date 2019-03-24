//MWF8, MWF 10, MWF 11, MWF 12, MWF 1, MWF 2, MWF 3, MWF 4, MWF 5
//TR 8, TR 9:30, TR 11, TR 12:30, TR 1:30, TR 3,

class SA{
    constructor(name, GreenAvail, YellowAvail){
        this.green=GreenAvail;
        this.yellow=YellowAvail;
        this.name=name;

    }
   
    

}
var MWFclasses = ["M0800","W0800","F0800","M1000","W1000","F1000","M1100","W1100","F1100","M1200","W1200","F1200","M0100","W0100","F0100", "M0200","W0200","F0200","M0300","W0300","F0300","M0400","W0400","F0400","M0500","W0500","F0500"];
var Anna = new SA("anna","M0800,F0800,M1000,W1000,F1000,M1100,W1100,F1100,M1200,W1200,F1200","M0100,W0100,F0100,M0200,W0200,F0200");
var sam = new SA("sam","M0800,F0800,M1000,W1000,F1100,M1200,W1200,F1200","M0100,W0100,F0100,M0200,W0200,F0200");
var Austin = new SA("austin","M0800,W0800,F0800,M1000,W1000,F1000,M1100,W1100,F1100","M0100,W0100,F0100,M0200,W0200,F0200");
var evan = new SA("evan","M1000,W1000,F1000,M1100,W1100,F1100,M1200,W1200,F1200","M0100,W0100,F0100,M0200,W0200,F0200");
var MWFnumber= 9;
var TRnumber = 6;
var listofSa=[Anna,sam,Austin,evan];