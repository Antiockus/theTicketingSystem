<?php

namespace Antiockus;

class User
{
    private $isLoggedIn = false;

    public function __construct()
    {
        $this->isLoggedIn = true;
    }
}
