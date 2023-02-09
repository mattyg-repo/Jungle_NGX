<?php


Trait Main{

	public function printMenu(){
        $menu = new Menu;
        $group = "";
        $this->printMenu_logo();

        foreach ($menu->appmenu as &$navitem) {

            if($group != $navitem['group']) {
                $this->printMenuItem_group($navitem['group']);
                $group = $navitem['group'];
            }
            $this->printMenuItem_topLevel($navitem);
            echo '';
        }
        echo '</ul><button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button></div>';
    }

    private function printMenuItem_topLevel($data){


        if($data['sub'] != null){
        echo '<li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="'.$data['link'].'">
            <svg class="c-sidebar-nav-icon">
                <use xlink:href="'.THEME_ASSETS.'vendors/@coreui/icons/svg/free.svg#'.$data['icon'].'"></use></svg> '.$data['title'].'</a>';
        echo '<ul class="c-sidebar-nav-dropdown-items">';
        foreach ($data['sub'] as &$navitem_2level) {
            $active = '';
            if($site[1]== $navitem_2level['title']) $active = ' class="active" ';
            echo '<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="'.$navitem_2level['link'].'"> '.$navitem_2level['title'].'</a></li>';
        }
        echo '</ul>';
        }else{

        echo '<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="'.$data['link'].'">
            <svg class="c-sidebar-nav-icon">
                <use xlink:href="'.THEME_ASSETS.'vendors/@coreui/icons/svg/free.svg#'.$data['icon'].'"></use></svg> '.$data['title'].'</a>';
        }
        echo '</li>';   
}

private function printMenuItem_subLevel(){

}

private function printMenuItem_subSubLevel(){

}


/* COMPONENTS */

private function printMenuItem_group($title){
    if($title != "") echo '<li class="c-sidebar-nav-title">'.$title.'</li>';
    else $this->printMenuItem_divider();
}
private function printMenuItem_divider(){
    echo '<li class="c-sidebar-nav-divider"></li>';
}

private function printMenu_logo(){
echo '<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="'.THEME_ASSETS.'assets/brand/coreui-pro.svg#full">
            </use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="'.THEME_ASSETS.'assets/brand/coreui-pro.svg#signet"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">';
        }

        }





        /*


        


        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">Labels</li>
        <li class="c-sidebar-nav-item c-d-compact-none c-d-minimized-none"><a class="c-sidebar-nav-label" href="#">
                <svg class="c-sidebar-nav-icon text-danger">
                    <use xlink:href="<?=THEME_ASSETS?>vendors/@coreui/icons/svg/free.svg#cil-bookmark"></use>
</svg> Label danger</a></li>
<li class="c-sidebar-nav-item c-d-compact-none c-d-minimized-none"><a class="c-sidebar-nav-label" href="#">
        <svg class="c-sidebar-nav-icon text-info">
            <use xlink:href="<?=THEME_ASSETS?>vendors/@coreui/icons/svg/free.svg#cil-bookmark"></use>
        </svg> Label info</a></li>
<li class="c-sidebar-nav-item c-d-compact-none c-d-minimized-none"><a class="c-sidebar-nav-label" href="#">
        <svg class="c-sidebar-nav-icon text-warning">
            <use xlink:href="<?=THEME_ASSETS?>vendors/@coreui/icons/svg/free.svg#cil-bookmark"></use>
        </svg> Label warning</a></li>
<li class="c-sidebar-nav-divider"></li>


*/