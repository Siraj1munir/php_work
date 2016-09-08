<?php
    if (isset($_POST["encode"])) {
     	   $txt=$_POST['string'];
	   $z=base64_encode($txt);
	   
	}
	
    if (isset($_POST["decode"])) {
     	   $txt=$_POST['string'];
	   $z=base64_decode($txt);
	   
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Find character</title>
	<style>
	div {
    background-color: lightgrey;
    width: 300px;
    padding: 25px;
    border: 25px solid navy;
    margin: 25px;
}
</style>
	<meta charset="utf-8">

<div>
	<form  role="form" method="post" action="#">
   
	<label>get random pass</label>
       
	<input type="text"  name="string" value="
	<?php if(isset($_POST['encode']))  
		echo $z;
	if(isset($_POST['decode'])) 
	{
		$str = $_POST["string"];
		echo $z=base64_decode($str);
	   
		
	}
	
	?>" >
    <br />           
	      
	<input  name="encode" type="submit" value="encode" >
	
	<input  name="decode" type="submit" value="decode" >
        
</form> 
</div>

</body>
</html>
