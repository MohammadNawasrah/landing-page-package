<?php

namespace Mnawasrah\LandingPagePackage;

class LandingPage
{
    public static function greet(string $name): string
    {
        return "Welcome to the Landing Page, {$name}!";
    }
}
