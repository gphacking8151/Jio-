<?php
session_start();


$jsonString = file_get_contents('Indian_Hackers_Team.json');
$data = json_decode($jsonString);

$real_password = $data->password;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $password = $_POST['password'];
    if($password == $real_password){
        $_SESSION['username'] = "user";
        header('Location:panel.php');
    } else {
        header('Location:aicwbzgvntnigubx.php?incorrect-details=id=1047378293');
        exit;
    }
}
?>

<?php
if(isset($_GET['error'])==true){
    echo '<font color="#FF0000"><p align="center">Wrong Password</p></font>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> LOGIN</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
<div class="heading"><h3 style="color: black;">𝗣𝗔𝗬𝗠𝗘𝗡𝗧 𝗣𝗔𝗡𝗘𝗟</h3></div>
            <div class="form">
                <form method="post">
      <!-- Developed By @Indian_Hackers_Team -->
<label for="password" style="color: black; animation: blink-animation 1s infinite;">
    𝗘𝗡𝗧𝗘𝗥 𝗬𝗢𝗨𝗥 𝗣𝗔𝗦𝗦𝗪𝗢𝗥𝗗
</label>
<style>
    #password {
        background-color: black;
        color: #ffffff;
    }
</style>

<input type="password" name="password" id="password" placeholder="ㅤ𝗣𝗮𝘀𝘀𝘄𝗼𝗿𝗱" required>

<button style="background-color: yellow; height: 40px; width: 130px; cursor: pointer;">𝗟𝗢𝗚𝗜𝗡</button>


    </div>
</body>
</html>

<!--- Page developed By @Indian_Hackers_Team --->