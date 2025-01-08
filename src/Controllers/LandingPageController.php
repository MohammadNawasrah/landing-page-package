<?php

namespace Mnawasrah\LandingPagePackage\Controllers;

use Illuminate\Http\Request;
use Mnawasrah\LandingPagePackage\Controllers\Core\MasterController;

class LandingPageController extends MasterController
{
    public function index()
    {
        // Get the user type from the config file
        $userType = config('landing-page.user_type');
        return view('landing-page-package::landing-page', ['message' => $userType]);
    }
}