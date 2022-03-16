<?php

namespace App\Controllers;

use App\Models\Coders;

class CodersController{
    
    public function __construct()
    {
        $this->index();
    }

    public function index()
    {
        $coder = new Coders;
    }

}