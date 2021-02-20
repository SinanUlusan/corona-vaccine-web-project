<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <title>Vaccine Control Website </title>
    <link rel="stylesheet" type="text/css" href="smoke.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="maps">
        <div class="text-center title maos">
            <p>COVID-19 Aşısı</p>
            <h4>Sağlık Kontrolü</h4>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-6  col-md-12 col-12 map-img">
                    <img src="./1x/map.png" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="turkey">
                        <h1>Türkiye</h1>
                        <hr>
                        <div class="flex-card">
                            <div class="con">
                                <h1>Günlük Vaka Sayısı</h1>
                                <h2 id="conin"></h2>
                            </div>
                            <div class="rev">
                                <h1>İyileşen Hasta Sayısı</h1>
                                <h2 id="revin"></h2>
                            </div>
                            <div class="dea">
                                <h1>Ölüm Sayısı
                                </h1>
                                <h2 id="detin"></h2>
                            </div>
                        </div>
                    </div>
                    <div class="world">
                        <h1>Dünyada Korona Virüs</h1>
                        <hr>
                        <div class="flex-card">
                            <div class="con">
                                <h1>Toplam Vaka Sayısı</h1>
                                <h2 id="globco"></h2>
                            </div>
                            <div class="rev">
                                <h1>İyileşen Hasta Sayısı</h1>
                                <h2 id="globro"></h2>
                            </div>
                            <div class="dea">
                                <h1>Ölüm Sayısı
                                </h1>
                                <h2 id="globdo"></h2>
                            </div>
                        </div>
                        <br>
                        <br>
                        <a href="https://covid19.saglik.gov.tr/TR-66935/genel-koronavirus-tablosu.html">Tüm Bilgileri Görüntüle</a>
                    </div>
                    <button id="mBtn" class="sBtn">Görüş Bildir!</button>
                        <div id="myMadal" class="btnM">
                            <div class="madalContent">
                            <div class="madalHeader">
                            <span id="closeBtn" class="closeBtn">&#215;</span>
                        </div>
                        <div class="madalBody">
                            <div class="loginBox">
                            <img src="24436.png" class="avatar">
                            <h1 class="loginForm">Hoşgeldiniz</h1>
                            <br/>
                        <form method="post" action="yonlendirme.php">
                            <p>Kimlik Numarası</p>
                            <input type="text" name="kimlik" id="kimlik" placeholder="Kimlik Bilgisi Giriniz">
                            <p>HES Kodu</p>
                            <input type="text" name="hescode" id="hescode" placeholder="HES Kodu Bilgisi Giriniz">
                            <input type="submit" name="submit" value="Giriş Yap">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</body>
<script src="main.js"></script>
<script src="smoke.js"></script>
</html>