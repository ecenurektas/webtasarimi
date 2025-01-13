<?php
    session_start();
    if(isset($_SESSION['user'])&&$_SESSION['user']=="admin"){
    $db=new PDO("mysql:host=localhost;dbname=e-stream;charset=utf8",'root','');
    require_once "admin-header.php";
    $urunlerSor=$db->prepare("SELECT * from filmler where id=:id");
    $urunlerSor->execute(array(
        'id'=>$_GET['id']
    ));
    $urunlerCek=$urunlerSor->fetch(PDO::FETCH_ASSOC);
?>
    <form action="admin-process.php" method="post">
        <input type="text" name="id" value="<?php echo $urunlerCek['id']?>" hidden>
        <label for="">Ekleyeceğiniz Serinin İsmi:</label>
        <input type="text" name="serinin_ismi" value="<?php echo $urunlerCek['serinin_ismi']?>"><br>
        <label for="">Ekleyeceğiniz Serinin Açıklaması:</label>
        <input type="text" name="serinin_aciklamasi" value="<?php echo $urunlerCek['serinin_aciklamasi']?>"><br>
        <label for="">Ekleyeceğiniz Serinin Resim Yolu:</label>
        <input type="text" name="resim_yolu" value="<?php echo $urunlerCek['resim_yolu']?>"><br>
        <label for="">Ekleyeceğiniz Serinin Linki:</label>
        <input type="text" name="serinin_linki" value="<?php echo $urunlerCek['serinin_linki']?>"><br>
        <label for="">Ekleyeceğiniz Serinin Türü:</label>
        <input type="text" name="serinin_turu" value="<?php echo $urunlerCek['serinin_turu']?>"><br>
        <input type="submit" value="Düzenle" name="film_update">
    </form>
<?php require_once "admin-footer.php";
}
else{
    header("location:logout.php");
}
?>