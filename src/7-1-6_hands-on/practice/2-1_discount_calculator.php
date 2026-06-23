<?php
// 商品の元の価格と割引率の設定
$original_price = 5000;
$discount_rate = 0.20;

// 割引額と割引後価格の計算
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

// 計算結果（価格・割引情報）の出力
echo "<strong>元の価格: " . number_format($original_price) . "円</strong><br>";
echo "割引率: " . ($discount_rate * 100) . "%<br>";
echo "割引額: " . number_format($discount_amount) . "円<br>";
echo "<strong>割引後の価格: " . number_format($final_price) . "円</strong><br>";