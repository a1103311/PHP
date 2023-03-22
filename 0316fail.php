<?php
session_start();
?>
<?php ob_start(); ?>
<?php
if($_SESSION["login"]=="No"){
}else{
    header("Location:0316error.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>
fail
</title>
</head>
<body>
<?php
//echo $_SESSION["login"];//由6到9行代替
//echo "<br>";
?>
login failed<br>
網頁將在三秒後跳至原登入畫面或<br>
<a href="0316index.php">點選這裡</a>
<?php
header("Refresh:3;url=0316index.php")
?>
</body>
</html>
<?php ob_flush(); ?><!-- 防止出現header already sent-->

