<?php
require_once 'form.php';
require_once 'ContactValidator.php';
require_once 'contact.php';
$validator = new ContactValidator();
if ($validator->validateForm($_POST)) {
    $contact1 = new Contact;
    $contact1->name = $_POST['name'];
    $contact1->surname = $_POST['surname'];
    $contact1->number = $_POST['number'];
    $fp = fopen('contacts.csv', 'a');
    fputcsv($fp, $contact1->asArray());
    fclose($fp);
    echo $contact1->name ." " .  $contact1->surname . " has been successfully added";
} else {
    echo "Add contact";
}
?>