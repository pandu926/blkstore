<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class TerbaruServiceProvider extends ServiceProvider {
    public function boot ()
    {
        View::composer('home.*', 'App\Http\View\Terbaru');
    }
}