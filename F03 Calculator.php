<?php
	
?>
<html>
<head><title>Calculator</title></head>
<body>
      <h1>Calculator</h1>
      <table>
	  <form method="post">
		<tr>
			<td>Number 1: </td>
			<td>
				<input type="number" name="num1" 
				value="<?php if (!empty($_POST['num1'])) { echo $_POST['num1']; } ?>"/>
			</td>
		</tr>
		<tr>
			<td>+ Number 2: </td>
			<td>
				<input type="number" name="num2" 
				value="<?php if (!empty($_POST['num2'])) { echo $_POST['num2']; } ?>" />
			</td>
		</tr>
		<tr>
		<td/>
		<td>______________________</td>
		<td/>			
		</tr>
		<tr>
		<td/>
        <td/>		
		<td><input type="submit" value="Calculate"/></td><tr/>
		<tr>
			<td> Total: </td>
			<td>
				<?php if (!empty($_POST['num1'])){
					if(!empty($_POST['num2']))
					{
					$number_one = $_POST['num1'];
					$number_two = $_POST['num2'];
					$total = $number_one + $number_two;
					}
					echo  $total;} 
					?> 
			</td>
		</tr>		
	  </form>
	  </table>	  
     
</body>
</html>
