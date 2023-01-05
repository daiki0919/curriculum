<?php
  function price( $products ) {
    foreach ( $products as $proKey => $proValue ) {
        $tax_price = $proValue * 1.1;
        echo "<br>";
        echo $proKey . "の税込み価格は" . $tax_price . "です";
        echo "<br>";
    }
}
$products = ["鉛筆" => 100,"消しゴム" => 150,"物差し" => 500];
price( $products );
?>