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
	}


	class Woman extends Person{
		public function smile(){
		echo $this-> name, "XDD<br>";
		}
	}

		function showsmile($persons){
		foreach ($persons as $i => $person) {
			$person -> smile();
		}

		}




	$p[0] = new Person();
	$p[0]->name = "Alice";

	$p[1] = new Man();
	$p[1]->name = "haha";

	$p[2] = new Woman();
	$p[2]->name = "yoyo";

	showsmile($p);
	 ?>
</body>
</html>