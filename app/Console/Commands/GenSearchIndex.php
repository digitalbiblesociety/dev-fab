<?php

namespace App\Console\Commands;

use DigitalBibleSociety\Shin\Models\Bible\Bible;
use DigitalBibleSociety\Shin\Models\Language\Language;
use DigitalBibleSociety\Shin\Models\Country\Country;
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
                            'languages.name as ln',
                            'bibles.id as id',
                       )->get()->toArray();

        $languages = Language::select('iso as id','name as tt','autonym as tv')->get()->toArray();
        $countries = Country::select('id','name as tt', 'autonym as tv')->get()->toArray();
//        $organizations = Organization::select('slug as id')->get();

        foreach ($bibles as $key => $bible) {
            $bibles[$key]['type'] = 'bibles';
        }

        foreach ($languages as $key => $language) {
            $languages[$key]['type'] = 'languages';
        }

        foreach ($countries as $key => $country) {
            $countries[$key]['type'] = 'countries';
        }


        $site = json_encode($bibles + $languages + $countries);
        file_put_contents(public_path('assets/data/site-index.json'), $site);
    }
}
