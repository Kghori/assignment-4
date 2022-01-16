<body>
		<form method="POST">
		<label>enter the array:</label>
		<input type="text" name="n1"><br>
		<input type="text" name="n2"><br>
		<input type="text" name="n3"><br>
		<input type="text" name="n4"><br>
		
		<input type="text" name="n5"><br>
		<label>1 for insert</label>
		<input type="text`" name="n6"><br>
		
		<label> 2 for update location</label>
		<input type="text" name="n7"><br>
		<label> update value</label>
		<input type="text" name="uv"><br>
		
		<label> 3 for search</label>
		
		<input type="text" name="n8"><br>
		<input type="radio" name="r" value="1">insert<br>
		<input type="radio" name="r" value="2">delete<br>
		<input type="radio" name="r" value="3">update<br>
		<input type="radio" name="r" value="4">search<br>
		<input type="submit" name="s1">

		</form>
	</body>
</html>
		
<?php
if(isset($_POST['n1']))
{
	
			$a=$_POST['n1'];
			$b=$_POST['n2'];
			$c=$_POST['n3'];
			$d=$_POST['n4'];
			$e=$_POST['n5'];
		$arr=array($a,$b,$c,$d,$e);
		print_r($arr);
		echo'<br>';
		$in=$_POST['n6'];
		$ulo=$_POST['n7'];
		$u=$_POST['uv'];
		$s1=$_POST['n8']
		$ch=$_POST['r'];
		switch($ch)
		{
				case "1":
				echo "after insert value is..";
				array_push($arr,$in);
				print_r($arr);
				break;
				
				case "2":
				echo "after delete value is..";
				array_pop($arr);
				print_r($arr);
				break;
				
				case "3":
				$ulo=$ulo-1;
				$arr[$ulo]=$u;
				echo "after update value is..";
				print_r($arr);
				break;
				
				case "4":
				echo "after serch value is..";
				$s1=$s1-1;
				echo "value :".$arr[$s1];
				break;
				
				default:
				echo "tme thoda pacha padlya    ---- tata:";
		}
}
?>
