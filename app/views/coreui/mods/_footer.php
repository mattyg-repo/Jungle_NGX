<?php

function printFooterBar(){

    echo '<footer class="c-footer">
            <div><a href="https://coreui.io">CoreUI</a> © 2022 creativeLabs.</div>';

    if(DEBUG) {
        echo '<div  class="mfs-auto">';
        echo '🐞 <a target="_blank" href="'.THEME_ASSETS.'_theme">THEME</a>';
        echo ' | <a target="_blank" href="https://github.com/mattyg-repo/wacis">GIT</a>';
        echo '🐞 </div >';
    }

    echo '<div class="mfs-auto">Powered by&nbsp;<a href="https://coreui.io/pro/">CoreUI Pro</a></div>
        </footer>';
}


function printFooterScripts($theme_scrips = [],$app_scripts = []){

    echo    '<script src="'.THEME_ASSETS.'vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
<!--[if IE]><!-->
<script src="'.THEME_ASSETS.'vendors/@coreui/icons/js/svgxuse.min.js"></script>
<!--<![endif]-->';

foreach ($theme_scrips as &$incl) {
echo '<script src="'.THEME_ASSETS.$incl.'"></script>';
}
foreach ($app_scripts as &$incl) {
echo '<script src="'.ROOT.'/dist/'.$incl.'"></script>';
}



}