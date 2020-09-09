<?php
    include_once("function/helper.php");

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WESHOPE || Barang-Barang Elektronik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo BASE_URL."css/style.css"?>" rel="stylesheet" type="text/css" media="screen">
    <script src="main.js"></script>
</head>
<body>
    <div id="container"> 
        <div id="header">
            <a href="<?php echo BASE_URL."index.php"; ?>">
                <img src="<?php echo BASE_URL."images/logo.png"; ?>" />
            </a>

            <div id="menu">
                <div id="user">
                    <a href="<?php echo BASE_URL."index.php?page=login"; ?>">LOGIN</a>
                    <a href="<?php echo BASE_URL."index.php?Page=registrasi"; ?>">REGISTRASI</a>
                </div>

                <a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>" id="button-keranjang">
                    <img src="<?php echo BASE_URL."images/cart.png"; ?>" />
                </a>
            </div>
        </div>

        <div id="content"></div>

        <div id="footer">
            <p>copyright weshop 2016</p>
        </div>

        
    </div>

</body>

</html>