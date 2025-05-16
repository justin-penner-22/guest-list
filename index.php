<?php
include "pages/static/header.php";

if(isset($_GET['p'])){
    if(file_exists('pages/'.$_GET['p'].'.php')){
        include 'pages/'.$_GET['p'].'.php';
    }
}
else{
    include "components/main_slider.php";
    include "components/welcome.php";
    include "components/menus.php";
}

include "pages/static/footer.php";
?>