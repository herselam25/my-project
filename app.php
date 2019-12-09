<?php
// Default page key
// $page = 'index';
// GET THE KEY FROM URL IF IS SET
// if(isset($_GET['page'])) {
//   $page = $_GET['page'];
// }
$explode_url = explode('/',$_SERVER['REQUEST_URI']); //an array

$page = array_pop($explode_url); //echo $page;


if(!$page) {
  $page = 'index';

}
// compact veersion
// $page = (isset($_GET['page']) ?  $_GET['page'] : 'index';
// echo $page;
/* MENUS
----------------------------------*/
function site_data(){

  $data_content = file_get_contents('data.json'); //debug($data_content);
  $data_arr = json_decode($data_content, true); //debug($data_arr);
  return $data_arr;
}
site_data();

function pages($page = '', $location = 'menus') {
// global $page;
$pages_arr = site_data(); 

    if ($location === 'head') {
      $title = $pages_arr[$page]['title'];
      return $title;


    }    

    // DISPLAY MENUS-LOOP INSIDE THE ARRAY
    foreach($pages_arr as $key => $item) {
      // echo $item $title
      // var_dump($key);
      $active = ($page === $key) ? 'active': '';
      if ($item['isMenu']){
      // echo '<li class="menu-item '.$active.'"><a href="?page='.$key.'">'.$item['menu'].'</a></li>';
       echo '<li class="'.$active.'"><a href="'.$key.'">'.$item['menu'].'</a></li>';
      }
    }

}





// pages();
