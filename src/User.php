<?php

namespace Antiockus;

class User
{
    private $isLoggedIn = false;
    private $id;


    public function __construct($id)
    {
        $this->isLoggedIn = true;
        $this->id = $_SESSION['user_id'] = $id;
    }
}
