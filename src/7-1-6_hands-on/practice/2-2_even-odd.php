<?php
// タイトルと固定値の表示
echo "<h1>数値固定ver.</h1>";
$number = 7;
echo "<strong>数値: " . $number . "</strong><br>";

// 固定値の偶数・奇数判定と出力
if ($number % 2 == 0) {
    echo $number . "は<strong>偶数</strong>です。";
} else {
    echo $number . "は<strong>奇数</strong>です。<br><br>";
}

// タイトルの表示とランダムな数値（0〜100）の生成・表示
echo "<h1>乱数ver.</h1>";
$random_number = mt_rand(0, 100);
echo "<strong>数値: " . $random_number . "</strong><br>";

// 乱数の偶数・奇数判定と出力
if ($random_number % 2 == 0) {
    echo $random_number . "は<strong>偶数</strong>です。";
} else {
    echo $random_number . "は<strong>奇数</strong>です。";
}