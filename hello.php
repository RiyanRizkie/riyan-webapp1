<html>
<head>
	<title>web app sederhana</title>
</head>
<body>
<?php
if(!empty($_POST)){
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	echo '<h1>Halo, ' . $nama . '!</h1>';
	echo 'Email : ' . $email;
}
?>
</body>
</html>