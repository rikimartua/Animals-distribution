<?php 
include "koneksi.php";
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM hewan where id_hewan=$id");
if($sql){
 $posts = array();
      if(mysqli_num_rows($sql))
      {
             while($post = mysqli_fetch_assoc($sql)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts)); 
    }
    
$obj = json_decode($data);
$titles="";
$ids="";
$kat="";
$web="";
$hp="";
$alamat="";
$kota="";
$latitude="";
$longitude="";
foreach($obj->results as $item){
  $titles.=$item->nama_hewan;
  $ids.=$item->id_hewan;
  $kat.=$item->kategori;
  $web.=$item->deskripsi_hewan;
  $hp.=$item->foto_hewan;
  $alamat.=$item->alamat;
  $kota.=$item->kota;
  $latitude.=$item->latitude;
  $longitude.=$item->longitude;
}

$title = "Detail dan Lokasi : ".$titles;
include_once "header.php"; ?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<script>

function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $latitude ?>,<?php echo $longitude ?>);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><?php echo $titles ?></h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $alamat ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'img/mark.png'
  });
  google.maps.event.addListener(singa, 'click', function() {
    infowindow.open(map,singa);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
      <div class="row">
      <div class="col-md-5">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:380px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong>  Detail  </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <th>Item</th>
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Nama Hewan</td>
                 <td><h4><?php echo $titles?></h4></td>
               </tr>
               <tr>
                 <td>Kota</td>
                 <td><h4><?php echo $kota ?></h4></td>
               </tr>
               <tr>
                 <td>Provinsi</td>
                 <td><h4><?php echo $alamat ?></h4></td>
               </tr>
               <tr>
                 <td>Kategori</td>
                 <td><h4><?php echo $kat ?></h4></td>
               </tr>
               <tr>
                 <td>Deskripsi Hewan</td>
                 <td><h4><?php echo $web ?></h4></td>
               </tr>
             </table>
            </div>
            </div>
          </div>

        
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>