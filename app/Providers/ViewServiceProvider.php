<?php


namespace App\Providers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Language;
use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
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
        // Using class based composers...
        View::composer(
            'profile', 'App\Http\View\Composers\ProfileComposer'
        );

        // Using Closure based composers...
        View::composer(['website.layouts.app','website','user.*'], function ($view) {
          	$categories = Category::all();
            $brands = Brand::has('cars')->get();
            $languages = Language::all();
            $trips = Trip::where('user_id',currentUser()->id)->get();
            $view
                 ->with('categories', $categories)
                 ->with('brands', $brands)
                 ->with('languages', $languages)
                 ->with('trips', $trips)
              ;
        });
    }
}
