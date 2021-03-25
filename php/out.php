<?php
    $name = $_POST['name'];
    $name2 = $_POST["name2"];
    $age = $_POST["age"];
    $birth = $_POST["birth"];
    $sex = $_POST["sex"];
    $_POST['sex'] == "男"."女" ? "checked" : "" ;
    $tel = $_POST["tel"];
    $mail = $_POST["mail"];
    $address = $_POST["address"];
    $school = $_POST["school"];
    $date = $_POST["date"];
    $place = $_POST["place"];
    $_POST['place'] == "東京支店"."神奈川支店"."埼玉支店" ? "checked" : "" ;
    $textarea = $_POST["textarea"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>データ確認画面</title>
</head>
<body>
    <h1>確認画面</h1>
    <?php echo "名前:　".$name."<p>"?>
    <?php echo "名前(カナ):　".$name2."<p>"?>
    <?php echo "年齢:　".$age."<p>"?>
    <?php echo "生年月日:　".$birth."<p>"?>
    <?php echo "性別:　".$sex."<p>"?>
    <?php echo "電話番号:　".$tel."<p>"?>
    <?php echo "メール:　".$mail."<p>"?>
    <?php echo "住所:　".$address."<p>"?>
    <?php echo "最終学歴:　".$school."<p>"?>
    <?php echo "希望入社月:　".$date."<p>"?>
    <?php echo "希望勤務地:　".$place."<p>"?>
    <?php echo "志望動機,PR:　".$textarea."<p>"?>
    <form action="insert.php" method="post">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="name2" value="<?php echo $name2; ?>">
    <input type="hidden" name="age" value="<?php echo $age; ?>">
    <input type="hidden" name="birth" value="<?php echo $birth; ?>">
    <input type="hidden" name="sex" value="<?php echo $sex; ?>">
    <input type="hidden" name="tel" value="<?php echo $tel; ?>">
    <input type="hidden" name="mail" value="<?php echo $mail; ?>">
    <input type="hidden" name="address" value="<?php echo $address; ?>">
    <input type="hidden" name="school" value="<?php echo $school; ?>">
    <input type="hidden" name="date" value="<?php echo $date; ?>">
    <input type="hidden" name="place" value="<?php echo $place; ?>">
    <input type="hidden" name="textarea" value="<?php echo $textarea; ?>">
    <h2>この内容で送信しますか?</h2>
    <input type="submit" id="submit" value="送信">
    </form>
</body>
</html>