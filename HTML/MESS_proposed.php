<!DOCTYPE html>
<html lang="em">
<head>
    <meta charset="utf-8">
    <title>Proposed Schedule - MESS</title>
    <link rel="stylesheet" href="CSS/Proposed_Schedule.css"/>
    <script src="../Data/data.js"></script>
    <script src="../JavaScript/MESS_algorithm.js"></script>

    
</head>
<body>
<?php
        include "session.php";
        $sql = "SELECT * FROM sas";
        $result = $link->query($sql) or die('error connecting');
       
       
        $sql2 = "SELECT * FROM courses";
        $result2 = $link->query($sql2) or die('error connecting');
       //first sql
       $nameArray =array();
       $greenArray=array();
       $yellowArray=array();
       $minhourArray=array();
       $maxhourArray=array();
       $workingArray=array();

       //start of second sql
       $courseArray=array();
       $sectionArray=array();
       $instructorArray=array();
       $daysArray=array();
       $startArray=array();
       $endArray=array();
       $sasArray=array();
       
        
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        
        while($row = $result->fetch_assoc()){
            $nameArray[] = $row['username'];
            $greenArray[] = $row['greenAvail'];
            $yellowArray[] = $row['yellowAvail'];
            $minhourArray[] = $row['minHr'];
            $maxhourArray[] =$row['maxHr'];
            
            $workingArray[]=$row["workingHours"];
        }
    }
    else{
    echo "0 results";
    }
    if (mysqli_num_rows($result2) > 0) {
        // output data of each row
        
        while($row = $result2->fetch_assoc()){
            $courseArray[] = $row['Course'];
            $sectionArray[] = $row['Section'];
            $instructorArray[] = $row['Instructor'];
            $daysArray[] = $row['Days'];
            $startArray[] = $row['Start'];
            $endArray[] =$row['End'];
            $sasArray[]=$row["SAs"];
        }
    }
    else{
    echo "0 results";
   
}
        mysqli_close($link);
        ?>
<script>
var nameArray = <?php echo '["' . implode('", "', $nameArray) . '"]' ?>;
var greenArray = <?php echo '["' . implode('", "', $greenArray) . '"]' ?>;
var yellowArray = <?php echo '["' . implode('", "', $yellowArray) . '"]' ?>;
var minhourArray = <?php echo '["' . implode('", "', $minhourArray) . '"]' ?>;
var maxhourArray = <?php echo '["' . implode('", "', $maxhourArray) . '"]' ?>;
var workingArray = <?php echo '["' . implode('", "', $workingArray) . '"]' ?>;
var workingArrays =[];
workingArray.forEach(function(working){
    workingArrays.push(working.split(','));
});
for(i =0; i<nameArray.length;i++){
    listofSa[i]=new SA (nameArray[i],greenArray[i],yellowArray[i],minhourArray[i],maxhourArray[i],workingArrays[i]);
}

var courseArray = <?php echo '["' . implode('", "', $courseArray) . '"]' ?>;
var sectionArray = <?php echo '["' . implode('", "', $sectionArray) . '"]' ?>;
var instructorArray = <?php echo '["' . implode('", "', $instructorArray) . '"]' ?>;
var daysArray = <?php echo '["' . implode('", "', $daysArray) . '"]' ?>;
var startArray = <?php echo '["' . implode('", "', $startArray) . '"]' ?>;
var endArray = <?php echo '["' . implode('", "', $endArray) . '"]' ?>;
var sasArray = <?php echo '["' . implode('", "', $sasArray) . '"]' ?>;
var sasArrays =[];
sasArray.forEach(function(sas){
    sasArrays.push(parseInt(sas));
});

listOfHours.length=0;
for(i=0;i<courseArray.length;i++){
    if (daysArray[i]="MWF"){
        listOfHours.push(new hour('M'+startArray[i],[],sasArrays[i],0));
        listOfHours.push (new hour('W'+startArray[i],[],sasArrays[i],0));
        listOfHours.push( new hour('F'+startArray[i],[],sasArrays[i],0));
    }
    else if (daysArray[i]="TR"){
        listOfHours[i]= new hour('T'+startArray[i],[],sasArrays[i],0);
        listOfHours[i]= new hour('R'+startArray[i],[],sasArrays[i],0);
    }
}
</script>

    <script>//this is for the color changing. DO NOT MESS WITH THIS
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
   
 
    algorithm(listofSa, listOfHours);
