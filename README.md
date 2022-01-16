# assignment-4
Regards
<?php
$a = $_POST['s1'];

$b = $_POST['s2'];
$c = $_POST['s3'];
$d = $_POST['s4'];
$e = $_POST['s5'];
$f = $_POST['s6'];

$arr = array(23,56,25,93,72);

switch($a)
{
    case 0:
        echo "Array Is.........";
        echo "<br><br>"; 
        print_r($arr);
        break;
    case 1:
        array_push($arr,$b);
        echo "<b><center>After Insert The Data....</b></center>";
        echo "<br><br>";
        print_r($arr);
        break;
    case 2:
        unset ($arr[$c]);
        echo "<b><center>After Delete The Data........</b></center>";
        echo "<br><br>";
        print_r($arr);
        break;
    case 3:
        array_replace($d,$e);    
        echo "<b><center>After Update The Data........</b></center>";
        echo "<br><br>";
        print_r($arr);
        break;
    case 4:
        echo "<b>You Search </b>".$f."<b> Value Position In The Array </b>".array_search($f,$arr)."<b> Index</b>";
        echo "<br><br>";
        break;
    default:
        echo "<h1><center>Plase Enter Valid Number</h1></center>";
}
?>
