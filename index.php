<?php

  /** Use this in DYNAMIC URL case. **/
  // $url (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  /** Use this URL in static case. **/
  $url = 'http://localhost/Workspace/page/str2json.php?test_id=2&user_id=1&answered={"14":"A","26":"C","15":"A","36":"C"}';
  
  parse_str( parse_url( $url, PHP_URL_QUERY),$array);
  
  echo "Parsed URL";
  echo "<pre>";
  
  print_r( $array );
  echo '<hr>';
  
  $data = json_decode($array['answered'], true);
  echo 'Answered' . '<br>';
  print_r($data);
  
  
