<?php

namespace Lartisan\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;
use Lartisan\Presets\LartisanPreset;

class LartisanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        UiCommand::macro('lartisan', function ($command) {
            $command->call('ui:auth');

            LartisanPreset::install();
            $command->info('Lartisan preset installed successfully!');

            $command->call('storage:link');

            $command->call('sweetalert:publish');

            $command->info('All done! Enjoy!');
            $command->comment('After you set your database in the .env file, run "php artisan migrate --seed" if you want a default admin user.');
            $command->comment('Please run "npm install && npm run dev" to compile your assets.');
        });
    }
}
