<?php

namespace Mnawasrah\LandingPagePackage\Models;

use Illuminate\Database\Eloquent\Model;

class LandingModelTest extends Model
{
    // Example of fillable fields
    protected $fillable = ['title', 'content'];

    // Table name (optional, if different from class name in plural)
    protected $table = 'landing_pages';

    public function test(){
        return "test";
    }
}
