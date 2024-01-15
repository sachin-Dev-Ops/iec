<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        body{
            font-family: Arial, sans-serif;
            margin: 0%;
            padding: 0%;
        }
        .main {
    
    background-color: rgb(238, 234, 230);
    width: 100%;
    height: 770px;
    display: flex;
    justify-content: flex-start;
    align-content: flex-start;
    flex-direction: column;
    align-items: center;
}
        .information{
          
            width: 60%;
            background-color: rgb(111, 196, 223);
            height: 25%;
            margin-top: 1%;
        }
        h2{
         
            color: white;
            width: 100%;
            text-align: center;
            background-color: rgb(25, 25, 133);
            margin-top: -0.1%;
        }
        #questions{
            
            margin-top: 2%;
            width: 40%;
            height: auto;
        }
        #questions1{
            display: none;
            margin-top: 2%;
            width: 40%;
            height: auto;
        }
        #questions2{
            display: none;
            margin-top: 2%;
            width: 40%;
            height: auto;   
        }
        #questions3{
            display: none;
            margin-top: 2%;
            width: 40%;
            height: auto;
        }
        #questions4{
            display: none;
            margin-top: 2%;
            width: 40%;
            height: auto;
        }
        #questions5{
            margin-top: 100px;
            display: none;
        }
        table{
         padding-left: 10px;
            
        }
        span{
            float: right;
        }
        .button{
            border: none;
        }
        #countdown{
            margin-left: 70%;
          
            width: 10%;
            margin-top: -7%;
            font-size: 2vw;
        }
        #all{
            background-color: rgb(238, 234, 230);
    width: 100%;
    height: 770px;
    display: flex;
    justify-content: flex-start;
    align-content: flex-start;
    flex-direction: column;
    align-items: center;
}  
        .btn{
            display: flex;
            flex-wrap: wrap;
            width: 10%;
            height: auto;
            margin-top: -52%;
            margin-left: 60%;
            gap: 5px;
            flex-direction: column;
        }
        #one{
            border-radius: 50px;
            width: 50px;
            height: 50px;
        }
        #two{
            border-radius: 50px;    
            width: 50px;
            height: 50px;
        } 
        
        #three{
            border-radius: 50px;
            width: 50px;
            height: 50px;
        }
        #four{
            border-radius: 50px;          
            width: 50px;
            height: 50px;
        }
        #five{
            border-radius: 50px;          
            width: 50px;
            height: 50px;
        }
        .pp{
            display: none;
        }
        .info{
            width: 60%;
        }
        button{
            border: none;
            text-decoration: underline;
            cursor: pointer;
        }
        .btn button{
            
            text-decoration: none;
            background-color: rgb(255, 255, 255);
        }
        

    </style>
</head>
<body>
    <div id="fst" class="main1">
        <div class="main">
            <div class="information">
                <h2> Online Exam Demo 2024</h2>
               <table>
              <tr><td> Student Name:</td><td>Demo student</td></tr>
              <tr><td>Registration:</td><td> 12344</td></tr>
              <tr><td> Course      :</td><td> Demo course</td></tr>
              <tr><td> Class No.   :</td><td>B12</td></tr>
            </table>
            </div>
            <div class="info">
                Please use this practice exam to become comfortable with answering exam questions with your mouse. <br> <br>

For each exam item select the answer that best answers the question. You will do this by moving your cursor to the circle by your answer choice and then left clicking to fill in the circle. Once your choice has been highlighted, click "Next" to go on to the next question. <br><br>

At the end of the exam you will be allowed to review all questions and answers before final submission. <br><br>
                    <button  onclick="start()">start</button>
            </div>
        </div>
    </div>
    <div id="sec" class="pp">
    <div class="main">
        <div class="information">
            <h2> Online Exam Demo 2024</h2>
           <table>
          <tr><td> Student Name:</td><td>Demo student</td></tr>
          <tr><td>Registration:</td><td> 12344</td></tr>
          <tr><td> Course:</td><td> Demo course</td></tr>
          <tr><td> Class No.:</td><td>B12</td></tr>
        </table>
        <div id="countdown"></div>
        <div id="open" style="display: none;">timer is over</div>
    </div>
    <div id="all">
        <div id="questions">
            Mark For Review <input type="checkbox" id="check"><span>Question 1 of 5</span>
            <?php
$A=MYSQLI_CONNECT("localhost","root","","exam") OR DIE("NOT CONNECT");
if (!$A){
    die('Not Connected :' . mysql_error());

}
$ab=MYSQLI_SELECT_DB($A,'exam') OR DIE ("NO SUCH DB");
if(!$ab) {
    die('Can\'t use exam : ' . mysql_error());

}
  
