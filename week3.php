<meta charset="utf-8">
<html>

    <head>
    <meta charset="utf-8">
    <title>系烤報名表單</title>
    </head>
    <body text="black" >
        <p>
        <body text="black">
        <a name="#top"></a>
        
        <h3>111年系烤</h3>
        <ul>
            <li>時間：3/22 17:00</li>
            <li>價格：100(有繳系費) 150(沒繳系費)</li>
            <li>地點：高雄大學露營烤肉區(操場旁邊)</li>
        </ul>
        <img src="112.jpg" width="60%" >
        </p>
        <form method = "post" action = "result.php">
        <p>
        請輸入你的學號:<input type = "text" name = "id"><br/>
        請輸入你的姓名:<input type = "text" name = "name"><br/>
        請問是否參加系烤活動
        是<input type = "radio" name = "join" value = "yes">
        否<input type = "radio" name = "join" value = "no">
        <br/>
        性別
        男<input type = "radio" name = "gender" value = "male">
        女<input type = "radio" name = "gender" value = "female">
        <br/>
        飲食習慣
        葷<input type = "radio" name = "eat" value = "yes">
        素<input type = "radio" name = "eat" value = "no">
        <br/>
        信箱<input type="email" name = "email"> <br/>
        </p>        
        
        <p>
        請選擇可接受的肉類，若為素食者請點素食<br/>
        <select name = "meat[]" multiple>
        <option value = "beef">牛
        <option value = "pork">豬
        <option value = "chicken">雞
        <option value = "seafood">海鮮
        <option value = "veg">素食
        </select>
        <br/>
        </p>

        <input type = "submit"><input type = "reset">
        </form>
        <h2>有任何問題都可以私訊系學會</h2>
        <h4><a href= "https://www.facebook.com/imgroupisgood">資管系學會社團</a></h4>
        <a href="#top"> 回上面 <br/></a>
    </body>
</html>