<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	class Person{
	public $name;
	private $birthday;

	public function smile(){
		echo $this-> name," smile~~<br>";
		}
	}

	class Man extends Person{
		public function smile(){
		echo $this-> name, "HI!!!<br>";
		}
		public function fight(){
		echo $this-> name, "Yo!<br>";
		}
	}

	$p1 = new Person();
	$p1->name = "Alice";
	$p1->smile(); 

	$m1 = new Man();
	$m1-> name = "Didi";
	$m1->smile();
	$m1->fight();



	 ?>
	
</body>
</html>