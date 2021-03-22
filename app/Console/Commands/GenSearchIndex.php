<?php

namespace App\Console\Commands;

use Common\Modals\Bible\Bible;
use Common\Modals\Country\Country;
use Common\Modals\Language\Language;
use Common\Modals\Organization\Organization;
use Illuminate\Console\Command;

class GenSearchIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gen:searchIndex';

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
        $bibles = Bible::leftJoin('languages as languages', function ($join) {
                           $join->on('languages.iso', '=', 'bibles.iso');
                       })
                       ->select(
                            'bibles.title as tt',
                            'bibles.title_vernacular as tv',
                            'languages.iso as iso',
                            'bibles.date as dt',
                            'languages.name as ln',
                            'bibles.id as id',
                            'bibles as type'
                       )->get()->toArray();


        $languages = Language::select('iso as id','name as tt','autonym as tv','languages as type')->get()->toArray();
        $countries = Country::select('iso as id','name as tt', 'autonym as tv','countries as type')->get()->toArray();
//        $organizations = Organization::select('slug as id')->get();


        $site = json_encode($bibles + $languages + $countries);
        file_put_contents(public_path('assets/data/site-index.json'), $site);
    }
}
