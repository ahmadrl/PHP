<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <hr>
    <div  id="div1" ><h2>Calculator</h2></div><br/> <br/>

    <form   id="form2" method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">
        <label for="">Enter first number</label>
        <br/> <br/> 
        <input type="text" name="num1">
         <br/> <br/>
        <label for="">Enter second number</label><br/> <br/> <input type="text" name="num2"> <br/> <br/>
        <input type="submit" value="+" name="cal"> 
         <input type="submit" value="-" name="cal">  
         <input type="submit" value="*" name="cal">  <input type="submit" value="/" name="cal">
    </form>

</body>

</html>
<?php
session_start();
if($_POST){
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
if (!is_numeric($_SESSION['n1'])&&!is_numeric($_SESSION['n2']))
$result= 'please enter valid numbers';
echo 'result is:'.' '.$result;

 

}


?>




