<?php


function printHead_title($name){
    return str_replace("#title#",$name,APP_META_title);
}

function printHead($sitetitle = "Home",$theme_scrips = [],$app_scripts = []){

    echo '<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="'.APP_META_description.'">
    <meta name="author" content="'.APP_META_author.'">
    <meta name="keyword" content="'.APP_META_keyword.'">
    <title>'.printHead_title($sitetitle).'</title>

    <link href="'.THEME_ASSETS.'css/style.css" rel="stylesheet">';

    foreach ($theme_scrips as &$incl) {
        echo '<link href="'.THEME_ASSETS.$incl.'" rel="stylesheet">';
    }
    foreach ($app_scripts as &$incl) {
        echo '<link href="'.ROOT.'/dist/'.$incl.'" rel="stylesheet">';
    }


    echo '</head>';
}