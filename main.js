fetch('https://api.covid19api.com/summary')
    .then((apidata) => {
        return apidata.json();
        // console.log(apidata);
    })

    .then((actualdata) => {

            console.log(actualdata);
            //confirm
            const mydata = actualdata.Countries[177].TotalConfirmed;
            var deneme = actualdata.Countries[177].NewConfirmed;
            document.getElementById('conin').innerHTML = deneme;


            //recover
            const recdata = actualdata.Countries[177].TotalRecovered;
            var deneme1 = actualdata.Countries[177].NewRecovered;
            document.getElementById('revin').innerHTML = deneme1;


            //deaths
            const detdata = actualdata.Countries[177].TotalDeaths;
            var deneme2 = actualdata.Countries[177].NewDeaths;
            document.getElementById('detin').innerHTML = deneme2;

            //global data 

            const globco = actualdata.Global.TotalConfirmed;
            document.getElementById('globco').innerHTML = globco;

            //global recover
            const globro = actualdata.Global.TotalRecovered;
            document.getElementById('globro').innerHTML = globro;
            //global deaths

            const globdo = actualdata.Global.TotalDeaths;
            document.getElementById('globdo').innerHTML = globdo;
        }

    )
    .catch((error) => {
        console.log(`the error: ${error}`);
    });

