<!DOCTYPE html>
<html>
<head>
	<title>Update User</title>
	<?php require("scripte.php")?>
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php session_start();?>
<div>
	<?php 
		$pwd = hash('sha256', $_POST['pwd']);
		$sql = "UPDATE `t_user` SET `name`= \"{$_POST['name']}\" ,`pwd`= \"$pwd\" ,`permission`= \"{$_POST['permission']}\" ,`id_customer`= \"{$_POST['id_customer']}\" WHERE id = \"{$_POST['id']}\"";
		$result = get_daten($sql);
	?>
	<p>Ihre Eingabe wurde erfolgreich gespeichert.</p>
	<p>Sie werden in 5 Sekunden automatisch weitergeleitet oder <a href="admin.php">klicken Sie hier</a></p>
	<?php header("refresh:7;admin.php");?>
</div>


</body>
</html>
