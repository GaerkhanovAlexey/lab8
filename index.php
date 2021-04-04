<?php

class A
{
}

class B extends A
{
	
	public function __construct($a, $b)
	{
		
		$this->a = $a;
		$this->b = $b;
		
	}
	
	protected $a;
	protected $b;
	
}

class C extends B
{
	
	public function __construct($a, $b, $c)
	{
		
		$this->c = $c;
		parent::__construct($a, $b);
		
	}
	
	protected $c;
	
}

$a1 = new A();
$a2 = new A();
$a3 = new A();
$b4 = new B($a2);
$c5 = new C($a1, $a3, $b4);

var_dump ($c5);
?>
