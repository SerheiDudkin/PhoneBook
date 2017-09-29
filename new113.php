    <title>PHONE BOOK</title>
</head>
<body>

	 <H1>Phone book</H1>
</body>
</html>
<form action="" method="post">
  Name:<br>
  <input type="text" name="name">
  <br>
  Surname:<br>
  <input type="text" name="surname">
  <br>
  Phone number:<br>
  <input type="text" name="number">
  <br><br>
  <input type="submit" value="Send">
</form> 
<?php
var_dump($_POST);
function validateName($name){return !empty($name);}
function validateSurname ($surname){return !empty($surname);}
function validatePhoneNumber($number){return !empty($number);}
function validateForm($formData)
{
     return !empty($formData) && validateName($formData['name']) && validateSurname($formData['surname']) && validatePhoneNumber($formData['number']);
}
if(validateForm($_POST)){
$fp = fopen('contacts.csv', 'a');
    fputcsv($fp, $_POST);
fclose($fp);
echo "User has been successfully added";}
else{
echo "Add contact";
}
?>