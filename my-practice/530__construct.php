<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Class</title>
</head>
<body>

	<?php
	//class 類別

	class Person{

		public $name;
		private $birthday;

		public function __construct($name="Somebody", $birthday=""){
			$this->name = $name;
			$this->birthday = $birthday;
		}

		public function __destruct(){
			echo "bye~~<br>";
		}

		public function smile(){
			echo $this->name," smile~~<br>";
		}
	} 

	$p1 = new Person("Adam", "1980-08-08");
	$p1->smile();

	$p2 = new Person();
	$p2->smile();

	?>
	
</body>
</html>