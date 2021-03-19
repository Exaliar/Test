<?php

namespace FabrykaAbstrakcyjnaMenu;

require_once __DIR__.'/vendor/autoload.php';

use FabrykaAbstrakcyjnaMenu\HomeHTML;
use FabrykaAbstrakcyjnaMenu\ForumHTML;

class Test{

    public $forumHtml;

    public function home(){   //???? bad or good?
        $homeHtml = new HomeHTML;
        echo $homeHtml->render();
    }
    public function forum(){    //???? bad or good?
        $this->forumHtml = new ForumHTML;
        echo $this->forumHtml->render();
    }
}


Test::home();

echo '<br><br>';
$test = new Test;

$test->forum();