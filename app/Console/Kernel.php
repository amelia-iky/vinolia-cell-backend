<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    // Environment
    protected $commands = [
        \App\Console\Commands\EnvEncrypt::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        //
    }
}
