<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Class</title>
</head>
<body>
	<?php
		
		class Person{
		
		const STEP = "吃喝玩樂";//const 令常數 不可更改
		public $name;
		private $birthday; //private私人為了可驗證用

		public function smile(){
			echo $this->name," smile~~<br>";
			}

		//strpos(字串,要找的字符) 找字符在字串中第一次出現的位置
		public function setBirthday($date){  //驗證
			if(strpos($date, "-") === false){
				return false;
			}else{
				$this->birthday = $date;
				return true;
			}
		
		}

			public function getBirthday(){
				return $this->birthday;
			}
		} 

		$p1 = new Person();
		$p1->name = "Adam";  
		$p1->smile();
		//$p1->birthday = "1988-08-08"; //error
		if($p1->setBirthday("1988-08-08") === false){
			echo "生日的格式不符<br>";
		}
		echo "生日: ", $p1->getBirthday(), "<br>";

		$p2 = new Person();
		$p2->name = "Alice";
		$p2->smile();

		echo "人生必經四階段 : ", Person::STEP, "<br>"; //呼叫常數
	?>    
	
</body>
</html>