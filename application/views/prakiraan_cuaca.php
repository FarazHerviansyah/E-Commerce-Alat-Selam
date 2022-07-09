<!DOCTYPE html>
<html>
<head>
  <title>Prakiraan Cuaca dari BMKG</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
      crossorigin=""/>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <style type="text/css">
      body{
        padding: 0;
        margin: 0;
        font-family: 'Roboto', sans-serif;
      }
      #map{
        height: 100vh;
        width: 100%
      }
      header{
        top: 10px;
        left: 60px;
        z-index: 1000;
        background: #fffd;
        padding: 10px 20px
      }
      header{
        padding: 0;
        margin: 0;
      }
  </style>
</head>
<body>
  <header>
    <h4>Prakiraan Cuaca dari BMKG</h4>
  </header>
  <div id="map"></div>

</body>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <script type="text/javascript">
        let mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			              '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			              'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
        let mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
        let apiUrl = 'https://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/DigitalForecast-Indonesia.xml';
        let light   = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
        let dark = L.tileLayer(mbUrl, {id: 'mapbox/dark-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
        let markersLayers = new L.LayerGroup();
        let map = L.map('map',{layers:light}).setView([0, 118.9213], 5);

        let baseLayers = {
          "Light": light,
          "Dark": dark
        };

        L.control.layers(baseLayers).addTo(map);

        let date = new Date();
        let dateTime = date.getFullYear()+''+
                       (date.getMonth()+1).toString().padStart(2,'0')+''+
                       (date.getDate()).toString().padStart(2,'0')+''+
                       date.getHours()+'00';

        let KodeCuaca = {
          '0':['Cerah','clearskies'],
          '1':['Cerah Berawan ','partlycloudy'],
          '2':['Cerah Berawan ','partlycloudy'],
          '3':['Berawan ','mostlycloudy'],
          '4':['Berawan Tebal','overcast'],
          '5':['Udara Kabur','haze'],
          '10':['Asap','smoke'],
          '45':['Kabut','fog'],
          '60':['Hujan Ringan','lightrain'],
          '61':['Hujan Sedang','rain'],
          '63':['Hujan Lebat','heavyrain'],
          '80':['Hujan Lokal','isolatedshower'],
          '95':['Hujan Petir','severethunderstrom'],
          '97':['Hujan Petir','severethunderstrom'],
        };

        //console.log(dateTime);
    getData();
    async function getData(){
       let response = await fetch(apiUrl);
       let xmlString = await response.text();
       let parse = new DOMParser();
       let xmlData = parse.parseFromString(xmlString,'text/xml');
       let areas = xmlData.querySelectorAll('area');
       areas.forEach((area)=>{
         let lat = area.getAttribute('latitude');
         let lng = area.getAttribute('longitude');
         let prov = area.getAttribute('description');
         let weathers = area.querySelectorAll('parameter[id="weather"] timerange');
         let getTime = false;
         let posPrakiraan;
         // console.log(weathers);
         weathers.forEach((weather,i)=>{
            let getDateTime = weather.getAttribute('datetime');
            if(getDateTime>dateTime && getTime==false){
              posPrakiraan=i;
              getTime=true;
            }
            // console.log(getDateTime);
         });
         let prakiraan = weathers[posPrakiraan].querySelector('value').textContent;
         let iconUrl = 'assets/img/icons/'+KodeCuaca[prakiraan][1]+'.png';
         let deskripsi = KodeCuaca[prakiraan][0];


         let marker = L.marker([lat,lng],{
            icon: L.icon({
                iconUrl: iconUrl,
                iconSize: [50, 50],
                iconAnchor: [25, 25],
            })
         }).bindPopup('<strong>Kota '+prov+'</strong><br>Keterangan : '+deskripsi);
         marker.addTo(map);
         // console.log(area);
       })

    }
   </script>
</html>