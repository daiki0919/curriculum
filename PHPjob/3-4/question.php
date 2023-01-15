<?php
  $name = $_POST["my_name"];
  
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="question.css">
</head>
<body>
  <div class="main">
    <p>お疲れ様です<?php echo $name; ?>さん</p>
    <form action="answer.php" method="post">
      <input type="hidden" name="my_name" value="<?php echo $name; ?>" />
      <h2>①ネットワークのポート番号は何番？</h2>
      <?php
      $number = [80,22,20,21];
      foreach ($number as $value) { ?>
        <input type="radio" name="port_number" value="<?php echo $value; ?>">
        <?php echo $value;
      } ?>
      <h2>②Webページを作成するための言語は？</h2>
      <?php
      $langage = [PHP,Python,JAVA,HTML];
      foreach ($langage as $value) { ?>
        <input type="radio" name="langages" value="<?php echo $value; ?>">
        <?php echo $value;
      } ?>
      <h2>③MySQLで情報を取得するためのコマンドは？</h2>
      <?php
      $comand = [join,select,insert,update];
      foreach ($comand as $value) { ?>
        <input type="radio" name="comand_type" value="<?php echo $value; ?>">
        <?php echo $value;
      } ?>
      <br>
      <input type="submit" value="回答する">
    </form>
  </div>
</body>
</html>