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

		//建構子,代表類別產生後要先執行 EX.打開檔案,開始存取session..等
		public function __construct($name="Somebody", $birthday=""){
			$this->name = $name;
			$this->birthday = $birthday;
		}

		//解構子,代表類別產生完畢後要執行 EX.關閉檔案,刪除session..等
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