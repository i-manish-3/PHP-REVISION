<?php 
if(isset($_POST['submit'])){
    echo '<pre>';
    print_r($_POST);
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    echo $num1 + $num2;
    
    // print_r($_GET);
    // $num1 = $_GET['num1'];
    // $num2 = $_GET['num2'];
    // echo $num1 + $num2;
}

?>

<form method="post">
    <input type="textbox" name="num1" placeholder="Num1">
    <br>
    <input type="textbox" name="num2" placeholder="Num2">
    <br>
    <input type="submit" name="submit">
</form>