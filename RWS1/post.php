<?php
	// Connect to database
    include("DB_Connection.php");
    $url = 'http://localhost/ToCode4/RWS1/user.php';
    $id = $_POST["id"];
    $cin = $_POST["cin"];
    $email = $_POST["email"];
    
    
      $data = array('id' => $id , 'cin' => $cin, 'email' => $email);
  
      // use key 'http' even if you send the request to https://...
      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($data)
          )
      );
      $context  = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      if ($result === FALSE) { /* Handle error */ }
  
      var_dump($result);
  ?>