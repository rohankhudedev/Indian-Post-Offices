<?php

namespace App\Jobs;

use App\Models\Circle;
use App\Models\District;
use App\Models\Division;
use App\Models\Pincode;
use App\Models\PostOffice;
use App\Models\Region;
use App\Models\State;
use App\Models\Taluk;
use Illuminate\Support\Facades\Artisan;

class GetPostOfficeJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Artisan::call('db:seed');
    }
}
