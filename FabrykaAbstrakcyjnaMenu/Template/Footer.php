<?php

namespace FabrykaAbstrakcyjnaMenu\Template;

use FabrykaAbstrakcyjnaMenu\Template\iMenuBodyFooter;

class Footer implements iMenuBodyFooter{

    public function getHtml() : string {
        return 'Footer <br>';
    }

}