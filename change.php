<?php

if(isset($_GET['success']) && $_GET['success'] === 'true') {

    echo "";
} else {
    
    echo "You are not authorized to access this page.";
    
  header("Location: /unauthorized.php?unknown");
    
}
?>

Payment Details Changed Successfully