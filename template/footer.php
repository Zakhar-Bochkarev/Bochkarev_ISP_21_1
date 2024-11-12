
<?php
        function render_footer($copyright, $name) {
            echo "<HTML>";
            echo "<HEAD>";
            echo "<link rel='stylesheet' href=template/style.css>";
            echo "</HEAD>";
            echo "<BODY>";
            echo "<footer class='footer_main'>";
            echo "<p>&copy; $copyright</p>";
            echo "<p>автор: $name</p>";
            echo "</footer>";
            echo "</BODY>";
            echo "</HTML>";
        }
?>
