<?php
$people =[
    [
        '山田',
        '太郎',
        '29',
        '男性'
    ],
    [
        '鈴木',
        '次郎',
        '25',
        '男性'
    ],
    [
        '佐藤',
        '花子',
        '20',
        '女性'
    ]
    ];
foreach ($people as $person) {
    echo $person[0] .$person[1] . '(' . $person[2] . '歳' . $person[3] . ')' . "<br />";
}