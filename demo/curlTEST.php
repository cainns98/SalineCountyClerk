<?php
  // Here is the data we will be sending to the service
  $some_data = array(
    'action' => 'Search', 
    'nameFirst' => 'Nathan',
    'nameLast' => 'Cain',
    'dobMonth' => '10',
    'dobDay' => '13',
    'dobYear' => '1998',
    'search' => 'Search'
  );  
 
  $curl = curl_init('https://www.voterview.ar-nova.org/VoterView/RegistrantSearch.do');
   
  // We POST the data
  curl_setopt($curl, CURLOPT_POST, 1);
  // Set the url path we want to call
  //curl_setopt($curl, CURLOPT_URL, 'http://localhost/helloservice.php');  
  // Make it so the data coming back is put into a string
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  // Insert the data
  curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);
   
  // You can also bunch the above commands into an array if you choose using: curl_setopt_array
   
  // Send the request
  echo curl_getinfo($curl);
  $result = curl_exec($curl);
  // Free up the resources $curl is using
  curl_close($curl);
   
  echo $result;
?>
