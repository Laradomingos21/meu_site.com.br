<?php
    $vetor = [5, 3, 8, 4, 2];
    $n = count($vetor);
    for ($i =0; $i < $n; $i++) {
        for ($j = 0; $j < $n -1; $j++) {
            if ($vetor[$j] > $vetor[$j+1]){
                $temp = $vetor [$j];
                $vetor[$j] = $vetor[$j+1];
                $vetor[$j+1] = $temp;
            }
        }
    }
    print_r($vetor);
?>