<?php

trait Frontend{
	public $FrontendDesignSkill="Figma";
	public $frontendDevelopment=["HTML","CSS","JS","API"];
	public function prototypeOnFigma(){
		return "Frontend Designer can create design on figma";
	}
	public function frontendDevelopment(){
		return "Develop Website with".join($this->frontendDevelopment);
	}
}
trait Backend{
	public $systemDesign="Understanding the requirement of system";
	public $database="mysql";
	public $backendLanguage=["node,php"];
}
trait DeploymentField{
	public $shareHosting="cPanel";
	public $cloud="AWS";
}

class FullStackDeveloper{
	use Frontend,Backend,DeploymentField;
}
$me=new FullStackDeveloper;
print_r($me);