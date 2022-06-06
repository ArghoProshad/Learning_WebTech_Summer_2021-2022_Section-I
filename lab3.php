<?php
#1
$Rectangle=0;
$perimeter=0;
$length=5;
$width=4;
$Rectangle=$length*$width;
$perimeter=2*($length+$width);
echo $Rectangle ."<br>";
echo $perimeter."<br>";
?>


<?php
#2
$vat =15;
$price =2000;
$vat = ($price/100)*$vat;
$totalprice = $price + $vat;
echo number_format ($totalprice ,2)."<br>";
?>


<?php
#3
$num=20;
if($num %2==0) {
	echo"even number"."<br>";
}
else{
	echo "odd number"."<br>";
}
?>


<?php>
#4
$x = 5;
$y = 14;
$z=20;
if (($x>$y) && ($x>$z)) {
echo "x is the largest value";

}
else if (($y>$x) && (($y>$z)) {
	echo "y is the largest value";
}
else  {
	"z is the largest value";

}
?>


<?php
#5
for ($number = 10;$number <= 100;$number += 1) {
 		 if($number % 2 ==1)
 		 {
 		 	 echo "The Even numbers between 10 to 100: $number <br>";
 		 }
 		  else{

 	echo "The odd number is not between 10 to 100";
}
 
?>


?php
#6
$arr = array(1,2,3,4,5,6);
$element=8;
$cnt=0;

for ($i=0; $i < 6 ; $i++)
	{ 
		if($arr[$i]==$element)
                {
						$cnt=1;
                        $pos=$i+1;
                        break;
                }
	
	}
	 if($cnt==0)
        {
                echo"<br/>". " Element Not Found..!!";
        }
		else
		{
			echo"<br/>". " Element is Found..!!";
		}
	
	

?>

<?php
#7A
for ($i=o; $i<=3; i++)
{
	for ($j=1; $j<=$i; $j++)
	{
		echo "+";
	}
echo "<br>";
}
?>

<?php   
#7B.
for ($i=0; $i<=3; $i++) 
{    
for($j=1;$j<=3-$i;$j++)     
{       
echo $j;  
}       
echo "<br/>";       
}  

?>

<?php
#7C




<?php
#8A
$cars = array (
  array(1,2,3,"A"),
  array(1,2,"B","C"),
  array(1,"D","E","F"),
  
);
  
echo $cars[0][0]."".$cars[0][1]."".$cars[0][2]."".$cars[0][3]."<br>";
echo $cars[1][0]."".$cars[1][1]."".$cars[1][2]."".$cars[1][3].".<br>";
echo $cars[2][0]."".$cars[2][1]."".$cars[2][2]."".$cars[2][3].".<br>";

?>

<?php   
#8B.
for ($i=0; $i<=3; $i++) 
{    
for($j=1;$j<=3-$i;$j++)     
{       
echo $j;  
}       
echo "<br/>";       
}  

?>







