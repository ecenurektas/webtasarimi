<?php
session_start();
if(isset($_SESSION['user'])&&$_SESSION['user']=="admin"){
    require_once "admin-header.php";
?>
<h1>Ekleme Çıkarma</h1>
<?php 
    if(!isset($_GET['dizi-film-sec'])){
        echo '
        <form action="add-delete.php" method="get">
        <label>SEÇ:</label>
        <select name="dizi-film">
            <option value="film">film</option>
            <option value="dizi">dizi</option>
        </select>
        <input type="submit" name="dizi-film-sec" value="gonder">
        </form>
        ';
    }
?>
<?php 
    if(isset($_GET['dizi-film-sec'])){
        switch ($_GET['dizi-film']) {
            case 'film':?>
                <form action="admin-process.php" method="post">
                    <label for="">Ekleyeceğiniz Serinin İsmi:</label>
                    <input type="text" name="serinin_ismi"><br>
                    <label for="">Ekleyeceğiniz Serinin Açıklaması:</label>
                    <input type="text" name="serinin_aciklamasi"><br>
                    <label for="">Ekleyeceğiniz Serinin Resim Yolu:</label>
                    <input type="text" name="resim_yolu"><br>
                    <label for="">Ekleyeceğiniz Serinin Linki:</label>
                    <input type="text" name="serinin_linki"><br>
                    <label for="">Ekleyeceğiniz Serinin Türü:</label>
                    <input type="text" name="serinin_turu"><br>
                    <input type="submit" value="Ekle" name="film_gonder">
                </form>
                <?php 
                break;
            case 'dizi':?>
                <form action="admin-process.php" method="post">
                    <label for="">Hangi Diziye Bölüm Eklemek İstiyorsunuz?</label>
                    <input type="text" name="serinin_ismi"><br>
                    <label for="">Ekleyeceğiniz Bölümün İsmi:</label>
                    <input type="text" name="bolumun_ismi"><br>
                    <label for="">Ekleyeceğiniz Bölümün Açıklaması:</label>
                    <input type="text" name="bolumun_aciklamasi"><br>
                    <label for="">Ekleyeceğiniz Bölümün Resim Yolu:</label>
                    <input type="text" name="resim_yolu"><br>
                    <label for="">Ekleyeceğiniz Bölümün Linki:</label>
                    <input type="text" name="bolumun_linki"><br>
                    <label for="">Ekleyeceğiniz Bölümün Türü:</label>
                    <input type="text" name="bolumun_sezonu"><br>
                    <input type="submit" value="Ekle" name="dizi_gonder">
                </form>
                <?php 
                break;
        }
    }
    if(isset($_GET['durum'])){
    if($_GET['durum']=="eklendi"){
        echo "başarıyla eklendi";
    }
    if($_GET['durum']=="eklenmedi"){
        echo "başarıyla eklenemedi";
    }}
?>
<?php
    require_once "admin-footer.php";
}
else{
    header("location:logout.php");
}
?>