<?php
session_start();
$_SESSION['n1']=$_POST['num1'];
$_SESSION['n2']=$_POST['num2'];
$_SESSION['ops']=$_POST['cal'];

if($_SESSION['ops']=='+' &&is_numeric($_SESSION['n1'])&&is_numeric($_SESSION['n2']))
$result= $_SESSION['n1']+$_SESSION['n2'];
if($_SESSION['ops']=='-'&&is_numeric($_SESSION['n1'])&&is_numeric($_SESSION['n2']))
$result= $_SESSION['n1']-$_SESSION['n2'];
if($_SESSION['ops']=='*'&&is_numeric($_SESSION['n1'])&&is_numeric($_SESSION['n2']))
$result= $_SESSION['n1']*$_SESSION['n2'];
if($_SESSION['ops']=='/'&&is_numeric($_SESSION['n1'])&&is_numeric($_SESSION['n2']))
$result= $_SESSION['n1']/$_SESSION['n2'];
$em = $_POST["email"];
echo "Your email is : $em".'<br>';
echo 'result is'.' '.$result;

?>
