
<?php
    function render_header($name, $site_name, $keywords, $title) {
        echo "<HTML>";
        echo "<HEAD>";
        echo "<link rel='stylesheet' href=template/style.css>";
        echo "</HEAD>";
        echo "<BODY>";
        echo "<header class='header_main'>";
        echo "<h1>$title</h1>";
        echo "<p>автор: $name</p>";
        echo "<meta name='keywords' content='$keywords'>";
        echo "<h2>сайт: $site_name</h2>";
        echo "</header>";
        echo "</BODY>";
        echo "</HTML>";
}
?>
