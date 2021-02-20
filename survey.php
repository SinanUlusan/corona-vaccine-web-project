<!DOCTYPE html>
<html lang="tr">
<head
>    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sağlık Kontrolü</title>
    <link rel="stylesheet" href="page2.css">
</head>
<body>
    <div id="container">
         <div class="textMachine">
            <p>COVID-19 Aşısı</p>
            <h4>Sağlık Kontrolü</h4>
        </div>

        <form action="coronatest.php" method="POST" name="survey-form" id="survey-form">

            <div class="box">
                <label for="soru1" id="name-label">1-) Kaslarınızda bir ağrı hissediyor musunuz?</label><br>
                <input type="radio" name="soru1" id="name" value="Evet" required> Evet
                <input type="radio" name="soru1" id="name" value="Hayır"required> Hayır
            </div>

            <div class="box">
                <label for="soru2" id="name-label">2-) Süregelen bir baş dönmesi yaşıyor musunuz?</label><br>
                <input type="radio" name="soru2" id="name" value="Evet" required> Evet
                <input type="radio" name="soru2" id="name" value="Hayır" required> Hayır
            </div>

            <div class="box">
                <label for="soru3" id="name-label">3-) Yüksek ateş problemi yaşadınız mı?</label><br>
                <input type="radio" name="soru3" id="name" value="Evet" required> Evet
                <input type="radio" name="soru3" id="name" value="Hayır" required> Hayır
            </div>

            <div class="box">
                <label for="soru4" id="name-label">4-) Halsizlik hissediyor musunuz?</label><br>
                <input type="radio" name="soru4" id="name" value="Evet" required> Evet
                <input type="radio" name="soru4" id="name" value="Hayır" required> Hayır
            </div>

            <div class="box">
                <label for="soru5" id="name-label">5-) İştah azalması yaşıyor musunuz?</label><br>
                <input type="radio" name="soru5" id="name" value="Evet" required> Evet
                <input type="radio" name="soru5" id="name" value="Hayır" required> Hayır
            </div>


            <input type="submit" id="submit" value="Gönder">

        </form>
    </div>

</body>
</html>