

<?php
    function render_menu($menu_items) {
        echo "<HTML>";
        echo "<HEAD>";
        echo "<link rel='stylesheet' href=template/style.css>";
        echo "</HEAD>";
        echo "<BODY>";
        echo "<nav class='nav_bar'>";
        echo "<ul>";
        foreach ($menu_items as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
        echo "</nav>";
        echo "</BODY>";
        echo "</HTML>";
}
?>


    </BODY>
</HTML>