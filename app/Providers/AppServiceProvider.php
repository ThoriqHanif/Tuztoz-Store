<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $config = \DB::table('setting_webs')->where('id',1)->first();
        $parent_footer_setting = \DB::table('footer')->where('parent',NULL)->get();
        $child_footer_setting = \DB::table('footer')->where('parent','!=',NULL)->get();
        
        View::share('config',$config);
        \View::share('parent_footer_setting', $parent_footer_setting);
        \View::share('child_footer_setting', $child_footer_setting);
        
        
        
    }
}
