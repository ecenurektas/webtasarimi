<?php
    require_once "header.php";
?>
    <main>  
        <section class="anaresim">
            <img src="resimler/sectionmain.jpeg">
        </section>
        <nav>
            <section class="onecikanlar">
                <div class="seriler-popcultur">
                    <a href="marvel.php" class="seriler-content marvel-box"><img src="resimler/Marvel_Logo.svg.png" style="width: 125px;"></a>
                </div>
                <div class="seriler-popcultur">
                    <a href="#" class="seriler-content dc-box"><img src="resimler/DC_Comics_logo.svg" style="width: 80px;"></a>
                </div>
                <div class="seriler-popcultur">
                    <a href="#" class="seriler-content sw-box"><img src="resimler/starwars-logo.webp" style="width: 178px;"></a>
                </div>
                <div class="seriler-popcultur">
                    <a href="#" class="seriler-content lotr-box"><img src="resimler/lotr-logo.png" style="width: 130px;"></a>
                </div>
                <div class="seriler-popcultur" style="margin-right:0 ;">
                    <a href="#" class="seriler-content hp-box"><img src="resimler/harrypotter-logo.png" style="width: 130px;"></a>
                </div>
            </section>
            <h4>Yeniler</h4>
            <?php
                include 'calls/calling-news.php';
            ?>
            <h4>Komedi Filmleri</h4>
            <section class="content">
            <?php
                include 'calls/calling-comedy-movies.php';
            ?>
            </section>
            <h4>Aksiyon Filmleri</h4>
            <section class="content">
            <?php
                include 'calls/calling-action-movies.php';
            ?>
            </section>
            <h4>Filmler</h4>
            <section class="content">
            <?php
                include 'calls/calling-movies.php';
            ?>
            </section>
            <h4>Diziler</h4>
            <section class="content">
            <?php
                include 'calls/calling-series.php';
            ?>
            </section>
        </nav>
    </main>
<?php
    require_once "footer.php";
?>
</body>
</php>