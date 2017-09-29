<?php
require_once 'form.php';
require_once 'func.php';
require_once 'contact.php';
if (validateForm($_POST)) {
    $contact1 = new Contact;
    $contact1->name = $_POST['name'];
    $contact1->surname = $_POST['surname'];
    $contact1->number = $_POST['number'];
    var_dump($contact1, $_POST);
    $fp = fopen('contacts.csv', 'a');
    fputcsv($fp, $contact1->asArray());
    fclose($fp);
    echo $contact1->name . " has been successfully added";
} else {
    echo "Add contact";
}
?>