<html>
<head>
<title>REGISTRATION FORM</title>
<body>

<form name="registration" method="post" action="# ">
<!-- we will create registration.php after registration.html -->
USERNAME:<input type="text" name="name" value=""></br>
EMAIL-ID:<input type="text" name="email" value=""></br>
PASSWORD:<input type="text" name="password" value=""></br>
RE-PASSWORD:<input type="text" name="repassword" value=""></br>
<input type="submit" name="submit" value="submit">
</form>

</body>
</head>
</html>
<?php     //start php tag

//if submit is not blanked i.e. it is clicked.
If(isset($_POST['submit'])!='')
{
If($_POST['name']=='' || $_POST['email']=='' || $_POST['password']==''|| $_POST['repassword']=='')
{
Echo "please fill the empty field.";
}else{
	$name=$_POST["name"];
	$email =$_POST["email"];
	
}
}
if($_POST["password"]!==$_POST["repassword"]){
	echo "password not same ";
}else{
	$password=$_POST["password"];
	echo "string";
}
?>
