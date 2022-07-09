<div class="container_fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/a.jpg')?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4 mt-5">GET UR LOGISTIC WITH <br> <span class="font-weight-bold">JI YU EL</span></h1>
                <hr class="my-4">
                <p class="lead">Dapatkan Kebutuhanmu</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/b.jpg')?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4 mt-2">Alat Selam <br> <span class="font-weight-bold">SCUBA SNORKEL DIVING</span></h1>
              <hr class="my-4">
              <p class="lead">Dapatkan Kebutuhanmu</p> 
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/c.jpg')?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4">Tracking <br> <span class="font-weight-bold">VESSEL & PRODUCT</span></h1>
              <hr class="my-4">
              <p class="lead">Dapatkan Kebutuhanmu</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>

    <div class="accordion" id="bagian1">
        <div class="card">
          <div class="card-header bg-primary" id="header1">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1"><h6 class="text-white">PELABUHAN MERAK</h6></button>
          </div>
      
          <div id="collapse1" class="collapse" aria-labelledby="header1" data-parent="#bagian1">
            <div class="card-body bg-dark text-white">
              <p>
                Pelabuhan Merak adalah sebuah pelabuhan penyeberangan di Pulo Merak, Kota Cilegon, Banten yang menghubungkan pulau Jawa dengan pulau Sumatra yang dipisahkan oleh. Setiap harinya, ratusan perjalanan feri melayani arus penumpang dan kendaraan dari dan ke pulau Sumatra melalui Pelabuhan Bakauheni di Lampung.
                <script type="text/javascript">
                // Map appearance
                var width="100%";         // width in pixels or percentage
                var height="300";         // height in pixels
                var latitude="-5.92";     // center latitude (decimal degrees)
                var longitude="105.99";    // center longitude (decimal degrees)
                var zoom="8";             // initial zoom (between 3 and 18)
                </script>
                <script type="text/javascript" src="https://www.vesselfinder.com/aismap.js"></script>
              </p>
            </div>
          </div> 
        </div>
      </div>
                
        </div>
      </div>

        <div class="card">
          <div class="card-header bg-primary" id="header2">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse2"><h6 class="text-white">APA ITU VESSEL?</h6></button>
          </div>
      
          <div id="collapse2" class="collapse" aria-labelledby="header2" data-parent="#bagian1">
            <div class="card-body bg-dark text-white">
              <p>
                Kata ini mengacu pada kendaraan air yang paling umum dan mencakup ship dan boat. Menurut kamus kata ini mengacu pada segala mesin atau kendaraan air yang digunakan untuk bepergian di atas air. Semua jenis kapal atau perahu disebut vessel, entah jenis ship atau boat, besar atau kecil, yang berjalan di perairan di daratan atau lautan/samudera, menggunakan layar atau tidak. Itu semua disebut vessel. Ada 2 jenis vessel: ship dan boat, dan masing-masing masih dibagi lagi ke dalam beberapa tipe yang berbeda.
                <script>
                var mst_width="100%";
                var mst_height="300px";
                var mst_border="0";
                var mst_map_style="simple";
                var mst_mmsi="";
                var mst_show_track="true";
                var mst_show_info="true";
                var mst_fleet="";
                var mst_lat="-5.92";
                var mst_lng="105.99";
                var mst_zoom="";
                var mst_show_names="true";
                var mst_scroll_wheel="true";
                var mst_show_menu="true";
                </script><script id="myshiptrackingscript" src="//www.myshiptracking.com/js/widgetApi.js" async defer></script>
              </p>
        </div>
      </div>

    <div class="row text-center mt-4">
    
        <?php foreach ($product as $prod) : ?>

            <div class="card ml-4 mb-3 mx-auto" style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/'.$prod->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $prod->nama_prod ?></h5>
                    <medium><?php echo $prod->keterangan ?><medium><br>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($prod->harga), 0,',','.' ?></span><br>
                    <?php echo anchor('dashboard/add_to_cart/'.$prod->id_prod, '<div class="btn btn-sm btn-primary">Add To Cart</div>') ?>
                    <?php echo anchor('dashboard/detail/'.$prod->id_prod, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                    
                </div>
            </div>

        <?php endforeach; ?>
    </div>

<!DOCTYPE html>
<html>
<head>
  <title>PRAKIRAAN CUACA DATA BMKG</title>
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
  <h5 class="text-dark text-center font-weight-bold ">PRAKIRAAN CUACA DATA BMKG</h5>
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
        let streets = L.tileLayer(mbUrl, {id: 'mapbox/streets-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
        let light   = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
        let dark = L.tileLayer(mbUrl, {id: 'mapbox/dark-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
        let markersLayers = new L.LayerGroup();
        let map = L.map('map',{layers:dark}).setView([0, 118.9213], 5);

        let baseLayers = {
          "streets": streets,
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
      