<?php
// Initialize counters
$total_primes = 0;
$total_non_primes = 0;

// Loop through numbers 1 to 20
for ($num = 1; $num <= 20; $num++) {
    $factor_count = 0;

    // Count factors
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $factor_count++;
        }
    }

    // Check if prime
    if ($factor_count == 2) {
        echo "$num - Prime<br>";
        $total_primes++;
    } else {
        echo "$num - Not Prime ($factor_count factors)<br>";
        $total_non_primes++;
    }
}

// Summary
echo "<br><strong>Summary:</strong><br>";
echo "Total Prime Numbers: $total_primes<br>";
echo "Total Non-Prime Numbers: $total_non_primes<br>";
?>
