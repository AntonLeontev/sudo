<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Update extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates application after new code';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('optimize:clear');
        $this->call('migrate');
        $this->call('optimize');
    }
}
