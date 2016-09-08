<?php
    if (isset($_POST["submit"])) {
        $char = $_POST['char'];
        
        	}
?>


<?php
echo strtoupper($char);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find character</title>
  <meta charset="utf-8">
<style>

div {
    background-color: navy;
    width: 300px;
    padding: 25px;
    border: 25px solid gold;
    margin: 25px;
}
</style>
<div>
<body>
<form  method="post" action="lab3-1.php">
   
        <label style="color:white;" >Enter Single character</label>
       
            <input type="text"  name="char" >
            
          
            <input  name="submit" type="submit" value="submit" >
        
</form> 
</div>

</body>
</html>
