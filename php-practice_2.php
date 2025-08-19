<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 == 0) {
        echo "tic\n";
    } elseif ($i % 5 == 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
//１問目//
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
    echo $personalInfos [1] ['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

    //２問目//
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
    foreach ($personalInfos as $index => $personal) {
    echo ($index+1) . '番目の' . $personal['name'] . 'のメールアドレスは' . $personal['mail'] . 'で、電話番号は' . $personal['tel'] . "\n";
}

//３問目//
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
  
  $ageList = [25, 30, 18];
    foreach ($personalInfos as $index => $personal) {
        $personal['age'] = $ageList[$index];
    }
    var_dump($personalInfos);


// Q3 オブジェクト-1
<?php

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

// インスタンス作成
$student1 = new Student(120, "山田");

// 出力
echo '学籍番号' . $student1->studentId . '番の生徒は' . $student1->studentName . 'です。';



// Q4 オブジェクト-2
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    // attendメソッドだけ修正
    public function attend($subject)
    {
        echo '学籍番号' . $this->studentId . '番の' . $this->studentName . 'は' . $subject . 'の授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');



// Q5 定義済みクラス
１問目
$dt = new DateTime(); 
$dt->modify('2021-02-02');
echo $dt->format('Y-m-d');

２問目
$today = new DateTime();
$thatSDay = new DateTime('1992-04-25');
$diff = $today->diff($thatDay);
echo "あの日から" . $diff->format('%a') . "日経過しました。";
