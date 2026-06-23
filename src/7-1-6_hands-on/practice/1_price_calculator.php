<?php
// 商品情報と税率の設定
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

// 金額、消費税、合計金額の計算
$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$total = $subtotal + $tax_amount;

// 計算結果と商品情報の出力
echo "商品名: " . $product_name . "<br>";
echo "価格: " . number_format($price) . "円<br>";
echo "数量: " . number_format($quantity) . "個<br>";
echo "小計: " . number_format($subtotal) . "円<br>";
echo "消費税(10%): " . number_format($tax_amount) . "円<br>";
echo "<strong>合計金額: " . number_format($total) . "円</strong><br>";