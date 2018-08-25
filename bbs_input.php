
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<h2>掲示板</h2>
</head>
<body>
   <form action="post.php" method="post">
 <dt><label for="message">内容</label></dt>
  <dd><textarea id="message" name="memo" cols="50" rows="8">
 </textarea>
</dd>
 <button type="submit">投稿する</button>
</form>
</body>

<?php
// connecting to MySQL
try {
  $db = new PDO('mysql:dbname=my_bbs_portfolio;host=127.0.0.1;charset=utf8',
  'root','');
} catch (PDOException $e) {
  echo 'DB接続エラー: ' . $e->getMessage();
}
$memos = $db->query('SELECT * FROM memo_test ORDER BY id DESC');
?>

<article>
<?php // display memo ?>
<?php while ( $memo = $memos->fetch()): ?>
  <p><?php print($memo['memo']); ?></p>
  <time><?php print($memo['modified_time']); ?></time>
  <hr>
<?php endwhile; ?>
</article>
</html>
