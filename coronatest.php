<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid 19 Website </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="page33.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<?php 
		// variables 
		$soru1 = $_POST["soru1"];
		$soru2 = $_POST["soru2"];
		$soru3 = $_POST["soru3"];
		$soru4 = $_POST["soru4"];
		$soru5 = $_POST["soru5"];
		$cevaplar = array();

		$server = "localhost";
		$database = "corona";
		$username = "root";
		$password = "";

		$conn = mysqli_connect($server,$username,$password,$database);

		if (!$conn){
			echo "Hata";
		}

		// read kimlik txt
		$dosya = fopen('kimlik.txt', 'r');
		$kimlikno = fread($dosya, filesize('kimlik.txt'));

		$sqltext1 = "SELECT id from answer";
		$queryone = $conn->query($sqltext1);
		$rownum = $queryone->num_rows;
		$iddeger = $queryone->fetch_all();

		$id = $iddeger[$rownum-1][0]+1;

		switch ($soru1) {
			case 'Evet':
				$soru1 = 1;
				break;
			
			case 'Hayır':
				$soru1 = 0;
				break;
		}
		switch ($soru2) {
			case 'Evet':
				$soru2 = 1;
				break;
			
			case 'Hayır':
				$soru2 = 0;
				break;
		}
		switch ($soru3) {
			case 'Evet':
				$soru3 = 1;
				break;
			
			case 'Hayır':
				$soru3 = 0;
				break;
		}
		switch ($soru4) {
			case 'Evet':
				$soru4 = 1;
				break;
			
			case 'Hayır':
				$soru4 = 0;
				break;
		}
		switch ($soru5) {
			case 'Evet':
				$soru5 = 1;
				break;
			
			case 'Hayır':
				$soru5 = 0;
				break;
		}

		$sqltext = "INSERT INTO `answer` (`ID`, `kimlik`, `soru1`, `soru2`, `soru3`, `soru4`, `soru5`) VALUES ($id,$kimlikno,$soru1,$soru2,$soru3,$soru4,$soru5);";
		$query = $conn->query($sqltext);

		$sqltext2 = "SELECT soru1,soru2,soru3,soru4,soru5 from answer";
		$gelendeger = $conn->query($sqltext2);
		$object = $gelendeger->fetch_all();
		$roww = $gelendeger->num_rows;
		$toplampuan = 0;

		for($i = 0;$i<5;$i++){
			for($j=0;$j<$roww;$j++){
				$toplampuan = $toplampuan + $object[$j][$i];
			}
		}

		$ortalama = $toplampuan / ($roww * 5);
		$dosyayaz = $ortalama . "\n" . $roww . "\n";
		$dosya = fopen('istatistik.txt', 'a+');
		fwrite($dosya, $dosyayaz);
		fclose($dosya);

	 ?>
	 <section id="maps">
        <div class="text-center title maos">
            <p>İstatistikler</p>
            <h4>Genel Sonuçlar</h4>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-6  col-md-12 col-12 map-img">
                    <img src="123213.png" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="turkey">
                        <p>Türkiye</p>
                        <hr>
                        <div class="flex-card">
                            <div class="con">
                                <h1>Aşı Yapılan Kişi Sayısı</h1>
                                <h2 id="conin"></h2>
                            </div>
                            <div class="rev">
                                <h1>Yan Etki Oranı</h1>
                                <h2 id="revin"></h2>
                            </div>
                            <div class="dea">
                                <h1>Vaka Sayısı
                                </h1>
                                <h2 id="detin"></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tesekkur">
        <p>Soruları cevapladığınız için teşekkürler!</p>
    </div>
</body>
<script src="verioku.js"></script>
</html>