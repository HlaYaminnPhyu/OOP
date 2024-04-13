<?php

abstract class ParentClass{
	abstract function toBeAnEngineer();
}
class ChildClass extends ParentClass{
	public function toBeAnEngineer()
	{
		$first="pass with high marks";
		$second="join technological university";
		$third="get graduate Bachelor";
		$forth="I will be an engineer";
	}
}