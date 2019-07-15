<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="c2.css"/>

<title>order pizza</title>
<h1>Hello my friend</h1>

</head>
<body>

<form action="pizza3.php" method="post">
<div> call 01153487258
<div class="l1">OR send Email</div>
<input   type="submit" name value="send"/>
</form>
</body>

</html>
<?php
ini_set("sendmail_from",$_SESSION['email1']);
//echo("<h1>total cost equal : ".($_SESSION["costd"]+$_SESSION["costf"])."<h1></br>");

if(isset($_SESSION['email1']))
{
$d1="<ol>";
foreach($_SESSION["orders"] as $k1=>$v1)
{
if(intval($v1)>0)
$d1.="<li>".$k1 ." : ".$v1."</li>";
}
$d1=$d1."</ol>\n";
$d1=$d1."Cost is:".($_SESSION["costd"]+$_SESSION["costf"]);
if(isset($_POST["comment"]))
$d1=$d1."\n"."your lovely comment:".$_POST["comment"];
echo($d1);

if(mail("ayass4213@gmail.com","ORDERPIZZA",$d1,"From:".$_SESSION['email1']."\r\n"))
echo("send succeed");
else 
echo(" not send please try again");
}
?>