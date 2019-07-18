
     <!-- //------------------------- -->

<?php
   $errMsg = "";
   try {
    $dns = "mysql:host=sql.uerica.com;port=3307;dbname=uerica;charset=utf8";
    $user = "dd101g2";
    $password = "dd101g2";
    $options = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
    $pdo = new PDO($dns, $user, $password);
    $sql = "select * from svg_my_test where h_no = 1";
    $pdoStatement = $pdo->query($sql);
   	 while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){
?>
<!-- 在此結束改用html -->
<!DOCTYPE html>
</html>
<meta charset="utf-8">
<style>
    embed{
        width:50px;
    }
</style>
</body>
         <tr>
         <td><?php echo $row["h_no"];?></td>  
         </tr>
   
         <?php 
         if($row["h_no"]=="1"){ 
        ?>
        <?php echo $row["h_src"];?>
        <?php 
        }
        ?>
        <embed src="<?php echo $row["h_src"];?>" type="">
        
        
<?php
       }

       echo "</table>";
   	 
   } catch (PDOException $e) {
   	 $errMsg .=  $e->getMessage(). "<br>";	
   	 $errMsg .=  $e->getLine(). "<br>";		
   }

   if($errMsg !=""){
      echo $errMsg;
   }
?>  	
</body>
</html>