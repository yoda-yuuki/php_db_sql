<?php
// session_start();
// if(
//   !isset($_SESSION["chk_ssid"]) ||
//   $_SESSION["chk_ssid"] != session_id()
// ){
//   echo "LOGIN Error!";
//   exit();
// }else{
//   session_regenerate_id(true);
//   $_SESSION["chk_ssid"] = session_id();
//   echo $_SESSION["chk_ssid"];
// }
//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=y_db;charset=utf8;host=localhost','root','Yy1991514');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM y_gs_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

} else {
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    // $view .= "<p>".$result["name"]."-".$result["naiyou"]."</p>";
    $view.= '<p>';
    $view.= $result["indate"]." : ".$result["name"]." : ".$result["age"]." : ".$result["sex"]." : ".$result["place"];
    $view.= '</p>';
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>応募リスト</title>
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">応募フォーム</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
