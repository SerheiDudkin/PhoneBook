<?php
require_once "contact.php";
class DBReader
{
    public function __construct($dbName)
    {
        $this->fp = fopen($dbName, r);
    }

    public function __destruct()
    {
        fclose($this->fp);
    }

    public function readContact()
    {
        $contactArray = fgetcsv($this->fp);
        if (!$contactArray) {
            return null;
        }
        $contact = new Contact();
        $contact->name = $contactArray[0];
        $contact->surname = $contactArray[1];
        $contact->number = $contactArray[2];
        return $contact;
    }
}
?>