<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>

<?php
$nameError = $emailError = $dobError =  $genderError = $degreeError = $bloodGrpError =  "";
$name = $email = $dob = $gender = $degree = $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Name is required";
  } else {
    $name = $_POST["name"];
    if (!preg_match("/^[a-zA-Z1-9-. ]*$/",$name)) {
      $nameError = "Atleast two letters, period , dash allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
    }
  }

  if(empty($_POST["date"])){
    $dobError = "Date of birth is required";
    } else{
      $dob=($_POST["date"]);
    }
    
 

  if (empty($_POST["gender"])) {
    $genderError = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

  if(empty($_POST["degree"])){
    $degreeError = "Degree is required and at least two";
    } else{
      $degreeError=($_POST["degree"]);
    }

  if (empty($_POST["B"])) {
    $bloodGrpError = "Bloodgroup is required";
    } else {
      $bloodgroup = $_POST["B"];
    }

}
?>






<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  Name: 
  <input type="text" name="name">
  <span class="error">* <?php echo $nameError;?></span>
  <br><br>
  Email: 
  <input type="text" name="email">
  <span class="error">* <?php echo $emailError;?></span>
  <br><br>
  Date of Birth: 
  <input type="date" name="date">
  <span class="error">*  <?php echo $dobError;?></span>
  <br><br>
  Gender: 
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderError;?></span>
  <br><br>
  Degree:
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="SSC") echo $degree;?>">SSC 
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="HSC") echo $degree;?>">HSC
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="BSc") echo $degree;?>">BSc
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="MSc") echo $degree;?>">MSc
  <span class="error">* <?php echo $degreeError;?></span>
  <br><br>
  Blood Group:
  <select name="B" id="B">
	<option value=""> Choose </option>
	<option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="A+") echo $Bloodgroup;?>" >A+</option>
	<option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="A-") echo $Bloodgroup;?>" >A-</option>
	<option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="B+") echo $Bloodgroup;?>" >B+</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="B-") echo $Bloodgroup;?>" >B-</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="O+") echo $Bloodgroup;?>" >O+</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="O-") echo $Bloodgroup;?>" >O-</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="AB+") echo $Bloodgroup;?>" >AB+</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="AB-") echo $Bloodgroup;?>" >AB-</option>
  
  </select>
  <span class="error">* <?php echo $bloodGrpError;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit" >
</form>




</body>
</html>