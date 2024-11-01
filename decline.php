

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>𝗣𝗮𝘆𝗺𝗲𝗻𝘁 𝗙𝗮𝗶𝗹𝗲𝗱</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<style>
        body {
        background-color: #272727;
        margin: 0;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }
        .container {
            padding: 30px;
            border-radius: 8px;
            height: auto;
            font-weight: 800;
            box-shadow: 0 0 30px rgba(195, 197, 168, 0),
            width: 90%;
            max-width: 100%;
        }
        .home-img{
            max-width: 80%;
            height: 200px;
            margin: 20px auto;
            position: relative;
            top: 20px;

        }
        .home-img img{
            width: 60%;
        }
        .text {
            text-align: center;
            color: black;
            font-weight: bold;
            margin: 4px 0;
            font-size: 16px;
            max-width: 50%;
            margin: 0 auto;
            font-family: Cambria, Cochin, Georgia, Times, 'GasoekOne-Regular', serif;
        }
        .home-btn {
            width: 100%;
            background: #0099CC;
            text-align: center;
            color: black;
            font-family: sans-serif;
            font-weight: bold;
            padding: 12px 0;
            letter-spacing: 2px;
            margin: 2px 0;
            outline: none;
            cursor: pointer;
            border: 1px solid black;
            border-radius: 8px 0px 8px 0px;
            text-decoration: none;
            transition: all 1s;
        }
        .home-btn:hover{
            transform: scale(1.06);
            background: lightblue;
            color: black;
            text-decoration: none;
        }
       .card{
            position: relative;
            padding: 30px;
            top: 50%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            height: auto;
            font-weight: 800;
            box-shadow: 0 0 30px rgba(195, 197, 168, 0.5),
            width: 100%;
            max-width: 100%;
            animation: neon 1.5s ease-in-out infinite alternate;
        }
        @keyframes neon {
            from {
                box-shadow: 0 0 20px rgba(108, 205, 255, 5),
                            0 0 30px rgba(105, 107, 68, 4),
                            0 0 40px rgba(165, 97, 208, 3),
                            0 0 50px rgba(190, 137, 128, 3),
                            0 0 60px rgba(19, 127, 118, 1);
            }
            to {
                box-shadow: 0 0 30px rgba(105, 190, 178, 5),
                            0 0 40px rgba(105, 97, 68, 2),
                            0 0 50px rgba(125, 107, 168, 0.9),
                            0 0 60px rgba(193, 127, 108, 2),
                            0 0 70px rgba(105, 190, 68, 1);
            }
        }
        .qr {
            margin: 0px auto;
            display: flex;
            width: 50%;
            height: 50%;
            align-items: center;
            justify-content: center;
        }
        .qr img{
            width: 50%;
            height: 50%;
            margin-top: 8px;
        }
        .card-body a{
            display: block;
            margin: 4px 0;
        }
    .header {
    text-align: center;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0);
    color: #fff;
    margin: 80px auto 60px;
    font-size: 24px;
    font-weight: 800;
    letter-spacing: 10px;
    width: 100%;
    box-sizing: border-box;
    position: fixed;
    z-index: 1000;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
}
    </style>
</head>
<body>
<div class="container">
<div class="card" style="width: 18rem;margin:12px auto;display:block">
<div class=" qr"></div><img src="img/failed.gif" class="card-img-top" alt><div class="card-body">
<h5 class="card-title" style="text-align: center;font-size:16px">Payment Failed</h5>
<br>
<h5 class="card-title" style="text-align: center;font-size:16px">We have not received your payment please check your payment status in your upi app.</h5>
<a href="/index.php" target="_blank" class="btn btn-primary">Retry</a>
<br>
</div>
</div>
</div>
<script>
var style = document.createElement('style');
document.head.appendChild(style);
var sheet = style.sheet;
var alertCSS = `
    .custom-alert {
        background-color: gold;
        width: 90%;
        color: black;
        margin: auto;
        text-size: 15px;
        padding: 30px;
        border: 3px solid #000;
        border-radius: 15px;
        position: fixed;
        top: 50%;
        overflow: hidden;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }
`;
sheet.insertRule(alertCSS, 0);
function showCopiedAlert(text) {
    var alertElement = document.createElement('div');
    alertElement.classList.add('custom-alert');
    alertElement.textContent = '𝗧𝗛𝗔𝗡𝗞𝗦 𝗙𝗢𝗥 𝗖𝗛𝗢𝗢𝗦𝗜𝗡𝗚 𝗦𝗟𝗜𝗖𝗘 𝗖𝗢𝗩𝗘𝗥𝗦\n' + text;
    document.body.appendChild(alertElement);
    setTimeout(function() {
        alertElement.remove();
    }, 1000000);
}
function copyToClipboard(domain, folder, loginInfo) {
    var textToCopy = domain + '/' + folder;
    if (loginInfo) {
        textToCopy += '\n\nLogin Info:\n' + loginInfo;
    }
    navigator.clipboard.writeText(textToCopy)
        .then(() => {
            showCopiedAlert(textToCopy);
        })
        .catch(err => {
            console.error('Failed to copy text: ', err);
        });
}
</script>
</body>
</html>

<!-- A to Z developed By @Indian_Hackers_Team -->