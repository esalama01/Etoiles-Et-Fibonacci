<html>
    <?php
    echo "<h3>Exo 03</h3>";
    echo "<h4>qst1)</h4>";
    echo "\n";
    echo "<h4>qst2)</h4>";
    echo "\n";
    function etoiles($n){
        for($i = 1; $i <= $n; $i++){
            for ($j = 1; $j <= $n - $i; $j++){ echo " "; }
            for ($l = 1; $l <= 2*$i - 1; $l++){ echo "*"; }
            echo "\n";
        }
    }
    echo "\n";
    echo "<h4>qst3)</h4>";
    echo "\n";
    function carre($n){
        for($i = 1; $i <= $n; $i++){
            for ($j = 1; $j <= $n; $j++){ echo "*"; }
            echo "\n";
        }
    }
    echo "<h4>qst4)</h4>";
    echo "\n";
    echo "Nombres pairs de 1 à 99 : ";
    for($i = 1; $i <= 99; $i++){
        if($i % 2 == 0){
            echo "$i";
            echo ", ";
        }
    }
    echo "<h4>qst5)</h4>";
    echo "\n";
    function somme($n){
        $sum = 0;
        for($i = 1; $i <= 100; $i++){
            $sum += $i;
        }
        echo "$sum";
    }
    echo somme(15);
    echo "\n";
    echo "<h4>qst6)</h4>";
    echo "\n";
    function pair($n){
        if ($n % 2 == 0){
            echo "pair";
        }
        else{
            echo "impair";
        }
    }
    echo pair(100);
    echo "\n";
    
    echo "<h3>Exo 04</h3>";
    echo "\n";
    echo "<h4>qst1)</h4>";
    echo "\n";
    define ("f_0", 0);
    define ("f_1", 1);
    echo f_0;
    echo "\n";
    echo f_1;
    echo "\n";
    echo "<h4>qst2)</h4>";
    echo "\n";
    function fibonacci_for($n){
        $fib_series = [0, 1];

        if ($n <= 0){
            return [];
        }
        else if ($n == 1){
            return [0];
        }

        for ($i = 2; $i < $n; $i++) {
            $next_fib = $fib_series[$i - 1] + $fib_series[$i - 2];
            $fib_series[] = $next_fib;
        }
        return $fib_series;
    }

    echo "<h4>qst3)</h4>";
    $result = fibonacci_for(100);
    echo implode(", ", $result);
    echo "\n";
    echo "<h4>qst5)</h4>";
    foreach ($result as $index => $value) {
        echo "F$index = $value <br>";
    }
    ?>
</html>