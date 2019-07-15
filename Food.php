<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="c2.css"/>
<title>Food</title>
</head>
<body>
<form action="" method="post">
</br>
<div  id="f1"class="l1">Our Delicuse Food</div>
</br>
<a href="#add1">Additives ^^ </a>

<table class="itm">
<tbody>
<tr>
<td class="tdi">
<img src="imgs/mar.jpg" alt="Pizza">
</td>
<td>
<label >Pizza Margreta</label>
<label >NO</label>
<input type="number"  min="0" value="0"   name="Pizza_Margreta"/>
<tr>
<td>
<label>Cost:20</label>
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
<img src="imgs/k.jpg" alt="koshary">
</td>
<td>
<label>koshary</label>

<label>NO</label>

<input type="number" value="0"  min="0"  name="koshary"/>
<tr>
<td>
<label>Cost:10</label>
</td>
</tr>
</td>
</tr>
</tbody>
</table>
<table class="itm">
<tbody>
<tr>
<td> 
<img src="imgs/Ton.jpg" alt="Pizza_Tona">
</td>

<td>
<label>Pizza_Tona</label>

<label>NO</label>

<input type="number" value="0" min="0"  name="Pizza_Tona"/>
<tr>
<td>
<label>Cost:20</label>
</td>
</tr>
</td>
</tr>

</tbody>
</table>

<table  class="itm"><tbody><tr>

<td>
<img src="imgs/ko.jpg" alt="Kofta">
</td>
<td>
<label>Kofta</label>

<label>NO</label>

<input type="number" value="0"  min="0"  name="Kofta"/>
<tr>
<td>
<label>Cost:25</label>
</td>
</tr>
</td>
</tr>
</tbody></table>


<table   class="itm"><tbody><tr>
<td>
<img src="imgs/e.jpg" alt="Espagetti">
</td>
<td>
<label>Espagetti</label>

<label>NO</label>

<input type="number" value="0"  min="0"  name="Espagetti"/>
<tr>
<td>
<label>Cost:20</label>
</td>
</tr>
</td>
</tr></tbody></table>
<table   class="itm"><tbody><tr>

<td>
<img src="imgs/b.jpg" alt="Bashamell">
</td>

<td>
<label>Bashamell</label>
<label>NO</label>
<input type="number" value="0"  min="0"  name="Bashamell"/>
<tr>
<td>
<label>Cost:25</label>
</td>
</tr>
</td></tr></tbody></table>
</br>
<div id="add1">Additives</div>
<table>
<tr>
<td>
<label>patates</label>
</td>
</tr>
<tr>

<td>
<label>cost = 8</label>
</td>
</tr>

<tr>

<td>
<input type=checkbox  name="patates">
</td>
</tr>

</table>
<table>
<tr>
<td>
<label>salata</label>


</td>
</tr>

<tr>
<td>
<label>cost = 5</label>

</td>
</tr>
<tr>
<td>
<input type=checkbox  name="salata">
</td>
</tr>
</table>

<table>
<tr>
<td>
<label>ketcheb</label>
</td>
</tr>


<tr>
<td>
<label>cost = 5</label>

</td>
</tr>
<tr>
<td>

<input type="checkbox"  name="ketcheb">
</td>
</tr>

</table>
<a href="#f1">Food ^^ </a>
<div>
<input   type="submit"  value="send"/>
</div>
</form>
</br>
<a href="Drinks.php">Go To Drinks ?</a>
</br>
</br>


</body>
</html>

<?php
$d1="";
$drcost=array(20,10,20,25,20,25,8,5,5);
$foods=array("Pizza_Margreta","koshary","Pizza_Tona","Kofta","Espagetti","Bashamell","patates","salata","ketcheb");


$i=0;
if(isset($_POST))
{
if(isset($_POST["patates"])  and $_POST["patates"]=="on" )
$_POST["patates"]="1";

if(isset($_POST["salata"])  and $_POST["salata"]=="on")
$_POST["salata"]="1";

if(isset($_POST["ketcheb"])  and $_POST["ketcheb"]=="on")
$_POST["ketcheb"]="1";

$d1.="*****list of food*****";
$_SESSION["orders"]=array_merge($_SESSION["orders"],$_POST);
$arrobj=array();
foreach($_SESSION["orders"] as $k1=>$v1)
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
//print_r( $arrobj);

echo($d1);
if($cost>0)
$_SESSION["costf"]=$cost;
else
$_SESSION["costf"]=0;

echo("<h1>cost is of food equal : ".$_SESSION["costf"]."<h1></br>");
echo("
<form action =\"pizza2.php\" method=\"post\">

<table><tr><td><label>Comment?</label></td></tr>
<tr><td>
<input type=\"text\" name=\"comment\" </td></tr>
<tr><td>
<a href=\"#f1\">Food ^^ </a>
</td></tr>
<tr>
<td>
<button>
<label>Finshed List?</label>
<img src=\"imgs/im10.jpg\" alt=\"drink\">
</button>
</td></tr></table>
</form>
"
);
}
echo("<footer><h5>".date("l,F,j,Y, g:ia",time())."</h5></footer>");

?>





