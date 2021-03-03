<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function navigation_menu()
    {
        return $this->hasMany('App\Models\NavigationMenu','slug','slug');
    }
}
