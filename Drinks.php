<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="c2.css"/>
<title>Drinks</title>
</head>
<body>
<form action="" method="post">
</br>
</br>
<div  id="d1" class="l1">Our Hot Drinks</div>
</br>
<table class="itm">
<tbody>
<tr>
<td class="tdi">
<img src="imgs/t.jpg" alt="tea">
</td>
<td>
<label >Tea</label>
<label >NO</label>
<input type="number"  min="0" value="0"   name="tea"/>
<tr>
<td>
<label >cost:2</label>
</td>
</tr>
</td>
</tr>
</tbody>
</table>

<table class="itm">
<tbody>
<tr>
<td class="tdi">
<img src="imgs/c.jpg" alt="coffee">
</td>
<td>

<label>Coffe</label>

<label>NO</label>

<input type="number" value="0"  min="0"  name="coffee"/>

<tr><td>
<label >cost:5</label>
</td></tr>

</td>
</tr></tbody>
</table>
<table class="itm">
<tbody>
<tr>
<td> 
<img src="imgs/mi.jpg" alt="milk">
</td>

<td>
<label>Milk</label>

<label>NO</label>

<input type="number" value="0" min="0"  name="milk"/>
<tr><td>
<label >cost:3</label>
</td></tr>

</td>
</tr>

</tbody>
</table>

<div class="l1">Our Cold Drinks</div>
</br>
<table  class="itm"><tbody><tr>

<td>
<img src="imgs/m.jpg" alt="mango">
</td>
<td>
<label>Mango</label>

<label>NO</label>

<input type="number" value="0"  min="0"  name="mango"/>
<tr><td>
<label >cost:5</label>
</td></tr>

</td>
</tr>
</tbody></table>


<table   class="itm"><tbody><tr>
<td>
<img src="imgs/l.jpg" alt="limon">
</td>
<td>
<label>Limon</label>


<label>NO</label>

<input type="number" value="0"  min="0"  name="limon"/>

<tr><td>
<label >cost:3</label>
</td></tr>

</td>
</tr></tbody></table>
<table   class="itm"><tbody><tr>

<td>
<img src="imgs/o1.jpg" alt="orange">
</td>

<td>
<label>Orange</label>

<label>NO</label>
<input type="number" value="0"  min="0"  name="orange"/>
<tr><td>
<label >cost:3</label>
</td></tr>
</td></tr></tbody></table>
</br>

<input   type="submit"  value="send"/>


</form>
</br>
<a href="Food.php">Go To Food ?</a>


</body>

</html>


<?php
$d1="";
$foods=array("tea","coffee","milk","mango","limon","orange");
$drcost=array(2,5,3,5,3,3);
$i=0;
if(isset($_POST))
{

$d1.="*****list of food*****";
$_SESSION["orders"]=array_merge($_SESSION["orders"],$_POST);
$arrobj=array();
foreach(  $_SESSION["orders"] as $k1=>$v1)
{
for($n=0;$n<count($foods);$n++)
if($k1==$foods[$n])
{
$obj1=array(intval($v1),$drcost[$n]);
array_push($arrobj,$obj1);

}}
//$_SESSION["finorders"]=$arrobj;


$i=0;
$cost=0;
$d1.="<ul>Order:";

//print_r( $arrobj);
foreach($_SESSION["orders"] as $k1=>$v1)
{
if(intval($v1)>0)
$d1.="<li>".$k1 ." : ".$v1."</li>";
}
$d1.="</ul>";

foreach($arrobj as $karr)
{
if($karr[0]>0)
$cost = $cost + ($karr[0] * $karr[1]);
}
echo($d1);
if($cost>0)
$_SESSION["costd"]=$cost;
else 
$_SESSION["costd"]=0;


echo("<h1>cost of Drinks equal : ".$_SESSION["costd"]."<h1></br>");


echo("
<form action =\"pizza2.php\" method=\"post\">

<table><tr><td><label>Comment?</label></td></tr>
<tr><td>
<input type=\"text\" name=\"comment\" </td></tr>
<tr>
<td>
<tr><td>
<a href=\"#d1\">Drinks ^^ </a>
</td></tr>
<button>
<label>Finshed List?</label>
<img src=\"imgs/im10.jpg\" alt=\"drink\">
</button>
</td></tr></table>
</form>
"
);
}
//else echo("<h1>please Enter Order Name</h1>"."</br>"."<form action=\" \"method=\"post\"><input type=\"text\"   name=\"ordname1\"/><input   type=\"submit\"  value=\"send\"/></form></br>");
echo("<footer><h5>".date("l,F,j,Y, g:ia",time())."</h5></footer>");
?>