# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。
<?php
print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載

  array_push($names,"斎藤");
  print_r($names);

echo PHP_EOL;

?>

<?php
print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載

  $array = array_merge($array1,$array2);

print_r($array);

echo PHP_EOL;
?>

<?php

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 1, 4, 5, 9];

  # 以下に回答を記載

$count = 0;
foreach ( $numbers as $number ){
 if ( $number === 3){
  $count++;
}
}
print_r($count . "回".PHP_EOL);

echo PHP_EOL;

?>

<?php
print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載

$sports = array_diff($sports,[null]);

print_r($sports);

echo PHP_EOL;

?>

<?php
print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載

var_export(empty($array1));
echo PHP_EOL;
var_export(empty($array2));
echo PHP_EOL;

?>

<?php
print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

  # 以下に回答を記載

$numbers2 = [];
//$numbers2を定義
//foreach作成 $numbers1の中に$numberを定義 $numbers1×10を$numberを代入していく。array_pushで$numberを$numbers2に代入していく。$numbers2をプリント。
foreach($numbers1 as $number){
      $number *= 10;
      array_push($numbers2,$number);
      }
print_r($numbers2);

echo PHP_EOL;

?>

<?php
print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

# 以下に回答を記載
//??
$array = array_map('intval',$array);
# 以下は変更しないで下さい
var_dump($array);

echo PHP_EOL;

?>

<?php
print("#####q8#####".PHP_EOL);
$programming_languages = ["php", "ruby", "python", "javascript"];

  # 以下に回答を記載
$programming_languages = array_map('ucfirst',$programming_languages );
$upper_case_programming_languages= array_map('strtoupper',$programming_languages );

  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

?>

<?php

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
//$names = ['田中', '佐藤', '佐々木', '高橋'];

//関数を定義
//function 関数名(引数) {
//return "会員No.{戻り値} {戻り値}"
//}
//どんな感じで表示させたいか定義する
//function q9($no, $names){
//return "会員No.{$no} {$names}";
//}
//$noを定義
//$no = [1, 2, 3, 4];

//$okを定義
//array_map( コールバック関数名 , $配列1 [, $配列2, $… ] )
//第一引数にはコールバック関数名を渡します。
//第二引数からはコールバック関数を適用する配列を渡し、カンマ(,)で区切ることで複数の配列を引数で渡すことが可能です。
//$ok = array_map('q9(コールバック関数名)', $no(配列1), $names(配列2));
//$ok = "会員No.{$no} {$names}"でループ
//              
//$ok = array_map('q9', $no, $names);

//print_r($ok)

$names = ["田中", "佐藤", "佐々木", "高橋"];

$names2 = [];
foreach($names as $key => $name){
    $number = $key + 1;
    $name2 = "会員No.".$number." ".$name;
    array_push($names2,$name2);
}
print_r($names2);

echo PHP_EOL;

?>

<?php
print("#####q10#####".PHP_EOL);
$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼", "高級なうに"];

  # 以下に回答を記載

foreach($foods as $food){
  if(preg_match("/うに/","$food")){
    echo "好物です",PHP_EOL;
  }else{
    echo "まぁまぁ好きです",PHP_EOL;
  }

}

echo PHP_EOL;

?>

<?php
print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載

//["サッカー"(変数), "バスケ"(変数), "野球"(変数), ["フットサル", "野球"](配列), "水泳"(変数), "ハンドボール"(変数), ["卓球", "サッカー", "ボルダリング"](配列)];
$sports2 = [];
foreach($sports as $key => $sport){
    if(is_array($sport)){
        //配列はマージされて$sports2の中に$sportが入る
        $sports2 = array_merge($sports2, $sport);
    }else{
        //配列でないものはプッシュされて$sports2の中に$sportが入る
        array_push($sports2, $sport);
    }
}
//ユニークで重複したものは取除かれる。番号は歯抜けのまま
$sports2 = array_unique($sports2);
//バリューで配列を渡す？？上で消して番号そのままだから並び直してもらう
$sports2 = array_values($sports2);
$sports3 = [];
foreach($sports2 as $key => $sport){
    $number = $key + 1;
    $sport3 = "No.".$number." ".$sport;
    array_push($sports3, $sport3);
}
echo("ユーザの趣味一覧".PHP_EOL);
foreach($sports3 as $sport){
    echo($sport.PHP_EOL);
}
echo PHP_EOL;

?>

<?php
print("#####q12#####".PHP_EOL);
$data = ["user" => ["name" => "satou", "age" => 33]];

  # 以下に回答を記載

  echo($data["user"]["name"]);

echo PHP_EOL;

?>

<?php

print("#####q13#####".PHP_EOL);
$user_data = ["name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = ["age" => 32, "address" => "沖縄"];

  # 以下に回答を記載

  $user_data = $update_data + $user_data;

print_r($user_data);

echo PHP_EOL;

?>

<?php

print("#####q14#####".PHP_EOL);
$data = ["name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com"];

  # 以下に回答を記載

//foreachで振り分けて連想配列を崩す。変数に詰め直して出力
$data1 = [];
foreach($data as $data2){
    array_push($data1, $data2);
}

print_r($data1);


echo PHP_EOL;

?>

<?php

print("#####q15#####".PHP_EOL);
$data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
$data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];

//array_key_exists   指定したキーまたは添字が配列にあるかどうかを調べる
//in_array  配列内に存在するか調べる。連想配列には効かないらしい。
  # 以下に回答を記載
if(array_key_exists("age",$data1)){
    echo"OK".PHP_EOL;
}else{
    echo"NG".PHP_EOL;
}

