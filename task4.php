<?php
function fibonacciPrint($n) {
    $fib1 = 0;
    $fib2 = 1;

    for ($i = 1; $i <= $n; $i++) {
        echo $fib1 . " ";

        $start_number = $fib1 + $fib2;
        $fib1 = $fib2;
        $fib2 = $start_number;
    }
}

// Call the function with 15 as an argument to print the first 15 Fibonacci numbers
fibonacciPrint(15);
?>