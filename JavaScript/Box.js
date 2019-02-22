function Box(time){
var box ={};
box.time=time;
box.setTime= function(newTime){
    box.time=newTime;
}
return box;
}
function colorCycle(color){
if (color="red"){
    color = "green"
}
if (color="green"){
    color = "yellow"
}
if (color="yellow"){
    color = "red"
}
return color;
}

/*
we call box like this 
example wednesday at 8 am
var w0800 = Box("w0800");
Box.onclick(colorCycle)

*/