if(array_key_exists("age",$data2)){
    echo"OK".PHP_EOL;
}else{
    echo"NG".PHP_EOL;
}
echo PHP_EOL;

?>

<?php

print("#####q16#####".PHP_EOL);
$users = [
  ["name" => "satou", "age" => 22],
  ["name" => "yamada", "age" => 12],
  ["name" => "takahashi", "age" => 32],
  ["name" => "nakamura", "age" => 41]
];

  # 以下に回答を記載
//$変数 as $key => $値で取り出し
//Q12と同じ方法で出力
foreach($users as $key => $user)

print_r("私の名前は".$user["name"]."です。"."年齢は".$user["age"]."歳です。".PHP_EOL);

echo PHP_EOL;

?>

<?php
print("#####q17#####".PHP_EOL);
class User
{
  # コードを追加

//private	そのクラス自身からのみ可能
//protected	そのクラス自身、そのクラスの親クラス、そのクラスを継承した孫クラスから可能 継承という機能に関わりがある
//public	どのクラスからでも可能
//アクセス修飾子という
// アクセス修飾子 $プロパティ名;
    private $name;
    private $age;
    private $gender;

    //↑のクラスに定義したデータをプロパティという。メンバ変数、インスタンス変数、フィールドともいう
    //　例　UserClassはnameをプロパティに持つ

    //メソッドを定義（ほぼ関数）
    //$user_name, $user_age, $user_genderをコンストラクタに入れる。
    //仮に$name と入れても private $name;とpublic function __construct($name）は別物となるらしい。
    //function __constructを定義することでコンストラクタを定義する(中身を入れる)
    //3つを引数にとれたが、別物なので代入する
    //

    public function __construct($user_name, $user_age, $user_gender) {
        $this->name = $user_name;
        $this->age = $user_age;
        $this->gender = $user_gender;
    }

    public function info() {
        print("名前:".$this->name.PHP_EOL);
        print("年齢:".$this->age.PHP_EOL);
        print("性別:".$this->gender.PHP_EOL);
    }

}

//メソッドの中にコンストラクタというものがある
//コンストラクタの呼び出し
// 変数 = new クラス名();
//入力するとオブジェクトが返ってくる。クラスの中の材料
$user1 = new User("神里", 32, "男");
$user2 = new User("あじー", 32, "男");


//振る舞いを呼び出す
$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;
?>

<?php
print("#####q18#####".PHP_EOL);

  # コードを追加
class Man{
    private $name;
    private $age;

    public function __construct($user_name, $user_age) {
      $this->name = $user_name;
      $this->age = $user_age;
    }
//$this->name.などは""で囲わなくて良い
    public function introduce() {
      if ( $this->age > 30){
        print("こんにちは，". $this->name. "と申します。宜しくお願いいたします。".PHP_EOL);
      }else {
        print("はいさいまいど〜，". $this->name. "です！！！".PHP_EOL);
      }
    }
}

$man1 = new Man("あじー", 32);
$man2 = new Man("ゆたぼん", 10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

?>

<?php

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

  //protected $name;
  public $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい
//$book->nameだからpublicじゃないと呼び出せない❌
//$book_nameに変えたら出力するがまっさらで出力
//わからない
$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;

?>

<?php
print("#####q20#####".PHP_EOL);
class Human
{

    public $name;
    public $age;

    function __construct($human_name, $human_age) {
        $this->name = $human_name;
        $this->age = $human_age;
    }

}

class Zoo
{

    protected $name;
    protected $entry_fee;

    function __construct($zoo_name, $zoo_entry_fee) {
        $this->name = $zoo_name;
        $this->entry_fee = $zoo_entry_fee;
    }
//Zooクラスを回して代入。まだ完了しない。
//Humanクラスを回して初めて完了。出力
//
    function info_entry_fee(Human $human) {
        if($human->age <= 5){
            print($human->name."さんの入場料金は ".$this->entry_fee["infant"]." 円です。".PHP_EOL);
        }elseif($human->age <= 12){
            print($human->name."さんの入場料金は ".$this->entry_fee["children"]." 円です。".PHP_EOL);
        }elseif($human->age <= 64){
            print($human->name."さんの入場料金は ".$this->entry_fee["adult"]." 円です。".PHP_EOL);
        }elseif($human->age <= 120){
            print($human->name."さんの入場料金は ".$this->entry_fee["senior"]." 円です。".PHP_EOL);
        }
    }

}

$zoo = new Zoo("旭山動物園",["infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま", 3);
$human2 = new Human("ゆたぼん", 10);
$human3 = new Human("あじー", 32);
$human4 = new Human("ぎん", 108);

$humans = [$human1, $human2, $human3, $human4];

foreach($humans as $human){
    $zoo->info_entry_fee($human);
}

echo PHP_EOL;

?>

<?php
print("#####q21#####".PHP_EOL);

for ( $i = 1 ; $i <= 30 ;$i++){
    if ( $i % 21 ==0){
      echo "FizzHoge";
      echo PHP_EOL;
    }elseif ( $i % 15 ==0){
      echo "FizzBuzz";
      echo PHP_EOL;
    }elseif ( $i % 3 ==0){
      echo "Fizz";
      echo PHP_EOL;
    }elseif ( $i % 5 ==0){
      echo "Buzz";
      echo PHP_EOL;
    }elseif ( $i % 7 ==0){
      echo "Hoge";
      echo PHP_EOL;
    }else {
      echo $i;
      echo PHP_EOL;
    }
  }

?>