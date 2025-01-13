<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-stream";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $connect->connect_error);
}

$sql = "SELECT * FROM bleach WHERE bolumun_sezonu = 1";

if (isset($_POST['submit_season'])) {
    $selected_season = $connect->real_escape_string($_POST['Seasons']);
    switch ($selected_season) {
        case 'season1':
            $sql = "SELECT * FROM bleach WHERE bolumun_sezonu = 1";
            break;
        case 'season2':
            $sql = "SELECT * FROM bleach WHERE bolumun_sezonu = 2";
            break;
        case 'season3':
            $sql = "SELECT * FROM bleach WHERE bolumun_sezonu = 3";
            break;
        }
}

$result = $connect->query($sql);

if ($result->num_rows > 0) {
    echo '<section class="content">';
    while ($row = $result->fetch_assoc()) {
        $aciklama = !empty($row["bolumun_aciklamasi"]) ? $row["bolumun_aciklamasi"] : "Açıklama mevcut değil.";
        echo '
        <div class="seriler-container">
            <div class="seriler">
                <a href="' . $row["bolumun_linki"] . '" class="seriler-content"><img src="' . $row["resim_yolu"] . '" style="width: 100%; height: auto;">
            </div>
            <div class="aciklama seri-ismi">
                    <p class="content-name">' . $row["bolumun_ismi"] . '</p>
                    <p class="seriaciklamasi">' . $aciklama . '</p>
            </div>
            </a>
        </div>';
    }
    echo '</section>';
} else {
    echo "Hiç dizi bulunamadı.";
}

$connect->close();
?>