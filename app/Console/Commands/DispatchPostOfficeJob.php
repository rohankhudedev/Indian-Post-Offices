<?php

namespace App\Console\Commands;

use App\Jobs\GetPostOfficeJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Queue;

class DispatchPostOfficeJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatch:get-post-office-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatches Post Office Job';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Queue::push(new GetPostOfficeJob);
    }
}
