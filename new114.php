<?php
require_once 'form.php';
require_once 'func.php';
if (validateForm($_POST)) {
    $fp = fopen('contacts.csv', 'a');
    fputcsv($fp, $_POST);
    fclose($fp);
    echo $_POST['name']," ", $_POST['surname'] . " has been successfully added";
} else {
    echo "Add contact";
}
?>