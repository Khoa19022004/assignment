<?php

namespace App\Providers;

use App\Models\Posts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $categories=DB::table('categories')
                    ->limit(10)
                    ->get();
        $TopNew=Posts::with('category')
                ->orderBy('created_at','desc')
                ->limit(10)
                ->get();
        View::share(['categories'=>$categories,'TopNew'=>$TopNew]);
    }
}
