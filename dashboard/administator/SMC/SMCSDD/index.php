<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		div{
			position: absolute;
  			width: 300px;
			height: 200px;
			z-index: 15;
			
			left: 40%;
			
			
			}

	</style>
	

</head>
<body bgcolor="PowderBlue">
	<center><h1> SMC GRANT ENTRY PORTAL</h1></center>
	<div>
	<?php if(isset($_REQUEST['msg'])){ ?>
		<?php if($_REQUEST['status']=="success"){?>
		<h4 style="color:green"><?php echo $_REQUEST['msg'];?></h4>
		<?php }else{ ?>
		<h4 style="color:red"><?php echo $_REQUEST['msg'];?></h4>
		<?php }?>
	<?php } ?>
		<form action="insert.php" method="post">
	<label >Choose YEAR :</label><br>
	<select name="year">
	<option value="2018-19" >2018-19</option>	
	<option value="2019-20" >2019-20</option>
	</select>	<br>
	<label >Choose Department:</label><br>
	<select name="dep1">
	<option value="SELF DEFENCE" >SELF DEFENCE</option>	
	</select>	<br>
  <label  >DEBITED DATE</label><br>
  <input type="date"   name="dd"><br>
  <label >DEBIT RUPEES</label><br>
  <input type="number"  name="der"><br>
  <label >NAME OF DEDUCTED</label><br>
  <input type="text"  name="nd" ><br>
  <label >METHOD USE PAYMENT</label><br>
  <select name="method">
	<option value="CHEQUE" >CHEQUE</option>	
	<option value="ROKDA" >ROKADA</option>	

	</select>	<br>
	<label >CHQUE NUMBER/VAUCHER NUMBER</label><br>
  <input type="text" name="cn" ><br>
  <label >DESCRIPTION</label><br>
  <textarea  rows="4" cols="50" name="des"></textarea><br>
  <input type="file"  name="filename"><br>
  <input type="submit" value="Submit"><br>
  </form>
  
		
	</div>

</body>
</html>


