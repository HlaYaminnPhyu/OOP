<?php

require_once "./autoload.php";
// require_once "./classes/Student.php";
// $student1=new Student("Aung Gyi","male","1990");
// print_r($student1);
// echo $student1->showFullName();
// echo $student1->introduction();

// $my=new Db("my");
// print_r($my->index());
// print_r($my->show(33));
// $my->create(["name"=>"hla yaminn phyu","money"=>"500"]);
// $my->create(["name"=>"lin latt chit su","money"=>"500"]);
// $my->create(["name"=>"lu maw aung","money"=>"5000"]);


// $txt=new FileWriter("name.txt");
// $txt->write("a\n");
// $txt->write("b\n");
// $txt->write("c\n");
// $html=new FileWriter("home.html");
// $html->write("<h1>Min Ga Lar Par</h1>");

// print_r(Three::$a);
// print_r(Three::b());

// print_r(Three::c());

// $one=new One;
// print_r($one->a()->b());

// $users=new QueryBuilder("users");
// print_r($users->sql());
// print($users->where("age","=","23")->where("nation","=","my")->orderBy('age')->orderBy('name',"DESC")->sql());

// $my=new QueryBuilder("my");
// echo $my->where('id','=',31)->orWhere("id","=",33)->orWhere("id","=",'32')->sql();


$me=new Person;
$me->appearance="so beautiful";
echo $me->appearance;
// echo $me->dance();
echo $me->talk();
$me->skinColor="brown";
echo $me->skinColor;
$me->setFbPassword("mingalarpar");
var_dump($me->getFbPassword());