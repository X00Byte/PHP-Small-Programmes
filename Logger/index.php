<?php

	if(isset($_POST['submit'])){
		if (! file_exists('logs.txt')){
			$data="IP \t Access Time \n=========================\n";
			file_put_contents('logs.txt',$data);
			}
			/* echo "<pre>";
		    var_dump($_SERVER);
			echo "</pre>";
			die; */
			//Get user ip :
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$user_ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$user_ip = $_SERVER['REMOTE_ADDR'];
			}
			//Set times zone , to show : echo date_default_timezone_get('Africa/Cairo');
			// List of supported time zones : https://www.php.net/manual/en/timezones.php
			date_default_timezone_set('Africa/Cairo');
			$acsses_time=date('m/d/y h:iA',time());
			$content="$user_ip \t $acsses_time\n";
			try {
			//error in fetching ip in php , will fixed later inchallah :D
			file_put_contents('logs.txt',$content,FILE_APPEND);
			} catch ( Throwable $th) {
				//echo $th;
				echo "Error :(";
			}
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>web</title>
</head>
<body>
	<form action="" method="post">
		<button type="submit" name="submit">Authorised memebers Only</button>
	</form>
</body>
</html>