<?php

namespace Mnawasrah\LandingPagePackage\Controllers;

use Illuminate\Http\Request;
use Mnawasrah\LandingPagePackage\Controllers\Core\MasterController;

class LandingPageController extends MasterController
{
    public function index()
    {
        return view('landing-page-package::landing-page', ['message' => 'Welcome to the Landing Page Package']);
    }
}