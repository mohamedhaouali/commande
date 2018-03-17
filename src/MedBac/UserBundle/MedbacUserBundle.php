<?php

namespace MedBac\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MedBacUserBundle extends Bundle
{
     public function getParent() {
        return 'FOSUserBundle';
    }
}
