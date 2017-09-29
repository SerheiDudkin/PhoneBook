<?php
class ContactValidator
{
    function validateName($name)
    {
        return !empty($name);
    }
    function validateSurname($surname)
    {
        return !empty($surname);
    }
    function validatePhoneNumber($number)
    {
        return !empty($number);
    }
    function validateForm($formData)
    {
        return !empty($formData) && validateName($formData['name']) && validateSurname($formData['surname']) && validatePhoneNumber($formData['number']);
    }
}