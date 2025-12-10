<?php
if (isset($_GET["page"]) && $_GET["page"] === "phpinfo") {
    echo '<div class="content-frame"><iframe src="files/phpinfo.php" class="w-100" style="height:80vh; border-radius:15px"></iframe></div>';
} else if (isset($_GET["page"]) && $_GET["page"] === "infosito") {
    echo '<div class="content-frame"><iframe src="files/infosito.php" class="w-100" style="height:80vh; border-radius:15px"></iframe></div>';
} else if (isset($_GET["page"]) && $_GET["page"] === "elencoarticoli") {
    echo '<div class="content-frame"><iframe src="files/elencoarticoli.php" class="w-100" style="height:80vh; border-radius:15px"></iframe></div>';
} else if (isset($_GET["page"]) && $_GET["page"] === "exportjson") {
    echo '<div class="content-frame"><iframe src="files/exportjson.php" class="w-100" style="height:80vh; border-radius:15px"></iframe></div>';
} else {
    echo '<div class="position-relative overflow-hidden rounded-4" style="height:80vh; border: 1px solid var(--brand-border)">';
    require __DIR__ . '/screensaver.php';
    echo '</div>';
}
?>