<!DOCTYPE html>
<html>
	<head>
		<title> STUDENT REGISTRATION </title>
               
             
	</head>
	<body> 
            <?php
            require_once 'function1.php';
            if($_POST){
                $rollno=$_POST['rollno'];
                $name=$_POST['$name'];
                $gender=$_POST['gender'];
                $address=$_POST['address'];
                $dob=$_POST['dob'];
                $sem=$_POST['sem'];
                $semail=$_POST['semail'];
                 $dept=$_POST['dept'];
                  $batch=$_POST['batch'];
                  if(!empty($rollno)&&!empty($name)&&!empty($gender)&&!empty($address)&&!empty($dob)&&!empty($sem)&&!empty($semail)
                          &&!empty(dept)&&!empty($batch)){
            
            ?>
            
            <table>
                <tr> <td>roll no</td>
                    <td><?php echo fix_rollno($rollno);?></td>
                </tr>
                <tr>
                    <td>
                        Name
                    </td>
                    <td><?php echo fix_name($name);?></td>
                </tr>
                 <tr>
                    <td>
                        Gender
                    </td>
                    <td><?php echo fix_name($gender);?></td>
                 </tr>
             <tr>
                    <td>
                        Address
                    </td>
                    <td><?php echo fix_name($address);?></td>
                </tr>
                <tr>
                    <td>
                        Date
                    </td>
                    <td><?php echo fix_name($dob);?></td>
                </tr>
                <tr>
                    <td>
                        Semester
                    </td>
                    <td><?php echo fix_name($sem);?></td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td><?php echo fix_name($semail);?></td>
                </tr>
                 <tr>
                    <td>
                       Department
                    </td>
                    <td><?php echo fix_name($dept);?></td>
                </tr>
                <tr>
                    <td>
                       Batch
                    </td>
                    <td><?php echo fix_name($batch);?></td>
                </tr>
                </table>
            <?php
            }
            else {
                echo "<span> Something is missing!</span>";
               // header('Refresh:2,url=form.html');
            }
            }
        else{
                header('Refresh:0,url=form.html');
            }
            ?>
            
		<h1>
			WELCOME TO AIKTC
		</h1>
		<form method="post" action="student_regis.html">
			
			<fieldset>
				<legend> Personal Information</legend>
				
				<label for="rollno"> Roll No. </label>
				<input type="text" name="rollno" id="rollno" class="form-input" required="required"/> <br><br>

				<label for="s_name"> Name </label>
				<input type="text" name="s_name" id="s_name" class="form-input" required="required"/> <br>

				<label for="gender"> Gender </label>
				<input type="radio" name="gender" id="male" value="Male" class="form-input" required="required"/><label>Male</label>
				<input type="radio" name="gender" id="female" value="Female"  class="form-input" required="required"/><label>Female</label><br>

				<label for="address"> Address </label>
				<textarea cols="15" rows="4"  name="address" id="address" class="form-input" required="required"/></textarea><br>
		
			</fieldset> <br>

			<fieldset>
				<legend> Academic Information</legend>

				<label for="sem"> Semester </label>
				<select name="sem" id="sem" size="1" class="form-input" required="required">
					<option value="">---</option>
					<option value="1">I </option>
					<option value="2">II </option>
					<option value="3">III </option>
					<option value="4">IV </option>
					<option value="5">V </option>
					<option value="6">VI </option>
					<option value="7">VII </option>
					<option value="8">VIII </option>
				</select><br>

				<label for="dob"> Date of Birth </label>
				<input type="date" name="dob" id="dob" class="form-input" required="required"/><br>

				<label for="email"> Email </label>
				<input type="email" name="s_email" id="s_email" class="form-input" required="required"/><br>

				<label for="dept"> Department </label>
				<select name="dept" id="dept" size="1" class="form-input" required="required">
					<option value="">---</option>
					<option value="ce">Civil </option>
					<option value="co">Computer </option>
					<option value="ex">Electrical </option>
					<option value="extc">Electronics and Telecom. </option>
					<option value="me">Mechanical </option>
				</select><br>

				<label for="batch"> Batch </label>
				<select name="batch" id="batch" size="1" class="form-input" required="required">
					<option value="">---</option>
					<option value="b1">1 </option>
					<option value="b2">2 </option>
					<option value="b3">3 </option>
					<option value="b4">4 </option>
				</select><br><br>

			</fieldset> <br>
			<input type="submit" id="submit" class="form-button" value="SUBMIT">
		</form>
	</body>
</html>

