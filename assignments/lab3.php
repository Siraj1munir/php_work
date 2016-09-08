<?php
    if (isset($_POST["submit"])) {
        $find = $_POST['find'];
        $replace = $_POST['replace'];
        $string = "zafeer siddiqui";
        
        	}
?>
<?php
echo str_replace("$find","$replace","$string");
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
   
	<label>Find</label>
       
	<input type="text"  name="find" >
    <br />        
	<label >Replace</label>
       
	<input type="text"   name="replace">    
	<textarea  rows="4" name="sting">
	<?php echo $string;
	?></textarea>
          
	<input  name="submit" type="submit" value="submit" >
        
</form> 
</div>

</body>
</html>
