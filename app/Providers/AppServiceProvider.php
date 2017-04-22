<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Model\Credit;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{

    public $amount = 0;
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('*', function($view) {
            if (auth()->check()) {
                $this->amount = Credit::where('user_id', auth()->user()->id )->sum('amount');
            }
            $view->with('credit', $this->amount);
        });

        Validator::extend('', function($attribute, $value, $parameters, $validator){
            return $this->amount >= $value;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
