<html>
    <body>
        
<?php
$A=MYSQLI_CONNECT("localhost","root","","exam") OR DIE("NOT CONNECT");
if (!$A){
    die('Not Connected :' . mysql_error());

}
else {
    // echo"CONNECTED SUCCESFULLY<BR>";

}
$ab=MYSQLI_SELECT_DB($A,'exam') OR DIE ("NO SUCH DB");
if(!$ab) {
    die('Can\'t use exam : ' . mysql_error());

}

$sql="select * from questions";
IF(MYSQLI_QUERY($A,$sql))
{
    echo "<h2> INSERT SUCSSESFULLY NEW RECORD </h2><br>";

}

$sql="INSERT INTO `questions`(`questions`, `option1`, `option2`, `option3`, `option4`, `correct_ans`) VALUES ('$_POST[questions]','$_POST[option1]','$_POST[option2]','$_POST[option3]','$_POST[option4]','$_POST[correct_ans]')";
IF(MYSQLI_QUERY($A,$sql))
{
    echo " <h2>details submited succsessfully</h2>";

}

?>
<style>
    h2{
        text-decoration: underline overline;
        width:100%;
        text-align:center;
        color:yellowgreen;
    }
</style>

</body>
</html>