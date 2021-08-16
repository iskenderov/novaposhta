<?php

namespace App\Console\Commands;

use App\Services\NovaPoshta\NovaPoshtaService;
use Illuminate\Console\Command;

class NovaPoshtaGetData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'novaposhta:getdata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get areas, cities and warehouses from API and update it into db';

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
     * @return int
     */
    public function handle(NovaPoshtaService $service)
    {
        $service->updateAreas();
        $service->updateCities();
        $service->updateWarehouses();
    }
}
