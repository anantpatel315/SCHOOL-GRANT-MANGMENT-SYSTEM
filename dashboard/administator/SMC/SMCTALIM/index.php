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
	<select name="dep">
	<option value="SMC TALIM" >SMC TALIM</option>	
	</select>	<br>
  <label >DATE</label><br>
  <input type="date"  name="att"><br>
  <label >CREDIT RUPEES</label><br>
  <input type="number"   name="crup"><br>
  <label >description</label><br>
  <textarea  name="des"rows="5" cols="33">
  </textarea><br>
  <input type="submit" value="Submit"><br>
   </form>
   
	</div>

</body>
</html>