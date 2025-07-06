<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto user expiration every 5 mins';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
