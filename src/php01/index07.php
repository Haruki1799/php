<?php
function text($score1, $score2, $score3)
{
    $Sum = $score1 + $score2 +$score3;
    return $Sum;
}

$total = text(100, 60, 70);

if ($total>=210){
    echo "合計点が" , $total ."なので合格です";
}else{
    echo "合計点が", $total . "なので不合格です";
}

