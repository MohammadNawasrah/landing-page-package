<?php

use Illuminate\Support\Facades\Route;
use Mnawasrah\LandingPagePackage\Controllers\LandingPageController;

Route::get('landing-page', [LandingPageController::class, 'index']);