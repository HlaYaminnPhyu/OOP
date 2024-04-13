<?php

// class A{
// 	public $a="a";
// 	protected $x="x";
// 	private $y="y";
// }

// class B extends A{
// 	public function b(){
// 		return "this is b".$this->x;
// 	}
// }
// $b=new B;
// var_dump($b);
// print_r($b->a);
// print_r($b->b());


class Animals{
	public $name;
	public $gender;
	public $lifeSpan;

	function __construct($name,$gender)
	{
		$this->name=$name;
		$this->gender=$gender;
	}
	public function walk(){
		return "animals can walk with 4 legs";
	}
}

class Bird extends Animals{
	public $lifeSpan=5;
	public $canFly;

	function __construct($name,$gender,$canFly)
	{
		parent::__construct($name,$gender);
		$this->canFly=$canFly;

	}
	public function fly()  {
		return __CLASS__." can fly";
		
	}
	public function walk()
	{	
		print(parent::walk());
		return __CLASS__." can walk with 2";
	}
}

class Mammal extends Animals{
	public function feeding(){
		return __CLASS__." feed milk";
	}
}
// $m=new Mammal;
// print_r($m->feeding());
$bird=new Bird("swallow","female","true");
print_r($bird);
print_r($bird->walk());