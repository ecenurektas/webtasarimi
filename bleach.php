<?php
    require_once "header.php";
?>
        <section class="anaresim">
                <img src="resimler/bleach-main.jpg" class="bleach-image">
                <img src="resimler/bleach-name.webp" class="bleach-name">
                <p class="bleach-aciklama">Bir dönemin efsanesi geri dönüyor! Bleach evreninin en karanlık ve destansı hikayesi, bin yıllık kanlı savaşın sırlarını açığa çıkarıyor.</p>
        </section>
        <main>
            <nav>
                <form method="post" action="">
                    <div class="seasons">
                        <select name="Seasons" id="options">
                            <option value="season1" <?= isset($_POST['Seasons']) && $_POST['Seasons'] == 'season1' ? 'selected' : '' ?>>1. Sezon</option>
                            <option value="season2" <?= isset($_POST['Seasons']) && $_POST['Seasons'] == 'season2' ? 'selected' : '' ?>>2. Sezon</option>
                            <option value="season3" <?= isset($_POST['Seasons']) && $_POST['Seasons'] == 'season3' ? 'selected' : '' ?>>3. Sezon</option>
                        </select>
                        <input type="submit" class="kaydet_butonu" name="submit_season" value="Kaydet">
                    </div>
                    <?php
                        include 'calls/calling-bleach.php';
                    ?>
                </form>   
            </nav>
        </main>
<?php
    require_once "footer.php";
?>
    </body>
</html>