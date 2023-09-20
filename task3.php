<?php
function fibonacciWithBreak($n) {
    $fib1 = 0;
    $fib2 = 1;
    for ($i = 1; $i <= $n; $i++) {
        $current_number = $fib1;

        if ($current_number>100)
        {
            break;
        }
        echo $current_number. " ";

        $start_number = $fib1 + $fib2;
        $fib1 = $fib2;
        $fib2 = $start_number;
      
    }
 
}
// Calling the function
fibonacciWithBreak(15); 
// Put 15 to show the break condition in the output that exceeds 100

?>