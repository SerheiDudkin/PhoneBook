<?php
require_once "DBReader.php";

function readAllContactsFromDB(DBReader $dbReader){
    $contacts = [];
    while($contact = $dbReader->readContact())
    {
        $contacts[] = $contact;
    }
    return $contacts;
}

$dbReader = new DBReader('contacts.csv');
$contacts = readAllContactsFromDB($dbReader);
?>
<html>
<head>
</head>
<body>
<h1>Contacts</h1>
<table>
    <thead>
    <th>
    <td>Name</td>
    <td>Surname</td>
    <td>Phone Number</td>

    </th>
    </thead>
    <tbody>
    <?php foreach($contacts as $contact): ?>
        <tr>
            <td><?php echo $contact->name;?></td>
            <td><?php echo $contact->surname;?></td>
            <td><?php echo $contact->number;?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
