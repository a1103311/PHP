<meta charset="utf-8">
<?php

if(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["gender"]) && isset($_POST["join"]) && isset($_POST["eat"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $eat = $_POST["eat"];
    $join = $_POST["join"];
    $email = $_POST["email"];

    echo "你的學號是".$id."<br/>";
    echo "你的姓名是".$name."<br/>";
    //echo "你的性別是".$gender."<br/>";
    if($join == "yes"){
        echo "將會參加系烤活動<br/>";
    }
    else{
        echo "將不參加系烤活動<br/>";
    }

    if($gender == "male"){
        echo "你的性別是男性<br/>";
    }
    else{
        echo "你的性別是女性<br/>";
    }

    if($eat == "yes"){
        echo "您選擇葷食<br/>";
    }
    else{
        echo "您選擇素食<br/>";
    }
    echo "您的信箱為".$email."<br/>";
    $meat = $_POST["meat"];
    foreach ($meat as $value){
        if($value=="beef"){
            echo "牛  ";
        }
        else if ($value=="pork"){
            echo "豬  ";
        }
        else if ($value=="chicken"){
            echo "雞  ";
        }else if ($value=="seafood"){
            echo "海鮮  ";
        }else if ($value=="veg"){
            echo "素食  ";
        }
    }
    echo "<br/>謝謝您填寫此問卷";
    //echo $interest;
}
else{
    echo "資料輸入錯誤<br/>";
}
?>