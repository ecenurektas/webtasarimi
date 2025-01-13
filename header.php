<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    
    switch ($current_page) {
        case "anasayfa.php":
            echo '
                <link rel="stylesheet" href="css/style-header.css">
                <link rel="stylesheet" href="css/style-icerikler.css">
                <link rel="stylesheet" href="css/style-anasayfa.css">
                <link rel="stylesheet" href="css/style-buttons.css">
                <link rel="stylesheet" href="css/style-footer.css">';
            break;
        case "antmancol.php":
            echo '
                <link rel="stylesheet" href="css/style-header.css">
                <link rel="stylesheet" href="css/style-icerikler.css">
                <link rel="stylesheet" href="css/style-antman.css">
                <link rel="stylesheet" href="css/style-buttons.css">
                <link rel="stylesheet" href="css/style-footer.css">';
            break;
        case "avengerscol.php":
            echo '
                <link rel="stylesheet" href="css/style-header.css">
                <link rel="stylesheet" href="css/style-icerikler.css">
                <link rel="stylesheet" href="css/style-avengers.css">
                <link rel="stylesheet" href="css/style-buttons.css">
                <link rel="stylesheet" href="css/style-footer.css">';
            break;
        case "bleach.php":
            echo '
                <link rel="stylesheet" href="css/style-header.css">
                <link rel="stylesheet" href="css/style-icerikler.css">
                <link rel="stylesheet" href="css/style-bleach.css">
                <link rel="stylesheet" href="css/style-footer.css">';
            break;     
        case "marvel.php":
            echo '
                <link rel="stylesheet" href="css/style-header.css">
                <link rel="stylesheet" href="css/style-icerikler.css">
                <link rel="stylesheet" href="css/style-marvel.css">
                <link rel="stylesheet" href="css/style-footer.css">';
            break;
        case "sign-in.php":
            echo '
                <link rel="stylesheet" href="css/style-sign-in.css">
                <link rel="stylesheet" href="css/style-header.css">
                <link rel="stylesheet" href="css/style-footer.css">';
                break;
        case "movies.php":
            echo'
                <link rel="stylesheet" href="css/style-header.css">
                <link rel="stylesheet" href="css/style-icerikler.css">
                <link rel="stylesheet" href="css/style-marvel.css">
                <link rel="stylesheet" href="css/style-footer.css">';
            break;
    }
?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inconsolata:wght@200..900&family=Montserrat+Underline:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>E-STREAM</title>
</head>
<body>
    <header>
        <div class="menu-logo" style="display: flex; align-items: center;">
            <div class="logo">
                <a href="anasayfa.php"><img src="resimler/logo.png"></a>
            </div>
            <ul>
                <li><i class="fa-solid fa-house"></i>&nbsp;&nbsp;<a href="anasayfa.php">Anasayfa<br><hr class="list-line" style="width: 75%;"></a></li>
                <li><i class="fa-solid fa-magnifying-glass"></i>&nbsp;&nbsp;<a href="#">Arama<br><hr class="list-line"></a></li>
                <li><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;<a href="#">İzleme Listesi<br><hr class="list-line" style="width: 82%;"></a></li>
                <li><i class="fa-solid fa-film"></i>&nbsp;&nbsp;<a href="movies.php">Filmler<br><hr class="list-line" style="width: 67%;"></a></li>
                <li><i class="fa-solid fa-display">&nbsp;&nbsp;</i><a href="#">Diziler<br><hr class="list-line" style="width: 67%;"></a></li>
            </ul>
        </div>
        <div class="kullanici">
            <a href="sign-in.php">Giriş Yap</a>
        </div>
    </header>