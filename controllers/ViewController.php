<?php
/**
*
*/
class ViewController
{
    static public function home() {
        ConnectionHelper::checkConnectedUser();
        $page = new PageModel();
        echo TemplateHelper::createTemplate('home', $page->getOne('title', 'home'));
    }
    static public function plan() {
        $page = new PageModel();
        echo 'Toutes les pages du site : <br> <ul>' ;
        $page->getAll();
        echo '</ul>';
    }
    static public function exemple() {
        $page = new PageModel();
        echo TemplateHelper::createTemplate('exemple', $page->getOne('title', 'exemple'));
    }
    static public function edit() {
        $page = new PageModel();
        echo TemplateHelper::createTemplate('edit', $page->getOne('title', 'edit'));
    }
}
