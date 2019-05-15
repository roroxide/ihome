<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Jobs\SendSmsJob;
use App\SmsProviders\SmsProcess;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
	$this->app->bindMethod(SendSmsJob::class.'@handle', function ($job, $app) {
    return $job->handle($app->make(SmsProcess::class));
});
    }
}
