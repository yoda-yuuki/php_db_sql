<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>応募フォーム</title>
</head>
<body>
    
    <h1>・応募フォーム</h1>
    <p class="span"><span>*</span>は必須事項</p>
    <form action="out.php" method="post">
    <fieldset>
    <!-- <legend>応募者情報</legend> -->
    <div class="form">
    
    <label for="">名前<span>*</span>　　　　<input type="text" name="name" size="10"><br></label>
    <label for="">名前(カナ)<span>*</span>　<input type="text" name="name2" size="10"><br></label>
    <label for="">年齢<span>*</span>　　　　<input type="text" name="age" size="4"><br></label>
    <label for="">生年月日<span>*</span>　　<input type="text" name="birth"><br></label>
    <label for="">性別<span>*</span>　　　　<input type="radio" name="sex" value="男">男</label>
    <label for=""><input type="radio" name="sex" value="女">女<br></label>
    <label for="">電話番号<span>*</span>　　<input type="tel" name="tel"><br></label>
    <label for="">メール　　　　<input type="text" name="mail"><br></label>
    <label for="">住所<span>*</span>　　　　<input type="text" name="address" size="50"><br></label>
    <label for="">最終学歴<span>*</span>　　<input type="text" name="school"><br></label>
    <label for="">希望入社月　　<input type="month" name="date"><br></label>
    <label for="">希望勤務地　　<input type="checkbox" name="place" value="東京支店">東京支店</label>
    <label for=""><input type="checkbox" name="place" value="神奈川支店">神奈川支店</label>
    <label for=""><input type="checkbox" name="place" value="埼玉支店">埼玉支店<br></label>
    <label for="textarea"><p>志望動機,PR</p> <textarea name="textarea" cols="80" rows="12"></textarea><br></label>  
    <label for=""><input type="submit" name="submit" id="submit" value="送信する"><br></label>
    </div>
    
    </fieldset>
    
    </form>
</body>
</html>
