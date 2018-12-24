<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make Me Elvis - Send Email</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <p>ВЫберите адрес и удалите</p>
	<?php
	  $email = $_POST['email'];
        
        $dbc = mysqli_connect('localhost', 'root', '', 'elvis_store')
    or die('Error connecting to MySQL server.');

      $query = "DELETE FROM email_list WHERE email = '$email' ";

      mysqli_query($dbc, $query)
        or die('Error querying database.');

       mysqli_close($dbc);
  echo 'Адрес успешно удален. Прощайте'

	?>
</body>
</html>
