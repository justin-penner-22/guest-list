

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
    //include "components/menus.php";
}


// include "pages/static/footer.php";


/* Generate database table
<button class="button-theme-brown" id="kadabra" onclick="reservationData()">AJAX</button>
<div id="demo">Hier wird Text generiert</div>
*/

?>
