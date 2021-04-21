<style>
  body{
    background: navy;
    color: #fff;
    font-size: 20em;
    text-align: center;
  }
</style>
<?php
  include "includes/calc.inc.php";
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $cal  = $_POST['cal'];


    $calculator = new Calc($num1, $num2, $cal);
  echo  $calculator->calcMethod();
?>