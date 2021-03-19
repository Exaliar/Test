<?php

namespace FabrykaAbstrakcyjnaMenu\Template\Forum;

use FabrykaAbstrakcyjnaMenu\Template\iMenuBodyFooter;

class Body implements iMenuBodyFooter{

    public function getHtml() : string {
        return 'Forum Body <br>';
    }

}