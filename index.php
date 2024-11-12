
<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$name = "Zахар";
$site_name = "LabZone";
$keywords = "здесб, пишу, ключевые, слова";
$title = "LabZone3000";
$menu_items = ["главная", "о нас", "контакты"];
$copyright = "все права защищены";

include 'template/header.php';

include 'template/menu.php';    
include 'template/footer.php';  

function render_page($name, $site_name, $keywords, $title, $menu_items, $copyright) {
    
    
    render_header($name, $site_name, $keywords, $title); 
    

    render_menu($menu_items); 


    echo "<div class='ip'>ip: " . htmlspecialchars($_SERVER['REMOTE_ADDR']) . "</div>";
    echo "<div>инфа о браузере: " . htmlspecialchars($_SERVER['HTTP_USER_AGENT']) . "</div>";

    include 'template/home.php';
    render_footer($copyright, $name); 
}

render_page($name, $site_name, $keywords, $title, $menu_items, $copyright);
?>
