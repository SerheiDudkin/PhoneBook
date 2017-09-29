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
if( !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['number'])){
$fp = fopen('contacts.csv', 'a');
    fputcsv($fp, $_POST);
fclose($fp);
echo "User has been successfully added";}
else{?>

<?php
echo "Add contact";
}
?>