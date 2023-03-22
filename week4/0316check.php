<?php
session_start();
?>

<?php
$principalID="principal";
$principalPWD="123";

$teacherID="teacher";
$teacherPWD="456";

$studentID="student";
$studentPWD="789";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($principalID==$id)&&($principalPWD==$pwd)){
    $_SESSION["login"]="Yes";
    //echo "login success";
    //header("Location:0316principal.php");
    echo "<a href='0316principal.php'>前往校長網頁</a> <a href='0316teacher.php'>前往教師網頁</a>";
}
elseif(($teacherID==$id)&&($teacherPWD==$pwd)){
    $_SESSION["login"]="Yes";
    //echo "login success";
    //header("Location:0316teacher.php");
    echo "<a href='0316principal.php'>前往教師網頁</a> <a href='0316student.php'>前往學生網頁</a>";
}
elseif(($studentID==$id)&&($studentPWD==$pwd)){
    $_SESSION["login"]="Yes";
    //echo "login success";
    header("Location:0316student.php");
}
else{
    $_SESSION["login"]="No";
    //echo "login failed";
    header("Location:0316fail.php");
}
?>