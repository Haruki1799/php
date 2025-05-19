<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
echo "私の名前は、" . $name . "<br>";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["choice"])) {
        echo "ご希望商品は: " . htmlspecialchars($_GET["choice"])."<br>";
    } else {
        echo "何も選択されていません". "<br>";
    }
}
$order = htmlspecialchars($_GET['order'], ENT_QUOTES);
echo "注文数は、" . $order ;


?>