<!doctype html>
<html>
<head>
<title>Regular expression</title>
</head>
<body>

<form method="POST" action="regular.php">
<input type = "text" name="name" maxlenght ="30" placeholder= "Username" required/ > <br/><br/>
<input type = "text" name="email" maxlenght ="30" placeholder= "Email" required/ > <br/><br/>
<input type = "text" name="nic" maxlenght ="30" placeholder= "NIC" required/ ><br/><br/>
<input type = "text" name="address" maxlenght ="30" placeholder= "Address" required/ > <br/><br/>
<input type ="submit" name= "submit"value="submit" />
</form>
	
<?php
function valid_pass($name) {
    if (!preg_match_all('/[A-Z a-z]$/', $name))
        return FALSE;
    return TRUE;
}
$submit = "Siraj";
if(valid_pass($submit))
    echo "$submit is a valid password<br />";
else echo "$submit is NOT a valid password<br />";
?>
</body>
</html>
