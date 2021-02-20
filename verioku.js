fetch('istatistik.txt')
  .then(response => response.text())
  .then(text => a = text.split("\n"))
  .then(a => {
  	id = a.length-2;
  	var ortalama = a[id-1];
  	var toplamkisi = a[id];
  	var sonuc = Number(ortalama.substr(0,4)) * 100;
  	document.getElementById('conin').innerHTML = toplamkisi;
  	document.getElementById('revin').innerHTML = "%" + sonuc;
  })

  fetch('https://api.covid19api.com/summary')
    .then((apidata) => {
        return apidata.json();
        // console.log(apidata);
    })

    .then((actualdata) => {
    	var vaka = actualdata.Countries[177].NewConfirmed;
    	document.getElementById('detin').innerHTML = vaka;
    })