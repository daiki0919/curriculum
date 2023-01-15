<?php
  
  $name = $_POST["my_name"];
  $number_type = $_POST["port_number"];
  $langage_type = $_POST["langages"];
  $comand_choice = $_POST["comand_type"];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="answer.css">
</head>
<body>
  <p> <?php echo $name; ?>さんの結果は・・？</p>
<?php 
  function first($number_type){
    if ($number_type == 80) { ?>
      <p>①の答え</p>
      <?php echo "正解！";
    } else { ?>
      <p>①の答え</p>
      <?php echo "残念・・・";
    }
  }
?>
<?php 
  function second($langage_type){
    if ($langage_type == "PHP") { ?>
      <p>②の答え</p>
      <?php echo "正解！";
    } else { ?>
      <p>②の答え</p>
      <?php echo "残念・・・";
    }
  }
?>

<?php 
  function third($comand_choice){
    if ($comand_choice == "select") { ?>
      <p>③の答え</p>
      <?php echo "正解！";
    } else { ?>
      <p>③の答え</p>
      <?php echo "残念・・・";
    }
  }
?>


<?php
  echo first($number_type);
  echo second($langage_type);
  echo third($comand_choice);
?>

