<!DOCTYPE html>
<html>
    <head>
        <title>student registration</title>
        <style>
           
                table{
                    border: 2px;
                }
                table td{
                    padding: 2px;
                }
                     table tr:nth-child(odd){
                     background-color: greenyellow;
                }
            
        </style>
    </head>
    <body>
        <?php
        require_once 'function1.php';
        if($_POST){
            $rollno=$_POST['rollno'];
            $name=$_POST['name'];
            $gender=$_POST['gender'];
            $address=$_POST['address'];
            $dob=$_POST['dob'];
            $sem=$_POST['sem'];
            $email=$_POST['email'];
            $dept=$_POST['dept'];
            $batch=$_POST['batch'];
            if(!empty($rollno)&&!empty($name)&&!empty($gender)&&!empty($address)&&!empty($dob)
                    &&!empty($sem)&&!empty($email)&&!empty($dept)&&!empty(batch)){
                //Inserting datat in the database
                
                 $link=mysqli_connect('localhost','root','root','AIKTC');
                 if(!link){
                     echo "Unable to connect<br>" .mysqli_connect_error();
                 }
                 $query= "Insert into new_table values ('$rollno','$name','$gender','$address','$sem','$dob','$email','$dept','$batch')";
                 $result=mysqli_query($link,$query);
                 if(!$result){
                     echo "<br>".mysqli_error($link);
                 }
                else {
                echo '<br><h4>Your data is successfully Inserted.</h4>';
                }
                 /*
               
                */
            $query="Select * from new_table";
            $result=  mysqli_query($link, $query);
            if(!$result){
                echo "<br>".mysqli_error($link);
                
            
            }
            else{
               
            
        ?>
        <table>
            <?php
            while($row=  mysqli_fetch_array($result)){
           ?>     
            <tr>
                <th>
                    Parameters
                </th>
                <th>
                    Values
                </th>
            </tr>
            <tr>
                <td>
                    Roll no
                </td>
                <td>
                    <?php echo $row[rollno];?>
                </td>
            </tr>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <?php echo $row[name];?>
                </td>
            </tr>
            <tr>
                <td>
                    Gender
                </td>
                <td>
                    <?php echo $row[gender];?>
                </td>
            </tr>
            <tr>
                <td>
                    Address
                </td>
                <td>
                    <?php echo $row[address];?>
                </td>
            </tr>
            <tr>
                <td>
                    Date of birth
                </td>
                <td>
                    <?php echo $row[dob];?>
                </td>
            </tr>
            
            <tr>
                <td>
                    Semester
                </td>
                <td>
                    <?php echo $row[sem];?>
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <?php echo $row[email];?>
                </td>
            </tr>
            <tr>
                <td>
                    Department
                </td>
                <td>
                    <?php echo $row[dept];?>
                </td>
            </tr>
            <?php } ?>
        </table>
      
    
<?php
            }   
}           
    else{
        echo "<span>Something is Missing!</span>";
        header('Refresh:2,url=exp1.html');
    }
        }
else{
    header('Refresh:0,url=exp1.html');
}
?>
    </body>
</html>