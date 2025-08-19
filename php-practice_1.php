<?php
// Q1 変数と文字列
$name = '「安藤」';
echo '私の名前は'  . $name . 'です。';

// $は変数の頭につく。//
//.変数との結合。//

// Q2 四則演算
$num = 5*4;
echo $num . "\n";
echo $num / 2;

// "\n"は改行を意味する。//
// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は、' date('Y年m月d日 H時i分s秒') 'です';

// Q4 条件分岐-1 if文
$device = 'windows';

if ($device === 'OS') {
echo '使用OSは、OSです。';
} else {
    if ($device === 'windows') {
echo '使用OSは、windowsです。';
} else {
    echo 'どちらでもありません。';
} 
}

//ifは条件を提示し、elseではfalseの時の結果を表示する。文法;の後に続く場合は{}で括る//
//elseifでは条件分岐を意味しどちらにも当てはまらない時に使える。//

// Q5 条件分岐-2 三項演算子
$age = 18;

if ($age <= 18) {
    echo '「未成年です。」';
} else {
    echo '「成人です。」';
}

// <= $変数が１８未満であることを指す//

// Q6 配列
$arr = ['東京都','千葉県','埼玉県','栃木県','千葉県','茨城県','群馬県','神奈川県'];
echo $arr[3] .'と'. $arr[4] . 'は関東地方の都道府県です';

//羅列する際には$arrを使い、頭から番号は0である。//

// Q7 連想配列-1
$kanto = [
'東京都'=>'新宿区',
'神奈川県'=>'横浜市',
'千葉県'=>'千葉市',
'埼玉県'=>'さいたま市',
'栃木県'=>'宇都宮市',
'群馬'=>'前橋市',
'茨城'=>'水戸市'
];

foreach ($kanto as $prefecture => $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2
$kanto = [
'東京都'=>'新宿区',
'神奈川県'=>'横浜市',
'千葉県'=>'千葉市',
'埼玉県'=>'さいたま市',
'栃木県'=>'宇都宮市',
'群馬'=>'前橋市',
'茨城'=>'水戸市'
];

echo '埼玉県の県庁所在地は' . $kanto['埼玉県'] . 'です。';

// Q9 連想配列-3
$prefecturs = [
'東京都'=>'新宿区',
'神奈川県'=>'横浜市',
'千葉県'=>'千葉市',
'埼玉県'=>'さいたま市',
'栃木県'=>'宇都宮市',
'群馬'=>'前橋市',
'茨城'=>'水戸市',
'愛知県'=>'名古屋市',
'大阪府'=>'大阪市'
];

$kanto = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'];

foreach ($prefectures as $pref => $capital) {
if (in_array($pref, $kanto)) {
// 関東の場合
        echo $pref . 'の県庁所在地は、' . $capital . "です。\n";
    } else {
        // 関東以外の場合
        echo $pref . 'は関東地方ではありません。' . "\n";
    }
}

// Q10 関数-1
function greet($name = "ゲスト") {
    echo "{$name} さん、こんにちわ。\n";
}

greet();        // ゲスト さん、こんにちわ。
greet("てんとう虫");  // 花子 さん、こんにちわ。

// Q11 関数-2
function calcTaxInPrice($price) {
    $taxInPrice = $price * 1.1;
    return $taxInPrice;
}

    $price = 1000;
    $taxInPrice = calctaxInPrice($price);
    echo $price . "円の商品の税込価格は" . $taxInPrice . "です。";
?>

// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 == 0) {
   return $num. "は偶数です。";
    }
    else {
   return $num. "は奇数です。";
    }
}

echo distinguishNum(13);
echo "\n";
echo distinguishNum(26);

?>

// Q13 関数とswitch文
function evaluateGrade($grade) {

switch ($grade) {
    case "A":
    case "B":
    return "合格です。";
    //break;//
    
    case "C":
    return "合格ですが追加課題があります。";
    //break;//
    
    case "D":
    return "不合格です";
    //break;//
    
    default:
    return "判定不明です。講師に問い合わせてください。";
    //break;//
}
}   
    echo evaluateGrade("A","B");
    echo "\n";
    echo evaluateGrade("G");

?>
