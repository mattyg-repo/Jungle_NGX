<!DOCTYPE html>
<html lang="en">
<?  //printHead("Dashboard",["css/style.css"],["css/style.css"])
    printHead("Dashboard");
?>

<body class="c-dark-theme c-app c-no-layout-transition">
    <? $this->printMenu();?>
    <? printSiteBar();?>
    <div class="c-wrapper">
        <? printHeader();?>
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        <? /************************************************************/ ?>



                        <? show($_SESSION)?>





                        <? /************************************************************/ ?>
                    </div>
                </div>
            </main>
        </div>
        <? printFooterBar()?>
    </div>
    <?  //printFooterScripts(["css/style.js"],["css/style.js"])
    printFooterScripts();?>
</body>

</html>