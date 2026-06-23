<?php
// 通常ver.の属性データ（年齢、会員フラグ、学生フラグ）の設定
$age = 25;
$member = true;
$student = false;

// 通常ver.のタイトルと属性データの出力
echo "<h1>通常ver.</h1>";
echo "年齢: " . $age . "<br>";
echo "会員: " . ($member ? "はい" : "いいえ") . "<br>";
echo "学生: " . ($student ? "はい" : "いいえ") . "<br>";

// 属性データに基づいた割引条件の判定と結果の出力
if ($age >= 18 && $member) {
    echo "<strong>割引が適用されます。</strong>";
} else if ($age >= 65 || $student) {
    echo "<strong>シニア・学生割引が適用されます。</strong>";
} else {
    echo "<strong>割引は適用されません。</strong>";
}
echo "<br><br>";

// ランダムver.のタイトル出力
echo "<h1>ランダムver.</h1>";

// 乱数を用いた属性データ（年齢、会員フラグ、学生フラグ）の生成
$random_age = mt_rand(0, 100);
$random_member = (bool) mt_rand(0, 1);
$random_student = (bool) mt_rand(0, 1);

// 生成されたランダムな属性データの出力
echo "年齢: " . $random_age . "<br>";
echo "会員: " . ($random_member ? "はい" : "いいえ") . "<br>";
echo "学生: " . ($random_student ? "はい" : "いいえ") . "<br>";

// ランダムな属性データに基づいた割引条件の判定と結果の出力
if ($random_age >= 18 && $random_member) {
    echo "<strong>割引が適用されます。</strong>";
} else if ($random_age >= 65 || $random_student) {
    echo "<strong>シニア・学生割引が適用されます。</strong>";
} else {
    echo "<strong>割引は適用されません。</strong>";
}