</script>
    <div class="sidebar">
        <img class="logo" src="images/MESS Logo.jpg">
        <a href="MESS_finalized.php">Semester Schedule</a><br>
        <a href="MESS_master.php">Master Schedule</a><br>
        <a href="MESS_assistants.php">Student Assistants</a><br>
        <a href="MESS_courses.php">Start New Schedule</a><br>
        <a href="logout.php">Logout</a>
    </div><!------------------------------------------------------------------------------------------------->
    <h1>Proposed Schedule</h1>
    <h2>Term: Fall 2019</h2>
    <button onclick="changePage()" id="test">Edit</button>
    <button  id="done" onclick="collectData()">Save</button>
    
    <form id="myform" method="POST" action="finalAction.php">
        <input type="text" hidden name="year" id="yearele" value="testing">
        <input type="text" hidden name="working" id="workingele">
        <input type="text" hidden name="instruct" id="instructele">
        <input type="text" hidden name="course" id="courseele">
        <input type="text" hidden name="time" id="timesele">
        
    <caption>Year Name:</caption>
    <input type="text" id="year">
    <button onclick="finalize()">Submit</button>
    </form>
    <br>
 <table>
     <tr>
         <th>Courses</th><th>times</th><th>Days</th>
         <script>
        listofSa.forEach(function(sa) {
            document.write("<th>"+sa.name+"</th>");
        });


        function collectData(){
    listofSa.forEach(function(sa){
        var greenlist=document.getElementsByClassName(sa.name);
        sa.workingHours=[];
        for (i=0;i<greenlist.length;i++){
            greenlist[i].onclick=null;
            if (greenlist[i].classList.contains("green")){
                sa.workingHours.push(greenlist[i].id+"");
            }
            else if (greenlist[i].classList.contains("yellow")){
                //add  the addsublist function
            }
            
        }
    });

   }
   function finalize(){
      
       var year = document.getElementById("year").value;
       var working ="";
       var instruct ="";
       var course = "";
       var times="";
       instructorArray.forEach(function(instructor){
            instruct +=instructor+",";
       });
       
       courseArray.forEach(function(courses){
            course+=courses+",";
       });
       listOfHours.forEach(function(time){
           times+=time.name+",";
       });

       
       listofSa.forEach(function(sa){
        working += sa.name;
        working += ":";
        if (sa.workingHours.length==1){//idk why its 1 but it is

        }
        else{
        for(var i=0;i<sa.workingHours.length;i++){
            if (i==0){

            }
            else{
                working += sa.workingHours[i]+",";
            }
        }
        sa.workingHours.forEach(function(work){

        });//workinglist end
        working= working.substring(0, working.length - 1);
    }
        working+="|";
    });//listofSa end
   
    
    working= working.substring(0, working.length - 1);
    instruct= instruct.substring(0, instruct.length - 1);
    course= course.substring(0, course.length - 1);
    times= times.substring(0, times.length - 1);

    document.getElementById("yearele").value = year;
    document.getElementById("workingele").value = working;
    document.getElementById("instructele").value = instruct;
    document.getElementById("courseele").value = course;
    document.getElementById("timesele").value = times;




}
       
//year(fall18)
//saList("anna:W0800|sam:W0800");
//courseinfo("111-2,112-2")
//instructor("gonzoles,stark")
//times("M0800,W0800")
    
        </script></tr>
        <script>
            for(i=0;i<listOfHours.length;i=i+3){
                var day="";
                if (listOfHours[i].name.charAt(0)=="M"||listOfHours[i].name.charAt(0)=="W"||listOfHours[i].name.charAt(0)=="F"){
                    day="MWF";
                }
                else{
                    day="TR";
                }
                document.write("<tr><td></td><td>"+listOfHours[i].name.charAt(1)+listOfHours[i].name.charAt(2)+":"+listOfHours[i].name.charAt(3)+listOfHours[i].name.charAt(4)+"</td><td>"+day+"</td>");
            
            listofSa.forEach(function(sa){
                if(sa.workingHours.includes(listOfHours[i].name)){
                //make green
                    document.write("<td class='"+sa.name+" box green' id='"+listOfHours[i].name+"'>green</td>")
                }
                else if (listOfHours[i].sublist.includes(sa)){
                //make yellow
                document.write("<td class='"+sa.name+" box yellow' id='"+listOfHours[i].name+"'>yellow</td>")
                }
                else{
                //make red
                document.write("<td class='"+sa.name+" box red'>red</td>")
                }
            })
        }
  

        </script>
       

        
 </table>
      <Div id="buttons">
       <script>
        //
        </script>
        <br>
               
      </Div>
      <div>
        <image>
            <img src="Images/Copyright.jpg" alt="Copyright" class="footer" width:100%>
        </image>
    </div>
</body>

</html>
