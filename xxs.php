<?php


require ('includes/config.new.php'); 

// Set the page title and include the HTML header:
$page_title = 'Welcome to this Site!';
include('includes/header.php');

$hack = '<script>';
$hack .= 'alert("message successfully sent");';
$hack .= '</script>'; 


// Testing Sanitation
$hack_breaker = explode(';', $hack);

foreach ($hack_breaker as $key => $value) {
  echo ")";
}
$hack = test_input($hack);
echo "/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E";

// sanitation techniques
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// End Sanitation process

echo $hack;

include('includes/footer.php');

?>