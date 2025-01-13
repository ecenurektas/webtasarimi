<?php
session_start();
if(isset($_SESSION['user'])&&$_SESSION['user']=="admin"){
    require_once "admin-header.php";
    $db=new PDO("mysql:host=localhost;dbname=e-stream;charset=utf8",'root','');
    if(isset($_GET['urun_si'])&&$_GET['urun_sil']=="ok"){
        echo "ürün başarıyla silindi";
    }
    if(isset($_GET['urun_si'])&&$_GET['urun_sil']=="no"){
        echo "ürün silinemedi";
    }
?>
<h1>FİLMLER</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>İsim</th>
        <th>Açıklama</th>
        <th>Resim Yolu</th>
        <th>Link</th>
        <th>Tür</th>
    </tr>
    <?php
        $filmlerSor=$db->prepare("SELECT * from filmler");
        $filmlerSor-> execute();
        while($filmlerCek=$filmlerSor->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><?php echo $filmlerCek['id']?></td>
            <td><?php echo $filmlerCek['serinin_ismi']?></td>
            <td><?php echo $filmlerCek['serinin_aciklamasi']?></td>
            <td><?php echo $filmlerCek['resim_yolu']?></td>
            <td><?php echo $filmlerCek['serinin_linki']?></td>
            <td><?php echo $filmlerCek['serinin_turu']?></td>
            <td><a href="admin-edit.php?id=<?php echo $filmlerCek['id']?>"><button>Düzenle</button></a></td>
            <td><a href="admin-process.php?id=<?php echo $filmlerCek['id']?>&sil=ok"><button>Sil</button></a></td>
        </tr>
        <?php
        }
    ?>
</table>
<?php
    require_once "admin-footer.php";
}
else{
    header("location:logout.php");
}
?>