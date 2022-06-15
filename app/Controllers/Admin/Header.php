<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Header extends BaseController
{
    public function index()
    {
        return view('admin-pages/header');
    }
}
