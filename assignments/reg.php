<html>
<body bgcolor="gold">
<h1 align="center"> Welcome to validation test </h1>
</body>
</html>
<?php  
error_reporting(E_PARSE | E_ERROR);
if (!$_REQUEST['action']) {  

?>  

<form action='<?=$_SERVER['PHP_SELF']; ?>' method='POST'align="center">  


<input type='text' name='name' placeholder= "Username" size="30" required/>  

<input type='hidden' name='action' value='validate'>  <br/><br/>

<input type='password' name='password' placeholder= "password" size="30" required/>  

<input type='hidden' name='action' value='validate'>  

<br/><br/>

<input type='text' name='email' placeholder= "Email" size="30" required/>  

<input type='hidden' name='action' value='validate'>  <br/><br/>


<input type='text' name='address' placeholder= "Address" size="30" required/>  

<input type='hidden' name='action' value='validate'>  

<br/><br/>

<input type='submit' value='Submit'>  

</form>  

<?php  

}  


if ($_REQUEST['action'] == 'validate') {  

if (eregi('[A-Z a-z]$',   

        $_REQUEST['name'])) {  

echo 'Valid name<br />';  

} else {  

echo 'Invalid name';  

}  

}  


if ($_REQUEST['action'] == 'validate') {  

if (eregi('[A-Z a-z 0-9 @#!$&%]{8}$',   

        $_REQUEST['password'])) {  

echo 'Valid password <br />';  

} else {  

echo 'Invalid password <br />';  

}  

}  
  

if ($_REQUEST['action'] == 'validate') {  

if (eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})$',   

        $_REQUEST['email'])) {  

echo 'Valid Email address <br />';  

} else {  

echo 'Invalid Email address <br />';  

}  

}  

if ($_REQUEST['action'] == 'validate') {  

if (eregi('[A-Z a-z 0-9]$',   

        $_REQUEST['address'])) {  

echo 'Valid address <br />';  

} else {  

echo 'Invalid address <br />';  

}  

}  

?>