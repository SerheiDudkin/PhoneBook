<?php
$row = 1;
$fp = fopen("contacts.csv", "r");
while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
    $num = count($data);
    echo "<p>  contact $row: <br /></p>\n";
    $row++;
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "<br />\n";
    }
}
fclose($fp);
?>