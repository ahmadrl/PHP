
<?php
session_start();
$_SESSION['n1']=$_POST['num1'];
$_SESSION['n2']=$_POST['num2'];
$_SESSION['ops']=$_POST['cal'];

if($_SESSION['ops']=='+')
$result= $_SESSION['n1']+$_SESSION['n2'];
if($_SESSION['ops']=='-')
$result= $_SESSION['n1']-$_SESSION['n2'];
if($_SESSION['ops']=='*')
$result= $_SESSION['n1']*$_SESSION['n2'];
if($_SESSION['ops']=='/')
$result= $_SESSION['n1']/$_SESSION['n2'];

echo 'result is'.' '.$result;

?>
