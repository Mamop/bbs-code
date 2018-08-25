
<!doctype html>
<html lang="ja">

<meta charset="utf-8">
<h2>Practice</h2>
<main>
  <a href="input.php">戻る</a>
<?php
try {
  $db = new PDO('mysql:dbname=my_bbs_portfolio;host=127.0.0.1;charset=utf8',
  'root','');
  } catch (PDOException $e) {
  echo 'DB接続エラー: ' . $e->getMessage();
}
$statement = $db->prepare('INSERT INTO memo_test SET memo=?,
   modified_time=NOW()');
$statement->execute(array($_POST['memo']));
echo '投稿が完了しました';

?>
</main>
</html>
