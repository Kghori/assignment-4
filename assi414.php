<body>
		<form method="POST">
		<label>enter the array:</label>
		<input type="text" name="n1"><br>
		<input type="text" name="n2"><br>
		<input type="text" name="n3"><br>
		<input type="text" name="n4"><br>
		<input type="text" name="n5"><br>
		<input type="submit" name="s1">

		</form>
	</body>
</html>
<?php
if(isset($_POST['s1']))
{
	
			$a=$_POST['n1'];
			$b=$_POST['n2'];
			$c=$_POST['n3'];
			$d=$_POST['n4'];
			$e=$_POST['n5'];
			$arr=array($a,$b,$c,$d,$e);
			$a1=array(4);
			echo "difference 1:";
			for($i=0;$i<4;$i++)
			{
				$b=$arr[$i+1]-$arr[$i];
				echo $b." , ";
				$a1[$i]=$b;
			}
			
				$a2=array(4);
				echo "difference 2:";
			for($i=0;$i<3;$i++)
			{
				$b=$a1[$i+1]-$a1[$i];
					echo $b." , ";
				$a2[$i]=$b;
			}
			
			
			$a3=array(4);
			echo "difference 3:";
			for($i=0;$i<2;$i++)
			{
				$b=$a2[$i+1]-$a2[$i];
					echo $b." , ";
			}
}
?>
