<?php

use Illuminate\Support\Facades\Route;
use Mnawasrah\LandingPagePackage\Controllers\LandingPageController;

Route::get('super-admin/landing-page-test', [LandingPageController::class, 'index'])->middleware("auth","super_admin");