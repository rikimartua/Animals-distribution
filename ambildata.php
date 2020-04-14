<?php
include "koneksi.php";
$sql = mysqli_query($koneksi,"SELECT * FROM hewan");
if($sql){
 $posts = array();
      if(mysqli_num_rows($sql))
      {
             while($post = mysqli_fetch_assoc($sql)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));
      echo $data;                     
}

?>