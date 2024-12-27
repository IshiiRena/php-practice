<?php
// Q1 変数と文字列

<?php
$name = '石井';
$newMessage = '私の名前は ' . $name . ' です。';
echo $newMessage;
?>


// Q2 四則演算

<?php
$num = 5 * 4;
echo "$num";
?>

<?php
$num = $num / 2;
echo "$num";
?>

// Q3 日付操作

<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('Y年m月d日 H時i分s秒');
$message = '現在時刻は、' . $time . 'です。';
echo $message 
?>


// Q4 条件分岐-1 if文

<?php
$device = 'windows';

if ($device === 'windows'|| $device === 'mac') {
    $message = '使用OSは、'. $device . 'です。';
} else {
    $message = 'どちらでもありません。';
}

echo $message;

?>

// Q5 条件分岐-2 三項演算子

$age = 20;
if ($age >= 18) {
    $message = '成人です。';
} else {
    $message = '未成年です。';
}
echo $message;


// Q6 配列
$prefecture = ['東京都', '神奈川県', '埼玉県','千葉県','茨城県','栃木県','群馬県'];
echo ''.$prefecture[2].'と'.$prefecture[3].'は関東地方の都道府県です。';

// Q7 連想配列-1
<?php
$kencho = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '埼玉県' => 'さいたま市',
    '千葉県' => '千葉市',
    '茨城県' => '水戸市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',];
foreach ($kencho as $key => $value){
    echo $value."\n";
}
?>


// Q8 連想配列-2
$kencho = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '埼玉県' => 'さいたま市',
    '千葉県' => '千葉市',
    '茨城県' => '水戸市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市'];
foreach ($kencho as $key => $value){
    if($key === '埼玉県'){
        echo $key.'の県庁所在地は、'.$value.'です。';
    }
}
// Q9 連想配列-3
$kencho = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '埼玉県' => 'さいたま市',
    '千葉県' => '千葉市',
    '茨城県' => '水戸市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    ];
    $kencho['福岡県']='福岡市';
    $kencho['福島県']='福島市';


    foreach ($kencho as $key => $value){
        if($key === '福岡県'|| $key ==='福島県' ){
            echo $key.'は関東地方ではありません。'."\n";
        }else{
            echo $key.'の県庁所在地は、'.$value.'です。'."\n";
        }
    }

// Q10 関数-1
<?php

function hello($name)  
{
    echo $name.'さん、こんにちは。';
}

hello('安藤');
hello('金谷'); 

// Q11 関数-2
function calcTaxInPrice($price)
{
    $tax = 1.1;
    $taxInPrice = ($price* $tax);
    return $price.'円の商品の税込み価格は'.$taxInPrice.'円です。';
}
$taxInPrice = calcTaxInPrice(1000);
echo $taxInPrice;
?>

// Q12 関数とif文
function distinguishNum($number){
if ($number % 2 == 0) {
    return $number.'は偶数です。';
} else {
    return $number.'は奇数です。';
}
}

echo distinguishNum(1);

// Q13 関数とswitch文

function evaluateGrade($grade){
switch ($grade){
    case 'A':
    case 'B':
        return '合格です。';
        break;

    case 'C':
        return '合格ですが追加課題があります。';
        break;

    case 'D':
        return '不合格です。';
        break;

    default:
        return '判定不明です。講師に問い合わせてください。';
        break;
}
}

echo evaluateGrade('A');
echo evaluateGrade('E');
?>