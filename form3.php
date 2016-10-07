<!DOCTYPE html>
<html>
    <head>
        <title>
            My php example
        </title>
    </head>
   <body>
       <?php
       if($_POST){
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            if(!empty($num1)&&!empty($num2)){
            }
            for($i=$num1;$i<=$num2;$i++){
                $k=2;
                $FLAG=0;
                while($K<$i){
                    if($i%$k==0){
                        $FLAG=1;
                        break;
                    }
                }
            
       }
       else{}
           ?>
       
       
        
       <form method="post" action="form3.php">
            
            <input type="text" value="num1" name="num1"/>Number1<br>
             <input type="text" value="num2" name="num2"/>Number2<br>
          <input type="submit" id="submit" class="form-button" value="SUBMIT">
            
       </form>
       <?php
       
       ?>
       </body></html>



