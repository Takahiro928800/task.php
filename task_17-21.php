print("#####q17#####".PHP_EOL);
<?php
class User
{

    protected $name;  
    protected $age;
    protected $gender;

    function __construct($user_name,$user_age,$user_gender)   {
        $this->name = $user_name;
        $this->age = $user_age;
        $this->gender = $user_gender;
    }

    function info() {
        print("名前:".$this->name.PHP_EOL);
        print("年齢:".$this->age.PHP_EOL);
        print("性別:".$this->gender.PHP_EOL);
    }


}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

class Man
{
    

    protected $name;
    protected $age;

    function __construct($user_name,$user_age) {
      $this->name = $user_name;
      $this->age = $user_age;
    }

    function introduce () {
      if($this->age >= 20){
          print("こんにちは, ".$this->name."と申します。宜しくお願いいたします。".PHP_EOL);
      }else{
          print("はいさいまいど〜, ".$this->name."です!!!".PHP_EOL);
      }
    }

}

$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item
{
  public $name;
  //protected $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{

    public $name;
    public $age;

    function __construct($user_name,$user_age) {
       $this->name = $user_name;
       $this->age = $user_age;
    }
}

class Zoo
{
    
  protected $name;
  protected $entry_fee;

  function __construct($zoo_name,$zoo_entry_fee) {
     $this->name = $zoo_name;
     $this->entry_fee = $zoo_entry_fee;
  }
  function info_entry_fee(Human $human){
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

$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;


print("#####q21#####".PHP_EOL);
//Q21. FizzBuzz問題

for($i=1 ; $i <= 30 ; $i++){
    if($i % 105 == 0) {
        echo 'FizzBuzzHoge'. PHP_EOL;
    }elseif($i %35 == 0) {
        echo 'BuzzHoge'.PHP_EOL;
    }elseif($i %21 == 0) {
        echo 'FizzHoge'.PHP_EOL;
    }elseif($i %15 == 0) {
        echo 'FizzBuzz'.PHP_EOL;
    }elseif($i %7 == 0) {
        echo 'Hoge'.PHP_EOL;
    }elseif($i %5 == 0) {
        echo 'Buzz'.PHP_EOL;
    }elseif($i %3 == 0) {
        echo 'Fizz'.PHP_EOL;
    }else{
      echo $i.PHP_EOL;
    }
}


