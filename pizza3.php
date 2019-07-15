
<html>
<head>
<link rel="stylesheet" type="text/css" href="c2.css"/>
<title>order pizza</title>
<h1>Welcom in Our Reaturant ^^</h1>
<?php echo " <h3> Hello   ".$_SESSION["name1"]."  :)  </h3>"  ?>
</head>
<body>
</br>
<div>
<span>
<form action ="Food.php">
<button>
<label>Food</label>
<img src="imgs/index.jpg" alt="food">
</button>
</form>

<form action ="Drinks.php">
<button>
<label>Drink</label>
<img src="imgs/img90.jpg" alt="drink">
</button>
</form>

</span>
</body>
</html>


<?php
$_SESSION["orders"]=array();

if(isset($_POST["name1"]))
$_SESSION["name1"]=$_POST["name1"];
else $_SESSION["name1"]="My Friend";
if(isset($_POST["email1"]))
$_SESSION["email1"]=$_POST["email1"];
else $_SESSION["email1"]="ayass4213@gmail.com";
if(isset($_POST["pass1"]))
$_SESSION["pass1"]=$_POST["pass1"];
else $_SESSION["pass1"]="annymouspass";

?>