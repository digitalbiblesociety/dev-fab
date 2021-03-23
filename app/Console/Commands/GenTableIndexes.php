<?php

namespace App\Console\Commands;

use Common\Modals\Country\Country;
use Illuminate\Console\Command;

class GenTableIndexes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gen:tableIndexes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $countries = Country::select('id','population as po','continent_id as co','independent as in','name as tt', 'autonym as tv')->get()->toArray();
        foreach ($countries as $key => $country) {
            $countries[$key]['po'] = number_format($country['po']);
        }
        file_put_contents(public_path('assets/data/countries_table.json'), json_encode($countries));
    }
}
