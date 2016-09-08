<?php
    if (isset($_POST["submit"])) {
     	   $string=mt_rand();
	   $str=md5($string);
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
       
	<input type="text"  name="string" >
    <br />           
	<textarea  rows="4" name="sting2">
	<?php echo $str;
	?></textarea>
          
	<input  name="submit" type="submit" value="submit" >
        
</form> 
</div>

</body>
</html>
