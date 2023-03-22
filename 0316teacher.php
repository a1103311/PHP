<?php
session_start();
?>
<?php
if($_SESSION["login"]=="Yes"){
}else{
    header("Location:0316error.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>
教師網頁
</title>
</head>
<body>
<?php
//echo $_SESSION["login"];由5到8行代替
//echo "<br>";
echo "success";
?>
<a href="0316logout.php">點選登出</a>
</body>
</html>