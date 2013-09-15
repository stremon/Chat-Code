<?php

namespace Chatcode\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ChatcodeUserBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