$sql=(MYSQLI_QUERY($A,"select * from questions where sno=1"));

while($row=mysqli_fetch_assoc($sql))
{
    echo "<h3>Q1 ";
    echo $row['questions']."</h3><br>";
   

    
   
    
    
echo '  <input type="radio" name="ki" value="option1" id="rad1" ><label for="rad1">'.$row['option1'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option2"><label>'.$row['option2'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option3"><label>'.$row['option3'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option4"><label>'.$row['option4'].'</label><br><br>';
}
            ?>
            <hr>
            <span><button onclick="next()">Next</button></span>
        </div>
        <div id="questions1">
            Mark For Review <input type="checkbox" id="check1"><span>Question 2 of 5</span>
            <?php
$A=MYSQLI_CONNECT("localhost","root","","exam") OR DIE("NOT CONNECT");
if (!$A){
    die('Not Connected :' . mysql_error());

}
$ab=MYSQLI_SELECT_DB($A,'exam') OR DIE ("NO SUCH DB");
if(!$ab) {
    die('Can\'t use exam : ' . mysql_error());

}
  
$sql=(MYSQLI_QUERY($A,"select * from questions where sno=2"));

while($row=mysqli_fetch_assoc($sql))
{
    echo "<h3>Q1 ";
    echo $row['questions']."</h3><br>";
   

    
   
    
    
echo '  <input type="radio" name="ki" value="option1"><label>'.$row['option1'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option2"><label>'.$row['option2'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option3"><label>'.$row['option3'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option4"><label>'.$row['option4'].'</label><br><br>';
}
            ?>
            <hr>
            <span><button onclick="next1()">Next</button></span>
        </div>
        <div id="questions2">
            Mark For Review <input type="checkbox" id="check2"><span>Question 3 of 5</span>
            <?php
$A=MYSQLI_CONNECT("localhost","root","","exam") OR DIE("NOT CONNECT");
if (!$A){
    die('Not Connected :' . mysql_error());

}
$ab=MYSQLI_SELECT_DB($A,'exam') OR DIE ("NO SUCH DB");
if(!$ab) {
    die('Can\'t use exam : ' . mysql_error());

}
  
$sql=(MYSQLI_QUERY($A,"select * from questions where sno=3"));

while($row=mysqli_fetch_assoc($sql))
{
    echo "<h3>Q1 ";
    echo $row['questions']."</h3><br>";
   

    
   
    
    
echo '  <input type="radio" name="ki" value="option1"><label>'.$row['option1'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option2"><label>'.$row['option2'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option3"><label>'.$row['option3'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option4"><label>'.$row['option4'].'</label><br><br>';
}
            ?>
            <hr>
            <span><button onclick="next2()">Next</button></span>
        </div>
        <div id="questions3">
            Mark For Review <input type="checkbox" id="check3"><span>Question 4 of 5</span>
            <?php
$A=MYSQLI_CONNECT("localhost","root","","exam") OR DIE("NOT CONNECT");
if (!$A){
    die('Not Connected :' . mysql_error());

}
$ab=MYSQLI_SELECT_DB($A,'exam') OR DIE ("NO SUCH DB");
if(!$ab) {
    die('Can\'t use exam : ' . mysql_error());

}
  
$sql=(MYSQLI_QUERY($A,"select * from questions where sno=4"));

while($row=mysqli_fetch_assoc($sql))
{
    echo "<h3>Q1 ";
    echo $row['questions']."</h3><br>";
   

    
   
    
    
echo '  <input type="radio" name="ki" value="option1"><label>'.$row['option1'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option2"><label>'.$row['option2'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option3"><label>'.$row['option3'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option4"><label>'.$row['option4'].'</label><br><br>';
}
            ?>
            <hr>
            <span><button onclick="next3()">Next</button></span>
        </div>
        <div id="questions4">
            Mark For Review <input type="checkbox" id="check4"><span>Question 5 of 5</span>
            <?php
$A=MYSQLI_CONNECT("localhost","root","","exam") OR DIE("NOT CONNECT");
if (!$A){
    die('Not Connected :' . mysql_error());

}
$ab=MYSQLI_SELECT_DB($A,'exam') OR DIE ("NO SUCH DB");
if(!$ab) {
    die('Can\'t use exam : ' . mysql_error());

}
  
$sql=(MYSQLI_QUERY($A,"select * from questions where sno=8"));

while($row=mysqli_fetch_assoc($sql))
{
    echo "<h3>Q1 ";
    echo $row['questions']."</h3><br>";
   

    
   
    
    
echo '  <input type="radio" name="ki" value="option1"><label>'.$row['option1'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option2"><label>'.$row['option2'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option3"><label>'.$row['option3'].'</label><br><br>';
echo '  <input type="radio" name="ki" value="option4"><label>'.$row['option4'].'</label><br><br>';
}
            ?>
            <hr>
            <span><button onclick="next4()">Next</button></span>
            
        </div>
    </div>
        <div id="questions5">
            thank you for submitting!

        </div>
        <div class="btn">
            <button id="one" onclick="next4()">1</button>
            <button id="two" onclick="next()">2</button>
            <button id="three" onclick="next1()">3</button>
            <button id="four" onclick="next2()">4</button>
            <button id="five" onclick="next3()">5</button>
        </div>
    </div>
</div>
    <script>
        
        function start(){
            let seconds = 30;
  const intervalId = setInterval(updateCountdown, 1000);

  function updateCountdown() {
    document.getElementById('countdown').innerText = seconds;
    seconds--;

    if (seconds < 0) {
      clearInterval(intervalId);
       document.getElementById("all").style.display="none";
       document.getElementById("questions5").style.display="block";
    }
  }
        document.getElementById("fst").style.display="none";
        document.getElementById("sec").style.display="block";

        }
function next(){
    x=document.getElementById("check");
    if(x!=null && x.checked)
    {
        document.getElementById("one").style.backgroundColor="blue";
    }
    else{
        document.getElementById("one").style.backgroundColor="white";
    }

    
document.getElementById("questions2").style.display="none";
document.getElementById("questions3").style.display="none";
document.getElementById("questions4").style.display="none";
document.getElementById("questions").style.display="none";
document.getElementById("questions1").style.display="block";
document.getElementById("two").style.backgroundColor="skyblue";

document.getElementById("three").style.backgroundColor="white";
document.getElementById("four").style.backgroundColor="white";
document.getElementById("five").style.backgroundColor="white";
}
function next1(){
    x1=document.getElementById("check1");
    if(x1!=null && x1.checked)
    {
        document.getElementById("two").style.backgroundColor="blue";
       
    }
    else{
        document.getElementById("two").style.backgroundColor="white";
    }

   
    document.getElementById("questions1").style.display="none";
document.getElementById("questions3").style.display="none";
document.getElementById("questions4").style.display="none";
document.getElementById("questions").style.display="none";
document.getElementById("questions2").style.display="block";
document.getElementById("three").style.backgroundColor="skyblue";
// document.getElementById("one").style.backgroundColor="white";
// document.getElementById("two").style.backgroundColor="white";
document.getElementById("four").style.backgroundColor="white";
document.getElementById("five").style.backgroundColor="white";
}
function next2(){
   
    document.getElementById("questions1").style.display="none";
document.getElementById("questions2").style.display="none";
document.getElementById("questions4").style.display="none";
document.getElementById("questions").style.display="none";
document.getElementById("questions3").style.display="block";
document.getElementById("four").style.backgroundColor="skyblue";
// document.getElementById("one").style.backgroundColor="white";
document.getElementById("three").style.backgroundColor="white";
// document.getElementById("two").style.backgroundColor="white";
document.getElementById("five").style.backgroundColor="white";
}

function next3(){
  
document.getElementById("questions1").style.display="none";
document.getElementById("questions2").style.display="none";
document.getElementById("questions").style.display="none";
document.getElementById("five").style.backgroundColor="skyblue";
document.getElementById("questions3").style.display="none";
document.getElementById("questions4").style.display="block";
// document.getElementById("one").style.backgroundColor="white";
document.getElementById("three").style.backgroundColor="white";
document.getElementById("four").style.backgroundColor="white";
// document.getElementById("two").style.backgroundColor="white";
}
function next4(){
   
document.getElementById("questions1").style.display="none";
document.getElementById("questions2").style.display="none";
document.getElementById("questions3").style.display="none";
document.getElementById("questions4").style.display="none";
document.getElementById("questions").style.display="block";
document.getElementById("one").style.backgroundColor="skyblue";
// document.getElementById("two").style.backgroundColor="white";
document.getElementById("three").style.backgroundColor="white";
document.getElementById("four").style.backgroundColor="white";
document.getElementById("five").style.backgroundColor="white";
}

    </script>
</body>
</html>