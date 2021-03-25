<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>送信完了画面</title>
</head>
<body>
</body>
</html>
<?php
//1. POSTデータ取得
$name = $_POST["name"];
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




//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=y_db;charset=utf8;host=localhost','root','Yy1991514');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$sql = "INSERT INTO y_gs_table(id, name, name2, age, birth, sex, tel, mail, address, school, date, place, textarea, indate)
VALUES(NULL,:a1, :a2, :a3, :a4, :a5, :a6, :a7, :a8, :a9, :a10, :a11, :a12, sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $name2, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $age, PDO::PARAM_STR);
$stmt->bindValue(':a4', $birth, PDO::PARAM_STR);
$stmt->bindValue(':a5', $sex, PDO::PARAM_STR);
$stmt->bindValue(':a6', $tel, PDO::PARAM_STR);
$stmt->bindValue(':a7', $mail, PDO::PARAM_STR);
$stmt->bindValue(':a8', $address, PDO::PARAM_STR); 
$stmt->bindValue(':a9', $school, PDO::PARAM_STR);
$stmt->bindValue(':a10', $date, PDO::PARAM_STR);
$stmt->bindValue(':a11', $place, PDO::PARAM_STR); 
$stmt->bindValue(':a12', $textarea, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //５．index.phpへリダイレクト
  header("Location: finish.php");
  exit;

}

?>
