<!DOCTYPE html>
<html>
<head>
<title>Text Input Control</title>
</head>
<body>

<form method="POST" action="Assignment.php">
<h1>Bio Data</h1>
First name:<br> <input type="text" name="first_name" />
<br>
<br>
Last name: <br> <input type="text" name="last_name" />
<br>
<br>
Father name:<br> <input type="text" name="father_name" />
<br>
<br>
Email:   <br>   <input type="text" name="email" />
<br>
<br>
Address:  <br>  <input type="text" name="address" />
<br>
<br>
NIC:      <br>  <input type="text" name="nic_no" />
<br>
<br>
Mobile no:    <br><input type="text" name="mobile" />
<br>
<br>
<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
<br>
<br>
<input type="submit" value="Submit" name="Submit">
<h1>Submitted Data</h1>
</form>
<?php
if(isset($_POST['Submit'])){
echo $_POST['last_name']."<BR>";
echo $_POST['father_name']."<BR>";
echo $_POST['email']."<BR>";
echo $_POST['address']."<BR>";
echo $_POST['nic_no']."<BR>";
echo $_POST['mobile']."<BR>";
}

?>
</body>
</html>