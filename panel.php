<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location:admin.php');
    die;
} else {
    $username = $_SESSION['username'];
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect new details from the form
    $new_upi = $_POST['upi'];
    $new_receivername = $_POST['receivername'];
    $new_title = $_POST['title'];
    
    // Developed By @Indian_Hackers_Team
    $file_content = '<?php' . PHP_EOL;
    $file_content .= '// All you need to do is change your payment details in one place' . PHP_EOL;
    $file_content .= '$upi = \'' . $new_upi . '\'; // for change your upi id' . PHP_EOL;
    $file_content .= '$receivername = \'' . $new_receivername . '\'; // for change receiver name' . PHP_EOL;
    
    // Developed By @Indian_Hackers_Team
    file_put_contents('controller.php', $file_content);
    
    // Developed By @Indian_Hackers_Team
    header("Location: change.php?success=true");
    exit();
}

?>

<!-- HTML form for updating details -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Update Details Of payment</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Update Payment Details</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="upi">UPI ID: (required)</label>
    <input type="text" id="upi" name="upi" value="<?php echo $upi; ?>" placeholder="Enter your new UPI ID">

    <label for="receivername">Receiver Name: (required)</label>
    <input type="text" id="receivername" name="receivername" value="<?php echo $receivername; ?>" placeholder="Enter your new receiver name">

    <input type="submit" value="Update">
</form>

    </div>
</body>
</html>

