<?php

class Person{
	// properties

	public $skinColor="black";
	public $appearance;

	protected $money;
	protected $bfName;

	private $fbPassword="asdffdsa";
	private $numberOfBf;
	
	// methods

	public function walk(){
		return "can walk";
	}
	public function talk(){
		return "can talk";
	}

	protected function dance(){
		return "can dance";
	}
	protected function cook(){
		return "can cook";
	}

	private function flirt(){
		return "...";
	}
	private function saving(){
		return"save money in bank";
	}

	public function getFbPassword(){
		return $this->fbPassword;

	}
	public function setFbPassword($newFbPassword){
		return $this->fbPassword=$newFbPassword;
	}


}