<?php 
     $NameError= "";
     $NameError1="";
     $NameError2="";
     $NameError3="";

      if(isset($_POST['submit_btn'])){
      	if(empty($_POST['name'])){
      		$NameError='Name is required';
      	}else {
      		$Name = Test_User_Input($_POST['name']);
      		if(!preg_match("/^[A-Za-z.]*$/",$Name)){
      			$NameError="Only letters and white-spaces are allowed";
      		}
      	}

      	if(empty($_POST['email'])){
      		$NameError1='Email is required';
      	}else {
      		$Name = Test_User_Input($_POST['email']);
      		if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-z0-9._-]{3,}[.]{1}[a-zA-z0-9._-]{2,}/", $Name)){
      			$NameError1="Invalid Email Format";
      		}
      		
      	}


        if(empty($_POST['website'])){
      		$NameError2='website is required';
      	}else {
      		$Name = Test_User_Input($_POST['website']);
      		
      	}


        if(empty($_POST['gender'])){
      		$NameError3='* gender is required';
      	}else {
      		$Name = Test_User_Input($_POST['gender']);
      	}

 if((!empty($_POST['name']))&&(!empty($_POST['email']))&&(!empty($_POST['gender']))&&(!empty($_POST['website']))){
 	if((preg_match("/^[A-Za-z.]*$/",$Name)==true)&&(preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-z0-9._-]{3,}[.]{1}[a-zA-z0-9._-]{2,}/", $Name)==true))

  echo "<h3>Your Submit Infromation </h3> <br>";
  echo "Name:{$_POST['name']} <br>";
  echo "Email:{$_POST['email']} <br>";
  echo "Website:{$_POST['website']} <br>";
  echo "Gender:{$_POST['gender']} <br>";
 	
 	
  
    

      }
      

      }

   Function Test_User_Input($Data){
   	return $Data;
   }




?>






<!DOCTYPE html>
<html>
<head>
	<title>FormValidation</title>
	<style type="text/css">
		input[type="text"],input[type="email"],input[type="url"],textarea{
			border: 1px solid-dashed;
			background-color: rgb(221,216,212);
			width: 600px;
			padding: .5em;
			font-size: 1.0em;
		}
		.Error{
			color: red;
		}
	</style>
</head>
<body>

	<form method="post" action="">
		
		<legend>* Please Fill Out the Following Field's</legend>
		<br>
		<fieldset>
			Name: <input type="text" name="name" value="" placeholder="Please enter your name"> <span class="Error"> *<?php echo $NameError; ?><br> </span>
			<br>
			E-mail:<input type="text" name="email" value="" placeholder="Please enter  your E-mail"> <span class="Error">*<?php echo $NameError1; ?><br></span>
			<br>
			Gender:<br>
			<br>
			Male<input type="radio" name="gender" value="Male">
			Female<input type="radio" name="gender" value="Female"><span class="Error">
			<?php echo $NameError3; ?></span>
			<br>
			<br>
			Website:<input type="url" name="website" value="" pattern="https?://.+"> <span class="Error">*<?php echo $NameError2; ?><br></span>
			<br>
			Comment:<br>
			<br>
			<textarea name="Comment" cols="25" rows="5"></textarea> <br>
			<br>
			<input type="submit" name="submit_btn" value="SubmitForm">

		</fieldset>
	</form>

</body>
</html>
<!-- Akash Dixit -->