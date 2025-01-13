<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-stream";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $connect->connect_error);
}

$sql = "SELECT * FROM marvel";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    echo '<section class="content" style="height=">';
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="seriler">
            <a href="' . $row["serinin_linki"] . '" class="seriler-content"><img src="' . $row["resim_yolu"] . '" style="width: 100%; height: auto;"></a>
            <div class="aciklama seri-ismi">
                    <a href="' . $row["serinin_linki"] . '"></a>
                </div>
            </div>
        </div>';
    }
    echo '</section>';
} else {
    echo "Hiç dizi bulunamadı.";
}

$connect->close();
?>