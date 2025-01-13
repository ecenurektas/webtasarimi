<?php
    $db=new PDO("mysql:host=localhost;dbname=e-stream;charset=utf8",'root','');
    if(isset($_POST['film_gonder'])){
        $film=$db->prepare("INSERT into filmler set
        serinin_ismi=:serinin_ismi,
        serinin_aciklamasi=:serinin_aciklamasi,
        resim_yolu=:resim_yolu,
        serinin_linki=:serinin_linki,
        serinin_turu=:serinin_turu
        ");
        $insertFilm=$film->execute(array(
            'serinin_ismi'=>$_POST["serinin_ismi"],
            'serinin_aciklamasi'=>$_POST["serinin_aciklamasi"],
            'resim_yolu'=>$_POST["resim_yolu"],
            'serinin_linki'=>$_POST["serinin_linki"],
            'serinin_turu'=>$_POST["serinin_turu"]
        ));
        if($insertFilm){
            header("location:add-delete.php?durum=eklendi");
        }
        else{
            header("location:add-delete.php?durum=eklenmedi");
        }
    }
    if(isset($_POST['dizi_gonder'])){
        
        $dizi=$db->prepare("INSERT into ".$_POST['serinin_ismi']." set
        bolumun_ismi=:bolumun_ismi,
        bolumun_aciklamasi=:bolumun_aciklamasi,
        resim_yolu=:resim_yolu,
        bolumun_linki=:bolumun_linki,
        bolumun_sezonu=:bolumun_sezonu
        ");
        $insertDizi=$dizi->execute(array(
            'bolumun_ismi'=>$_POST["bolumun_ismi"],
            'bolumun_aciklamasi'=>$_POST["bolumun_aciklamasi"],
            'resim_yolu'=>$_POST["resim_yolu"],
            'bolumun_linki'=>$_POST["bolumun_linki"],
            'bolumun_sezonu'=>$_POST["bolumun_sezonu"]
        ));
        if($insertDizi){
            header("location:add-delete.php?durum=eklendi");
        }
        else{
            header("location:add-delete.php?durum=eklenmedi");
        }
    }
    if(isset($_GET['sil'])&&$_GET['sil']=="ok"){
        $sil=$db->prepare("DELETE from filmler WHERE id=:id");
        $kontrol=$sil->execute(array(
            'id'=>$_GET['id']
        ));
        if($kontrol){
            header("location:admin-table.php?urun_sil=ok");
        }
        else{
            header("location:admin-table.php?urun_sil=no");
        }
    }

    if(isset($_POST['film_update'])){
        $id=$_POST['id'];
        $kaydet=$db->prepare("UPDATE filmler set
        serinin_ismi=:serinin_ismi,
        serinin_aciklamasi=:serinin_aciklamasi,
        resim_yolu=:resim_yolu,
        serinin_linki=:serinin_linki,
        serinin_turu=:serinin_turu
        where id={$_POST['id']}
        ");
        $insertUpdate=$kaydet->execute(array(
            'serinin_ismi'=>$_POST["serinin_ismi"],
            'serinin_aciklamasi'=>$_POST["serinin_aciklamasi"],
            'resim_yolu'=>$_POST["resim_yolu"],
            'serinin_linki'=>$_POST["serinin_linki"],
            'serinin_turu'=>$_POST["serinin_turu"]
        ));
        if($insertUpdate){
            echo "eklendi";
            Header("location:admin-table.php?durum=duzenlendi");
        }
        else{
            echo "eklenmedi";
            Header("location:admin-table.php?durum=duzenlenmedi");
        }
    }
    else{
        echo "başarısız";
    }
?>