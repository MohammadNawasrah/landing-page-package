<?php

namespace Mnawasrah\LandingPagePackage\Controllers;

use Illuminate\Http\Request;
use Mnawasrah\LandingPagePackage\Controllers\Core\MasterController;

class LandingPageController extends MasterController
{
    public function index()
    {
        return response()->json(['message' => 'Welcome to the Landing Page Package']);
    }
}