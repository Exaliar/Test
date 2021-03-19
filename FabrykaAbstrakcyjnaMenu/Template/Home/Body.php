<?php

namespace FabrykaAbstrakcyjnaMenu\Template\Home;

use FabrykaAbstrakcyjnaMenu\Template\iMenuBodyFooter;

class Body implements iMenuBodyFooter{

    public function getHtml() : string {
        return 'Home Body <br>';
    }

}