<?php
// Q1 tic-tac問題

for ($i = 1; $i <= 100; $i++) {
  if($i%4 === 0 && $i%5 === 0){
    echo 'tic-tac'."\n";
  }else if($i%5 === 0){
    echo 'tac'."\n";
  }else if($i%4 === 0){
    echo 'tic'."\n";
  }else{
    echo $i."\n";
  }
}

// Q2 多次元連想配列

$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

var_dump($personalInfos);

//問題1
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';

//問題2
foreach ($personalInfos as $person => $profile ){
  echo $person + 1 .'番目の'.$profile['name'].'のメールアドレスは'.$profile['mail'].'で、電話番号は'.$profile['tel'].'です。'."\n";
}

//問題3
$ageList = [25, 30, 18];
foreach ($ageList as $ages => $age) {
  $personalInfos[$ages]['age'] = $age;
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}
$yamada = new Student(120,'山田');
echo '学籍番号'.$yamada->studentId.'番の生徒は'.$yamada->studentName.'です。';



// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo $this->studentName.'は'.$class.'の授業に参加しました。学籍番号:'.$this->studentId;
    }
}
$yamada = new Student(120,'山田');
$yamada->attend('PHP');

// Q5 定義済みクラス

//問題1
date_default_timezone_set('Asia/Tokyo');
$date = new DateTime('now');
$date->modify('-1 month');
echo $date->format('Y-m-d');

//問題2

$dateTime1 = '1992-04-25';
$dateTime2 = '2024-12-26';

$objDatetime1 = new DateTime($dateTime1);
$objDatetime2 = new DateTime($dateTime2);

$objInterval = $objDatetime1->diff($objDatetime2);
$DateDiff = $objInterval->format('%a 日');

echo 'あの日から'.$DateDiff.'経過しました。';

?>