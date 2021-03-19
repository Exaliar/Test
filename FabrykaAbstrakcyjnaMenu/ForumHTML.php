<?php

namespace FabrykaAbstrakcyjnaMenu;

use FabrykaAbstrakcyjnaMenu\iHTML;
use FabrykaAbstrakcyjnaMenu\Template\Menu;
use FabrykaAbstrakcyjnaMenu\Template\Footer;
use FabrykaAbstrakcyjnaMenu\Template\Forum\Body;

class ForumHTML implements iHTML {
    public function menu() : object {
        return new Menu;
    }
    public function body() : object {
        return new Body;
    }
    public function footer() : object {
        return new Footer;
    }
    public function render() : string {
        
        $menu =     $this->menu();
        $body =     $this->body();
        $footer =   $this->footer();
        
        $HTML = '';
        $HTML .= $menu->getHtml();
        $HTML .= $body->getHtml();
        $HTML .= $footer->getHtml();

        return $HTML;
    }
}