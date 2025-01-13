<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-stream";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $connect->connect_error);
}

$sql = "SELECT * FROM filmler WHERE serinin_turu='komedi' LIMIT 4";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    $count=0;
    $total=$result->num_rows;
    echo '<section class="content">';
    while ($row = $result->fetch_assoc()) {
        $count++;
        $aciklama = !empty($row["serinin_aciklamasi"]) ? $row["serinin_aciklamasi"] : "Açıklama mevcut değil.";
        echo '
        <div class="seriler">
            <a href="' . $row["serinin_linki"] . '" class="seriler-content"><img src="' . $row["resim_yolu"] . '" style="width: 100%; height: auto;"></a>
            <div class="aciklama seri-ismi">
                <p class="content-name">' . $row["serinin_ismi"] . '</p>
                <div class="oynat-butonu">
                    <a href="' . $row["serinin_linki"] . '"><i class="fa-solid fa-play">&nbsp;&nbsp;</i>Oynat</a>
                </div>
                <div class="icons">
                    <div class="add-watchlist"><i class="fa-solid fa-plus"></i></div>
                    <div class="hide-this"><i class="fa-solid fa-ban"></i></div>
                </div>
                <p class="seriaciklamasi">' . $aciklama . '</p>
            </div>
        </div>';
        if($count==$total){
            echo'
                <div class="more-content">
                <a href="movies.php?tur=komedi" class="more">Daha Fazlası için tıklayın</a>
                </div>';
        }
    }
    echo '</section>';
} else {
    echo "Hiç dizi bulunamadı.";
}

$connect->close();
?>
