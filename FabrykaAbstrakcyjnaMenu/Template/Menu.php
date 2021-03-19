<?php

namespace FabrykaAbstrakcyjnaMenu\Template;

use FabrykaAbstrakcyjnaMenu\Template\iMenuBodyFooter;

class Menu implements iMenuBodyFooter{

    public function getHtml() : string {
        return 'Menu <br>';
    }

}