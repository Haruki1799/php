<?php
$count = 1;

while ($count < 100) {
    if ($count===20){
        break;
    }
    if ($count %  3 === 0 ){
            $count += 1;
            continue;
    }
    echo $count . '<br />';
    $count += 1;
}
