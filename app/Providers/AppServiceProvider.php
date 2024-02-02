<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//show database content in all pages
use Illuminate\Support\Facades\View;
use App\Models\Message;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //generates actual images
        if (!$this->app->environment('production')) {
            $this->app->register('App\Providers\FakerServiceProvider');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Or write the code here without extar files
        View::composer('admin.includes.topNav', function ($view) {
            $unreadMessagesCount = Message::where('isRead', 0)->count();
            $unreadMessages = Message::where('isRead', 0)->orderBy('id', 'desc')->get();
            //session
            $view->with([
                'unreadMessagesCount' => $unreadMessagesCount,
                'unreadMessages' => $unreadMessages,
            ]);
        });
    }
}
