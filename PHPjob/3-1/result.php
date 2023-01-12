<?php
    $name = $_POST['my_name'];
    $number = $_POST['number'] * mt_rand(1,6);
?>
<?php echo date("Y-m-d H:i:s", time()); ?>
<p>名前は<?php echo $name; ?>です。</p>
<p>番号は<?php echo $number; ?>です。</p>
<br>
<?php 
if ($number <= 10) {
  echo "結果は凶です";
} elseif ($number <= 15) {
  echo "結果は小吉です";
} elseif ($number <= 20) {
  echo "結果は中吉です";
} elseif ($number <= 25) {
  echo "結果は吉です";
} elseif ($number <= 36) {
  echo "結果は大吉です";
} else {
  echo "結果は残念です";
}