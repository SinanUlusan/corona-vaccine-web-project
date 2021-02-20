<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset =utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Yönlendiriliyor...</title>
</head>

<body>
	<?php
		//variables

		$Gelenkimlik = $_POST["kimlik"] ?? "Hata";
		$Gelenhescode = $_POST["hescode"] ?? "Hata";
		$kisicontrol = true;
		$asicontrol = true;
		$servername = "localhost";
		$database = "corona";
		$username = "root";
		$password = "";
		$alert = '<script language="javascript">alert("Girdiğiniz bilgide birisi bulunamadı.\nKimlik numarası ve HES kodunuzu kontrol edin.")</script>';

		// Create connection
		$conn = mysqli_connect($servername, $username, $password,$database);

		// Check connection
		if (!$conn) {
		    die("Connection failed: " . 
		mysqli_connect_error());
		}

		//save kimlikno in txt
		$dosya = fopen('kimlik.txt', 'w');
		fwrite($dosya, $Gelenkimlik);
		fclose($dosya);

		//variables
		$Sqlquery = "SELECT * from users";

		$sonuc = $conn->query($Sqlquery);
		$rownumber = $sonuc->num_rows;
		$rows = $sonuc->fetch_all();


		//if not register in system

		//check user
		for($sayi = 0 ;$sayi<$rownumber;$sayi++){
			if($Gelenkimlik == $rows[$sayi][1] && $Gelenhescode ==$rows[$sayi][2]){
				if($rows[$sayi][3] == 1){
					$GLOBALS["asicontrol"] = true;
					$GLOBALS["kisicontrol"] = true;
					break;
				}
				else{
					$GLOBALS["asicontrol"] = false;
					$GLOBALS["kisicontrol"] = true;
					break;
				}
			}
			else{
				$GLOBALS["kisicontrol"] = false;
			}
		};

		//statements
		if($kisicontrol == false){
			header('refresh:0.1;url=index.php');
			echo $alert;
		}
		else{
			if($asicontrol == true){
				header('Location: survey.php');			
			}
			else{
				header('Location: hata.php');
			}
		}

		//close connection
		mysqli_close($conn);
	?>
</body>
</html>
