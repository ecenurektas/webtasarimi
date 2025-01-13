<?php
    session_start();
    require_once "header.php";
?>

<form action="sign-in-islem.php" class="sign-in-form" method="post">
    <?php
        if(isset($_GET['durum'])&&$_GET['durum']=="hata")
            echo "<label>Yanlış kullanıcı adı veya şifre</label>"
    ?>
    <div>
        <label>Kullanıcı Adı: </label>
        <input type="text"  class="input-box" name="user_name">
    </div>
    <div>
        <label>Şifre:</label>
        <input type="password"  class="input-box" name="user_password">
    </div>
    <input type="submit" value="Giriş Yap" id="submit">
</form>

<?php
    require_once "footer.php";
?>