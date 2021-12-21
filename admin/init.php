<?php
    $tpl = 'includes/templets/'; //Templet directory
    $css = 'layout/css/';  //css directory
    $js  =  'layout/js/'; //js directory
    $lang = 'includes/lang/';
    $fanc = 'includes/functions/';
   
    include $fanc.'func.php';
    include $lang.'english.php';
    include $tpl.'heder.php';

    

    if(isset($navbar)){
        include $tpl.'navbar.php';
        include $tpl.'caruosel.php';

    }elseif(!isset($navbar)){
        include $tpl.'navbar.php';

    }

?>