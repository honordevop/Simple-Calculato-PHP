<form action="calculator.php" method="post">
    <div>
        <label for="num1">Enter First Number:</label><input type="number" name="num1">
    </div> <br>
    <div>
        <label for="num1">Enter Second Number:</label><input type="number" name="num2">
    </div> <br>
    <div>
        <label for="Operation">Operation</label><input type="text" name ='operation'>
    </div> <br>
    <div>
        <input type="submit" name="Calculate">
    </div> <br>
    
</form>

<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];

if($operation == '+'){
    echo $num1 + $num2;
} elseif($operation == '-'){
    echo $num1 - $num2;
} elseif ($operation == '*'){
    echo $num1 * $num2;
}elseif ($operation == '/'){
    echo $num1 /$num2;
} else{
    echo 'Invalid Input';
}

?>