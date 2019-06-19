<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Document</title>
		</head>
		<body>
			<?php
			
			switch ($_FILES['upFile']['error']) {
				case UPLOAD_ERR_OK:
						//拷貝檔案
						if( file_exists("images") === false){
    						mkdir("images");// 建立資料夾
    					}	

  						try{
							require_once("connectBooks.php");
							$sql="insert into products(pname,price,author,pages,image)
							values (:pname,:price,:author,:pages,:image)";
							$product=$pdo->prepare($sql);
							$product->bindValue(":pname",$_REQUEST["pname"]);
							$product->bindValue(":price",$_REQUEST["price"]);
							$product->bindValue(":author",$_REQUEST["author"]);
							$product->bindValue(":pages",$_REQUEST["pages"]);
							$product->bindValue(":image",$_FILES["upFile"]["name"]);  //tainan.gif
							$product->execute();
							//===取得自動創號的號碼當做主檔名
							$psn = $pdo->lastInsertId();

							//取得該圖的副檔名
							$fileExt = pathinfo($_FILES["upFile"]["name"], PATHINFO_EXTENSION);
		  							  					//------
		  					//PATHINFO_DIRNAME：取得資料夾路徑
							//PATHINFO_BASENAME：取得整個檔名(主+副)
							//PATHINFO_EXTENSION：取得副檔名
							//PATHINFO_FILENAME ：取得主檔名
		  					//------
		  					// $fileInfoArr = pathinfo($_FILES["upFile"]["name"]);
		  					// $fileExt = $fileInfoArr["extension"];

		  					$newFileName = "{$psn}.{$fileExt}";
		  					echo "newFileName : $newFileName <br>";


		  					//將暫存區的檔案拷貝到images資料夾
		  					$from = $_FILES["upFile"]["tmp_name"];
		    				$to = "images//" . $newFileName;
		    				if( copy($from, $to) === false){
								echo "圖片上傳失敗";
							}else{
			  					//寫回資料庫
			  					$sql = "update products set image='$newFileName' where psn=$psn";
			  					$pdo->exec($sql);

								echo "新增成功","<a href='prodInsert_upload_img.html'>繼續新增</a>";								
							}


					 		
							}catch(PDOException $ex){
							echo "資料庫操作失敗,原因",$ex->getMessage(),"<br>";
							echo "行號:",$ex->getLine(),"<br>";
							}//try...catch

					break;
			  case UPLOAD_ERR_INI_SIZE:	
			  	echo "檔案太大，不可超過", ini_get("upload_max_filesize"),"<br>";
			  	break;
				case UPLOAD_ERR_FORM_SIZE:
					echo "上傳檔案太大,不可超過",$_POST["MAX_FILE_SIZE"] , "Byte(位元組)<br>";
					break;			  	
			  case UPLOAD_ERR_PARTIAL:
			  	echo "檔案上傳不完整<br>";
			  	break;			  	
			  case UPLOAD_ERR_NO_FILE:
			  	echo "檔案未選，請重新上傳<br>";
			  	break;
			  default:
			    echo "請聯絡系統維護人員.", $_FILES['upFile']['error'], "<br>";	
			}
			?>
	
			
		</body>
		</html>		